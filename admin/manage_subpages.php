<?php
ob_start();
session_start();
include("connection.php") ;
$sql="select * from tbl_menu where status='n' and parentid='".$_REQUEST['pid']."' order by id" ;
$result=mysql_query($sql);
?>

<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Manage Sub Pages</title>

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
			<h1><a href="#" style="color:#FFF;">Dashboard-Manage Subpages</a></h1>
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
								<th>Sub Menu Name</th>
								<th>Link</th>
								<!--<th>Added by</th>-->
								<th width="300" class="ac">Action</th>
							</tr>
         <?php
      while($row=mysql_fetch_array($result))
      {
           $pageid = $row["id"];
           $menuname = $row["menuname"];
           $link = $row["link"];
      ?>
          					<tr>
								<td><?php echo $pageid;?></td>
								<td><h3><?php echo $menuname;?></h3></td>
								<td><?php echo $link;?></td>
								<!--<td><a class="ico admin" href="#">Admin</a></td>-->
								<td><a href="#" class="ico del">Delete</a>
                                <a class="ico edit" href="editcms.php?pid=<?php echo $pageid;?>" >Edit</a>
                     </td>
					</tr>
			<?php } ?>				 
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