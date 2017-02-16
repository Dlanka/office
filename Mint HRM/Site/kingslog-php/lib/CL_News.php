<?php

//include '/config.php';
include '/news_module.php';
include '/Message.php';

class CL_News {

    public static $error = '';

    public function doCreate() {
        $news = new News_module();


        $date = date('Y-m-d');
        $userId = $_SESSION['user_id'];

        $array = array(
            'title' => isset($_POST['title']) ? $_POST['title'] : '',
            'short_desc' => isset($_POST['short_des']) ? $_POST['short_des'] : '',
            'descrip' => isset($_POST['description']) ? $_POST['description'] : '',
            'news_date' => isset($_POST['date']) ? $_POST['date'] : '',
            'date' => $date,
            'user_id' => (int) $userId,
            'active' => isset($_POST['active']) ? $_POST['active'] : '',
            'status' => 0,
            'link' => isset($_POST['link']) ? $_POST['link'] : '',
            'url' => isset($_POST['url']) ? $_POST['url'] : ''
        );

        $respose = $news->create($array);

        if ($respose == 1) {
            header('location:../newses.php');
        } else {
//            Message::setErrorMsg('News not saved');
            header('location:../newses.php');
        }
    }

    public function getNews() {
        $news = new News_module();

        $respose = $news->getAllNews();
        return $respose;
    }

    public function getActiveNews() {
        $news = new News_module();

        $respose = $news->getAllActiveNews();
        return $respose;
    }

    public function activeNews($id, $action) {
        $news = new News_module();

        $news->activeNews($id, $action);
        header('location:../news_view.php');
    }

    public function getNewsById($id) {
        $news = new News_module();

        $result = $news->newsEdit($id);
        return $result;
    }

    public function newsEdit($id) {
        header('location:../newses.php?id=' . $id);
    }

    public function newsJustEdit($id) {
        $news = new News_module();


        $date = date('Y-m-d');
        $userId = $_SESSION['user_id'];

        $array = array(
            'title' => isset($_POST['title']) ? $_POST['title'] : '',
            'short_desc' => isset($_POST['short_des']) ? $_POST['short_des'] : '',
            'descrip' => isset($_POST['description']) ? $_POST['description'] : '',
            'news_date' => isset($_POST['date']) ? $_POST['date'] : '',
            'date' => $date,
            'user_id' => (int) $userId,
            'active' => isset($_POST['active']) ? $_POST['active'] : '',
            'status' => 0,
            'link' => isset($_POST['link']) ? $_POST['link'] : '',
            'url' => isset($_POST['url']) ? $_POST['url'] : ''
        );
        //var_dump($array);
        $respose = $news->justEdit($id, $array);

        if ($respose == 1) {

            header('location:../newses.php');
        } else {

            header('location:../newses.php');
        }
    }

    public function deleteNews($id) {
        $news = new News_module();
        $news->delete($id);
        header('location:../news_view.php');
    }

}
