<body onload="result()">
<?php
session_start();
require_once 'connect.php';

?>
<link rel="stylesheet" href="bootstrap.css">
<h4 class="col-md-3">Ticket: 5/-</h4>
<h2 class="col-md-6" style="text-align:center;">Can You?</h2>
<h4 class="col-md-3" style="text-align:right;">Prize: 10/-</h4>
<center><form method="post" action="check_iq.php">
<input type="text" id="input1" name="input1" class="btn btn-warning active" style="width:50%;height:50px;"><br><br>
<input type="text" id="input2" name="input2" class="btn btn-warning active" style="width:50%;height:50px;"><br><br>
<input type="text" id="input3" name="input3" class="btn btn-warning active" style="width:50%;height:50px;"><br><br>
<input type="text" id="input4" name="input4" class="btn btn-warning active" style="width:50%;height:50px;"><br><br>
<input type="text" id="input5" name="input5" class="btn btn-warning active" style="width:50%;height:50px;"><br><br>
<input type="submit" value="Play" class="btn btn-success active" style="width:50%;height:50px;">
</form>
</center>
<h5>Instructions:</h5>
Time limit is total 2 Minutes:<br><br>
<p>1 minute to read and remember</p>
<p>1 minute to tell the correct numbers</p>


<script src="jquery.js"></script>
<script>
function result(){
	$(document).ready(function(){
	var txt="";
	var possibl="1234567890";
	for(j=0;j<10;j++)
	{
	txt +=possibl.charAt(Math.floor(Math.random() * possibl.length));
	}
	document.getElementById("input1").value = txt;
	var txt="";
	var possibl="1234567890";
	for(j=0;j<10;j++)
	{
	txt +=possibl.charAt(Math.floor(Math.random() * possibl.length));
	}
	document.getElementById("input2").value = txt;
	var txt="";
	var possibl="1234567890";
	for(j=0;j<10;j++)
	{
	txt +=possibl.charAt(Math.floor(Math.random() * possibl.length));
	}
	document.getElementById("input3").value = txt;
	var txt="";
	var possibl="1234567890";
	for(j=0;j<10;j++)
	{
	txt +=possibl.charAt(Math.floor(Math.random() * possibl.length));
	}
	document.getElementById("input4").value = txt;
	var txt="";
	var possibl="1234567890";
	for(j=0;j<10;j++)
	{
	txt +=possibl.charAt(Math.floor(Math.random() * possibl.length));
	}
	document.getElementById("input5").value = txt;
});
}
</script>