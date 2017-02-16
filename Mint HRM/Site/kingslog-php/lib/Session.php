<?php

session_start();

class Session {

    public static $user_id;
    public static $user_name;
    public static $user_type;
    public static $user_status;
    public static $user_active;
    private $expireTime = 360;

    public static function setSession() {
        $_SESSION['user_id'] = Session::$user_id;
        $_SESSION['user_name'] = Session::$user_name;
        $_SESSION['user_type'] = Session::$user_type;
        $_SESSION['user_status'] = Session::$user_status;
        $_SESSION['user_active'] = Session::$user_active;
    }

    public static function destroySession() {
        session_destroy();
    }

    public static function isSessionSet() {
        return isset($_SESSION['user_id']) ? FALSE : TRUE;
    }

}
