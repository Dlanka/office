<!DOCTYPE html>
<html lang="en">
    <head>
        <title>KINGSLOG</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--fonts link--> 
        <link href='https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
        <!--boostrap css-->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--main css-->
        <link href="css/style.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
        <!--header--> 
        <header class="header">           
            <nav class="navbar"> 
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="index.php"><img class="logo" src="images/logo.svg" alt="Logo"/></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">

                            <li class="active"><a href="index.php">Home</a></li>
                            <li class="active"><a href="kingslog.php">Kingslog</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="maritime_consultancy.php">Maritime Consultancy</a></li>
                                    <li><a href="freight_services.php">Freight Services</a></li>                                
                                    <li><a href="warehouse_management.php">Warehouse management</a></li>
                                    <li><a href="project_cargo_management.php">Project cargo management</a></li>
                                </ul>
                            </li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="news.php">News</a></li>
                            <li><a href="#contact_info">Contact Us</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
        </header>

        <!--banner--> 
        <section class="banner">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ol class="carousel-indicators">

                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>

                </ol>
                <div class="carousel-inner" role="listbox">

                    <div class="item active">  
                        <div class="banner-img baner-1">
                            <div class="banner-text">
                                <h1>We keep your supply chain</h1>
                                <p>moving with competitive edges than others</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">  
                        <div class="banner-img baner-2">
                            <div class="banner-text">
                                <h1>We keep your supply chain</h1>
                                <p>moving with competitive edges than others</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--middle--> 
        <section class="block" id="why-kings">
            <div class="container">

                <div class="col-md-12">
                    <div class="row">
                        <div class="why-kingslog" >
                            <h1 class="with-border">KINGSLOG</h1>
                            <p>Being a provider of various supply means, KINGSLOG is engaged in multi-disciplinary modes of business such as Maritime Consultancy, Transportation Solutions, Forwarding and Clearing, Maritime and International Trade Legal Services, Multi Modal Transport Solutions, Marine Insurance Advice, Logistics and Warehousing, Flag Maintenance, Ship Crewing and Recruitment, Ship Chartering, Ship Supply Services, Ship Mortgage and Financial Advice...</p>
                            <a class="read-more" href="kingslog.php">Read more...</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!--service--> 
        <section class="block service" >
            <div class="container">
                <!--                <div class="block-inner">-->
                <div class="col-lg-12">
                    <div class="service-content">
                        <div class="row">
                            <h1 class="with-border">Services</h1>
                        </div>
                        <div class="row serv-row">
                            <div class="col-xs-12 col-md-6 item-border">
                                <div class="row">
                                    <a href="maritime_consultancy.php#consultancy">
                                        <div class="service-item">
                                            <span class="service-icon icon-conculcy"></span>                                                                                          
                                            <h4>Maritime Consultancy</h4>
                                            <p>A leading maritime lawyer with over 18 years in practice in Sri Lanka having completed his Bar exam in 1995.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6 item-border">
                                <div class="row">
                                    <a href="freight_services.php">
                                        <div class="service-item">
                                            <span class="service-icon icon-freight"></span>                                            
                                            <h4>Freight Services</h4>
                                            <p>KINGSLOG handles the shipment of freight across several carriers and modes of transport.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
<!--                            <div class="col-xs-12 col-md-4 item-border">
                                <div class="row">
                                    <a href="maritime_consultancy.php#insurance_advice">
                                        <div class="service-item">
                                            <span class="service-icon icon-insurance"></span>                                                                                           
                                            <h4>Marine Insurance Advice</h4>
                                            <p>Businesses operating in the marine industry face unique challenges from an unpredictable environment</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4 item-border">
                                <div class="row">
                                    <a href="maritime_consultancy.php#arbitration">
                                        <div class="service-item">
                                            <span class="service-icon icon-arbitations"> </span>                                          
                                            <h4>Maritime Arbitration</h4>
                                            <p>Maritime arbitration is an alternative means of handling conflicts, including shipping disputes, outside of the court system.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>-->
                        </div>
                        <div class="row serv-row">
                            
                            <div class="col-xs-12 col-md-6 item-border-right">
                                <div class="row">   
                                    <a href="warehouse_management.php">
                                        <div class="service-item">
                                            <span class="service-icon icon-warehouse"></span>                                            
                                            <h4>Warehouse management</h4>
                                            <p>KINGSLOG recognizes that a smooth running supply chain begins with the accurate receipt and secure storage of products and materials.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6 item-border-right">
                                <div class="row">
                                    <a href="project_cargo_management.php">
                                        <div class="service-item">
                                            <span class="service-icon icon-cargo"> </span>                                            
                                            <h4>Project cargo management</h4>
                                            <p>KINGSLOG provides specialized project cargo transportation services to shippers of heavy and over dimensional equipment. </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--</div>-->

            </div>
        </section>

        <!--footer-->
        <section class="footer" id="contact_info">
            <div class="map-content " id="mapContainer"> </div>         
            <div class="contact-info">
                <div class="container">
                    <div class="col-lg-10 col-lg-offset-1" id="contact_panel">
                        <div class="contact">
                            <h1 class="with-border">Get in touch<span class="btn_collapse" id="btn_hide"></span></h1>
                            <div class="contact-details">

                                <div class="col-xs-12 col-md-5 col-md-offset-1 ">
                                    <div class="alert alert-success success_msage hide">
                                        <span></span>    
                                    </div>
                                    <div class="alert alert-danger error_msage hide">
                                        <span></span>    
                                    </div>
                                    <form method="" action="" name="index" id="home-email-form">
                                        <input class="contact-input" type="text" placeholder="Name" name="name1" id="name1" required>
                                        <input class="contact-input" type="email" placeholder="Email" name="email1" id="email1" required>
                                        <textarea class="contact-input" placeholder="Message" name="message1" id="message1" required></textarea>
                                        <input type="submit" value="Send" class="contact-input">
                                    </form>
                                </div>
                                <div class="col-xs-12 col-md-4 col-md-offset-1 ">
                                    <div class="c-details">
                                        <span class="contact-icon"><img src="images/icon/address.svg" alt="" ></span>
                                        <p>KINGSLOG Supply Solutions (Pvt) Limited.<br>No 248, Thimbirigasyaya Road, Colombo 05, Sri Lanka.</p>
                                    </div>
                                    <div class="c-details">
                                        <span class="contact-icon"><img src="images/icon/call.svg" alt="" ></span>
                                        <p>+94 11 406 3307 - 8</p>
                                    </div>
                                    <div class="c-details">
                                        <span class="contact-icon"><img src="images/icon/fax.svg" alt="" ></span>
                                        <p>+94 11 205 5788</p>
                                    </div>
                                    <div class="c-details">
                                        <span class="contact-icon"><img src="images/icon/mail.svg" alt="" ></span>
                                        <a href="mailto:king@kingslog.com">king@kingslog.com</a>
                                    </div>
                                    <div class="c-details corporate ">
                                        <span class="contact-icon"><img src="images/icon/address.svg" alt="" ></span>
                                        <p>13/A-1,Tower 3, On three twenty ,<br>Union Place,Colombo 02.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="footer-section">
            <div class="footer-end">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="col-xs-12 col-md-6">
                                <p class="copy-right">&copy; 2015 KINGSLOG - All Rights Reserved - Solution By Infoseek</p>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div class="social-network">
                                    <p>Stay In Touch</p>
                                    <div class="social-icons">
                                        <span class="social-icon icon-facebook"></span>
                                        <span class="social-icon icon-in"></span>
                                        <span class="social-icon icon-twitter"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--jquary lib-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
        <!--bootstrap js-->
        <script src="js/bootstrap.min.js"></script>
        <!--map javascript file-->
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
            var myCenter = new google.maps.LatLng(6.919851, 79.859015);

            function initialize()
            {
                var mapProp = {
                    center: myCenter,
                    zoom: 17,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };

                var map = new google.maps.Map(document.getElementById("mapContainer"), mapProp);

                var marker = new google.maps.Marker({
                    position: myCenter,
                });

                marker.setMap(map);
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
        <!--scoller animation js-->
        <script>
            $(function () {
                $('a[href*=#]:not([href=#])').click(function () {
                    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        if (target.length) {
                            $('html,body').animate({
                                scrollTop: target.offset().top
                            }, 1000);
                            return false;
                        }
                    }
                });
            });

        </script>

        <!--email sender ajax js-->
        <script type="text/javascript">
            $("#home-email-form").submit(function (event) {
                event.preventDefault();
                var query = $('#home-email-form').serialize();
                //alert(query);
                $.ajax({
                    type: 'POST',
                    url: 'mail.php',
                   //dataType: 'json',
                    data: query,
                    success: function (responce) {
                        //alert(responce);
                        if (responce) {

                            $('.success_msage').addClass('alert-success');
                            $('.success_msage').removeClass('hide');
                            $('.success_msage').slideDown();
                            $('.success_msage span').html('Mail sent successful');
                            $('.success_msage').delay(4000).slideUp();
                        }
                        else {

                            $('.error_msage').addClass('alert-danger');
                            $('.error_msage').removeClass('hide');
                            $('.error_msage').slideDown();
                            $('.error_msage span').html('Mail not sent');
                            $('.error_msage').delay(4000).slideUp();
                        }
                    }
                });
            });

            $('#btn_hide').on('click', function () {
                //$(".contact-details").toggle();
//                $('.contact-details').animate({
//                    height: 'toggle'
//                }, 500
//                        );
                if ($(".contact-details").is(":hidden")) {
                    $(".contact-details").show("slow");
                    $(".btn_collapse").css('background-image','url(images/icon/btn_close.svg)');
                } else {
                     $(".btn_collapse").css('background-image','url(images/icon/btn_arrow_1.svg)');
                    $(".contact-details").slideUp();
                }
            });
        </script>
        <!--modernizr js-->
        <script src="js/modernizr.custom.47169.js"></script>

    </body>

</html>
