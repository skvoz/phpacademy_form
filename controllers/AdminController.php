<?php

class AdminController extends BaseController {
    public function actionIndex()
    {
        if (isset($_SESSION['user_id'])) {
            echo $this->render('adminIndex');
        } else {
            throw new Exception('You have not got access to area');
        }

    }
}