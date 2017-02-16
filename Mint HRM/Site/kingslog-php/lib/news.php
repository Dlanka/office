<?php

include './CL_News.php';

$news = new CL_News();

//save controller
if (isset($_POST['id']) && isset($_POST['create']) && $_POST['create'] == 'create') {

    $news->doCreate();
}

//edit controller
if (isset($_POST['id']) && isset($_POST['create']) && $_POST['create'] == 'doEdit') {
    $id = $_POST['id'];
    $news->newsJustEdit($id);
}

//News edit id controller
if (isset($_GET['id']) && isset($_GET['edit']) && $_GET['edit'] == 'edit') {
    $id = $_GET['id'];
    $news->newsEdit($id);
}

if (isset($_GET['id']) && isset($_GET['action'])) {
    $id = $_GET['id'];
    $action = $_GET['action'];
    //echo 'ID ' . $id;
    $news->activeNews($id, $action);
}

if (isset($_GET['id']) && isset($_GET['delete']) == 'delete') {
    $id = $_GET['id'];
    $news->deleteNews($id);
}



