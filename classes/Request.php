<?php

class Request {

    public $url;


    public function __construct()
    {
        $this->url = $_SERVER['REQUEST_URI'];
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }
}