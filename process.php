<body onload="startTime()">


<b>Remaining Time:</b> <b id="timem" style="color:teal;text-align:center;"></b> Minutes <br><br>
<center><b id="times" style="font-size:500px;color:teal;text-align:center;"></b></center>
<script>
function startTime(){
var d=new Date();
var h=d.getHours();
var m=d.getMinutes();
var s=d.getSeconds();
var mm=checkTime(m);
var ss=checkTime(s);
document.getElementById("timem").innerHTML="0";
document.getElementById("times").innerHTML=60-s;

var t=setTimeout(function(){startTime()},500);
}
function checkTime(i){
  if (i<10){
  i= "0" +i 
  };//add zero in fornt of numbers <10
  return i;
}
</script>