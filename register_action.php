<?php
session_start();
require_once 'connect.php';

$user=$_REQUEST['user'];
$inputt=$_REQUEST['inputt'];

$sql=mysql_query("SELECT * FROM mygames where user='$user' ");
if(mysql_fetch_array($sql)==true)
{
	echo "<script>alert('Already Played with this name...Try with another name');window.location='Register.php';</script>";
}
else{
	$reg=mysql_query("INSERT INTO mygames (user,numbers,result) VALUES('$user','$inputt','$inputt') ");
	if($reg==true)
	{
	$_SESSION['user']=$user;
	header('Location: index.php');
	}
}
?>