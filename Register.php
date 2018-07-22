<title>Brain Shoot</title>
<?php
session_start();
require_once 'connect.php';

?>
<link rel="stylesheet" href="bootstrap.css">
<link rel="stylesheet" href="font/css/font-awesome.css">
<div class="col-md-12" style=""><h1 style="color:white;font-family:papyrus;text-shadow:1px 2px 5px black;">
<center><b style="color:yellow;">B</b>rain <b style="color:pink">S</b>hoot
<button style="float:right;border-radius:100px;border:0px;background-color:#3399cc;color:white;cursor:pointer;font-family:arial;padding:2px;border-right:2px solid yellow;border-top:2px solid white;border-left:2px solid pink;border-bottom:2px solid magenta;" id="playy">Play</button></h1></center>
<center>
<div id="animate">
<img src="shooting.jpg" style="border:0px;width:650px;height:600px;border-radius:10px;" id="shoot">
<img src="brain.jpg" id="brain" style="width:550px;height:600px;border-radius:10px;"> 
<i class='fa fa-thumbs-o-up my' style='font-size:10em;color:orange;' id="win"><b style='font-family:comic sans ms;text-shadow:1px 2px 3px white;'>Win</b>  <b style='color:white;font-family:Broadway;text-shadow:1px 2px 3px red'> or </b> </i>
 <i class='fa fa-thumbs-o-down my' style='font-size:10em;color:green;' id="lose"><b style='font-family:comic sans ms;text-shadow:1px 2px 3px lime;'>Lose</b></i>

<img src="Bs.png" style="border:0px;width:80%;height:100%;border-radius:10px;display:none" id="brains"><br>
<img src="process/1.png" style="border:0px;width:100%;height:500px;border-radius:10px;display:none" id="p1">
<img src="process/2.png" style="border:0px;width:100%;height:500px;border-radius:10px;display:none" id="p2">
<img src="process/3.png" style="border:0px;width:100%;height:500px;border-radius:10px;display:none" id="p3">
<img src="process/4.png" style="border:0px;width:100%;height:500px;border-radius:10px;display:none" id="p4">
<img src="process/5.png" style="border:0px;width:100%;height:500px;border-radius:10px;display:none" id="p5">
<img src="process/6.png" style="border:0px;width:100%;height:500px;border-radius:10px;display:none" id="p6">
<img src="process/7.png" style="border:0px;width:100%;height:500px;border-radius:10px;display:none" id="p7">
<center><i style="color:yellow;position:fixed;bottom:0%;left:30%;">&copy; Developed by Venkatesh Mogili,N130010 AmmaNannaku Prematho</i></center>
</div>
</center>
<br><br>
</div>
<div class="col-md-12" id="register" style="display:none;">
<button id="back" style="width:50px;height:50px;border-radius:100px;background-color:red;color:white;border-right:5px solid yellow;border-top:5px solid white;border-left:5px solid pink;border-bottom:5px solid magenta;"><--</button>
<center>
<form method="post" action="register_action.php">
<input type="text" name="user" class="btn btn-default" autofocus required placeholder="Enter Your Name:" style="font-size:70px;color:lime;box-shadow:1px 2px 10px black"><br>
<input type="text" name="inputt" class="btn btn-default" required placeholder="Choose a number" style="font-size:70px;color:blue;box-shadow:1px 2px 10px black"><br>
<input type="submit" value="Start Playing" class="btn btn-primary" style="font-size:30px;box-shadow:1px 2px 10px black" id="play">
</form>
</center><br>
<center><i style="color:yellow;position:fixed;bottom:0%;left:30%;">&copy; Developed by Venkatesh Mogili,N130010 AmmaNannaku Prematho</i></center>
</div>
<script src="jquery.js"></script>
<script>
$(document).ready(function(){
	$("#playy").click(function(){
	$("#animate").hide("fast");
	$("#back").show("fast");
	$("#register").slideToggle("fast");
	$("#register").delay(2000).slideDown("fast").animate({left:"0px",width:"100%"});
	});
	$("#back").click(function(){
	$("#animate").show("fast");
	$("#back").hide("fast");
	$("#register").slideToggle("fast");
	$("#register").delay(200).slideUp("fast").animate({left:"0px",width:"100%"});
	});
	for(i=0;i<2;i++)
	{
	$("#shoot").slideToggle(2000);
	$("#win").show("fast");
	$("#shoot").hide("slow");
	$("#brain").slideToggle(2000);
	$("#lose").show("fast");
	$("#brain").hide("slow");
	}
	$("#brains").fadeToggle("slow");
	$("#brains").fadeIn(2000);
	$("#brains").attr("src","1.png");
	$("#win").fadeToggle("slow");
	$("#win").fadeIn(2000);
	$("#brains").attr("src","2.png");
	$("#win").fadeToggle("slow");
	$("#brains").attr("src","3.png");
	$("#brains").attr("src","Bs.png");
	$("#lose").fadeToggle("slow");
	$("#lose").fadeIn("slow");
	$("#lose").fadeOut(2000);
	$("#p1").fadeIn(2000);
	$("#p2").fadeToggle(2000);
	$("#p2").fadeIn("slow");
	$("#p3").fadeIn("slow");
	$("#p4").fadeIn("slow");
	$("#p5").fadeIn("slow");
	$("#p6").fadeIn("slow");
	$("#p7").fadeIn("slow");
	$("#brains").fadeIn(2000);
});
</script>
<style>
form{width:50%;background-color:lightgray;}
input{width:100%;height:150px;font-size:70px;}
input[type="text"]:hover{background-color:#3366cc;color:white;cursor:typing;transition:0.7s;}
input[type="text"]:focus{background-color:black;color:white;border:30px solid lime;cursor:typing;transition:0.7s;}
body{background:url('img/e.jpg');background-repeat:no-repeat;background-size:100% 100%;background-attachment:fixed;}
#play:hover{transition:0.7s;cursor:pointer;background-color:navy;color:yellow;}
</style>