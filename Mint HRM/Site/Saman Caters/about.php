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
    <body>
        <div class="top-header">
            <div class="clear"> </div>
            <div class="main-header">
                <div class="logo">
                    <h1><a href="index.php"><img src="images/logo.png" width="200" /></a></h1>
                </div>
                <div class="top-nav">
                    <div id="hotline">HOTLINE : 071-4782637&nbsp;&nbsp;&nbsp;</div>
                    <ul>
                        <li ><a href="index.php">Home</a></li>
                        <li class="active"><a href="about.php">About us</a></li>
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
        <div class="clear"> </div>
        <!----End--imageslider----->
        <!----start-top-header----->
        <div class="wrap">
            <div class="content">
                <!---start-about---->
                <div class="about">
                    <div class="about-left">
                        <h2>About Saman Function Furniture and Food Caterers</h2>

                        <div class="ownerimg"><img src="images/owner.jpg"></div>
                        <p>We have a  passion for all things delicious and have created our extensive menu to include  past favorites' as well as contemporary dishes. You can select from a large  variety of quality handmade finger food items and create the ideal menu for  your special event. We provide you with high quality catering with a highly  trained staff under personal supervision. Whatever is your occasion, our staff members  are ready to give the best service to you for free of charge. We also ensure  you to provide high quality furniture and equipment for any event or occasion  for a very reasonable price. So if you require any catering or furniture for an  event or occasion, our team will be there to make your event colourful. </p>

                        <p>
                            Saman Function  Furniture and Food caterers Services pride itself by partners backed by many  years of experience in the hospitality and event management industry since  1993.Mr Saman Jayawardane  has been  involved in food catering and supplying function furniture for over 20 years.  The experience and the knowledge of Mr. Saman Jayawardane can be an asset for  you to make your special day an unforgettable day.</p>
                    </div>	
                    <div class="about-right">
                        <div class="about-sidebar">
                            <?php require_once("includes/leftpanel.php"); ?>
                        </div>
                    </div>
                    <div class="clear"> </div>
                </div>
                <!---End-about---->
                <!---End-content---->
            </div>
            <!---End-wrap---->
        </div>

        <?php require_once("includes/footer.php"); ?>
    </div>
</body>
</html>

