<?php

//session_start();



class Message {

    public static $error;
    public static $succes;
    private $expireTime = 60;
    public static $inactive = 600;

    public function __construct() {
        
    }

    public static function setErrorMsg($val) {
        if ($val != '') {
            $_SESSION['msg_er'] = $val;
        }
    }

    public static function setSuccessMsg($val) {

        if ($val != '') {
            $_SESSION['msg_success'] = $val;
            
        }



// check to see if $_SESSION['timeout'] is set
    }

    public static function getErrorMsg() {
        if (isset($_SESSION['msg_er'])) {
            return $_SESSION['msg_er'];
        }
    }

    public static function getSuccessMsg() {
        if (isset($_SESSION['msg_success'])) {
            return $_SESSION['msg_success'];
        }
    }

    public static function destroySession() {
        $_SESSION['timeout'] = time();
        if (isset($_SESSION['timeout'])) {
            $session_life = time() - $_SESSION['timeout'];
            if ($session_life > Message::$inactive) {
                session_destroy();
            }
        }
    }

}
