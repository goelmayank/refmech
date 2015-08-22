<?php
ob_start();
error_reporting(0);
session_start();
include("connection.php");
if($_REQUEST['mode']=="delete")
{    
  $id=$_REQUEST['id'];
  $sql="Update image set deleteflag='Y' where id in ($id)";
  //$sql="Delete from tblpages where pageid='$id'";
  
  mysql_query($sql);
  header("location:".$_SERVER['HTTP_REFERER']);
  exit;
} 
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
								<th width="5%" valign="middle" class="subheading">ID</th> 
          <th width="18%" align="center" valign="middle" class="subheading">Image</th> 
          <th width="21%" valign="middle" class="subheading">Category</th> 
          <th width="22%" valign="middle" class="subheading">Sub Category</th> 
         
          
          <th width="12%" align="center" valign="middle" class="subheading">Action</th> 
								<!--<th>Added by</th>-->

								</tr>
                                <?php
						$sql ="select * from image where deleteflag='n'";
						$result= mysql_query($sql);
						while($row = mysql_fetch_array($result))
						  {	
						  $product=$row['id'];					
						?>
                            <tr> 
          <td align="left" valign="top" bgcolor="#FFFFFF"><?php echo $row['id'];?></td> 
          <td align="center" valign="top" bgcolor="#FFFFFF"> 
            
			<img src="../image/<?php echo $row['imagename'];?>" border="0" width="170" alt="">            </td> 
          <td align="left" valign="top" bgcolor="#FFFFFF"><?php echo $row['category'];?></td> 
          <td align="left" valign="top" bgcolor="#FFFFFF"> 
		  
		  <?php echo $row['subcategory'];?>        </td> 
           
           <td align="center" valign="top" bgcolor="#FFFFFF" class="link"> 
           
           
							
          
            
           <a href="editproduct.php?id=<?php echo $product;?>">Edit<i class="icon-pencil"></i></button></a> 
 
          <a href="#" onclick="if (confirm('Are you sure you want to delete?')) window.location='manageproduct.php?id=<?php echo $product;?>&mode=delete'; return false">Delete</a>            </td> 
        </tr>
                            </tr>
                            <?php }?>
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