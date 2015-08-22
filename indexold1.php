<?php 
include("connection.php");
$rs_page=mysql_fetch_array(mysql_query("select * from page where page_name= 'index'"));
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
<!--End-top-nav-script-->
</head>
<body>
<!--start-header-->
	<div class="header" id="home">
		<div class="container">
			<div class="header-mian">
			<div class="head">
				<div class="logo">
					<a href="index.html">
                    <img src="images/RefMech.png" width="200" height="60" alt="" />
                   <!-- <span style="color:#FFF; font-size:30px; font-family:Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', sans-serif; font-style:italic;">Ref Mech Engineering</span>--></a>
				</div>
				<div class="call">
					<ul>
						<li><p>CALL +91-7065523222</p></li>
						<li><p class="msg"><a href="#"><img src="images/msg.png" alt=""/></a></p></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="navigation">
				<div class="nav-shadow"> 
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
		</div>	
	<!-- script-for-menu -->
		 <script>
				$("span.menu").click(function(){
					$(" ul.navig").slideToggle("slow" , function(){
					});
				});
		 </script>
	<!-- script-for-menu -->
	<!--start-banner-->
	<div class="banner">
		<div class="container">
			<div class="banner-mian">
				<div class="banner-top">
					<h1>WE OFFER THE ENGINEERING PRODUCT THAT HELPS ENGINEERING SERVICES</h1>
				</div>
				<div class="banner-bottom">
					<div class="banner-left">
						<div class="b-left">
							<p><span>1</span>WE <label>CONNECT</label> TO YOUR SYSTEM</p>
							<p><span>2</span>WE <label>CHECK</label> THE PROBLEM</p>
							<p><span>3</span>WE <label>RESOLVE</label> YOUR SYSTEM</p>
						</div>
						<div class="tool">
							<a class="tooltips" href="#">
								</a>
						</div>
					</div>
					<div class="banner-right">
						<img src="images/ad.jpg" alt="" width="387" height="270"/>
						<span></span>					</div>
				  <div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!--end-banner-->
	<!--start-need-->
	<div class="need">
		<div class="container">
			<div class="need-mian">
				<div class="col-md-9 need-left">
					<h3>Do You Need a Quick Help?</h3>
					<p style="font-size:20px; font-style:italic;">Fill The Enquiry Form And You Can Call On This Contact No. 011-2457736</p>
				</div>
				<div class="col-md-3 need-right">
					<a href="#">Get Now!</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--end-need-->	
	<!--start-resolve-->	
	<div class="resolve">
		<div class="container">
			<div class="resolve-main">
				<div class="col-md-8 resolve-left">
					<h3>Our Products</h3>
					<div class="resolve-bottom">
						<div class="col-md-4 res-left">
							<div class="res-one">
								<h4><?php echo $rs_page['refactory_text'];?></h4>
                                <a href="#"><a href="#"><a href="#"></a><a href="#"><img src="images/img/<?php echo $rs_page['refactory_img'];?>" alt="image" width="196" height="103" /></a>
                              <p style="text-align:justify;"> <?php echo $rs_page['refactory_content'];?></p>
							</div>
						</div>
						<div class="col-md-4 res-left">
							<div class="res-one">
								<h4><?php echo $rs_page['ceremic_text'];?></h4>
                                <a href="#"><a href="#"><a href="#"></a><a href="#"><img src="image/<?php echo $rs_page['ceremic_img'];?>" alt="image" width="196" height="103" /></a>
								<p style="text-align:justify;"><?php echo $rs_page['ceremic_content'];?></p>
							</div>
						</div>
						<div class="col-md-4 res-left">
							<div class="res-one">
								<h4><?php echo $rs_page['thermal_text'];?></h4>
                                <a href="#"><a href="#"><a href="#"></a><a href="#"><img src="images/img/thermal/<?php echo $rs_page['thermal_img'];?>" alt="image" width="196" height="103" /></a>
							  <p style="text-align:justify;"><?php echo $rs_page['thermal_content'];?><br><br></p>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-4 resolve-right">
					<h3> Support/Service</h3>
					<div class="res-two-mian">
						<div class="res-two">
							<div class="res-two-left">
								<p>1</p>
							</div>
							<div class="res-two-right">
								<p><?php echo $rs_page['support_content1'];?></p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="res-two">
							<div class="res-two-left">
								<p>2</p>
							</div>
							<div class="res-two-right">
								<p><?php echo $rs_page['support_content2'];?> </p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="res-two">
							<div class="res-two-left res-1">
								<p>3</p>
							</div>
							<div class="res-two-right res-2">
								<p><?php echo $rs_page['support_content3'];?> </p>
								<div class="r-btn">
									<a href="#">Read more</a>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--end-resolve-->	
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