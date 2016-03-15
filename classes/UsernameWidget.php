<?php

/**
 * Class UsernameWidget
 */
class UsernameWidget extends AbstractWidget
{
    /**
     * @var
     */
    public $conn;

    /**
     * UsernameWidget constructor.
     * @param $conn
     */
    public function __construct($conn)
    {
        $this->conn = $conn;
    }


    public function __toString()
    {

        return $this->display();
    }
    /**
     * @return string
     * @throws Exception
     */
    public function display()
    {
//        $sql = <<<SQL
//          SELECT
//          u.username,
//          u.email,
//          p.name,
//          p.price_grn
//          FROM
//            users u
//          JOIN order o ON o.id_user=users.id
//          JOIN product p ON p.id=o.id_product
//          WHERE username='vasa'
//SQL;
//
//        /** @var PDOStatement $statement */
//        $statement = $this->conn->query($sql);
//
//        $row = $statement->fetch(PDO::FETCH_ASSOC);
        $name = '111';
        $email = '222';

        return View::render('usernameWidget',[
            'name' => $name,
            'email' => $email,
        ]);
    }
}