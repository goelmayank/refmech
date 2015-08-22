<?php
ob_start();
session_start();
include("connection.php") ;
$sql="select * from menu where status='n' and (parentid=0) order by id" ;
$result=mysql_query("$sql");
?>
<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Home</title>

<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="templatemo_header_wrapper">
	<div id="templatemo_header">
    
        <div id="site_title">
            <a href="#"><strong>Antec</strong>
            </a>
</div>
</div>
</div>

    <div id="templatemo_menu">
        
            <ul>
                <li><a href="#" class="current">Home</a></li>
                <li><a href="about.html">Manage CMS</a></li>
                <li><a href="product.html">Manage Products</a></li>
                <li><a href="adminmenu.php">Manage Menu</a></li>
                <li><a href="new.html">Manage Banner</a></li>
                <li><a href="contact.html">Change Password</a></li>
            </ul>    	
        
        </div> <!-- end of templatemo_menu -->
    
    </div>


<div id="templatemo_feature_wrapper">
	<div id="templatemo_feature">

		<div id="feature_left">
        
        	   
<h1> Adminstration Control Panel</h1>
<img src="../images/admin.jpg"/>
            
			</div> 
</div> 
</div>
<div id="content_wrapper">
  <div id="t_content">
    	
    <p>
   <table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tbody><tr>
    <td width="50%" align="left" valign="top"><a href="adminhome.php" class="gray-a"><u>Home</u></a> // <strong>Manage Menu </strong></td>
  </tr>
  <tr>
  <td align="left">
  <div align="center" style="color:#FF0000;font-weight:bold;"></div></td>
  </tr>
   <tr>
     <td align="center" valign="top">
	  <table width="90%" border="0" cellspacing="0" cellpadding="5">
       <tbody><tr>
         <td align="left" class="TD-Heading">Manage Menu CMS </td>
       </tr>
       <tr>
        <td class="bdr-3sides" colspan="2">
 		  <table width="100%" border="0" cellpadding="4" cellspacing="1" class="text">
            <tbody><tr>
			  <td width="20" align="left" bgcolor="#EEEEEE"><strong>id</strong></td>
			  <td width="300" align="left" bgcolor="#EEEEEE"><strong>Menu Name</strong></td>
              <td width="300" align="left" bgcolor="#EEEEEE"><strong>Menu href</strong></td>
              <td width="600" align="left" bgcolor="#EEEEEE"><strong>Action</strong></td>
            </tr>
             <?php
			while($row=mysql_fetch_array($result))
			{
           $id = $row["id"];
           $menuname = $row["menuname"];
		   $hurl=$row["hurl"];
			?>
		    <tr valign="middle">
			<td width="50" align="right" class="botline"><?php echo $id;?></td>
            <td width="50" align="right" class="botline"><?php echo $menuname;?></td>
			<td align="left" class="botline"><?php echo $hurl;?></td>
			<td align="right" class="botline"><a href="#" class="buttonbox">Edit</a>
			<a href="manage_subpages.php?pid= "class="buttonbox">Manage Sub pages</a>
			
            </td>
		    </tr>
		     <?php }?>
             <tr bgcolor="#FFFFFF">
              <td align="center" colspan="5" bgcolor="#EEEEEE">
			  <b class="orgtext">1</b>&nbsp; </td>
 
            </tr>
		 </tbody></table>
		</td>
       </tr>
 	 </tbody></table>
	</td>
  </tr>
</tbody>
</table>
 
    
    
    
    </p>      
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