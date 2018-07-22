<!DOCTYPE html>
<html>
<body onload="startTime()">
<mark id="time" style="color:white;font-family:arial;background-color:black;padding:0px;border-radius:1px;font-size:15px;"></mark>
</body>
</html>
<script>
function startTime(){
var d=new Date();
var h=d.getHours();
var m=d.getMinutes();
var s=d.getSeconds();
var mm=checkTime(m);
var ss=checkTime(s);
document.getElementById("time").innerHTML=h+":"+m+":"+s;

var t=setTimeout(function(){startTime()},500);
}
function checkTime(i){
  if (i<10){
  i= "0" +i 
  };//add zero in fornt of numbers <10
  return i;
}
</script>