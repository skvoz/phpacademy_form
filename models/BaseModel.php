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

    public function save($data)
    {
        var_dump(array_keys($data));
        die;
        foreach ($data as $order => $item) {
            $sql = sprintf("INSERT INTO %s()", $this->tableName);
        }
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
        $sql = sprintf("SELECT * FROM %s LIMIT %s OFFSET %s", $this->tableName, $this->perPage, $this->offset);
        /** @var PDOStatement $statement */
        $statement = $this->conn->query($sql);

        $result = $statement->fetchAll();

        return $result;
    }

    public function findById($id)
    {
        $sql = sprintf("SELECT * FROM %s WHERE id=%s", $this->tableName, $id);
        /** @var PDOStatement $statement */
        $statement = $this->conn->query($sql);

        $result = $statement->fetch();

        return $result;
    }

}