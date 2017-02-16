<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>IASL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <!-- Styles -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="layerslider/css/layerslider.css" type="text/css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/colors/color.css" title="color1" />
</head>

<body itemscope>
    <div class="theme-layout">
        <header class="stick">	
            <?php include './header_menu.php'; ?>
        </header><!-- Header -->

        <!-- Responsive Header -->
        <?php include './header_responsive_menu.php'; ?>


        <div class="page-top">
            <div class="container">
                <div class="page-title">
                    <div data-velocity="-.2" style="" class="parallax scrolly-invisible"></div><!-- PARALLAX BACKGROUND IMAGE -->		
                    <h2>Contact Us</h2>
                    <ul>
                        <li><a itemprop="url" href="index.php" title="">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div><!-- Page Title -->
            </div>
        </div><!-- Page Top -->

        <section>
            <div class="block extra-gap no-padding">
                <div class="">
                    <div class="row">
                        <div class="col-md-12 column">
                            <div class="map">
                                <div id="map-canvas"></div>
                            </div><!-- Google Map -->
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Google Map Section -->

        <section>
            <div class="block gray">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 column">
                            <div class="contact-box overlap">
                                <div class="title">
                                    <h3>Contact Us</h3>
                                </div>					
                                <div class="countries-contact">
                                    <div class="tab-content contact-pnl" id="myTabContents">
                                        <div id="" class="tab-pane fade active in">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h4>Insurance Association Of Sri Lanka</h4>
                                                    <div class="contact-info">

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <strong><i class="fa fa-home"></i>ADDRESS</strong>
                                                                <span>No. 143 A. Vajira Road,<br>Colombo  05,Sri Lanka.</span>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <strong><i class="fa fa-envelope"></i>EMAIL</strong>
                                                                <span><a href="mailto:info@iasl.lk">info@iasl.lk</a></span>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <strong><i class="fa fa-phone"></i>PHONE NO</strong>
                                                                <span>+94 11 5635582</span>
                                                            </div>

                                                        </div>
                                                        <div class="row">

                                                            <!--                                                            <div class="col-md-6">
                                                                                                                            <strong><i class="fa fa-link"></i>WEB ADDRESS</strong>
                                                                                                                            <span>http://www.yourwebsite.com</span>
                                                                                                                        </div>-->
                                                        </div>
                                                    </div><!-- Contact Info -->
                                                </div>
                                                <div class="col-md-6">
                                                    <div></div>

                                                    <form class="contact-form" id="home-email-form">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-12">
                                                                <div class="alert alert-success success_msage hide">
                                                                    <span></span>    
                                                                </div>
                                                                <div class="alert alert-danger error_msage hide">
                                                                    <span></span>    
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12"><input name="name3" id="name3" type="text" placeholder="Name" required /></div>
                                                            <div class="col-md-12"><input name="email3" id="email3" type="text" placeholder="Email" required /></div>
                                                            <div class="col-md-12"><textarea id="message3" name="message3"  placeholder="Message"></textarea></div>
                                                            <div class="col-md-12"> 
                                                                <div class="submit-btn" onclick="sentMessage()" >Send Message</div>
                                                            </div>


                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                        <!--                                        <div id="country2" class="tab-pane fade">
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <div class="contact-info">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-6">
                                                                                                        <strong><i class="fa fa-home"></i>ADDRESS</strong>
                                                                                                        <span>#8901 Marmora Road City, Vietnam</span>
                                                                                                    </div>
                                                                                                    <div class="col-md-6">
                                                                                                        <strong><i class="fa fa-envelope"></i>EMAIL ID</strong>
                                                                                                        <span>info@domainname.com</span>
                                                                                                    </div>
                                                                                                    <div class="col-md-6">
                                                                                                        <strong><i class="fa fa-phone"></i>PHONE NO</strong>
                                                                                                        <span>+00 035 835 282   /   +00 034 965 353</span>
                                                                                                    </div>
                                                                                                    <div class="col-md-6">
                                                                                                        <strong><i class="fa fa-link"></i>WEB ADDRESS</strong>
                                                                                                        <span>http://www.yourwebsite.com</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div> Contact Info 
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div></div>
                                                                                            <div class="col-sm-12 col-md-12">
                                                                                                <div class="alert alert-success success_msage ">
                                                                                                    <span></span>    
                                                                                                </div>
                                                                                                <div class="alert alert-danger error_msage ">
                                                                                                    <span></span>    
                                                                                                </div>
                                                                                            </div>
                                                                                            <form class="contact-form" id="home-email-form">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12"><input name="name" type="text" placeholder="Name" /></div>
                                                                                                    <div class="col-md-12"><input name="email" type="text" placeholder="Email" /></div>
                                                                                                    <div class="col-md-12"><textarea name="message" placeholder="Message"></textarea></div>
                                                                                                    <div class="col-md-12"><button type="submit" id="submit3" class="submit">Send Message</button></div>
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>-->
                                        <!--                                        <div id="country3" class="tab-pane fade">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12">
                                                                                            <div class="contact-info">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-6">
                                                                                                        <strong><i class="fa fa-home"></i>ADDRESS</strong>
                                                                                                        <span>#8901 Marmora Road City, Vietnam</span>
                                                                                                    </div>
                                                                                                    <div class="col-md-6">
                                                                                                        <strong><i class="fa fa-envelope"></i>EMAIL ID</strong>
                                                                                                        <span>info@domainname.com</span>
                                                                                                    </div>
                                                                                                    <div class="col-md-6">
                                                                                                        <strong><i class="fa fa-phone"></i>PHONE NO</strong>
                                                                                                        <span>+00 035 835 282   /   +00 034 965 353</span>
                                                                                                    </div>
                                                                                                    <div class="col-md-6">
                                                                                                        <strong><i class="fa fa-link"></i>WEB ADDRESS</strong>
                                                                                                        <span>http://www.yourwebsite.com</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div> Contact Info 
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div></div>
                                                                                            <div class="col-sm-12 col-md-12">
                                                                                                <div class="alert alert-success success_msage ">
                                                                                                    <span></span>    
                                                                                                </div>
                                                                                                <div class="alert alert-danger error_msage ">
                                                                                                    <span></span>    
                                                                                                </div>
                                                                                            </div>
                                                                                            <form class="contact-form" id="home-email-form">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12"><input name="name" type="text" placeholder="Name" /></div>
                                                                                                    <div class="col-md-12"><input name="email" type="text" placeholder="Email" /></div>
                                                                                                    <div class="col-md-12"><textarea name="message" placeholder="Message"></textarea></div>
                                                                                                    <div class="col-md-12"><button type="submit" id="submit3" class="submit">Send Message</button></div>
                                                                                                </div>
                                                                                            </form>
                                        
                                                                                        </div>
                                                                                    </div>
                                                                                </div>-->
                                        <!--                                        <div id="country4" class="tab-pane fade">
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <div class="contact-info">
                                                                                                <h4>INSURANCE ASSOCIATION OF SRI LANKA</h4>
                                        
                                                                                                <div class="row">
                                                                                                    <div class="col-md-6">
                                                                                                        <strong><i class="fa fa-home"></i>ADDRESS</strong>
                                                                                                        <span>No. 143 A. Vajira Road,Colombo  05,Sri Lanka.</span>
                                                                                                    </div>
                                                                                                    <div class="col-md-6">
                                                                                                        <strong><i class="fa fa-envelope"></i>EMAIL ID</strong>
                                                                                                        <span>info@domainname.com</span>
                                                                                                    </div>
                                                                                                    <div class="col-md-6">
                                                                                                        <strong><i class="fa fa-phone"></i>PHONE NO</strong>
                                                                                                        <span>+94 11 5635582</span>
                                                                                                    </div>
                                                                                                    <div class="col-md-6">
                                                                                                        <strong><i class="fa fa-link"></i>WEB ADDRESS</strong>
                                                                                                        <span>http://www.yourwebsite.com</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div> Contact Info 
                                                                                        </div>
                                        
                                                                                    </div>
                                                                                </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <?php include './footer_menu.php'; ?>
        </footer>

    </div><!-- Theme Layout -->
    <!-- SCRIPTS-->
    <script type="text/javascript" src="js/modernizr.custom.17475.js"></script>
    <script src="js/jquery-2.1.4.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.poptrox.min.js" type="text/javascript"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>    
    <script src="js/jquery.scrolly.js"></script>
    <script src="js/enscroll-0.5.2.min.js"></script>
    <script src="js/jquery.knob.js"></script>
    <script src="js/select2.min.js"></script>
    <script>
                                                                    jQuery(document).ready(function ($) {
                                                                        /* ============ Sponsors Carousel ================*/
                                                                        $('.countries-contact ul').owlCarousel({
                                                                            autoplay: true,
                                                                            autoplayTimeout: 2500,
                                                                            smartSpeed: 2000,
                                                                            loop: false,
                                                                            dots: false,
                                                                            nav: true,
                                                                            margin: 0,
                                                                            mouseDrag: true,
                                                                            items: 5,
                                                                            autoHeight: true,
                                                                            responsive: {
                                                                                0: {items: 1},
                                                                                480: {items: 1},
                                                                                768: {items: 3},
                                                                                1200: {items: 5},
                                                                            }
                                                                        });


                                                                        /* ============ Sponsors Carousel ================*/
                                                                        $('.sponsors-carousel').owlCarousel({
                                                                            autoplay: true,
                                                                            autoplayTimeout: 2500,
                                                                            smartSpeed: 2000,
                                                                            loop: true,
                                                                            dots: false,
                                                                            nav: true,
                                                                            margin: 10,
                                                                            mouseDrag: true,
                                                                            items: 5,
                                                                            autoHeight: true,
                                                                            responsive: {
                                                                                0: {items: 1},
                                                                                480: {items: 2},
                                                                                768: {items: 3},
                                                                                1200: {items: 5},
                                                                            }
                                                                        });

                                                                        /*================== Map =====================*/
                                                                        function initialize() {
                                                                            var myLatlng = new google.maps.LatLng(6.890744, 79.857644);
                                                                            var mapOptions = {
                                                                                zoom: 18,
                                                                                disableDefaultUI: true,
                                                                                scrollwheel: false,
                                                                                center: myLatlng
                                                                            }
                                                                            var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                                                                            var image = 'images/icon.png';
                                                                            var myLatLng = new google.maps.LatLng(6.890744, 79.857644);
                                                                            var beachMarker = new google.maps.Marker({
                                                                                position: myLatLng,
                                                                                map: map,
                                                                                icon: image
                                                                            });

                                                                        }
                                                                        google.maps.event.addDomListener(window, 'load', initialize);


                                                                    });
    </script>	

    <!--mail sender-->
    <script type="text/javascript">

        function sentMessage() {

            //event.preventDefault();
            var query = $('#home-email-form').serialize();
            // alert(query);
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: query,
                success: function (msg) {
                    //alert(msg);
                    if (msg=='Sent') {
                        $('.success_msage').addClass('alert-success');
                        $('.success_msage').removeClass('hide');
                        $('.success_msage').slideDown();
                        $('.success_msage span').html("Successfully sent mail.");
                        $('.success_msage').delay(4000).slideUp();
                    }

                }
            });

//            $.ajax({
//                url: 'mail33.php',
//                type: 'POST',
//                dataType: 'json',
//         
//                success: function (responce) {
//                    alert(responce);
//                    if (responce.status == 'success') {
//
//                        $('.success_msage').addClass('alert-success');
//                        $('.success_msage').removeClass('hide');
//                        $('.success_msage').slideDown();
//                        $('.success_msage span').html(responce.msg);
//                        $('.success_msage').delay(4000).slideUp();
//                    }
//                    else {
//
//                        $('.error_msage').addClass('alert-danger');
//                        $('.error_msage').removeClass('hide');
//                        $('.error_msage').slideDown();
//                        $('.error_msage span').html(responce.msg);
//                        $('.error_msage').delay(4000).slideUp();
//                    }
//                }
//            });
        }

    </script>
    <script src="js/script.js"></script> 
</body>