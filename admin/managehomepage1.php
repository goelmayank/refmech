<?php
ob_start();
session_start();
error_reporting(0);
include("connection.php") ;
/*include("fckeditor/fckeditor.php") ;*/

if ( isset( $_POST['submit1'] ) )
{
	$pageid=$_REQUEST['pageid'];
	$pagename=$_REQUEST['pagename'];
	$metatitle=$_REQUEST['metatitle'];
	$metakeyword=$_REQUEST['metakeyword'];
	$metadesc=$_REQUEST['metadesc'];
	$content=$_REQUEST['FCKeditor1'];
    $content_two=$_REQUEST['FCKeditor2'];
 	$sql="update page set page_name='$pagename',meta_title='$metatitle',meta_keyword='$metakeyword',meta_discription='$metadesc',content='$content',content_two='$content_two' where page_id=$pageid";
	
	mysql_query($sql);
	header("location:".$_SERVER['HTTP_REFERER']);
	exit;
}

	
	$sql=mysql_fetch_array(mysql_query("select * from page where page_id=1 and deleteflag='n'"));
	$pageid=$sql['page_id'];
	$pagename=$sql['page_name'];
	$metatitle=$sql['meta_title'];
	$metakeyword=$sql['meta_keyword'];
	$metadesc=$sql['meta_discription'];
	$content=$sql['content'];
	$content_two=$sql['content_two'];

?>
<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit CMS</title>

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
			<h1><a href="#" style="color:#FFF;">Dashboard-Edit CMS</a></h1>
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
					<!-- Box Head -->
                    <div style="color:#000000; text-align:center"><h2>Our Products</h2></div>
					<div class="box-head">
                    
                    
						<h1 style="color:#FFF;text-align:center;">Refactory</h1>
					</div>
                    

                    <form action="" method="post" onSubmit="return ValidateForm(this);">
						
						<!-- Form -->
	<div class="form">
	<p>
		<label>Refactory <span>(Required Field)</label>
		<input type="text" name="pagename" class="field size1" value="<?php echo $pagename;?>" />
	</p>
    <p>&nbsp;</p>
        
    <p>
		<label>Refactory Images</label>
		<span class="Title">
		<input name="productImage" id="productImage" size="30" class="input" type="file" />
		</span></p>
        <td align='center' valign="top" bgcolor="#FFFFFF" class="Title"><img src='../image/<?php echo $imagename?>' height='65' width='80'></td>
                                	
	<p>
		<label>Refactory Content </label>
		<td colspan="2" valign="top"><textarea name="short_desc" cols="55" rows="5" class="input" id="short_desc"><?php echo $description;?></textarea></td> 
	</p>						
</div>
<div style="text-align:left; padding-left:200px; ">
<input type="hidden" name="pageid" value="<?php echo $pageid;?>">
<input type="submit" name="submit" value="submit1">
</div>
<p>&nbsp;</p>
 <h1 style="color:#FFFFFF; text-align:center; background-color:#0033FF;">Ceremic</h1>
 <div class="form">
	<p>
		<label>Ceremic <span>(Required Field)</label>
		<input type="text" name="pagename" class="field size1" value="<?php echo $pagename;?>" />
	</p>
    <p>&nbsp;</p>
        
    <p>
		<label>Ceremic Images</label>
		<span class="Title">
		<input name="productImage" id="productImage" size="30" class="input" type="file" />
		</span></p>
        <td align='center' valign="top" bgcolor="#FFFFFF" class="Title"><img src='../image/<?php echo $imagename?>' height='65' width='80'></td>
                                	
	<p>
		<label>Ceremic Content </label>
		<td colspan="2" valign="top"><textarea name="short_desc" cols="55" rows="5" class="input" id="short_desc"><?php echo $description;?></textarea></td> 
	</p>						
   
   
  
</div>
<div style="text-align:left; padding-left:200px; ">
<input type="hidden" name="pageid" value="<?php echo $pageid;?>">
<input type="submit" name="Submit" value="Submit">
</div>
<p>&nbsp;</p>
<h1 style="color:#FFFFFF; text-align:center; background-color:#0033CC;">Thermal</h1>
<div class="form">
	<p>
		<label>Thermal <span>(Required Field)</label>
		<input type="text" name="pagename" class="field size1" value="<?php echo $pagename;?>" />
	</p>
    <p>
		<label>Thermal Images</label>
		<span class="Title">
		<input name="productImage" id="productImage" size="30" class="input" type="file" />
		</span></p>
        <td align="right" valign="top" bgcolor="#FFFFFF" class="Title"><img src='../image/<?php echo $imagename?>' height='65' width='80'></td>
                                	
	<p>
		<label>Thermal Content </label>
		<td colspan="2" valign="top"><textarea name="short_desc" cols="55" rows="5" class="input" id="short_desc"><?php echo $description;?></textarea></td> 
	</p>						
   
   
  
</div>
						<!-- End Form -->
											<!-- Form Buttons -->
					  <div style="text-align:left; padding-left:200px;">
							<input type="hidden" name="pageid" value="<?php echo $pageid;?>">
						    <input type="submit" name="Submit" value="Submit">
					  </div>
                      <p>&nbsp;</p>
                      <div style="color:#000000; text-align:center"><h1>Our Service</h1></div>
                      
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
	<!--</div>-->
						<!-- End Form -->
											<!-- Form Buttons -->
						<!--<div class="buttons">
							<input type="hidden" name="pageid" value="<?php echo $pageid;?>"><input type="submit" name="Submit" value="Submit">
						</div>-->
						<!-- End Form Buttons -->
					<!--</form>
				</div>-->
				<!-- End Box -->
				
					<!--</div>-->
			<!-- End Content -->
			
  		<!--<div class="cl">&nbsp;</div>			
		</div>-->
		<!-- Main -->
	<!--</div>
</div>

<div id="container">
	<div class="shell">
		
		<br />-->
		<!-- Main -->
		<!--<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- Content -->
			<!--<div id="content">-->
				
			<!-- Box -->
				<!--<div class="box">-->
					<!-- Box Head -->
					<!--<form action="" method="post" onSubmit="return ValidateForm(this);">
						
						 Form -->
	<!--<div class="form">-->
	
    
    					
   
  

<?php include("adminfooter.php");?>
</body>
</html>