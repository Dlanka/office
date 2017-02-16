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
                    <h2>News & Event Detail</h2>
                    <ul>
                        <li><a itemprop="url" href="index.php" title="">Home</a></li>
                        <li><a itemprop="url" href="events.php" title="">News & Events</a></li>
                        <li>Life Insurance Industry Awards 2015</li>
                    </ul>
                </div><!-- Page Title -->
            </div>
        </div><!-- Page Top -->

        <section itemscope itemtype="http://schema.org/Event">
            <div class="block gray">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 column">
                            <div class="blog-detail-page">
                                <div class=" post-intro">
                                    <!--<img itemprop="image" src="images/news/ameneded/amended-1170x400.jpg" alt="" />-->
                                    <h3 class="post-title" itemprop="name">Life Insurance Industry Awards 2015</h3>
                                    <!--                                <h5></h5>-->
<!--                                    <h4 itemprop="name">Life Insurance Industry Awards 2015</h4>-->
                                    <div class="event-org">
                                        <!--<h4>Awareness Campaign</h4>-->
                                    </div> 
                                    
                                    <img src="images/news/industry-2105/industry-awards-2015.pdf">
                                    <a target="_blank" href="images/news/industry-2105/industry-awards-2015.pdf">read more</a>

                                </div><!-- Blog Detail -->
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
    <script src="js/enscroll-0.5.2.min.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/jquery.knob.js"></script>
    <script src="js/script.js"></script> 
</body>
