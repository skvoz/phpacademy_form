<?php

require_once 'bootstrap.php';

$router = new Router();

$url = Application::request()->getUrl();

$router->setUrl($url);

$router->delegate();

