
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
<!--                            <li ><a class="active" href="services.php">Services</a></li>-->
                            <li><a href="gallry.php">Gallery</a></li>
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
                    $(this).addClass('active');
                    //console.log('sdsdsd');
                });
            });
        </script>



        <div class="wrap">
            <div class="main">
                <div class="content">
                    <h2>Services</h2>
                    <div class="section group">
                        <div class="listview_1_of_2 images_1_of_2">
                            <div class="listimg listimg_2_of_1">
                                <img src="images/service-1.png" alt="" />
                            </div>
                            <div class="text list_2_of_1">
                                <h3>Live Support</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt  ut labore et dolore.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="#" class="button button-icon button-icon-demo">More Info</a>
                            </div>
                        </div>			
                        <div class="listview_1_of_2 images_1_of_2">
                            <div class="listimg listimg_2_of_1">
                                <img src="images/service-2.png" alt="" />
                            </div>
                            <div class="text list_2_of_1">
                                <h3>Repair Services</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt  ut labore et dolore.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="#" class="button button-icon button-icon-demo">More Info</a>
                            </div>
                        </div>
                    </div>  
                    <div class="section group">
                        <div class="listview_1_of_2 images_1_of_2">
                            <div class="listimg listimg_2_of_1">
                                <img src="images/service-3.png" alt="" />
                            </div>
                            <div class="text list_2_of_1">
                                <h3>Complete Care</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt  ut labore et dolore.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="#" class="button button-icon button-icon-demo">More Info</a>
                            </div>
                        </div>			
                        <div class="listview_1_of_2 images_1_of_2">
                            <div class="listimg listimg_2_of_1">
                                <img src="images/service-4.png" alt="" />
                            </div>
                            <div class="text list_2_of_1">
                                <h3>Spare Parts</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt  ut labore et dolore.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="#" class="button button-icon button-icon-demo">More Info</a>
                            </div>
                        </div>
                    </div>  
                    <div class="section group">
                        <div class="listview_1_of_2 images_1_of_2">
                            <div class="listimg listimg_2_of_1">
                                <img src="images/service-5.png" alt="" />
                            </div>
                            <div class="text list_2_of_1">
                                <h3>Sales Services</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt  ut labore et dolore.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="#" class="button button-icon button-icon-demo">More Info</a>
                            </div>
                        </div>			
                        <div class="listview_1_of_2 images_1_of_2">
                            <div class="listimg listimg_2_of_1">
                                <img src="images/service-6.png" alt="" />
                            </div>
                            <div class="text list_2_of_1">
                                <h3>Tyre Services</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt  ut labore et dolore.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="#" class="button button-icon button-icon-demo">More Info</a>
                            </div>
                        </div>
                    </div>  	   
                </div>
            </div> 
        </div>  

        <?php include './layout/footer.php'; ?>

