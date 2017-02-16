<?php
if(isset($_POST['btnSend'])){
//userName userEmail userPhone userMsg
	$userName         = $_POST['userName'];
	$userEmail       = $_POST['userEmail'];
	$userPhone         = $_POST['userPhone'];
	$userMsg       = $_POST['userMsg'];
	
	$subject       = 'Message from web site';
	


	$details = 'Name: '.$userName.'\r\nEmail: '.$userEmail.'\r\nPhone: '.$userPhone.'\r\nMessage: '.$userMsg;
	$to = 'samancaterers@gmail.com';

	$headers  = 'From: '.$userEmail."\r\n";
    $headers .='Reply-To: '.$userEmail."\r\n" ;
    $headers .='X-Mailer: PHP/' . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";  
	$sent = mail($to, $subject, $details, $headers);
	
	if ($sent) {
		$return_value['status'] = 'success';
		$return_value['msg']    = 'Successfully sent mail.';
		$strMsg="Successfully sent mail.";
	}else{
		$return_value['status'] = 'error';
		$return_value['msg']    = 'Not sent mail.';
		$strMsg="Successfully sent mail.";
	}	
}
?>
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
     		 				<li ><a href="menus.php">our-menus</a></li>
     		 				<li ><a href="services.php">Services</a></li>
     		 				<li><a href="gallery.php">Gallery</a></li>
     		 				<li class="active"><a href="contact.php">Contact</a></li>
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
				<!-----start-contact----->
				<div class="contact">
				<div class="section group">				
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 	<h3>Find Us Here</h3>
			    	 		<div class="map">
					   			<iframe src="includes/map.php" frameborder="0" scrolling="no" width="100%" height="250"></iframe>
					   		</div>
      				</div>
      			<div class="company_address">
                
				     	<h3>Company Information :</h3>
						    	<p>Saman Function Furniture and Food Caterers,</p>
						   		<p>57/A, Lake road,</p>
						   		<p>Boralesgamuwa</p>
				   		<p>Phone:(+94) 71 478 2637</p>
				   		<p>Phone:(+94) 77 735 5006</p>
                        <p>Phone:(+94) 11 251 7247</p>
                        <p>Phone:(+94) 11 215 0206</p>
				 	 	<p>Email: <span>samancaterers@gmail.com</span></p>
				   		
				   </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Contact Us</h3>
					    <form method="post" action="">
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input name="userName" type="text" class="textbox" required></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="userEmail" type="email" class="textbox" required></span>
						    </div>
						    <div>
						     	<span><label>MOBILE</label></span>
						    	<span><input name="userPhone" type="text" class="textbox" required></span>
						    </div>
						    <div>
						    	<span><label>SUBJECT</label></span>
						    	<span><textarea name="userMsg" required> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="Submit" name="btnSend"></span>
						  </div>
                          <div>
                          <?php if(!empty($strMsg)){
									  echo $strMsg;
									  $strMsg="";
						  		}
							?>
                          </div>
					    </form>

				    </div>
  				</div>				
			  </div>
			</div>
				<!-----End-contact----->
				<div class="clear"> </div>
			<!---End-content---->
		</div>
		<!---End-wrap---->
		</div>

    <?php require_once("includes/footer.php"); ?>
</div>
	</body>
</html>

