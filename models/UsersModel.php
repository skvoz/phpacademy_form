<?php


class UsersModel extends BaseModel
{
    public $tableName = 'users';

    public function login($name, $pass)
    {
        $sql = sprintf("SELECT * FROM %s WHERE username='%s' AND password='%s'", $this->tableName, $name, $pass);
        /** @var PDOStatement $statement */
        $statement = $this->conn->query($sql);

        $result = $statement->fetch();

        return $result;
    }
}