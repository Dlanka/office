<?php

$base_url = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER["REQUEST_URI"] . '?') . '/';
include '/CL_User.php';

$user = new CL_User();

if (isset($_GET['login']) && $_GET['login'] = 'login') {

    $user_name = $_POST['username'];
    $password = $_POST['pasw'];

    $user->doLogin($user_name, $password);
}


if (isset($_GET['log']) && $_GET['log'] == 'out') {
    $user->logOut();
}

//user save controller
if (isset($_POST['create']) && $_POST['create'] == 'create') {
    $user = new CL_User();
    
    $user->doCreate();
}