<html>
<head>
<style type="text/css">
div.cont {
position: relative;
background-image: url(counter.gif);
width:160px;
height:110px;
vertical-align:text-bottom;
}
div.cont div.ans
{
position: absolute;
bottom: 0px;
margin-bottom:15px;
margin-left:7px;
color:black;
font-family: Verdana, Tahoma, Sans-Serif;
font-size: 15pt;
line-height: normal;
}
</style>
<?php
$now = time();
$start = mktime(0, 0, 0, 1, 24, 2007);
$carbonsaving =((($now - $start) * 0.0058774) + 130000);
$format = round($carbonsaving, 2);
// in this example
// $now = a unix timestamp of this very second
// $start is the date that you want the counter to start from sent over //as a unix timestamp
// $carbonsaving is the calculation that you want to perform to get //your base figure
// i.e. total saving = ((date now - start date)* growth rate) + base rate
// this gives us the starting saving all that needs to be done is increment it with javascript
?>
<script type="text/javascript">
// we need to import our server side variable into javascript to let it increment live
var car = <?php  print($format);  ?>;
var rou
function incs()
{
car = car + 0.01;
rou = Math.round(car*100)/100
document.getElementById("carb").innerHTML=rou;
}
// what function incs does is take car and adds 0.01 to it
//rou rounds the figure to 2 dp
//the document.getElementById("carb") can refer to a <p> tag //<span> or whatever and just says with .innerHTML=rou; that the //value between the  results of rou
//hope this helps
//Nicholas King
//ecotricity
</script>
</head>
<!-- body onload setInterval tells the page to load our javascript function and repeat it by every x microseconds, so this repeats every 2 seconds //-->
<body onload="setInterval('incs()', 2000)">
<div class="cont">
<div class="ans">
<span id="carb">Calculating...</span>
</div>
</div>
</body>
</html>