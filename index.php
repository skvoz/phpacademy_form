<?php

session_start();

define('DEFAULT_USER_ID', 1);

require_once 'bootstrap.php';

$router = new Router();

$url = Application::request()->getUrl();

$router->setUrl($url);

$router->delegate();

