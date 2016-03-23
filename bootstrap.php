<?php
    spl_autoload_register(function ($class_name) {

        $urls = ['classes', 'models', 'controllers'];

        foreach ($urls as $url) {
            $path = $url . '/'.$class_name . '.php';
            if (is_file($path)) {
                include $path;
            }
        }
    });
