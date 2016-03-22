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

    /** save data
     * @param $data
     * @return int
     */
    public function save($data)
    {
        $fields = array_keys($data);
        $strField = implode(',', $fields);

        $strValues = implode(',', array_values($data));

        $sql = sprintf("INSERT INTO `%s` (%s)  VALUES (%s)", $this->tableName, $strField, $strValues);
        $result = $this->conn->exec($sql);

        return $result;
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

    /**
     * @return array
     */
    public function findAll()
    {
        $sql = sprintf("SELECT * FROM %s LIMIT %s OFFSET %s", $this->tableName, $this->perPage, $this->offset);
        /** @var PDOStatement $statement */
        $statement = $this->conn->query($sql);

        $result = $statement->fetchAll();

        return $result;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findById($id)
    {
        $sql = sprintf("SELECT * FROM %s WHERE id=%s", $this->tableName, $id);
        /** @var PDOStatement $statement */
        $statement = $this->conn->query($sql);

        $result = $statement->fetch();

        return $result;
    }

}