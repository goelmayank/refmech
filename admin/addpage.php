<?php
ob_start();
session_start();
include("../include/connection.php") ;
include("fckeditor/fckeditor.php") ;

if ( isset( $_POST['Submit'] ) )
{
  //print_r($_POST);
  $parid=$_REQUEST['parid'];
  $pagename=$_REQUEST['TR_Page_Name'];
  $meta_title=$_REQUEST['TN_Meta_title'];
  $meta_keyword=$_REQUEST['TN_Meta_keyword'];
  $meta_desc=$_REQUEST['TN_Meta_description'];
  $content=$_REQUEST['FCKeditor1'];

  $sql="Insert into tblpages (parid,pagename,meta_title,meta_keyword,meta_desc,content) values ('$parid','$pagename','$meta_title','$meta_keyword','$meta_desc','$content')";
  
  mysql_query($sql);
  header("location:".$_SERVER['HTTP_REFERER']);
  exit;
}
if($_REQUEST['edit']=="admin")
{
  $editid=$_REQUEST['id'];//
  $sql=mysql_fetch_array(mysql_query("select * from tblpages where pageid='$editid' and deleteflag='N'"));
  $pageid=$sql['pageid'];
  $pagename=$sql['pagename'];
  $meta_title=$sql['meta_title'];
  $meta_keyword=$sql['meta_keyword'];
  $meta_desc=$sql['meta_desc'];
  $content=$sql['content'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- saved from url=(0049)http://www.bvcorphr4u.com/admin/add_cms.php?pid=4 -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link href="css/global-admin.css" rel="stylesheet" type="text/css">
<script language="javascript" src="js/smart-jscript.js"></script>
 <style type="text/css">
.style1 {color: #000000}
.style2 {color: #626262}
</style>
<title>Administrator Control Panel</title>
<script language="javascript" src="./add_cms_files/smart-jscript.js"></script>
</head>
<?php include("../include/header.php");?>

<table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tbody><tr>
    <td align="left" valign="top"><a href="home.php" class="gray-a"><u>Home</u></a> // <strong>Manage CMS </strong></td>
  </tr>
   <tr>
     <td align="center" valign="top">	  
	 <table align="center" width="80%" border="0" cellspacing="0" cellpadding="5">
       <tbody><tr>
         <td align="left" class="TD-Heading">Manage CMS</td>
       </tr>
      <tr>
        <td width="100%" class="bdr-3sides">
		<div align="center"><font color="#990000"><strong></strong></font></div>
        <form action="add_cms.php" method="post" onsubmit="return ValidateForm(this);">
        <table width="100%" border="0" cellspacing="0" cellpadding="4" align="center">
        <tbody>
        <tr>
        <td width="115">&nbsp;</td>
        <td align="right" width="625"><a href="manage_subpages.php?pid=<?php echo $_REQUEST['pid'];?>" class="buttonbox">Back</a></td>
        </tr>
           <tr valign="bottom">
             <td width="115" align="left" class="botline">Page Name</td>
             <td align="left" valign="top" class="botline"><input name="TR_Page_Name" type="text" size="35">[special characters and spaces are not allowed in page name]</td>
           </tr>
           <tr valign="top">
             <td width="115" align="left" class="botline">Meta Title</td>
             <td align="left" class="botline"><input type="text" name="TN_Meta_title" size="45"></td>
           </tr>
           <tr valign="top">
             <td width="115" align="left" class="botline">Meta Keywords</td>
             <td align="left" class="botline"><input type="text" name="TN_Meta_keyword" size="45"></td>
           </tr>
           <tr valign="top">
             <td width="115" align="left" class="botline">Meta Description</td>
             <td align="left" class="botline"><input type="text" name="TN_Meta_description" size="45"></td>
           </tr>
           <tr valign="top">
             <td width="115" align="left" class="botline">Content</td>
             <td align="left" class="botline">
            <?php
            // Automatically calculates the editor base path based on the _samples directory.
            // This is usefull only for these samples. A real application should use something like this:
            // $oFCKeditor->BasePath = '/fckeditor/' ;  // '/fckeditor/' is the default value.
            $sBasePath = $_SERVER['PHP_SELF'] ;
            $sBasePath = substr( $sBasePath, 0, strpos( $sBasePath, "_samples" ) ) ;

            $oFCKeditor = new FCKeditor('FCKeditor1') ;
            //$oFCKeditor->BasePath = $sBasePath ;
            $oFCKeditor->BasePath = 'fckeditor/' ;
            $oFCKeditor->Value    = '<p>Rahul</p>' ;
            $oFCKeditor->width = '200px';
            $oFCKeditor->height = '200px';

            $oFCKeditor->Create() ;
            ?>
            </td>
           </tr>
           <tr valign="middle">
             <td width="115" align="right" class="botline">&nbsp;</td>
             <td align="left" class="botline"><input type="hidden" name="parid" value="<?php echo $_REQUEST['pid'];?>"><input type="submit" name="Submit" value="Submit"></td>
           </tr>
        </tbody></table>
        </form>
        </td>
        </tr>
     </tbody></table>
   </td>
  </tr>
</tbody></table>
<?php include("../include/footer.php");?>
</body>
</html>