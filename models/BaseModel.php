<?php


abstract class BaseModel
{
    public $tableName;
    public $perPage = 10;
    public $offset = 0;
    public $conn;

    public function __construct()
    {
        try {
            $conn = Application::getDb()->getConnectoion();

        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
            die;
        }

        $this->conn = $conn;
    }

    public function save()
    {

    }

    /**
     * @return string
     */
    public function count()
    {
        $sql = sprintf("SELECT count(*) FROM product");
        /** @var PDOStatement $statement */
        $statement = $this->conn->query($sql);

        $result = $statement->fetch();

        return isset($result) && isset($result[0]) ? $result[0] : 0;
    }

    public function findAll()
    {
        $sql = sprintf("SELECT * FROM product LIMIT %s OFFSET %s", $this->perPage, $this->offset);
        /** @var PDOStatement $statement */
        $statement = $this->conn->query($sql);

        $result = $statement->fetchAll();

        return $result;
    }

}