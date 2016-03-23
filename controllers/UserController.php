<?php


class UserController extends BaseController
{
    public function actionLogin()
    {
        if ($post = Application::request()->getPost('login')) {
            $username = $post['login'];
            $password = $post['password'];

            $model = new UsersModel();
            $result = $model->login($username, $password);

            $_SESSION['user_id'] = $result['id'];

            if ($result) {
                $this->redirect('/');
            } else {
                $this->redirect('/user/login');
            }
        } else {
            echo $this->render('userLogin');
        }
    }

    public function actionLogout()
    {
        unset($_SESSION['user_id']);

        $this->redirect('/');
    }

    public function acitonSignin()
    {
        echo $this->render('userSignin');
    }
}