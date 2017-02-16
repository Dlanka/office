<?php

//hggyunkl2lp

class Connect {

    public $con = null;
    public $test = "test";

    public function __construct() {
       // $this->con = mysql_connect('localhost', 'root', '123') or die();
        $this->con = mysql_connect('localhost', 'root', 'hggyunkl2lp');
       // $this->con = mysql_connect('appsy.co', 'root', 'hggyunkl2lp');
        mysql_select_db('kingslog', $this->con);
    }

    function setQuary($quary) {
        $c = mysql_query($quary);
        return($c);
    }

}
