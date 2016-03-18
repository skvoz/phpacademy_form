<?php


class Router
{
    /**uri
     * @var
     */
    public static $url;

    public  function setUrl($url)
    {
        self::$url = $url;
    }

    public  function delegate()
    {
        $url = trim(self::$url, '/\\');
        //TODO regexp routing
//        $rules = require_once ('../config/routing.php');
//        foreach($rules as $rule) {
//        }

        $arr = explode('/', $url);
        $controller = $arr[0];
        $action = 'action' . ucfirst($arr[1]);

        if (count($arr) > 2) {
            foreach ($arr as $order => $item) {
                if ($order > 1) {
                    $args[] = $item;
                }
            }
        }

        $nameController = ucfirst($controller) . 'Controller';
        $pathController = __DIR__ . '/../controllers/' . $nameController . '.php';

        if (!is_file($pathController)) {
            throw new Exception('file not exist', 404);
        }

        $reflection = new ReflectionClass($nameController);

        $controllerClassName = $reflection->getName();

        $controller = new $controllerClassName();

        if (!is_callable(array($controller, $action))) {

            throw new Exception('Error , action not exist');
        }

        call_user_func_array(array($controller, $action), $args);
    }
}