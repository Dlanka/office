<?php

//include '/config.php';
include '/User_module.php';
include '/Message.php';

class CL_User {

    public static $error = '';

    public function doCreate() {

        $create = new UserModule();

        $date = date('Y-m-d');
        $userId = $_SESSION['user_id'];

        $array = array(
            'name' => isset($_POST['name']) ? $_POST['name'] : '',
            'userName' => isset($_POST['username']) ? $_POST['username'] : '',
            'password' => isset($_POST['pass']) ? $_POST['pass'] : '',
            'status' => 0,
            'userType' => isset($_POST['userType']) ? $_POST['userType'] : 0,
            'active' => isset($_POST['active']) ? $_POST['active'] : 0,
            'userId' => (int) $userId,
            'date' => $date
        );

        $respose = $create->create($array);

        if ($respose == 1) {
            Message::setSuccessMsg('User save success');
            header('location:../user.php');
        } else {
            Message::setErrorMsg('User not saved');
            header('location:../user.php');
        }
    }

    public function doLogin($user_name, $password) {
        $um = new UserModule();

        $um->login($user_name, $password);
        if ($um->status == 1) {

            // header('location:' . BASE_URL . 'dashboard.php');
            header('location:../newses.php');
        } else {
            //UserCL::setError('Your username or password is invalid');
            header('location:' . BASE_URL . 'login.php?err=Your username or password is invalid');
        }
    }

    public function logOut() {
        Session::destroySession();
        header('location:../login.php');
    }

    public static function setError($errors) {
        echo $errors;
        UserCL::$error = $errors;
    }

    public static function getError() {
        return UserCL::$error;
    }

}
