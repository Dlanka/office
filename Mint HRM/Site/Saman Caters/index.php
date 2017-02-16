<!DOCTYPE HTML>
<html>
    <head>
        <title>Saman Function Furniture and Food Caterers</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="js/move-top.js"></script>
        <link href="css/slider.css" rel="stylesheet" type="text/css"  media="all" />
        <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
        <script type="text/javascript" src="js/camera.min.js"></script>
        <script type="text/javascript">
            jQuery(function() {
                jQuery('#camera_wrap_1').camera({
                    height: '450px',
                    pagination: false,
                    transPeriod: 2000,
                    time: 500,
                });
            });
        </script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1200);
                });
            });
        </script>
    </head>
    <!-- d4d0d0-->
    <body class="home">

        <div class="top-header">
            <div class="clear"> </div>
            <div class="main-header">
                <div class="logo">
                    <h1><a href="index.php"><img src="images/logo.png" width="200" /></a></h1>
                </div>
                <div class="top-nav">
                    <div id="hotline">HOTLINE : 071-4782637&nbsp;&nbsp;&nbsp;</div>
                    <ul>
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="about.php">About us</a></li>
                        <li><a href="menus.php">our-menus</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <div class="clear"> </div>
                    </ul>
                </div>
                <div class="clear"> </div>
            </div>
        </div>

        <?php require_once("includes/banner.php"); ?> 
        <div class="clear"></div>

        <div id="welcomenote">
            WELCOME to Saman Function Furniture and Food Caterers
        </div> 
        <!----End--imageslider----->
        <!----start-top-header----->
        <div class="wrap">
            <div class="container">

                <!----End-top-header----->
                <!---End-header---->
                <!---start-content---->
                <div class="content main-grids">
                    <div class="top-grids">
                        <div class="top-grid">
                            <h3>Function furniture hiring</h3>
                            <img src="images/function-ferniture.jpg" title="image-name" />
                            <a href="services.php">Read more</a>
                        </div>
                        <div class="top-grid">
                            <h3>food catering</h3>
                            <img src="images/Food-catering.jpg" title="image-name" />
                            <a href="services.php">Read more</a>
                        </div>
                        <div class="top-grid" id="last-grid">
                            <h3>vehicle hiring</h3>
                            <img src="images/toyota-hiace-commuter1.jpg" title="image-name" />
                            <a href="services.php">Read more</a>
                        </div>
                        <div class="clear"> </div>
                    </div>
                    <div class="clear"> </div>
                    <div class="bottom-grids">


                        <div class="sprow">

                            <img src="images/row1.png" width="100%" >





                        </div>


                        <div class="clear"> </div>
                        <div class="sprow">
                            <img src="images/row-02.png" width="100%" >

                        </div>


                        <script type="text/javascript">
                            $(document).ready(function() {
                                $(".menu_body").hide();
                                //toggle the componenet with class menu_body
                                $(".menu_head").click(function() {
                                    $(this).next(".menu_body").slideToggle(600);
                                    var plusmin;
                                    plusmin = $(this).children(".plusminus").text();

                                    if (plusmin == '+')
                                        $(this).children(".plusminus").text('-');
                                    else
                                        $(this).children(".plusminus").text('+');
                                });
                            });
                        </script>
                        <div class="clear"> </div>
                    </div>
                </div>
                <!---End-content---->
            </div>
            <!---End-wrap---->
        </div>

        <?php require_once("includes/footer.php"); ?>
    </div>
</body>
</html>

