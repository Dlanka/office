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
			   jQuery(function(){
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
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
        <script type="text/javascript" src="js/jquery.lightbox.js"></script>
				    <link rel="stylesheet" type="text/css" href="css/lightbox.css" media="screen">
				  	<script type="text/javascript">
				    $(function() {
				        $('.menu-grid a').lightBox();
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
     		 				<li class="active"><a href="menus.php">our-menus</a></li>
     		 				<li><a href="services.php">Services</a></li>
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
                <form action="" method="post">
                    <input type="button" id="mnu" class="mnuactive" name="mnue" value="English Menus">
                    <input type="submit" id="mnu" class="mnu" name="mnus" value="Sinhala Menus">
                </form>
                <?php
				if(isset($_POST['mnus'])){
				header("Location: menus-sinhala.php");
				}
				?>
					<!--**************************************************************************************************-->
                    				<div class="gallerys">
					
					<div class="gallery-grids">
					  <div class="menu-grid">
						  <a href="images/menue/MENU-(1).jpg"><img src="images/menue/MENU-(1).jpg" width="250"></a>
						</div>
                        
						<div class="menu-grid">
							<a href="images/menue/MENU-(2).jpg"><img src="images/menue/MENU-(2).jpg" width="250"></a>
                         </div>
                         
                        <div class="menu-grid">
							<a href="images/menue/MENU-(3).jpg"><img src="images/menue/MENU-(3).jpg" width="250"></a>
                         </div>
                      <div class="clear"> </div>
				</div>
                
                
                <div class="gallery-grids">
						
                         <div class="menu-grid">
							<a href="images/menue/MENU-(4).jpg"><img src="images/menue/MENU-(4).jpg" width="250" alt=""></a>
                         </div>
                        
						<div class="menu-grid">
							<a href="images/menue/MENU-(5).jpg"><img src="images/menue/MENU-(5).jpg" width="250" alt=""></a>
                        </div>
                        
						<div class="menu-grid">
							<a href="images/menue/MENU-(6).jpg"><img src="images/menue/MENU-(6).jpg" width="250" alt=""></a>
                        </div>
                        <div class="clear"> </div>
				</div>
					
                  <div class="gallery-grids">
						
                         <div class="menu-grid">
							<a href="images/menue/Special.jpg"><img src="images/menue/Special.jpg" width="250" alt=""></a>
                         </div>
<!--                        
						<div class="menu-grid">
							<a href="images/MENU (3).png"><img src="images/MENU (3).png" width="250" alt=""></a>
                        </div>
                        
						<div class="menu-grid">
							<a href="images/MENU (3).png"><img src="images/MENU (3).png" width="250" alt=""></a>
                        </div>-->
                        
				</div>
				    
				</div>
					<!-----End-gallery----->
				<div class="clear"> </div>
				

                    <!--**************************************************************************************************-->
                </div>
            </div>
	

    <?php require_once("includes/footer.php"); ?>
</div>
	</body>
</html>

