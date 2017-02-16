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
        <link rel="stylesheet" type="text/css" href="css/jcalender/jquery.datetimepicker.css"/>
    </head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        function addFrom() {
          // var a =  $('#addNews').serialize();
          
            $.ajax({
                type: "POST",
                url: "lib/news.php",
                data: $('#addNews').serialize(),
                success: function (response) {

                    if (response) {
                        $(".alert-success").show("slow");
                        $(".alert-success").html('Success');//updated
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
        //include './lib/module/Session.php';
        //include './lib/module/Message.php';
        include './lib/CL_News.php';

        $news_ob = new CL_News();
        $news_id = isset($_GET['id']) ? $_GET['id'] : 0;

        if ($news_id > 0) {
            $createType = 'doEdit';
        } else {
            $createType = 'create';
        }


        $result = $news_ob->getNewsById($news_id);

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
                        <h1>News </h1>

                        <!--Message area-->

                        <div class="alert alert-danger" style="display: none"></div>           
                        <div class="alert alert-success" style="display: none"></div>           

                        <div class="col-lg-8">
                            <form id="addNews" action="" method="post" name="addNews">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" class="form-control" name="title" value="<?php echo isset($result['title']) ? $result['title'] : ''; ?>"  placeholder="Title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">News Date</label>
                                    <input type="text" class="form-control datepicker" name="date" value="<?php echo isset($result['news_date']) ? $result['news_date'] : ''; ?>" placeholder="Date">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Short Description</label>
                                    <textarea class="form-control" name="short_des"  placeholder="Short Description"><?php echo isset($result['short_desc']) ? $result['short_desc'] : ''; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Description</label>
                                    <textarea class="form-control" name="description"  placeholder="Description"><?php echo isset($result['descrip']) ? $result['descrip'] : ''; ?></textarea>
                                </div>
                                <div class="form-inline" style="margin-bottom: 15px;">
                                    <label style="display: block" for="exampleInputEmail1">Other Link</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="link" value="<?php echo isset($result['link']) ? $result['link'] : ''; ?>"  placeholder="Link">
                                        <input type="text" class="form-control" name="url" value="<?php echo isset($result['url']) ? $result['url'] : ''; ?>"  placeholder="Ex: www.example.com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Active</label>
                                    <select name="active" class="form-control" >
                                        <option value="1" <?php
                                        if (isset($result['active']) && $result['active'] == 1) {
                                            echo 'selected';
                                        }
                                        ?> >Yes</option>
                                        <option value="0" <?php
                                        if (isset($result['active']) && $result['active'] == 0) {
                                            echo 'selected';
                                        }
                                        ?>>No</option>
                                    </select>

                                    <input type="hidden" id="id" name="id"  value="<?php echo $news_id; ?>" >
                                    <input type="hidden" id="create" name="create" value="<?php echo $createType; ?>" >

                                </div>

                                <?php if (isset($news_id) && $news_id > 0): ?>

                                    <input type="button" onclick="addFrom()" class="btn btn-default"  value="Edit">
                                <?php endif; ?>

                                <?php if (isset($news_id) && $news_id <= 0): ?>
                                    <input type="button" onclick="addFrom()" class="btn btn-primary" value="Create">
                                <?php endif; ?>

                                <a href="news_view.php" class="btn btn-success">View</a>
                            </form>


                            <div id="msg" style="display: none;">   </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/jcalendr/jquery.js"></script>
        <script src="js/jcalendr/jquery.datetimepicker.full.js"></script>

        <script>
                                        $('.datepicker').datetimepicker({
                                            timepicker: false,
                                            format: 'Y/m/d',
                                            formatDate: 'Y/m/d'

                                        });
        </script>
    </body>
</html>
