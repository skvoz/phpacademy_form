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
        if (isset($_SESSION['user_id'])) {
            $userId = $_SESSION['user_id'];
            $user = (new UsersModel)->findById($userId);
            $name = $user['username'];
            $email = $user['email'];
        } else {
            $name = false;
            $email = false;
        }

        return View::render('usernameWidget',[
            'name' => $name,
            'email' => $email,
        ]);
    }
}