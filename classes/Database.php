<?php

class Database
{
    public $conn;

    public function __construct()
    {
        $config = Application::getConfig();


        try {
            $conn = new PDO($config['host'], $config['username'], $config['password']);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            $e->getMessage();
            die;
        }

        $this->conn = $conn;
    }

    public function getConnectoion()
    {
        return $this->conn;
    }
}