<?php
ob_start();
session_start();
include("connection.php");

$username=$_POST['username'];
$password=$_POST['password']; 

$sql="select * from admin where username='$username' and passoword='$password'";
$result=mysql_query($sql);
$num=mysql_num_rows($result);
$row=mysql_fetch_array($result);
$userid=$row['id'];
$username=$row['username'];

if($num!=0)
{
$_SESSION['id']=$userid;
$_SESSION['username']=$username;
//echo "login sucessfully";
header("location:adminhome.php");
}
else
{
	header("location:index.php?username=".$username."&error=1");

	//$msg = "password not match!!!";
	//header("location:".$_SERVER['HTTP_REFERER']."?msg=".$msg);
//$_SESSION['msg']="password not match";
// header("location:".$_SERVER['HTTP_REFERER']);
}

ob_end_flush();

?>