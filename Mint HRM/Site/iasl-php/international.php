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


        <div class="popup">
            <div class="popup-centre">
                <div class="signup-form popup-form">
                    <span class="close-btn"><i class="fa fa-remove"></i> Close</span>
                    <strong>JOIN FOR <span>DONATION</span></strong>
                    <p>Quis autem velum iure reprehe nderit. Lorem ipsum dolor sit nulla or narjusto laoreet onse ctetur adipisci.</p>
                    <form>
                        <div class="row">
                            <div class="col-md-12"><input type="text" placeholder="First Name" /></div>
                            <div class="col-md-12"><input type="text" placeholder="Last Name" /></div>
                            <div class="col-md-12"><input type="email" placeholder="youremail@yourdomain.com" /></div>
                            <div class="col-md-12"><input type="password" placeholder="Password" /></div>
                            <div class="col-md-12"><p>By creating an account, you agree to our <a itemprop="url" href="#" title="">Terms & Conditions.</a></p></div>
                            <div class="col-md-12"><input type="submit" value="Create Account" /></div>
                        </div>
                    </form>
                </div><!-- Sign Up Form -->
                <div class="login-form popup-form">
                    <span class="close-btn"><i class="fa fa-remove"></i> Close</span>
                    <strong>LOGIN FOR <span>DONATION</span></strong>
                    <p>Quis autem velum iure reprehe nderit. Lorem ipsum dolor sit nulla or narjusto laoreet onse ctetur adipisci.</p>
                    <form>
                        <div class="row">
                            <div class="col-md-12"><input type="email" placeholder="youremail@yourdomain.com" /></div>
                            <div class="col-md-12"><input type="password" placeholder="Password" /></div>
                            <div class="col-md-12"><p><a itemprop="url" href="#" title="">Forget Password</a></p></div>
                            <div class="col-md-12"><input type="submit" value="LOG IN" /></div>
                        </div>
                    </form>
                </div><!-- Sign Up Form -->
            </div>
        </div><!-- Popup -->

        <div class="page-top gray">
            <div class="container">
                <div class="page-title">
                    <div data-velocity="-.4" style="" class="parallax scrolly-invisible"></div><!-- PARALLAX BACKGROUND IMAGE -->			
                    <h2>International Recognition</h2>
                    <ul>
                        <li><a itemprop="url" href="index.php" title="">Home</a></li>
                        <li>International Recognition</li>
                    </ul>
                </div><!-- Page Title -->
            </div>
        </div><!-- Page Top -->



        <section>
            <div class="block gray">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 column">
                            <div class="charity-events">
                                <div class="events">

                                    <div class="event-toggle">
                                        <div class="event-date"><strong>01</strong></div>
                                        <div class="event-bar">
                                            <div class="col-xs-12">
                                                <h3 class="news-title"><a itemprop="url" href="asia_insurance_awards.php" title="">Asian Alliance clinches coveted Asia Insurance Award for 'Innovation of the year'</a></h3>
                                            </div>
                                        </div>
                                    </div><!-- Event Toggle -->
                                    
                                    <div class="event-toggle">
                                        <div class="event-date"><strong>02</strong></div>
                                        <div class="event-bar">
                                            <div class="col-xs-12">
                                                <h3 class="news-title"><a itemprop="url" href="international_recognition.php" title="">Ceylinco Life is World Finance's 'Best Life Insurer in Sri Lanka' for second year</a></h3>
                                            </div>
                                        </div>
                                    </div><!-- Event Toggle -->
                                    
                                 
                                </div>
                            </div><!-- Charity Event -->

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
    <script src="js/jquery.poptrox.min.js" type="text/javascript"></script>
    <script src="js/jquery.scrolly.js"></script>
    <script src="js/jquery.plugin.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/enscroll-0.5.2.min.js"></script>
    <script src="js/jquery.knob.js"></script>
    <script src="js/select2.min.js"></script>

    <script>
        jQuery(document).ready(function ($) {
            /* ============ Count Down Timer ================*/
            $(function () {
                var date = new Date();
                date = new Date(2016, 5 - 1, 16);
                $('.count-down1').countdown({until: date});
            });
            $(function () {
                var date = new Date();
                date = new Date(2017, 4 - 1, 12);
                $('.count-down2').countdown({until: date});
            });
            $(function () {
                var date = new Date();
                date = new Date(2016, 12 - 1, 25);
                $('.count-down3').countdown({until: date});
            });
            $(function () {
                var date = new Date();
                date = new Date(2016, 2 - 1, 15);
                $('.count-down4').countdown({until: date});
            });
            $(function () {
                var date = new Date();
                date = new Date(2016, 2 - 1, 15);
                $('.count-down5').countdown({until: date});
            });
            $(function () {
                var date = new Date();
                date = new Date(2016, 2 - 1, 15);
                $('.count-down6').countdown({until: date});
            });
        });
    </script>	
    <script src="js/script.js"></script> 
</body>
