<?php
include("connection.php");
$sql=mysql_query("select * from page where page_name='about'");
$res=mysql_fetch_array($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Refmech Engineering</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<script src="js/jquery-1.11.0.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic' rel='stylesheet' type='text/css'>
	<!-- start-smoth-scrolling-->
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
		.chooseus
		{
			color:#000;
			font-size:16px;
			
		}
		.chooseus ul li
		{
			padding-bottom:10px;
		}


	</style>
	<!--End-top-nav-script-->
</head>
<body>
	<!--start-header-->
	<div class="header" id="home">
		<div class="container">
			<div class="header-mian">
				<div class="head">
					<div class="logo">
						<a href="index.html"><a href="index.html"><img src="images/RefMech.png" width="200" height="60" alt="" /></a></a>
						<!-- <span style="color:#FFF; font-size:30px; font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; font-style:italic;">Ref Mech Engineering</span>--></a>
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
	<!--start-about-->
	<div class="about">
		<div class="container">
			<?php echo $res['content'];?>
			<!--<div class="about-main">
				<h3>Know Us</h3>
				<div class="about-top">
					<div class="col-md-4 about-left">
						<img src="images/asn.jpg" alt="" height="270px" />					</div>
			  <div class="col-md-8 about-right">
						<h4>Welcome to Refmech Engineering</h4>
						<p>Recognized as a leader in the field of manufacturing quality products for Furnace, Circuit Plant, Refineries, and Rolling Mills, we, Refmech Engineering, have developed a strong presence in the global market. Incepted in 2004, we focus on undertaking all our processes with utmost care and precision. Known as a renowned manufacturer, exporter, supplier and trader of the industry, we have immense expertise in executing bulk orders within the given time frame. The product range offered by us includes Refractory Anchor, Modulor Anchor, Furnace Anchors, Furnace Parts, Anchor for Cold Rolling Mills, Heating Element, Latches, Thermocouple, Ceramic Thermocouple, Industrial Thermocouple, Furnace Part, etc. All these are exported to Africa, UK, US, Asian Countries, Middle East, and Latin America. </p>
						
					</div>
					<div class="clearfix"></div>
				</div>
			</div>-->
		</div>
	</div>
	<!--end-about-->
	<!--start-team-->
	<div class="team">
		<div class="container">
			<div class="team-main">
				<h3>Product</h3>
				<div class="team-top">
					<div class="col-md-3 team-left">
						<img src="image/insul-prod-anchor_img037-250x250.jpg" alt="" />
						<div class="team-bottom">
							<h4>Stud &amp; Twist Washer</h4>
							<!--<p>Fusce et nibh eget odio cursus consectetur</p>-->
						</div>
					</div>
					<div class="col-md-3 team-left">
						<img src="images/img/Refactory/Ceremax anchor.jpg" alt="" />
						<div class="team-bottom">
							<h4>Ceremax anchor</h4>
							<!--<p>Fusce et nibh eget odio cursus consectetur</p>-->
						</div>
					</div>
					<div class="col-md-3 team-left">
						<img src="images/img/Refactory/corbel-uv-anchor1-250x250.jpg" alt="" />
						<div class="team-bottom">
							<h4>Refactory</h4>
							<!--<p>Fusce et nibh eget odio cursus consectetur</p>-->
						</div>
					</div>
					<div class="col-md-3 team-left">
						<img src="images/img/Refactory/insul-prod-anchor_img038-250x250.jpg" alt="" />
						<div class="team-bottom">
							<h4>Refractory Anchors</h4>
							<!--<p>Fusce et nibh eget odio cursus consectetur</p>-->
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!--end-team-->
	<!--start-choose-->
	<div class="choose">
		<div class="container">
			<?php echo $res['content_two'];?>
			<!--<div class="choose-main">
				<h3 style=" padding-left:380px;display:inline;">Why Choose Us</h3>
                	<h3 style=" padding-right:30px;display:inline;float:right">Products We Offer</h3>
				<div class="choose-top">
					<div class="col-md-4 choose-left">
						<img src="images/ad.jpg" alt="" height="230px;"/>					</div>
			  <div class="col-md-5  chooseus">
              <ul class="">
              <li>Sound industry knowledge</li>
              <li>Excellent manufacturing facilities</li>
              <li>Team of highly qualified professionals</li>
              <li>Close monitoring of all the processes</li>
              <li>Premium quality at competitive rate</li>
              <li>On-time delivery system</li>
              <li>Wide distribution network.</li>
          </ul>-->
						<!--<p>At Refmech we manufacture and supply products and components including refractory anchors, hexagonal mesh, ceramic fibre fixings and stainless steel reinforcing fibres, paddle & pan mixers and dust extractor machines. We also source a range of market leading gunning, pumping and grouting concrete equipment, stud welding equipment and supplies as well as a full range of passive fire proofing products, cable management trays and cable and pipe sealing systems.</p>
						<p> Effective from September 2nd, 2013, Refmech has acquired the OneSteel Building Services business. </p>-->
						
					<!--</div>
					<div class="col-md-3 chooseus">
                    
                    
						<ul>
							<li>Refractory Anchor</li>
							<li>Modulor Anchor</li>
                            <li>Anchor for Cold Rolling Mills</li>
                            <li>Furnace Anchor</li>
                            <li>Heating & Pumping Unit</li>
                            <li>Anchors</li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>-->
		</div>
	</div>
	<!--end-choose-->
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
				<p>Copyright  2015 <a href="#">Refmech Engineering Pvt ltd.</a></p>
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