<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cookies
 *
 * @author DLanka
 */
class Cookies {

    public $user_id;
    public $user_name;
    public $user_type;
    public $user_status;
    public $user_active;
    private $expireTime = 360;

    public  function setCookies() {
        setcookie('user_id', $this->user_id, time() + $this->expireTime);
        setcookie('user_name', $this->user_name, time() + $this->expireTime);
        setcookie('user_type', $this->user_type, time() + $this->expireTime);
        setcookie('user_status', $this->user_status, time() + $this->expireTime);
        setcookie('user_active', $this->user_active, time() + $this->expireTime);
        
    }

    public function removeCookies() {
        setcookie('user_id', $this->user_id, time() - $this->expireTime);
        setcookie('user_name', $this->user_name, time() - $this->expireTime);
        setcookie('user_type', $this->user_type, time() - $this->expireTime);
        setcookie('user_status', $this->user_status, time() - $this->expireTime);
        setcookie('user_active', $this->user_active, time() - $this->expireTime);
    }

    public static function getUserId() {
        //if (isset($_COOKIE['user_id']))
            return $_COOKIE['user_id'];
    }
    public static function getUserName() {
        if (isset($_COOKIE['user_name']))
            return $_COOKIE['user_name'];
    }
    public static function getUserType() {
        if (isset($_COOKIE['user_type']))
            return $_COOKIE['user_type'];
    }

}
