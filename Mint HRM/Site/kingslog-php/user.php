<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Kingslog</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/backend.css" rel="stylesheet">
    </head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        function addForm() {
            $.ajax({
                type: "POST",
                url: "lib/user.php",
                data: $('#addNews').serialize(),
                success: function (response) {

                    if (response) {
                        $(".alert-success").show("slow");
                        $(".alert-success").html('User Save Success');//updated
                        setTimeout(function () {
                            $(".alert-success").hide("slow");
                        }, 2000);
                    } else {
                        $(".alert-danger").show("slow");
                        $(".alert-danger").html("Not Success");//updated
                        setTimeout(function () {
                            $(".alert-danger").hide("slow");
                        }, 2000);
                    }
                }
            });
        }
    </script>
    <body>
        <?php
        //session_start();
        include './lib/Session.php';
        include './lib/Message.php';


        if (Session::isSessionSet()) {
            header('location:login.php');
        }
        ?>


        <div class="container-fluid">
            <div class="row ">
                <div class="wrapper-bd">

                    <div class="col-lg-2">
                        <?php include './lib/backend_menu/top_menu.php'; ?>
                    </div>
                    <div class="col-lg-10 right-bar">
                        <h1>User </h1>

                        <div class="alert alert-danger" style="display: none"></div>         

                        <div class="alert alert-success" style="display: none"s></div>           

                        <div class="col-lg-8">
                            <form id="addNews" action="" method="post" name="addNews">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" name="name"  placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Users Name</label>
                                    <input type="text" class="form-control" name="username"  placeholder="User Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" name="pass"  placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Users Type</label>
                                    <select name="userType" class="form-control">
                                        <option value="1">Admin</option>
                                        <option value="2">Staff</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Active</label>
                                    <select name="active" class="form-control">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                                <input type="hidden" id="create" name="create" value="create" >

                                <input type="button" onclick="addForm()" class="btn btn-primary"  value="Create">
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
