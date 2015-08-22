<?php
error_reporting(0);
ob_start();
session_start();
include("connection.php") ;
//$sql="select * from menu where deleteflag='y' order by id" ;
//$result=mysql_query("$sql");
$target_path = "../image/";
$target_path = $target_path . basename( $_FILES['productImage']['name']);
$file_name = basename( $_FILES['productImage']['name']);
if ( isset( $_POST['Submit'] ) )
{
	//$editid=$_REQUEST['id'];//
	//$sql=mysql_fetch_array(mysql_query("select * from image where id='$editid' and deleteflag='n'"));
	//$imagename=$sql['imagename'];
	//print_r($_POST);
	$productid=$_POST['product_id'];
	$category=$_POST['cat_id'];
	$subcategory=$_POST['product_name'];
	
	//$description=$_REQUEST['Job_description'];
	$description=$_POST['short_desc'];
	move_uploaded_file($_FILES['productImage']['tmp_name'], $target_path);
 
 	$query = mysql_query("insert into image(imagename, imagedesc, category, subcategory) values ('$file_name', '$description', '$category', '$subcategory')");
	
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
<table align="center" width="98%" border="0" cellpadding="0" cellspacing="0" style="border:#60BF93 solid 1px"> 
  <tr> 
    
    
    
    
  </tr> 
</table> 
<table align="center" width="98%" border="0" cellpadding="0" cellspacing="0"> 
  <tr> 
    <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="border-left:1px solid #60BF93;border-right:1px solid #60BF93;border-bottom:1px solid #60BF93"> 
        <tr> 
          <td width="210" valign="top" align="right" style="padding:10px 0 0 5px;">&nbsp;</td> 
          <td valign="top"><script language="javascript"> 
function validateForm()
{
	
}
function removeImage(id)
{
	var rmimg = confirm("Are you sure to remove this image.");
	if(rmimg)
		location.href='add_edit_product.php?rem=rem&eid='+id+'';
}
function showimage(img)
{
	window.open('show_photos.php?file='+img,'winimg','toolbar=0,status=0')
}
</script> 
 
<script src="ajax.js"></script> 
<script>showSubCat(,86);</script> 
 
<table width="101%"  border="0" cellspacing="10" cellpadding="5"> 
	<tr> 
	  <td valign="middle" bgcolor="#D2D2D2" class="bar">Modify Product</td> 
	</tr> 
	<tr> 
	  <td align="left" valign="top" class="border1"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"> 
	
		<tr> 
		  <td> 
          <form name="productForm"  method="post" action="" enctype="multipart/form-data" onsubmit="javascript : return validateProductForm();"> 
      <table border="0" cellspacing="0" cellpadding="0" width="100%" align="center"> 
        <tr> 
		  <td width="100%"> 
            <table width="90%" border="1" cellspacing="0" cellpadding="4"> 
						  <tr> 
			    <td colspan="2" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="2"> 
                            
 
                            <tr> 
                              <td valign="top" class="ver12blue" style="padding:5px 0px 5px 10px;"> Category :</td> 
                              <td colspan="2" valign="middle"> 
                              
                              
                              <select name="cat_id" class="input" id="cat_id"  > 
                                <option value="">Select Category</option> 
                                                                <option value="Corbal Anchor"  > 
                                                              Corbal Anchor                               </option> 
                                                                <option value="Ceramic Fiber Anchors"  > 
                                                                Ceramic Fiber Anchors                               </option> 
                                                                <option value="Thermal Insulation Material"  > 
                                                                 Thermal Insulation Material                                </option> 
                                                               
                                                              </select>                              </td> 
                            </tr> 
                            <tr> 
                              <td width="24%" valign="top" class="ver12blue" style="padding:5px 0px 5px 10px;">Sub Category :</td> 
                              <td width="76%" colspan="2" valign="middle"><input name="product_name" type="text" class="input" id="product_name" value="" size="20" /></td> 
                            </tr> 
                            
                            <tr> 
                              <td valign="top" class="ver12blue" style="padding:5px 0px 5px 10px;">Image (If any) :</td> 
                              <td align='left' valign="top" bgcolor="#FFFFFF" class="Title"><input name="productImage" id="productImage" size="30" class="input" type="file" /> 
                             <br /> 
 
                               <em> 900px X 600px (jpg,jpeg) &nbsp;All images should be in same ratio</em></td> 
                              <!--<td align='center' valign="top" bgcolor="#FFFFFF" class="Title"><img src='../upload/product/thumb/DSC_0392.jpg' height='55' width='70' style='border:solid #CCCCCC; 1px;'>&nbsp;<br/><a href='javascript:;' onclick='removeImage(19)'>Remove</a><input type='hidden' name='hidimg' value='DSC_0392.jpg'></td>--> 
                            </tr> 
                            
                            
                            <tr> 
                               
                              <td colspan="2" valign="top">&nbsp;</td> 
                            </tr> 
                             
                            <tr> 
                              
                              <td colspan="2" valign="top">&nbsp;</td>
                            </tr> 
                            <tr> 
                              
                              <td colspan="2" valign="top">&nbsp;</td>
                            </tr> 
                            <tr> 
                              <td valign="top" class="ver12blue" style="padding:5px 0px 5px 10px;">Short description :</td> 
                              <td colspan="2" valign="top"><textarea name="short_desc" cols="55" rows="5" class="input" id="short_desc"></textarea></td> 
                            </tr> 
                            <tr>
                            <td colspan="2" align="center">
                            <input type="submit" name="Submit" value="Submit"></td>
                            </tr>
                           
                           
                            <tr> 
                              <td valign="top" class="ver12blue" style="padding:5px 0px 5px 10px;">&nbsp;</td> 
                              <td valign="middle">&nbsp;</td>    
                            </tr>
                          
                           
</script>