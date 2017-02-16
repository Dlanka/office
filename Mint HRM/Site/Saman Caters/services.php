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
                        <li><a href="about.php">About us</a></li>
                        <li ><a href="menus.php">our-menus</a></li>
                        <li class="active"><a href="services.php">Services</a></li>
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
                <div class="services">




                    <div class="mid-grid">
                        <h3>Function furniture hiring</h3>
                        <img src="images/service/hall.jpg" title="video-name" />
                        <p>We provide you the perfect catering services for any outdoor events with excellent and high quality services no matter what your budget will be.
                            We offer you a range of catering services with a highly trained staff to fulfill your needs. Our catering services include;.</p>
                        <ul>

                            <li><a href="#">Buffet tables </a></li>
                            <li><a href="#">Cutlery and Crockery </a></li>
                            <li><a href="#">Saucepans (Any size)</a></li>
                            <li><a href="#">Gas cookers </a></li>
                            <li><a href="#">Flaps</a></li>
                            <li><a href="#">Sinks</a></li>
                            <li><a href="#">Coconut scrapers</a></li>
                            <li><a href="#">Nescafe machines</a></li>
                            <li><a href="#">Water machines </a></li>
                            <li><a href="#">Deep freezers </a></li>
                        </ul>

                    </div>
                    <div class="mid-grid">
                        <h3>food catering</h3>
                        <img src="images/service/catering.jpg" title="video-name" />
                        <p>We offer you high quality furniture and equipment for any event or occasion. These furniture and equipment can be hired for a very reasonable price. We cover events such as parties, outdoor meetings, carnivals,exhibitions, pirith chanting ceremonies, alms-givings, funerals, etc. Therefore, no matter what will be the occasion, 
                            Saman Function Furniture and Food Caters will be there to serve you. Our Furniture and equipment includes;.</p>
                        <ul>

                            <li><a href="#">Canopy tents (Available sizes - 15*15, 10*20, 10*10)</a></li>
                            <li><a href="#">Marquee tents</a></li>
                            <li><a href="#">Luxury chairs</a></li>
                            <li><a href="#">Stages (Any Size)</a></li>
                            <li><a href="#">Pririthmandap</a></li>
                            <li><a href="#">Banquet chairs </a></li>
                            <li><a href="#">Plastic chairs (with black and white covers</a>)</li>
                            <li><a href="#">Gardening umbrellas</a></li>
                            <li><a href="#">Plate tents huts </a></li>
                            <li><a href="#">Round roofs</a></li>
                            <li><a href="#">Sheds </a></li>
                        </ul>

                    </div>
                    <div class="mid-grid">
                        <h3>Entertainment</h3>
                        <img src="images/service/maxresdefault.jpg" title="video-name" />
                        <p>At Saman Function Furniture and Food Caters, we understand the importance of entertainment in your functions. We provide following services for you to make your function more colorful.</p>
                        <ul>

                            <li><a href="#">Dj setups</a></li>
                            <li><a href="#">Dancing groups</a></li>
                            <li><a href="#">Sound systems</a></li>

                        </ul>

                    </div>
                    <div class="mid-grid">
                        <h3>Van hire </h3>
                        <img src="images/service/toyota-hiace-exterior-view.jpg" title="video-name" />
                        <p>Toyota Hiace Dolphin High Roof, 15 passenger seats, Dual AC. Adjustable full seats. For Hire with driver. Rs.50 per km. <a href="gallery.php" class="more">More Images</a>.....</p>


                        <div class="clear"> </div>

                    </div>

                    <div class="clear"> </div>
                </div>

                <div class="clear"> </div>

                <!---End-wrap---->
            </div>
            <!---End-wrap---->
        </div>

        <?php require_once("includes/footer.php"); ?>
    </div>
</body>
</html>

