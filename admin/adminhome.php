<?php
ob_start();
session_start();
include("connection.php") ;
include("user-authentication.php");
$sql="select * from menu where deleteflag='y' order by id" ;
$result=mysql_query("$sql");
?>
<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Home</title>

<link href="admincss/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="admincss/styles.css" type="text/css"/>
<link rel="stylesheet" href="admincss/cmsstyle.css" type="text/css"/>
</head>

<body>
<?php
include("adminheader.php");
?>

<div id="header">
	<div class="shell">
		<!-- Logo + Top Nav -->
		<div id="top">
			<h1><a href="#" style="color:#FFF;">Dashboard</a></h1>
			<div id="top-navigation">
            Welcome <a href="#"><strong><?php print $_SESSION['username'];?> </strong></a>
				<span>|</span>
				<a href="logout.php">Log out</a>
			</div>
		</div>
		<!-- End Logo + Top Nav -->
		</div>
</div>
<!-- End Header -->

<!-- Container -->
<div id="container">
	<div class="shell">
		
		<br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- Content -->
			<div id="content">
				
				<!-- Box -->
				<div class="box">
		
					<!-- Table -->
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<th width="13">ID</th>
								<th>Page Name</th>
								<th>Date</th>
								<!--<th>Added by</th>-->
								</tr>
                             <?php
			while($row=mysql_fetch_array($result))
			{
           $pageid = $row["id"];
           $manuname = $row["manu_name"];
			?>
							<tr>
								<td><?php echo $pageid;?></td>
								<td><h3><?php echo $manuname;?></h3></td>
								<td>22.02.15</td>
								<!--<td><a class="ico admin" href="#">Admin</a></td>-->
								
							</tr>
							 <?php }?>
                            </tr>
							</table>
						
						
						<!-- Pagging -->
						<div class="pagging">
							<div class="left">Showing 1-12 of 44</div>
							<div class="right">
								<a href="#">Previous</a>
								<a href="#">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#">4</a>
								<a href="#">245</a>
								<span>...</span>
								<a href="#">Next</a>
								<a href="#">View all</a>
							</div>
						</div>
						<!-- End Pagging -->
						
					</div>
					<!-- Table -->
					
				</div>
				<!-- End Box -->
                
                <!-- Box -->
				<div class="box">
					<!-- Box Head -->
					<!--<div class="box-head">
						<h2>Add New Page</h2>
					</div>-->
					<!-- End Box Head -->
					
					<!--<form action="" method="post">
						
						
						<div class="form">
								<p>
									<span class="req">max 100 symbols</span>
									<label>Page Name <span>(Required Field)</span></label>
									<input type="text" class="field size1" />
								</p>	
								<p class="inline-field">
									<label>Date</label>
									<select class="field size2">
										<option value="">23</option>
									</select>
									<select class="field size3">
										<option value="">July</option>
									</select>
									<select class="field size3">
										<option value="">2009</option>
									</select>
								</p>
								
								<p>
								<label>Added By<span>(Required Field)</span></label>
									<input type="text" class="field size1" />
								</p>	
							
						</div>-->
						<!-- End Form -->
						
						<!-- Form Buttons -->
						<div class="buttons">
							<input type="submit" class="button" value="Submit" />
						</div>
						<!-- End Form Buttons -->
					</form>
				</div>
				<!-- End Box -->
				
					</div>
			<!-- End Content -->
			
					
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->


<?php
include("adminfooter.php");
?>

</body>
</html>