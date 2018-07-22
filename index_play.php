<title>Calculating....</title>
<body style="background-color:black">
<?php
session_start();
require_once 'connect.php';
if(isset($_SESSION['user']))
{
$user=$_SESSION['user'];
$number=$_REQUEST['ininput'];
$symboll=$_REQUEST['symbol'];
$time=$_REQUEST['timemm'];
$sec=$_REQUEST['times'];
$endm=$time+1;

$ok=mysql_query("SELECT * FROM mygames where user='$user' ");
while($oo=mysql_fetch_array($ok))
{
	$clicks=$oo['clicks'];
	$clicks=$clicks-1;
	mysql_query("UPDATE mygames SET clicks='$clicks' where user='$user' ");
}

$sql=mysql_query("UPDATE mygames SET numbers='$number',symbols='$symboll' where user='$user' ");
if($sql==true)
{
$k=mysql_query("SELECT * FROM mygames where user='$user' ");
while($rr=mysql_fetch_array($k))
{
	$numbers=$rr['numbers'];
	$symbol=$rr['symbols'];
	$results=$rr['result'];
	$startm=$rr['startm'];
	$clickss=$rr['clicks'];
	$clickss=$clickss-1;
	if($startm!=true)
	{
	mysql_query("UPDATE mygames SET startm='$time',starts='$sec',endm='$endm',ends='$sec' where user='$user' ");
	}
	if($symbol==false)
	{
	$result=$numbers;
	}
	if($symbol=='+')
	{
	$result=$results+$numbers;
	}
	if($symbol=='-')
	{
	$result=$results-$numbers;
	}
	if($symbol=='*')
	{
	$result=$results*$numbers;
	}
	mysql_query("UPDATE mygames SET result='$result' where user='$user' ");
}
echo "<center><h3>Calculating.....</h3></center>";
echo "<script>window.location='index.php';</script>";
}
}
else{
	echo "Plz Login";
}
?>