<link rel="stylesheet" href="bootstrap.css">
<body style="background-color:teal;">
<?php
require_once 'connect.php';

$num=$_REQUEST['input1'];
$num2=$_REQUEST['input2'];
$symbol=$_REQUEST['symbol'];

if($symbol=="+")
{
	$result=$num+$num2;
	mysql_query("UPDATE mygames SET result='$result' where user='test' ");
}
if($symbol=="-")
{
	$result=$num-$num2;
	mysql_query("UPDATE mygames SET result='$result' where user='test' ");
}
if($symbol=="*")
{
	$result=$num*$num2;
	mysql_query("UPDATE mygames SET result='$result' where user='test' ");
}
if($symbol=="/")
{
	$result=$num/$num2;
	mysql_query("UPDATE mygames SET result='$result' where user='test' ");
}

$sql=mysql_query("SELECT * FROM mygames where user='test' ");
while($r=mysql_fetch_array($sql))
{
	$results=$r['result'];
}

echo "<div><center><h1 class='btn btn-info' style='border-radius:500px;width:500px;height:500px;padding:30px;font-size:100px;'>Result<br>".$results."</h1></div>";
?>