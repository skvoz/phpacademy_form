<?php

/**
 * Class UsernameWidget
 */
class UsernameWidget extends AbstractWidget
{


    /**
     * UsernameWidget constructor.
     * @param $conn
     */
    public function __construct()
    {

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
        $user = (new UsersModel)->findById(DEFAULT_USER_ID);
        $name = $user['username'];
        $email = $user['email'];

        return View::render('usernameWidget',[
            'name' => $name,
            'email' => $email,
        ]);
    }
}