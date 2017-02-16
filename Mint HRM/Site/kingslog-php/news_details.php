<!DOCTYPE html>
<html lang="en">
    <head>
        <title>KINGSLOG</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--fonts link--> 
        <link href='https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
        <!--boostrap css-->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--main css-->
        <link href="css/style.css" rel="stylesheet">


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <?php
        include './lib/CL_News.php';
        $news = new CL_News();

        $news_id = isset($_GET['id']) ? $_GET['id'] : 0;
        if ($news_id == 0) {
            header('location:news.php');
        }
        ?>
    </head>
    <body>
        <!--header--> 
        <header class="header">           
            <nav class="navbar"> 
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="index.php"><img class="logo" src="images/logo.svg" alt="Logo"/></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.php">Home</a></li>
                            <li class="active"><a href="kingslog.php">Kingslog</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="maritime_consultancy.php">Maritime Consultancy</a></li>
                                    <li><a href="freight_services.php">Freight Services</a></li>                                
                                    <li><a href="warehouse_management.php">Warehouse management</a></li>
                                    <li><a href="project_cargo_management.php">Project cargo management</a></li>
                                </ul>
                            </li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="news.php">News</a></li>
                            <li><a href="index.php#contact_info">Contact Us</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
        </header>

        <section class="banner-inner">
            <div class="banner-imgs about-img"></div>
        </section>

        <section class="block inner-pages about">
            <div class="container">

                <div class="row">
                    <h1 class="col-lg-12">KINGSLOG News</h1>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <?php $result = $news->getNewsById($news_id); ?>
                        <h2><?php echo $result['title'] ?></h2>
                        <p>
                            <?php echo $result['descrip'] ?>
                            <?php if (isset($result['link']) && $result['link'] != ''): ?>
                                <a class="web-link" target="_blank" href="http://<?php echo isset($result['url']) ? $result['url'] : ''; ?>"> <?php echo isset($result['link']) ? $result['link'] : ''; ?></a>
                               
                            <?php endif; ?>
                        </p>
                    </div>
                </div>

            </div>
        </section>


        <!--footer-->

        <section class="footer-section">
            <div class="footer-end">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="col-xs-12 col-md-6">
                                <p class="copy-right">&copy; 2015 KINGSLOG - All Rights Reserved - Solution By Infoseek</p>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div class="social-network">
                                    <p>Stay In Touch</p>
                                    <div class="social-icons">
                                        <span class="social-icon icon-facebook"></span>
                                        <span class="social-icon icon-in"></span>
                                        <span class="social-icon icon-twitter"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--jquary lib-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
        <!--bootstrap js-->
        <script src="js/bootstrap.min.js"></script>
        <!--modernizr js-->
        <script src="js/modernizr.custom.47169.js"></script>
    </body>

</html>
