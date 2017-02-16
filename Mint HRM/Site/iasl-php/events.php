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


        <!-- Popup -->

        <div class="page-top gray">
            <div class="container">
                <div class="page-title">
                    <div data-velocity="-.4" style="" class="parallax scrolly-invisible"></div><!-- PARALLAX BACKGROUND IMAGE -->			
                    <h2>Industry News &AMP; Events</h2>
                    <ul>
                        <li><a itemprop="url" href="index.php" title="">Home</a></li>
                        <li>Industry News &AMP; Events</li>
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
                                        <div class="event-date"><strong>10</strong>May 15</div>
                                        <div class="event-bar">
                                            <div class="col-xs-12">
                                                <h3 class="news-title"><a  target="_blank" itemprop="url" href="event-general_insurance_sales_congress.php" title=""> Sri Lanka's First General Insurance Sales Congress to be held in May </a></h3>
                                            </div>
                                        </div>
                                    </div><!-- Event Toggle -->
                                    <div class="event-toggle">
                                        <div class="event-date"><strong>17</strong>Dec, 15</div>
                                        <div class="event-bar">
                                            <div class="col-xs-12">
                                                <h3 class="news-title"><a  target="_blank" itemprop="url" href="images/news/industry-2105/industry-awards-2015.pdf" title="">Life Insurance Industry Awards 2015</a></h3>
                                            </div>
                                        </div>
                                    </div><!-- Event Toggle -->
                                    <div class="event-toggle">
                                        <div class="event-date"><strong>04</strong>Dec, 15</div>
                                        <div class="event-bar">
                                            <div class="col-xs-12">
                                                <h3 class="news-title"><a itemprop="url" href="event-details-llife_insurance_awareness.php" title="">IASL recognizes Top Achievers  of "Life Insurance Awareness Month" Campaign</a></h3>
                                            </div>
                                        </div>
                                    </div><!-- Event Toggle -->
                                    <div class="event-toggle">
                                        <div class="event-date"><strong>01</strong>Sep, 15</div>
                                        <div class="event-bar">
                                            <div class="col-xs-12">
                                                <h3 class="news-title"><a itemprop="url" href="event-details-insurance-association.php" title="">The Insurance Association of Sri Lanka (IASL) launches Life Insurance Month 1st to 30th September 2015</a></h3>
                                            </div>
                                        </div>
                                    </div><!-- Event Toggle -->
                                    
                                    <div class="event-toggle">
                                        <div class="event-date"><strong>01</strong>Sep, 15</div>
                                        <div class="event-bar">
                                            <div class="col-xs-12">
                                                <h3 class="news-title"><a itemprop="url" href="event-detail-city-cover.php" title="">Covering 15 Cities in 30 Days</a></h3>
                                            </div>
                                        </div>
                                    </div><!-- Event Toggle -->
                                    
                                    <div class="event-toggle">
                                        <div class="event-date"><strong>04</strong>Aug, 15</div>
                                        <div class="event-bar">
                                            <div class="col-xs-12">
                                                <h3 class="news-title"><a itemprop="url" href="event-detail-post-enevt.php" title="">NAFLIA unites life insurers to launch national awareness campaign</a></h3>
                                            </div>
                                        </div>
                                    </div><!-- Event Toggle -->

                                    <div class="event-toggle">
                                        <div class="event-date"><strong>24</strong>July, 15</div>
                                        <div class="event-bar">
                                            <div class="col-xs-12">
                                                <h3 class="news-title"><a itemprop="url" href="event-detail-amended.php" title="">National Forum for Life Insurance Advisors on August 4</a></h3>
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
