<title>Results</title>
<link rel="icon" href="congrats.jpg">
<?php
session_start();
require_once 'connect.php';
if(isset($_SESSION['user']))
{
$user=$_SESSION['user'];
$results=$_REQUEST['results'];

$sql=mysql_query("SELECT * FROM mygames where user='$user' ");
while($r=mysql_fetch_array($sql))
{
	$result=$r['result'];

	if($result==$results)
	{
	echo "<h1 style='color:white;font-size:50px;font-family:Top Secret;background-color:black;padding:5px;text-shadow:1px 2px 3px black;'><a href='logout.php' style='font-size:10px;color:yellow;'>Homepage</a><center>Congratulations....You Won</center><center><img src='congrats2.jpg' style='width:80%;height:600px;'><br>Result: ".$result."</center></h1>";
	}
	else{
	echo "<h1  style='color:white;font-size:50px;height:100%;font-family:Top Secret;background-color:black;padding:5px;text-shadow:1px 2px 3px black;'><a href='logout.php' style='font-size:10px;color:yellow;'>Homepage</a><center>Sorry, You lose the game.....<br>Result: <b style='color:yellow'>".$result."</b></center></h1>";
	}
}
}
else{
	echo "Please Login";
}
?>