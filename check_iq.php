<?php
require_once 'connect.php';

$in1=$_REQUEST['input1'];
$in2=$_REQUEST['input2'];
$in3=$_REQUEST['input3'];
$in4=$_REQUEST['input4'];
$in5=$_REQUEST['input5'];

$sql=mysql_query("INSERT INTO myphone (input1,input2,input3,input4,input5) VALUES ('$in1','$in2','$in3','$in4','$in5')");
if($sql==true)
{
	header('Location: process.php');
}
?>