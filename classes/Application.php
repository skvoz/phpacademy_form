<?php

class Application
{
    /**
     * @var Singleton The reference to *Singleton* instance of this class
     */
    private static $instance = 1;

    /**example
     * Returns the *Singleton* instance of this class.
     *
     * @return Singleton The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * @param string $name
     * @return mixed
     * @throws Exception
     */
    public static function getConfig($name = 'db')
    {

        $array = require ('./config/main.php');

        if (isset($array[$name])) {

            return $array[$name];
        }

        throw new Exception('error config');
    }

    public static function getDb()
    {
        $db = new Database();

        return $db;
    }

    //todo dz
    public static function request()
    {
        return new Request();
    }

    /**
     * Protected constructor to prevent creating a new instance of the
     * *Singleton* via the `new` operator from outside of this class.
     */
    protected function __construct()
    {
    }

    /**
     * Private clone method to prevent cloning of the instance of the
     * *Singleton* instance.
     *
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * Private unserialize method to prevent unserializing of the *Singleton*
     * instance.
     *
     * @return void
     */
    private function __wakeup()
    {
    }
}
