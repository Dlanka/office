
<!DOCTYPE HTML>


<?php //include './layout/header.php'; ?>
<html>
    <head>
        <title>Sachini Bumper Service</title>


        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


        <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
        <link rel="stylesheet" href="css/slider.css" type="text/css" media="screen" />
        <link rel="stylesheet"  href="css/lightslider.css"/>

<!--<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>-->
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<!--        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
        <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
        <!----- Scroll top --------->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <!-----End  Scroll top --------->

        <script src="http://jhere.net/js/jhere.js"></script>


        <script src="js/lightslider.js"></script> 




    </head>
    <body>
        <div class="header">  	
            <div class="header_top">
                <div class="wrap">
                    <div class="logo">
                        <a href="index.php"><img class="logo-img" src="images/logo.png" alt="" /></a>
                    </div>
                    <div class="dail">
                        <h4>Call Us Now</h4>
                        <p><img src="images/mobile.png">+94- 11401- 9427</p>
                        <p><img src="images/chat.png" >Mail: <span class="mail">sachinibumpers@gmail.com</span> </p>
                    </div>
                    <div class="clear"></div>
                </div>	
            </div>	
            <div class="header-bottom">
                <div class="wrap">
                    <div class="menu">
                        <ul id="main-menu">
                            <li ><a  href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
<!--                            <li><a href="services.php">Services</a></li>-->
                            <li  ><a class="active" href="gallry.php">Gallery</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <div class="clear"></div>
                        </ul>
                    </div>


                    <!--                    <div class="social-icons">						
                                            <ul>
                                                <li><a class="facebook" href="#" target="_blank"> </a></li>
                                                <li><a class="twitter" href="#" target="_blank"></a></li>
                                                <li><a class="googleplus" href="#" target="_blank"></a></li>
                                                <li><a class="pinterest" href="#" target="_blank"></a></li>
                                                <li><a class="dribbble" href="#" target="_blank"></a></li>
                                                <li><a class="vimeo" href="#" target="_blank"></a></li>
                                                <div class="clear"></div>
                                            </ul>
                                        </div>-->
                    <div class="clear"></div>
                </div>
            </div>			
            <!--- Slider --->				

            <!--- End Slider --->

        </div>
        <script>
            $(window).load(function() {
                $('#slider').nivoSlider();
            });

            $(function() {
                $('ul#main-menu > li > a').click(function() {
                    //alert('sdsd');
                    //var current = $(this);
                    //$('ul#main-menu > li > a').removeClass('active');
                    //$(this).addClass('active');
                    //console.log('sdsdsd');
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                $("#content-slider").lightSlider({
                    loop: true,
                    keyPress: true
                });
                $('#image-gallery').lightSlider({
                    gallery: true,
                    item: 1,
                    thumbItem: 9,
                    slideMargin: 0,
                    speed: 500,
                    auto: true,
                    loop: true,
                    onSliderLoad: function() {
                        $('#image-gallery').removeClass('cS-hidden');
                    }
                });
            });
        </script>


        <div class="wrap">
            <div class="main">
                <div class="content">
                    <h2>Gallery</h2>

                    <div class="item" style="margin: 0 auto;">            
                        <div class="clearfix" style="max-width:1000px;">
                            <ul id="image-gallery" class="gallery list-unstyled cS-hidden">

                                <li data-thumb="images/thumb/thumb-01.jpg"> 
                                    <img src="images/1.jpg" />
                                </li>
                                <li data-thumb="images/thumb/thumb-02.jpg"> 
                                    <img src="images/2.jpg" />
                                </li>
                                <li data-thumb="images/thumb/thumb-03.jpg"> 
                                    <img src="images/3.jpg" />
                                </li>
                                <li data-thumb="images/thumb/thumb-04.jpg"> 
                                    <img src="images/4.jpg" />
                                </li>
                                <li data-thumb="images/thumb/thumb-05.jpg"> 
                                    <img src="images/5.jpg" />
                                </li>
                                <li data-thumb="images/thumb/thumb-06.jpg"> 
                                    <img src="images/6.jpg" />
                                </li>
                                <li data-thumb="images/thumb/thumb-07.jpg"> 
                                    <img src="images/7.jpg" />
                                </li>
                                <li data-thumb="images/thumb/thumb-08.jpg"> 
                                    <img src="images/8.jpg" />
                                </li>
                                <li data-thumb="images/thumb/thumb-09.jpg"> 
                                    <img src="images/9.jpg" />
                                </li>
                                <li data-thumb="images/thumb/thumb-10.jpg"> 
                                    <img src="images/10.jpg" />
                                </li>
                                <li data-thumb="images/thumb/thumb-11.jpg"> 
                                    <img src="images/11.jpg" />
                                </li>
                                <li data-thumb="images/thumb/thumb-12.jpg"> 
                                    <img src="images/12.jpg" />
                                </li>
                                <li data-thumb="images/thumb/thumb-13.jpg"> 
                                    <img src="images/13.jpg" />
                                </li>
                                <li data-thumb="images/thumb/thumb-14.jpg"> 
                                    <img src="images/14.jpg" />
                                </li>
                                <li data-thumb="images/thumb/thumb-15.jpg"> 
                                    <img src="images/15.jpg" />
                                </li>
                                <li data-thumb="images/thumb/thumb-16.jpg"> 
                                    <img src="images/16.jpg" />
                                </li>
                                <li data-thumb="images/thumb/thumb-17.jpg"> 
                                    <img src="images/17.jpg" />
                                </li>
                                <li data-thumb="images/thumb/thumb-18.jpg"> 
                                    <img src="images/18.jpg" />
                                </li>
                                <li data-thumb="images/thumb/thumb-19.jpg"> 
                                    <img src="images/19.jpg" />
                                </li>
                                <li data-thumb="images/thumb/thumb-20.jpg"> 
                                    <img src="images/20.jpg" />
                                </li>
                                <li data-thumb="images/thumb/thumb-21.jpg"> 
                                    <img src="images/21.jpg" />
                                </li>
                                <li data-thumb="images/thumb/thumb-22.jpg"> 
                                    <img src="images/22.jpg" />
                                </li>
                                <li data-thumb="images/thumb/thumb-23.jpg"> 
                                    <img src="images/23.jpg" />
                                </li>
                                <li data-thumb="images/thumb/thumb-24.jpg"> 
                                    <img src="images/24.jpg" />
                                </li>
                                <li data-thumb="images/thumb/thumb-25.jpg"> 
                                    <img src="images/25.jpg" />
                                </li>





                            </ul>
                        </div>
                    </div>


                </div>
            </div> 
        </div>  


        <?php include './layout/footer.php'; ?>