<?php
    spl_autoload_register(function ($class_name) {
        $path = 'classes/'.$class_name . '.php';
        if (is_file($path)) {
            include $path;
        } else {
            var_dump($class_name);
            $path = 'controllers/'.$class_name . '.php';

            include $path;
        }

    });