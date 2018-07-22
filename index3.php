<html>
<title>Brain Shoot</title>
<link rel="icon" href="brain.jpg">
<body onload="result()">
	<script src="jquery.js"></script>
	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" href="font/css/font-awesome.css">
	<?php
	session_start();
	require_once 'connect.php';
	if(isset($_SESSION['user']))
	{
	$user=$_SESSION['user'];
	echo "<a href='logout.php'><button class='btn btn-info' style='border-radius:0px;'>_/\_ Welcome </button></a><button style='border-radius:0px;' class='btn btn-success active'><i class='fa fa-user my'></i> ".$user."</button>";
	$sql=mysql_query("SELECT * FROM mygames where user='$user' ");
	while($r=mysql_fetch_array($sql))
	{
		$numbers=$r['numbers'];
		$result=$r['result'];
		$symbols=$r['symbols'];
		$startm=$r['startm'];
		$starts=$r['starts'];
		$endm=$r['endm'];
		$ends=$r['ends'];
		$clicks=$r['clicks'];
		if($clicks==0)
		{
		echo "<script>alert('Game Over..Thanks for your active participation');</script>";
		echo "<script>alert('Enter your result and Check');</script>";
		?>
		<form method="post" action="result_check.php">
		<center><input type="text" name="results" class="form-control" style="width:50%" placeholder="Enter your result here....." required>
		<input type="submit" value="See Result" class="btn-warning">
		</center>
		</form>
		<?php
		}

	echo "<div style='float:right'><button class='btn-danger'><i class='fa fa-exclamation-triangle my'></i> Remaining Clicks: ".$clicks."</button></div>";
	}
	?>
	<div id="tot1">
	<center><h1 style="color:white;font-family:papyrus;font-size:35px;text-shadow:1px 2px 5px black;"><b style="color:yellow;">B</b>rain <b style="color:pink">S</b>hoot</h1></center>
	<hr>
	<center>
		<form method="post" action="index_play.php">
			<input type="text" name="symbol" id="usrinput" class="btn btn-default" style="height:400px;width:30%;font-size:150px;color:teal;font-family:arial;">
			<input type="text" name="ininput" id="userinput" class="btn btn-default" style="height:400px;width:30%;font-size:150px;color:teal;font-family:arial">
			<input type="text" id="timem" name="timemm" style="color:white;font-family:arial;background-color:black;padding:0px;display:none;border:0px;width:3%;border-radius:1px;font-size:15px;">
			<input type="text" id="times" name="times" style="color:white;font-family:arial;background-color:black;padding:0px;display:none;border:0px;width:3%;border-radius:1px;font-size:15px;">
			
			<button type="submit" id="click" class="btn btn-success" style="width:20%;font-size:30px;color:white;border:0px;padding:10px;border-radius:100px;">Click <i class="fa fa-arrow-circle-o-right my"></i></button>
		</form>
	<span id="results"></span>
	<span id="reresults"></span>
</center>

</div>

<i style="float:right;margin-right:50px;color:green;">&copy; Venkatesh Mogili,N130010</i>
	</body>
</html>
	<?php
}
	else{
	echo "<center><br><br><br><br><br><h1 style='font-size:100px;'><i class='fa fa-exclamation-circle my' style='color:red;font-size:2em;'></i>Plz Login</h1><br><a href='Register.php'><i class='fa fa-arrow-left my'></i> Go back</a></center>";
	}
	?>
<script>
function startTime(){
var d=new Date();
var h=d.getHours();
var m=d.getMinutes();
var s=d.getSeconds();
var mm=checkTime(m);
var ss=checkTime(s);
document.getElementById("timem").value=m;
document.getElementById("times").value=s;
var t=setTimeout(function(){startTime()},500);
}
function checkTime(i){
  if (i<10){
  i= "0" +i 
  };//add zero in fornt of numbers <10
  return i;
}
</script>
<script>
function result(){
	$("body").show("slow");
	$(document).ready(function(){
	var txt="";
	var possibl="23456789";
	for(j=0;j<1;j++)
	{
	txt +=possibl.charAt(Math.floor(Math.random() * possibl.length));
	}
	document.getElementById("userinput").value = txt;
	var text="";
	var possible="+-*";
	for(i=0;i<1;i++)
	{
	text +=possible.charAt(Math.floor(Math.random() * possible.length));
	}
	document.getElementById("usrinput").value = text;
});
}
</script>
<style>
body{display:none;background-color:lightgray;/*position:relative;-webkit-animation: myb 1s 1;-webkit-animation-play-state: play;animation: myb 1s 1;animation-play-state: play;}
@-webkit-keyframes myb {from {left:30px;background-color:black;-webkit-transform:rotateY(-360deg);transform:rotateY(-360deg);-moz-transform:rotateY(-360deg);}to {left:1px;}}
@-moz-keyframes myb {from {left:30px;-webkit-transform:rotateY(-360deg);transform:rotateY(-360deg);-moz-transform:rotateY(-360deg);}to {left:1px;}}
@keyframes myb {from {left:30px;-webkit-transform:rotateY(-360deg);transform:rotateY(-360deg);-moz-transform:rotateY(-360deg);}to {left:1px;}}
*/
}
i.my{font-size:1em;color:white;}
</style>