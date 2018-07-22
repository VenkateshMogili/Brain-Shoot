<html>
<title>Brain Shoot</title>
<link rel="icon" href="brain.jpg">
<body onload="result()">
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
		<script>
		$(document).ready(function(){
		$("#tot1").html("");
		});
		</script>
		<form method="post" action="result_check.php">
		<center><input type="text" name="results" class="form-control" style="width:50%" placeholder="Enter your result here....." autofocus required>
		<input type="submit" value="See Result" class="btn-warning">
		</center>
		</form>
		<?php
		}

	echo "<div style='float:right'><button class='btn-danger'><i class='fa fa-exclamation-triangle my'></i> Remaining Clicks: ".$clicks."</button></div>";
	}
	?>
	<script src="jquery.js"></script>
	<script>
window.onload=function(){

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
//Onload event of Javascript
//Initializing timer variable.
var x=5;
var y=document.getElementById("timer");
//Display count down for 5 seconds
setInterval(function(){
	if(x<=5 && x>=1)
	{
	x--;
	y.innerHTML=""+x+"";
	if(x==1){
	x=5;
	}
	}
	}, 1000);

var auto_refresh=setInterval(function(){submitform();},5000);

//Form submit function.
function submitform(){
	if(validate())//Calling validate function
	{
	document.getElementById("form").submit();
	}
}
function validate(){
	var name=document.getElementById("usrinput").value;
	var names=document.getElementById("userinput").value;
	if(name.length>=1 || names.length>=1)
	{
	return true;
	}
	else{
	alert('Enter something');
	}
}


};
</script>
	<div id="tot1">
	<center><h1 style="color:white;font-family:papyrus;font-size:35px;text-shadow:1px 2px 5px black;"><b style="color:yellow;">B</b>rain <b style="color:pink">S</b>hoot</h1></center>
	<hr>
	<center>
		<form action="index_play.php" method="post" id="form">
		<span>Form will automatically submit in <b id="timer">5</b><b>seconds</b>.</span><br>
			<input type="text" name="symbol" id="usrinput" class="btn btn-default" style="height:400px;width:30%;font-size:150px;color:teal;font-family:arial;">
			<input type="text" name="ininput" id="userinput" class="btn btn-default" style="height:400px;width:30%;font-size:150px;color:teal;font-family:arial">
		<input type="text" id="timem" name="timemm" style="color:white;font-family:arial;background-color:black;padding:0px;display:none;border:0px;width:3%;border-radius:1px;font-size:15px;">
			<input type="text" id="times" name="times" style="color:white;font-family:arial;background-color:black;padding:0px;display:none;border:0px;width:3%;border-radius:1px;font-size:15px;">
			</form>
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

<style>
body{display:none;background:url('img/b1.jpg');background-repeat:no-repeat;background-size:100% 100%;background-attachment:fixed;/*position:relative;-webkit-animation: myb 1s 1;-webkit-animation-play-state: play;animation: myb 1s 1;animation-play-state: play;}
@-webkit-keyframes myb {from {left:30px;background-color:black;-webkit-transform:rotateY(-360deg);transform:rotateY(-360deg);-moz-transform:rotateY(-360deg);}to {left:1px;}}
@-moz-keyframes myb {from {left:30px;-webkit-transform:rotateY(-360deg);transform:rotateY(-360deg);-moz-transform:rotateY(-360deg);}to {left:1px;}}
@keyframes myb {from {left:30px;-webkit-transform:rotateY(-360deg);transform:rotateY(-360deg);-moz-transform:rotateY(-360deg);}to {left:1px;}}
*/
}
i.my{font-size:1em;color:white;}
</style>