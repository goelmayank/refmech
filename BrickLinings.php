<?php
include("connection.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Refmech Engineering</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
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
		<!--start-pricing-->	
		<div class="price">
			<div class="container">
				<div class="price-main">
					<h3>Brick Linings</h3>
				</div>
				<div class="price-section-grids">
					<?php
					$sql ="select * from image where category='Corbal Anchor' and deleteflag='n'";
					$result= mysql_query($sql);
					while($row = mysql_fetch_array($result))
					{						
						?>

						<div class="col-md-4 price-value">
							<div class="price-section-grid">
								<h5><?php echo $row['subcategory'];?></h5>
								<img src="image/<?php echo $row['imagename'];?>"width="150" height="150"></a>

								<ul>
									<p><?php echo $row['imagedesc'];?> </p>
								</ul>
							</div>
						</div>
						<?php
					}
					?>
					<div class="col-md-4 price-value">
						<div class="price-section-grid">
							<h5>U Anchor</h5>
							<img src="images/img/Refactory/insul-prod-anchor_img003-250x250 (1).jpg" alt="" width="253" height="167"/></a>

							<ul>
								<p>We offers U Anchors to our client. These anchors are used in refractory castable lining. These anchors are widely used in various industries and are easy to handle and have a long life with dimensional accuracy, corrosion resistant  and durability.</p>
							</ul>
						</div>
					</div>
					<div class="col-md-4 price-value">
						<div class="price-section-grid">
							<h5>Refractory Anchors</h5>
							<img src="images/img/Refactory/insul-prod-anchor_img038-250x250.jpg" alt="" width="253" height="167"/></a>

							<ul>
								<p>We offers Refractory Anchors to our client. These anchors are used in refractory castable lining. These anchors are widely used in various industries and are easy to handle and have a long life with dimensional accuracy, corrosion resistant  and durability.</p>
							</ul>
						</div>
					</div>

					<div class="clearfix"></div>
				</div>
				<!-- <div class="price-main">
					<br>
					<h3>Ceramic Fiber Anchors</h3>
				</div>
				<div class="price-section-grids">

					<?php
					$sql ="select * from image where category='Ceramic Fiber Anchors' and deleteflag='n'";
					$result= mysql_query($sql);
					while($row = mysql_fetch_array($result))
					{						
						?>
						<div class="col-md-4 price-value">
							<div class="price-section-grid">
								<h5><?php echo $row['subcategory'];?></h5>
								<img src="image/<?php echo $row['imagename'];?>" alt="" width="253" height="167"/></a>

								<ul>
									<p><?php echo $row['imagedesc'];?></p>
								</ul>
							</div>
						</div>
						<?php 
					} 
					?>

					<div class="col-md-4 price-value">
						<div class="price-section-grid">
							<h5>Hairpin Anchor</h5>
							<img src="images/img/ceremic/hairpin-Anchor.jpg" alt="" width="253" height="167"/></a>

							<ul>
								<p>We offers Hairpin Anchors to our client. These anchors are used in refractory castable lining. These anchors are widely used in various industries and are easy to handle and have a long life with dimensional accuracy, corrosion resistant  and durability.</p>
							</ul>
						</div>
					</div>
					<div class="col-md-4 price-value">
						<div class="price-section-grid">
							<h5>Stud & Twist Washer</h5>
							<img src="images/img/Refactory/insul-prod-anchor_img037-250x250.jpg" alt="" width="253" height="167"/></a>

							<ul>
								<p>We offers Stud & Twist Washer to our client. These anchors are used in refractory castable lining. These anchors are widely used in various industries and are easy to handle and have a long life with dimensional accuracy, corrosion resistant  and durability.</p>
							</ul>
						</div>
					</div>
					<br><br>
					<div class="price-main">

						<h3>

							Furnace Accessories</h3>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="price-section-grids">
						<?php
						$sql ="select * from image where category='Thermal Insulation Material' and deleteflag='n'";
						$result= mysql_query($sql);
						while($row = mysql_fetch_array($result))
						{						
							?>      
							<div class="col-md-4 price-value">
								<div class="price-section-grid">
									<h5><?php echo $row['subcategory'];?></h5>
									<img src="image/<?php echo $row['imagename'];?>" alt="" width="253" height="167"/></a>

									<ul>
										<p><?php echo $row['imagedesc'];?></p>
									</ul>
								</div>
							</div>
							<div class="col-md-4 price-value">
								<div class="price-section-grid">
									<h5>Basic Fire Bricks</h5>
									<img src="images/img/thermal/Basic Fire Bricks.jpg" alt="" width="253" height="167"/></a>

									<ul>
										<p>We offers Basic Fire Bricks to our client. These anchors are used in refractory castable lining. These anchors are widely used in various industries and are easy to handle and have a long life with dimensional accuracy, corrosion resistant  and durability.</p>
									</ul>
								</div>
							</div>
							<div class="col-md-4 price-value">
								<div class="price-section-grid">
									<h5>Ceramic Blankets</h5>
									<img src="images/img/thermal/ceremic fibre blankets.jpg" alt="" width="253" height="167"/></a>

									<ul>
										<p>We offers Ceramic Blankets to our client. These anchors are used in refractory castable lining. These anchors are widely used in various industries and are easy to handle and have a long life with dimensional accuracy, corrosion resistant  and durability.</p>
									</ul>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
						
						<?php
					} 
					?>	
				</div> -->
			</div>
			<!--end-pricing-->	
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