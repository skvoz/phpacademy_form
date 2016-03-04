<?php

abstract class Config
{

    public $dbData = null;

    /**
     * @return mixed
     */
    abstract function getDbData();
}

class ProdConfig extends Config
{

    public $dbData = 'dns=255.255.255.0';

    /**
     * @return mixed
     */
    function getDbData()
    {
        return $this->dbData;
    }
}

class LocalConfig extends ProdConfig
{
    function __get($foo)
    {
        throw new Exception('unknown property');
    }

    public $dbData = 'dns=127.0.0.1';

    public $myData = 'text 007';

    /**
     * @return mixed
     */
    function getDbData()
    {
        return $this->test;
    }
}