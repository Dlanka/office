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
                    <h2>About Us</h2>
                    <ul>
                        <li><a itemprop="url" href="index.php" title="">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div><!-- Page Title -->
            </div>
        </div><!-- Page Top -->

        <section>
            <div class="block gray">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 column">
                            <div class="members">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>About Us</h3>
                                        <p>The Insurance Association of Sri Lanka (IASL) was formed in 1989 with the two states insurance corporations and the three private insurance companies then operated in Sri Lanka namely Sri Lanka Insurance Corporation, National Insurance Corporation, Ceylinco Insurance Company Ltd, CTC Eagle Insurance Company and Union Assurance Limited joining hands.</p>
                                        <p>Today the IASL has grown into a vibrant body, encompassing the 29 registered insurance companies in Sri Lanka.</p>
                                        <p>The Executive Committee of the IASL comprises all CEOs of insurance companies and meets on a monthly basis as per a fixed agenda covering significant matters and new developments pertaining to the industry.</p>
                                        <p>In addition, the following sub committees operate within the purview of the Executive Committee enabling cooperation, knowledge sharing and transfer of best practices between peers.</p>
                                        <div class="page-gallery " style="margin: 0">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <ul>
                                                        <li><i class="fa fa-dot-circle-o"></i>General Insurance Forum (GIF)</li>
                                                        <li><i class="fa fa-dot-circle-o"></i>Life Insurance Forum (LIF)</li>
                                                        <li><i class="fa fa-dot-circle-o"></i>Legal Advisory Forum (LAF)</li>
                                                        <li><i class="fa fa-dot-circle-o"></i>Finance Technical Sub Committee (FTSC)</li>
                                                        <li><i class="fa fa-dot-circle-o"></i>Marketing and Sales Forum (MSF)</li>
                                                        <li><i class="fa fa-dot-circle-o"></i>IT Sub Committee (ITSC)</li>                                                                                                               
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- Blog Detail -->
                                       
                                    </div>
                                </div>                            
                            </div><!-- Members -->
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <footer>
            <?php include './footer_menu.php';?>
        </footer>


    </div><!-- Theme Layout -->



    <!-- SCRIPTS-->
    <script type="text/javascript" src="js/modernizr.custom.17475.js"></script>
    <script src="js/jquery-2.1.4.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.poptrox.min.js" type="text/javascript"></script>
    <script src="js/jquery.scrolly.js"></script>
    <script src="js/jquery.knob.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/isotope-initialize.js"></script>
    <script src="js/jquery.plugin.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/enscroll-0.5.2.min.js"></script>

    <!-- Scripts For Layer Slider  -->
    <script src="layerslider/js/greensock.js" type="text/javascript"></script>
    <script src="layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
    <script src="layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>

    <script>
        jQuery(document).ready(function($) {
            /* ============ LAYER SLIDER ================*/
            jQuery("#layerslider").layerSlider({
                responsive: true,
                responsiveUnder: 1280,
                layersContainer: 1170,
                skin: 'fullwidth',
                hoverPrevNext: true,
                skinsPath: 'layerslider/skins/'
            });


            /* ============ Welfare Projects Carousel ================*/
            $('.welfare-projects-carousel').owlCarousel({
                autoplay: true,
                autoplayTimeout: 3000,
                smartSpeed: 3000,
                autoplayHoverPause: true,
                loop: true,
                dots: false,
                nav: false,
                margin: 0,
                mouseDrag: true,
                items: 4,
                autoHeight: true,
                responsive: {
                    0: {items: 1},
                    480: {items: 2},
                    768: {items: 3},
                    1200: {items: 4},
                }
            });


            /* ============ Sponsors Carousel ================*/
            $('.sponsors-carousel').owlCarousel({
                autoplay: true,
                autoplayTimeout: 1000,
                smartSpeed: 1000,
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




            /* ============ Count Down Timer ================*/
            $(function() {
                var date = new Date();
                date = new Date(2017, 4 - 1, 12);
                $('.count-down').countdown({until: date});
            });
            $(function() {
                var date2 = new Date();
                date2 = new Date(2016, 4 - 1, 12);
                $('.count-down2').countdown({until: date2});
            });

        });
    </script>	
    <script src="js/script.js"></script> 
</body>