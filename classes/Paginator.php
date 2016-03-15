<?php

/**
 * Class Paginator
 */
class Paginator
{
    /**
     * @var PDOStatement
     */
    public $conn;

    /**
     * @var int
     */
    public $perPage = 10;

    /**
     * Paginator constructor.
     * @param $conn
     */
    public function __construct($conn)
    {
        $this->conn = $conn;
        
        $result =  $this->getOffsetData();

        return $result;
    }

    public function getOffsetData()
    {
        $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;

        $result = [];

        $perPage = $this->perPage;
        $offset = ($page-1)*10;
        $sql = <<<SQL
SELECT * FROM product LIMIT $perPage OFFSET $offset
SQL;
        /** @var PDOStatement $statement */
        $statement = $this->conn->query($sql);

        $result = $statement->fetchAll();

        return $result;
    }
}