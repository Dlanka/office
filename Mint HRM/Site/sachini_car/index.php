<!DOCTYPE HTML>

<!--header--> 
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
                            <li ><a class="active" href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <!--                            <li><a href="services.php">Services</a></li>-->
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
                    //$(this).addClass('active');
                    //console.log('sdsdsd');
                });
            });
        </script>
        <!--slider--> 
        <div class="slider">
            <div class="slider-wrapper theme-default">
                <div id="slider" class="nivoSlider">
                    <img src="images/s1.jpg" data-thumb="images/" alt="" />
                    <img src="images/s2.jpg" data-thumb="images/2.jpg" alt="" />
                    <img src="images/s3.jpg" data-thumb="images/3.jpg" alt="" />
                    <img src="images/s4.jpg" data-thumb="images/4.jpg" alt="" />
                    <img src="images/s5.jpg" data-thumb="images/5.jpg" alt="" />
                </div>
            </div>
        </div>

        <div class="wrap">
            <div class="main">
                <div class="content">
                    <div class="content_top set-center">
                        <div class="section group border-bottom" style="margin: 0.3%;">
                            <div class="col_1_of_4 span_1_of_4 main-box">
                                <div class="icon-cent">
                                    <figure>
                                        <img src="images/accident.svg">
                                    </figure>
                                </div>
                                <div class="head-t">
                                    <h4>Total accident repair</h4>
                                </div>

                                <div class="heading-desc">	
                                    <p>There is no job too big or too small for us, we offer total accident repair services for minor fender benders, as well as total off-frame restorations. We accept all insurance policies and are able to work with our clients to save their deductibles.</p>
                                    <!--                                    <a href="#" class="button button-icon button-icon-demo">Read More</a>-->
                                </div>	
                            </div>
                            <div class="col_1_of_4 span_1_of_4 main-box">
                                <div class="icon-cent">
                                    <figure>
                                        <img src="images/paint.svg">
                                    </figure>
                                </div>
                                <div class="head-t">
                                    <h4>Body painting</h4>
                                </div>

                                <div class="heading-desc">	
                                    <p>Painting on the ground is messy and tough on one’s back, and painting outdoors can lead to debris caught in the paint’s finish. We offer high quality Booth Painting to provide a quality surface on vehicle skin.</p>					       		

                                </div>					
                            </div>
                            <div class="col_1_of_4 span_1_of_4 main-box">
                                <div class="icon-cent">
                                    <figure>
                                        <img src="images/warldin.svg">
                                    </figure>
                                </div>
                                <div class="head-t">
                                    <h4>Plastic Welding</h4>
                                </div>

                                <div class="heading-desc">	
                                    <p>The key to plastic repair is to identify the type of plastic being repaired and then by selecting the best repair method. At Sachini bumpers, we identifies the type of plastic by experience and use newest technology for plastic welding and fibre repairs</p>

                                </div>					
                            </div>
                            <div class="col_1_of_4 span_1_of_4 main-box">
                                <div class="icon-cent">
                                    <figure>
                                        <img src="images/lamp.svg">
                                    </figure>

                                </div>
                                <div class="head-t">
                                    <h4>Head Lamp Cleaning</h4>
                                </div>

                                <div class="heading-desc">	
                                    <p>Due to less Ultraviolet Protection your vehicle headlights can be discolored. We provide you the service headlight renewal system which improves the appearance of your vehicle by removing yellowness and cloudiness from the surface of your headlamps.</p>

                                </div>
                            </div>
                        </div>
                    </div>	
                    <div class="content-bottom" style="margin-top: 15px;">
                        <div class="section group">
                            <!--<div class="col_1_of_3 span_1_of_3">-->
                            <div class="col_full ">

                                <div class="col-6">
                                    <img src="images/welcome.jpg" alt=""/>

                                </div>
                                <div class="col-4">
                                    <h3>Welcome</h3>
                                    <p style="padding-top:5px;">We have been a family owned and operated auto body shop since year 2003. At Sachini Bumper, we help you with total accident repairs, auto body repair estimates, dents, body paintings and more. Our management team and staffconsist of highly experienced members who have vast knowledge of auto body repairs and auto body parts. Our team makes time to meet every customer after repairs to make sure all the customers are satisfied.</p>
                                </div>
                            </div>
                            <div class="col_full">
                                <div class="border-bottom"></div>
                                <h3 class="text-center text-with-line">Why Choose Us</h3>
                                <div class="col-12" style="margin-top: 10px;">
                                    <div class="col-6-0 left">
                                        <div class= "details details-right">
                                            <figure>
                                                <div class="img-back">
                                                    <img class="right" src="images/sub-accident.svg">
                                                </div>
                                            </figure>
                                            <p class="right">We make sure inconvenient accident flow more smoothly.</p>
                                        </div>
                                    </div>
                                    <div class="col-6-0 right">
                                        <div class= "details details-left">
                                            <figure>
                                                <img class="left" src="images/sub-satisfied.svg">
                                            </figure>
                                            <p class="left ">We make sure every customer is satisfied.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="col-6-0 left">
                                        <div class= "details details-right">
                                            <figure>
                                                <img class="right" src="images/sub-incurance.svg">
                                            </figure>
                                            <p class="right">We provide high quality service no matter you have insurance or not.</p>
                                        </div>
                                    </div>
                                    <div class="col-6-0 right">
                                        <div class= "details details-left">
                                            <figure>
                                                <img class="left" src="images/sub-repire.svg">
                                            </figure>
                                            <p class="left ">We provide top quality body repairs and body tinkering.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="col-6-0 left">
                                        <div class= "details details-right">
                                            <figure>
                                                <img class="right" src="images/sub-safty.svg">
                                            </figure>
                                            <p class="right">We make sure your vehicle is safe with us.</p>
                                        </div>
                                    </div>
                                    <div class="col-6-0 right">
                                        <div class= "details details-left">
                                            <figure>
                                                <img class="left" src="images/sub-bodypart.svg">
                                            </figure>
                                            <p class="left ">We sell genuine auto body parts.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="col-6-0 left">
                                        <div class= "details details-right">
                                            <figure>
                                                <img class="right" src="images/sub-paint.svg">
                                            </figure>
                                            <p class="right">We provide customized painting.</p>
                                        </div>
                                    </div>
                                    <div class="col-6-0 right">
                                        <div class= "details details-left">
                                            <figure>
                                                <img class="left" src="images/sub-allvehi.svg">
                                            </figure>
                                            <p class="left ">All Makes, Models, & Motorcycles.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="col-6-0 left">
                                        <div class= "details details-right">
                                            <figure>
                                                <img class="right" src="images/sub-estimate.svg">
                                            </figure>
                                            <p class="right">We provide free estimates</p>
                                        </div>
                                    </div>
                                    <div class="col-6-0 right">
                                        <div class= "details details-left">
                                            <figure>
                                                <img class="left" src="images/sub-staff.svg">
                                            </figure>
                                            <p class="left ">Experienced staff</p>
                                        </div>
                                    </div>
                                </div>



                            </div>
                            <!--                            <div class="col_1_of_3 span_1_of_3">
                            
                                                            <h3>Why Choose Us</h3>
                                                            <ul>
                                                                <li>We make sure inconvenient accident flow more smoothly </li>
                                                                <li>We provide high quality service no matter you have insurance or not</li>
                                                                <li>We provide free estimates</li>
                                                                <li>Experienced staff </li>
                                                                <li>We make sure your vehicle is safe with us</li>
                                                                <li>We sell genuine auto body parts</li>
                                                                <li>We provide top quality body repairs and body tinkering</li>
                                                                <li>We provide customized painting</li>
                                                                <li>All Makes, Models, & Motorcycles</li>
                                                                <li>We make sure every customer is satisfied</li>
                            
                            
                            
                                                            </ul>
                            
                                                        </div>					-->
                            <!--                            <div class="col_1_of_3 span_1_of_3">
                                                            <h3>What we do</h3>
                                                            <ul>
                                                                <li>Total accident repair</li>
                                                                <li>Booth Painting</li>
                                                                <li>Plastic welding and fibre repairs</li>
                                                                <li>Head Lamp Cleaning</li>
                                                                <li>Body tinkering</li>
                                                                <li>Genuine auto body parts for your vehicle</li>
                                                                                                    
                                                            </ul>
                            
                                                        </div>-->
                        </div>
                    </div>
                </div>
            </div> 
        </div>  

        <div class="footer-index">
            <div class="content-foot">
                <h3 class="text-center">What we do</h3>
                <div class="foot-icons">
                    <div class="icon-row">
                        <div class="col-icon-4">
                            <span class="icon-area"><img src="images/f-accident.svg" class="small-icon"></span>
                            <span class="icon-text">Total accident repair </span>
                        </div>
                        <div class="col-icon-4">
                            <span class="icon-area"><img src="images/f-paint.svg" class="small-icon"></span>
                            <span class="icon-text">Booth Painting </span>
                        </div>
                        <div class="col-icon-4">
                            <span class="icon-area"><img src="images/f-fiber.svg" class="small-icon"></span>
                            <span class="icon-text">Plastic welding and fibre repairs </span>
                        </div>
                    </div>
                    <div class="icon-row">
                        <div class="col-icon-4">
                            <span class="icon-area"><img src="images/f-lamp.svg" class="small-icon"></span>
                            <span class="icon-text">Head Lamp Cleaning</span>
                        </div>
                        <div class="col-icon-4">
                            <span class="icon-area"><img src="images/f-tinker.svg" class="small-icon"></span>
                            <span class="icon-text">Body tinkering </span>
                        </div>
                        <div class="col-icon-4">
                            <span class="icon-area"><img src="images/f-bodyp.svg" class="small-icon"></span>
                            <span class="icon-text">Genuine auto body parts for your vehicle </span>
                        </div>
                    </div>
                </div>
                <!--                <ul>
                                    <li>
                                        
                                        <span class="icon-area"><img src="images/f-accident.svg" class="small-icon"></span>
                                        <span class="icon-text">Total accident repair </span>
                                    </li>
                                    <li>
                                        
                                        <span class="icon-area"><img src="images/f-paint.svg" class="small-icon"></span>
                                        <span class="icon-text">Booth Painting </span>
                                    </li>
                                    <li>
                                        
                                        <span class="icon-area"><img src="images/f-fiber.svg" class="small-icon"></span>
                                        <span class="icon-text">Plastic welding and fibre repairs </span>
                                    </li>
                                    <li>
                                        
                                        <span class="icon-area"><img src="images/f-lamp.svg" class="small-icon"></span>
                                        <span class="icon-text">Head Lamp Cleaning</span>
                                    </li>
                                    <li>
                                        
                                        <span class="icon-area"><img src="images/f-tinker.svg" class="small-icon"></span>
                                        <span class="icon-text">Body tinkering </span>
                                    </li>
                                    <li>
                                        
                                        <span class="icon-area"><img src="images/f-bodyp.svg" class="small-icon"></span>
                                        <span class="icon-text">Genuine auto body parts for your vehicle </span>
                                    </li>
                
                                </ul>-->
            </div>
        </div>
        <?php include './layout/footer.php'; ?>
