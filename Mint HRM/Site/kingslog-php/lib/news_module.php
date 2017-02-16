<?php

include 'Connect.php';
include 'Session.php';

class News_module {

    public function __construct() {
        $this->c = new Connect();
    }

    public function create($ary) {



        $quary = "INSERT INTO `kingslog`.`news` (`id`, `title`, `short_desc`, `descrip`, `news_date`, `date`, `user_id`, `active`, `status`, `link`, `url`) "
                . "VALUES (NULL, "
                . "'$ary[title]', "
                . "'$ary[short_desc]', "
                . "'$ary[descrip]', "
                . "'$ary[news_date]', "
                . "'$ary[date]', "
                . "'$ary[user_id]', "
                . "'$ary[active]', "
                . "'$ary[status]',"
                . "'$ary[link]',"
                . "'$ary[url]');";

        $result = $this->c->setQuary($quary);

        return true;
//        if ($result > 0) {
//            return 1;
//        } else {
//            return 0;
//        }
    }

    public function getAllNews() {

        $quary = "SELECT `id`,`title`,`short_desc`,`descrip`,`news_date`,`active`,`link`,`url` FROM `news` ";

        $result = $this->c->setQuary($quary);
        return $result;
    }

    public function getAllActiveNews() {

        $quary = "SELECT `id`,`title`,`short_desc`,`descrip`,`news_date`,`active`,`link`,`url` FROM `news` WHERE `active` = '1' ";

        $result = $this->c->setQuary($quary);
        return $result;
    }

    public function activeNews($id, $action) {

        $quary = "UPDATE  `news` SET  `active` =  '$action' WHERE  `news`.`id` ='$id'";

        $this->c->setQuary($quary);
    }

    public function newsEdit($id) {
        $quary = "SELECT `id`,`title`,`short_desc`,`descrip`,`news_date`,`active`,`link`,`url` FROM `news` WHERE `id` = '$id'";

        $result = $this->c->setQuary($quary);
        return mysql_fetch_array($result);
    }

    public function justEdit($id, $ary) {

        $quary = "UPDATE `kingslog`.`news` SET 
                `title` = '$ary[title]',
                `short_desc` = '$ary[short_desc]',
                `news_date` = '$ary[news_date]',
                `date` = '$ary[date]',
                `active` = '$ary[active]',
                `status` = '$ary[status]',
                `descrip`='$ary[descrip]',
                `link`='$ary[link]',
                `url`='$ary[url]'
                WHERE `news`.`id` = '$id'";

        $result = $this->c->setQuary($quary);

        if ($result > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    public function delete($id) {
        $quary = "DELETE FROM `news` WHERE `id`='$id'";
        $this->c->setQuary($quary);
    }

}
