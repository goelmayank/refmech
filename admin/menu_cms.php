<?php
ob_start();
session_start();
include("connection.php") ;
$sql="select * from image where pageid IS NULL or paageid=0 order by id" ;
$result=mysql_query("$sql");
?>


<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Manage CMS</title>
<link href="../style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="main">
	<div id="main_header">
                     
    <div id="main_menu">
<ul>
                <li><a href="#" class="current">Home</a></li>
                <li><a href="about.html">Manage CMS</a></li>
                <li><a href="product.html">Manage Products</a></li>
                <li><a href="services">Change Password</a></li>
                <li><a href="new.html">Logout</a></li>
                </ul>
     </div> 
    
    </div>
</div>

<div id="main_content">
	<div id="content">
    
<h1> Adminstration Control Panel</h1>
<img src="../images/admin.jpg"/>
            
			</div> 
</div> 

<div id="content_wrapper">
  <div id="t_content">


<table style="border-collapse: collapse; font: 12px Tahoma;" border="1" cellspacing="5" cellpadding="5">
<tbody><tr>
<td>
<input name="uploadedimage" type="file">
</td>
</tr>
<tr>
<td>
<input name="Upload Now" type="submit" value="Upload Image">
</td>
</tr>
</tbody></table>

  </div>
</div>
<div  class="cleaner"></div>
</div>
<div id="templatemo_footer_wrapper">
	<div id="templatemo_footer">
    	<div id="footer_title">Site Info.</div>
        
        <div class="footer_box">
        	<div class="cleaner_h40"></div>
        	Copyright © 2015 <a href="#">Antec Pvt ltd.</a><br /> 
        	
        </div>
            
        <div class="cleaner"></div>
    </div>
</div>

</body>
</html>