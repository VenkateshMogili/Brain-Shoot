<html>
<head>
<title>Autosubmit form</title>
<link rel="stylesheet" href="bootstrap.css">
<script src="auto_submit.js"></script>
</head>
<body>
<div class="container">
<div class="main">
<form action="index_play.php" method="post" id="form">
<h2>Javascript Autosubmit form</h2>
<span>Form will automatically submit in <b id="timer">20</b>.<b>seconds</b>.</span>
<label>Symbol</lable>
<input type="text" name="name" id="name" placeholder="name"/>
</form>
</div>
</div>
</body>
</html>

<script>
window.onload=function(){
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
	var name=document.getElementById("name").value;
	if(name.length>=1)
	{
	return true;
	}
	else{
	alert('Enter something');
	}
}
};
</script>