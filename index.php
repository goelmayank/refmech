<?php 
include("connection.php");
$rs_page=mysql_fetch_array(mysql_query("select * from page where page_name= 'index'"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Refmech Engineering</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="blueberry.css" />
	<script src="js/jquery-1.11.0.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic' rel='stylesheet' type='text/css'>
	<!-- start-smoth-scrolling-->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script src="jquery.blueberry.js"></script>
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
	<script>
		$(window).load(function() {
			$('.blueberry').blueberry();
		});
	</script>
	<style type="text/css">

/* {
	margin: 0;
	border: 0;
	padding: 0;
}
body {
	background: #f0f0f0;
	font: 14px/20px Arial, San-Serif;
	color: #404040;
}
a { color: #264c99; text-decoration: none; }
a:hover { text-decoration: underline; }

h1,h2,h3,h4,p { margin-bottom: 20px; }
h1 {
	font-size: 48px;
	line-height: 60px;
	color: #ffffff;
	text-transform: lowercase;
}
h2, h3 {
	font-weight: normal;
	font-size: 22px;
	line-height: 40px;
	color: #808080;
}
h3 { font-size: 18px; color: #404040; }
h5 { font-weight: bold; font-size: 14px; color: #000; }

#header {
	height: 60px;
	padding-top: 20px; padding-bottom: 20px;
	text-align: center;
	background: #405580;
}
#header h1 {
	margin: 0 auto;
	min-width: 740px;
	max-width: 1140px;
}
#doc { margin: 40px 0; }
#content {
	margin: 0 auto;
	min-width: 740px;
	max-width: 1140px;
}*/

.blueberry { max-width: 400px; }


</style>
<style>
	.carousel-inner > .item > img,
	.carousel-inner > .item > a > img {
		height: 345px !important;
		margin: auto;
	}
</style>
<!--End-top-nav-script-->
</head>
<body>
	<!--start-header-->

	<?php 
	include('header.php');
	?>
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
				<!-- <div class="col-md-4" style="margin-top:60px;">
					<div class="blueberry">
						<ul class="slides">
							<li><img src="ceremic fibre anchors/superthumb.jpg" height="460" /></li>
							<li><img src="ceremic fibre anchors/sliderimage5.jpg" height="460"/></li>
							<li><img src="ceremic fibre anchors/sliderimage2.jpg" height="460"/></li>
							<li><img src="ceremic fibre anchors/sliderimage2.jpg" height="460"/></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4" style="margin-top:60px;">
					<div class="blueberry">
						<ul class="slides">
							<li><img src="burner & accessiories/slider6.jpg" height="460"/></li>
							<li><img src="burner & accessiories/slider3.jpg" height="460"/></li>
							<li><img src="burner & accessiories/slider4.jpg" height="460"/></li>
							<li><img src="burner & accessiories/slider5.jpg" height="460"/></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4" style="margin-top:60px;">
					<div class="blueberry">
						<ul class="slides">
							<li><img src="Refactory Anchor/slider1.jpg" height="460"/></li>
							<li><img src="Refactory Anchor/slider2.jpg" height="460"/></li>

							<li><img src="Refactory Anchor/Stainless_Steel_Pipe_Fittings.jpg" height="460"/></li>
							<li><img src="Refactory Anchor/slider5.jpg" height="460"/></li>
						</ul>
					</div>
				</div> -->
				<br>
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">

						<div class="item active">
							<img class="img-responsive" src="ceremic fibre anchors/superthumb.jpg" alt="ceremic fibre anchors" height="345">
							<div class="carousel-caption">
								<h3>ceremic fibre anchors</h3>
								<!-- <p>The atmosphere in Chania has a touch of Florence and Venice.</p> -->
							</div>
						</div>

						<div class="item">
							<img class="img-responsive" src="burner & accessiories/slider6.jpg" alt="Chania" height="345">
							<div class="carousel-caption">
								<h3>burner & accessiories</h3>
								<!-- <p>The atmosphere in Chania has a touch of Florence and Venice.</p> -->
							</div>
						</div>

						<div class="item">
							<img class="img-responsive" src="Refactory Anchor/slider1.jpg" alt="Flower" height="345">
							<div class="carousel-caption">
								<h3>Refactory Anchor</h3>
								<!-- <p>Beatiful flowers in Kolymbari, Crete.</p> -->
							</div>
						</div>

						<div class="item">
							<img class="img-responsive" src="Refactory Anchor/slider5.jpg" alt="Flower" height="345">
							<div class="carousel-caption">
								<h3>Refactory Anchor</h3>
								<!-- <p>Beatiful flowers in Kolymbari, Crete.</p> -->
							</div>
						</div>

					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
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