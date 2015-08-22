

<!DOCTYPE html>
<html>
<head>
<title>Refmech Engineering </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<script src="js/jquery-1.11.0.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic' rel='stylesheet' type='text/css'>
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!--start-smoth-scrolling-->
<!--start-top-nav-script-->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
        <style>
      #map_canvas {
        width: 500px;
        height: 500px;
		float:right;
		margin:10px
      }
    </style>

 <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script>
      function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
          center: new google.maps.LatLng(28.6318939, 77.27989409999998),
          zoom: 16,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
<!--End-top-nav-script-->
</head>
<body>
<!--start-header-->
	<div class="header" id="home">
		<div class="container">
			<div class="header-mian">
			<div class="head">
				<div class="logo">
					<a href="index.html"><img src="images/RefMech.png" width="200" height="60" alt="" /></a>
                    <!--<span style="color:#FFF; font-size:30px; font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; font-style:italic;">Ref Mech Engineering</span>-->
				</div>
				<div class="call">
					<ul>
						<li><p>+91-7065523222</p></li>
						<li><p class="msg"><a href="#"><img src="images/msg.png" alt=""/></a></p></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="navigation">
				 	<span class="menu"></span> 
					<ul class="navig">
						<li><a href="index.php">HOME</a></li>
						<li><a href="about.php">ABOUT</a></li>
                      	
						<li><a href="product.php">PRODUCT</a></li>
						<li><a href="#">SERVICES</a></li>
					<li><a href="companyprofile.php">COMPANY PROFILE</a></li>  	
						<li><a href="contact.php">CONTACT</a></li>
						
					</ul>
				</div>
				</div>
			</div>
		</div>	
	<!-- script-for-menu -->
		 <script>
				$("span.menu").click(function(){
					$(" ul.navig").slideToggle("slow" , function(){
					});
				});
		 </script>
	<!-- script-for-menu -->
	<!--start-contact-->
	<div class="contact">
		<div class="container">
			<div class="contact-main">
				<h3>Contact Us</h3>
				<div class="contact-top">
					<div class="col-md-6 contact-top-left">
					
                    <div id="map_canvas"></div>	<!--<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d31085.222516274745!2d77.60788050000001!3d13.121167000000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1small+near+Road%2C+Yelahanka+Airforce+Base%2C+Bengaluru%2C+Karnataka!5e0!3m2!1sen!2sin!4v1420458959901" frameborder="0" style="border:0"></iframe>-->
					</div>
					<div class="col-md-6 contact-top-right">
						<div class="contact-txt">
							<input type="text" value="First Name" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'First Name';}"/>
							<input type="text" value="Second Name" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Second Name';}"/>
							<input type="text" value="Email Id" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Email Id';}"/>
						</div>
						<div class="contact-textarea">
							<textarea value="Message:" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Message';}">Message..</textarea>
						</div>
						<div class="contact-but">
							<form>
								<input type="submit" value="SUBMIT" >
								<input type="submit" value="CLEAR" >
							</form>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!--end-contact-->		
	<!--start-footer-->	
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-3 footer-top-left ftr-one">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="services.html">Services</a></li>
						
						
						<li><a href="about.html">About</a></li>
						<li><a href="contact.html">Contact</a></li>
						
						<li><a href="product.html">Product</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-top-left ftr-two">
					<ul>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Terms of Use</a></li>
						<li><a href="#">Disclaimer</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-top-left ftr-tre">
					<ul>
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Twitter</a></li>
						<li><a href="#">You Tube</a></li>
						<li><a href="#">Our Blog</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-top-left">
					<p>000.123.4567</p>
					<a href="mailto:example@email.com">info@refmech.com</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--end-footer-->	
	<!--start-footer-bottom-->	
	<div class="footer-bottom">
		<div class="container">
			<div class="footer-text">
				<p>Copyright  2015 <a href="#">Refmech Engineering Pvt ltd.
			</div>
		</div>
		<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
	<!--end-footer-bottom-->				 
</body>
</html>