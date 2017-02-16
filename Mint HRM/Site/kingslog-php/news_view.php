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
    <body>
        <?php
        //session_start();

        include './lib/CL_News.php';
        $news = new CL_News();

        //setcookie('user_id','kasun c gamage', time() + 360);
        //echo $_SESSION['user_id'];
        //setcookie('user_id','', time() - 360)
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
                        <h1>News View</h1>
                        <div class="col-lg-12">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Date</th>
                                        <th>Short Description</th>
                                        <th style="width: 1%">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $result = $news->getNews();
                                    while ($row = mysql_fetch_array($result)) : ?>                            
                                                                        
                                    <tr>
                                        <td><?php echo $row['id'];?></td>
                                        <td><?php echo $row['title'];?></td>
                                        <td><?php echo $row['news_date'];?></td>
                                        <td><?php echo $row['short_desc'];?></td>
                                        <td style="width: 1%">
                                            <table>
                                                <tr>
                                                    <td style="padding-right:  5px;">
                                                        <a href="lib/news.php?id=<?php echo $row['id'];?>&edit=edit" class="btn btn-primary btn-sm">Edit</a>
                                                    </td>
                                                    <td style="padding-right:  5px;">
                                                        <?php if ($row['active']==0) : ?>
                                                        <a href="lib/news.php?id=<?php echo $row['id'];?>&action=1" class="btn btn-default btn-sm">Inactive</a>
                                                        <?php endif;?> 
                                                        
                                                        <?php if ($row['active']==1) : ?>
                                                        <a href="lib/news.php?id=<?php echo $row['id'];?>&action=0" class="btn btn-success btn-sm">Active</a>
                                                        <?php endif;?>     
                                                        
                                                    </td>
                                                        <?php if($_SESSION['user_type']==1):?>
                                                        <td >
                                                             <a href="lib/news.php?id=<?php echo $row['id'];?>&delete=delete" class="btn btn-danger btn-sm">Delete</a>
                                                        </td>
                                                        <?php endif;?>
                                                </tr>
                                            </table>
                                        </td>

                                    </tr>
                                    <?php endwhile;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </body>
</html>
