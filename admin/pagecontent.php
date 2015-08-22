<?php
ob_start();
session_start();
include("connection.php") ;
//$sql="select * from page where deleteflag='n' and order by page_id" ;
$sql="select * from page"; 
$result=mysql_query("$sql");
?>
<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Manage CMS</title>

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
			<h1><a href="#" style="color:#FFF;">Dashboard-Manage CMS</a></h1>
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
								<th>Meta Title</th>
                                <th>Meta Keyword</th>
								<th>Meta Description</th>
                                
								
								<!--<th>Added by</th>-->
								<th width="300" class="ac">Action</th>
							</tr>
                             <?php
			while($row=mysql_fetch_array($result))
			{
           $pageid = $row["page_id"];
           $pagename = $row["page_name"];
		   $metatitle = $row["meta_title"];
		   $metakeyword = $row["meta_keyword"];
		   $metadesc = $row["meta_discription"];
		   //$content = $row["content"];
		   	?>
							<tr>
								<td><?php echo $pageid;?></td>
								<td><h3><?php echo $pagename;?></h3></td>
								<td><?php echo $metatitle;?></td>
                                <td><?php echo $metakeyword;?></td>
								<td><h3><?php echo $metadesc;?></h3></td>
								
								<!--<td><a class="ico admin" href="#">Admin</a></td>-->
								<td><a href="#" class="ico del">Delete</a>
                                <a class="ico edit" href="edit_page_content.php?pid=<?php echo $pageid;?>" >Edit</a>
                

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