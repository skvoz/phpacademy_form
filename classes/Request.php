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

    /**
     * @param $key
     * @return bool
     */
    public function getPost($key)
    {
        if (isset($_POST[$key])) {
            return $_POST[$key];
        } else {
            return false;
        }
    }
}