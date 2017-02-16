<?php
define("SECRET_KEY", '');

include 'Connect.php';
include 'Session.php';

class UserModule {

    public $c = '';
    public $id;
    public $name;
    public $user_name = '';
    public $password = '';
    public $active;
    public $date;
    public $userId;
    public $userType;
    public $status = 0;

    public function __construct() {
        $this->c = new Connect();
    }

    public function create($ary) {
        $p = md5(SECRET_KEY.$ary['password']);
        //$p = $ary['password'];
//        var_dump($ary);
        $quary = "INSERT INTO `kingslog`.`user` (`id`, `name`, `user_name`, `password`, `user_type`, `date`, `status`, `active`, `user_id`) "
                . "VALUES "
                . "(NULL, "
                . "'$ary[name]', "
                . "'$ary[userName]', "
                . "'$p', "
                . "'$ary[userType]', "
                . "'$ary[date]', "
                . "'$ary[status]', "
                . "'$ary[active]', "
                . "'$ary[userId]');";

        $result = $this->c->setQuary($quary);

        if ($result > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    public function login($user, $pass) {

        $this->user_name = $user;
        $this->password = $pass;

        $quaty = "SELECT `id`,`user_name`,`user_type`,`password`,`status`,`active` FROM `user` WHERE `user_name`= '$this->user_name'  LIMIT 1";


        $result = $this->c->setQuary($quaty);
        if ($row = mysql_fetch_array($result)) {
            if ($row['id'] > 0) {
                //if ($row['password'] == $this->password) {
                if ($row['password'] == md5(SECRET_KEY.$this->password)) {

                    Session::$user_id = $row['id'];
                    Session::$user_name = $row['user_name'];
                    Session::$user_type = $row['user_type'];
                    Session::$user_status = $row['status'];
                    Session::$user_active = $row['active'];
                    Session::setSession();

                    return $this->status = 1;
                } else {
                    return $this->status = 0;
                }
            } else {
                return $this->status = 0;
            }
        }
    }

}
