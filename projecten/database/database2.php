<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="dcterms.created" content="zo, 18 nov 2018 15:19:48 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="database2.css" />
	
    <title>Database</title>
    
   
  </head>
  <body>
 <font color="#40FF1E">
 
 
 <div id="Div_measure">
  
  
  <br/>
<div id="Div_Header" align="center">
<p id="p0">
Connecting to Server
  and retreiving data:
</p>
</div>








<div id="Div_Database" align="center">

<!--============================time/date==========================-->

<p id="p1">
Time of Connection:
</p>

<p id="time"></p>

<br />
<br />
<br />
<br />

 <!--=== Date====-->
 <h3>Date:</h3>
 <p id="date"></p>
 
 <!--===Time=====-->
 <h3>Time:</h3>
 <p id="timer"></p>
</div>

 <!--===Server connection Time=====-->


<!--======================end time/date=========================-->




<!--===============================database connection==============-->

<div id="Div_Connection" align="center">

<p id="p2">
 Database Connecting!
</p>
<br />
<p id="p22">

</p>


</div>



<div id="Div_HostData" align="center">
<p id="p3">
Retreiving Host Data!
</p>

<p id="p33">

</p>

</div>



<div id="Div_Ping" align="center">
<p id="p4">
Ping Host!
</p>
<br />

<p id="p44"></p>
</div>
  
</div>
  
  
 
   <!--====================================Connection Script================================-->
 <div id="Connection" style="display: none;">
  <font color="#40FF1E">

<?php
$i=1;
//while($i==1){
$servername = "localhost";
$username = "oreiph";
$password = "1771128903";
$dbname = "oreiph_webshop";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

else
{
    echo "DATABASE CONNECTED!";
    echo  " ";
	echo  " ";
	echo "Retreived from ". $dbname;
	echo  ":";
	echo " <br>";
	echo " <br>";

	$sql = "SELECT ID, Category ,Product ,Price, Description FROM products ";
	$result=mysqli_query($conn,$sql);


if (mysqli_num_rows($result) > 0) {

   while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["ID"]. " - Name: " . $row["Category"]. " Price " . $row["Price"]. " Product " . $row["Product"].  " Description " . $row["Description"]. "
        <br>";
                                             }
                                  } 
	else 
								   
				{
    echo "0 results";
                 }

mysqli_free_result($result);
mysqli_close($conn);

 echo " <br>";
    echo "Database closed successfully  <br/>";
 	echo "\n\r\f";
	echo " <br />";
 	echo " <br />";
	echo " <br />";
	echo "Awaiting new data!  <br/>";

printf ("%s \n",$row["ID"],$row["Category"],$row["Price"],$row["Product"],$row["Description"]);



 }
?>

</font>

</div>

<!-- ====================================END Connection Script================================ -->

 
 
 
 
 
 
 
 
 
 
 
 
 
 <!-- ====================================================PHP================================
 ===========================================================================================
 =========================================================================================
 
 
 ->
    <!--====================================Ping PHP================================--> 
   <div id="Ping" style="display: none;">
   <font color="#40FF1E">
   
  <?php
   $output = shell_exec('ping 192.168.2.4');
   echo "Shell: ". $output;

  ?>
  </font>
  </div>
   
     <!--====================================END Ping  PHP============================--> 
  

 
 
 
 
 
 <!--===================================================END PHP============================
 ==========================================================================================
 ========================================================================================-->
 
 
 
 
 
 
 
<!-- =====================================================SCRIPTS======================================
======================================================================================================
=======================================================================================================
========================================================================================================-->


<!--======================================ping Script===========================================-->
<script>
var pingDownDates =4;

var t = setInterval(function() {
var para = document.createElement("p");
pingDownDates =pingDownDates-1;

var node = document.createTextNode("Pinging!");
para.appendChild(node);
var element = document.getElementById("p4");
element.appendChild(para);

 if (pingDownDates<0) {
 clearInterval(t);
 
document.getElementById("p4").innerHTML = "Host Pinged:";

var ping = document.getElementById("Ping");
var pingData = Ping.textContent;
document.getElementById("p44").innerHTML = pingData;

 } 
}, 1200);


</script>

<!-- ======================================END ping script===================================== -->




<!-- =========================================TIME/DATE SCRIPTS=======================================-->

  <script>
     var myVar = setInterval(myTimer, 1000);
     function myTimer() {
     var d = new Date();
    document.getElementById("timer").innerHTML = d.toLocaleTimeString();
	document.getElementById("date").innerHTML = d.toLocaleDateString();  
                     }		
					 
			var d = new Date();		 
		  document.getElementById("time").innerHTML = d.toLocaleTimeString();			 
					 
					 			
   </script>





<!-- ==============================DATBASE CONNECTION SCRIPTS=======================================-->


<script>
// Set timer
var countDownDate =4;
// Update the count down every 1 second
var x = setInterval(function() {
countDownDate =countDownDate-1;
var para = document.createElement("p");
var node = document.createTextNode("Connecting!");
para.appendChild(node);

var element = document.getElementById("p2");
element.appendChild(para);

if (countDownDate<0) {
clearInterval(x);
document.getElementById("p2").innerHTML = "Data Database:";

var div3 = document.getElementById("Connection");
var myData = Connection.textContent;

 document.getElementById("p0").innerHTML = "Connected To Server!";

document.getElementById("p22").innerHTML = myData;
  }
}, 1500);
</script>

 
 
<!-- ==============================RETREIVING HOST SCRIPTS=======================================--> 
 
 
<script>
var countDownDates =3;

var s = setInterval(function() {
var para = document.createElement("p");
countDownDates =countDownDates-1;

var node = document.createTextNode("Retreiving!");
para.appendChild(node);
var element = document.getElementById("p3");
element.appendChild(para);

 if (countDownDates<0) {
 clearInterval(s);
 
document.getElementById("p3").innerHTML = "Host Data:";

 

 
var host = location.host;
var para = document.createElement("p");
var host_T = document.createTextNode("host:     ");
var host_D = document.createTextNode(host);
para.appendChild(host_T);
para.appendChild(host_D);
var Id = document.getElementById("p33");
Id.appendChild(para);


var hostname = location.hostname;
var para = document.createElement("p");
var hostname_T = document.createTextNode("Hostname:     ");
var hostname_D = document.createTextNode(hostname);
para.appendChild(hostname_T);
para.appendChild(hostname_D);
var Id = document.getElementById("p33");
Id.appendChild(para);



var url = location.origin;
var para = document.createElement("p");
var url_T = document.createTextNode("Url:     ");
var url_D = document.createTextNode(url);
para.appendChild(url_T);
para.appendChild(url_D);
var Id = document.getElementById("p33");
Id.appendChild(para);

var href = location.href;
var para = document.createElement("p");
var href_T = document.createTextNode("hrf:     ");
var href_D = document.createTextNode(href);
para.appendChild(href_T);
para.appendChild(href_D);
var Id = document.getElementById("p33");
Id.appendChild(para);




var pathname = location.pathname;
var para = document.createElement("p");
var pathname_T = document.createTextNode("Path:     ");
var pathname_D = document.createTextNode(pathname);
para.appendChild(pathname_T );
para.appendChild(pathname_D);
var Id = document.getElementById("p33");
Id.appendChild(para);


var port = window.location.port;
var para = document.createElement("p");
var port_T = document.createTextNode("Port:     ");
var port_D = document.createTextNode(port);
para.appendChild(port_T );
para.appendChild(port_D);
var Id = document.getElementById("p33");
Id.appendChild(para);

	
var protocol = window.location.protocol;
var para = document.createElement("p");
var protocol_T = document.createTextNode("Protocol used:  ");
var protocol_D = document.createTextNode(protocol);
para.appendChild(protocol_T );
para.appendChild(protocol_D);
var Id = document.getElementById("p33");
Id.appendChild(para);
	
	
	
var hash = window.location.hash;
var para = document.createElement("p");
var hash_T = document.createTextNode("Anchor:  ");
var hash_D = document.createTextNode(hash);
para.appendChild(hash_T );
para.appendChild(hash_D);
var Id = document.getElementById("p33");
Id.appendChild(para);
	
	
var search = window.location.search;
var para = document.createElement("p");
var search_T = document.createTextNode("Querystring:  ");
var search_D = document.createTextNode(search);
para.appendChild(search_T );
para.appendChild(search_D);
var Id = document.getElementById("p33");
Id.appendChild(para);	
	
	
var width = window.screen.width;
var para = document.createElement("p");
var width_T = document.createTextNode("Sreen-width:  ");
var width_D = document.createTextNode(width);
var width_px = document.createTextNode("px  ");
para.appendChild(width_T );
para.appendChild(width_D);
para.appendChild(width_px);
var Id = document.getElementById("p33");
Id.appendChild(para);	
	
	
	
var height = window.screen.height;
var para = document.createElement("p");
var height_T = document.createTextNode("Sreen-height:  ");
var height_D = document.createTextNode(height);
var height_px = document.createTextNode("px  ");
para.appendChild(height_T );
para.appendChild(height_D);
para.appendChild(height_px);
var Id = document.getElementById("p33");
Id.appendChild(para);	
	
	
var availWidth = window.screen.availWidth;
var para = document.createElement("p");
var availWidth_T = document.createTextNode("Sreen-Width ex-Taskbar:  ");
var availWidth_D = document.createTextNode(availWidth);
var availWidth_px = document.createTextNode(" px  ");
para.appendChild(availWidth_T );
para.appendChild(availWidth_D);
para.appendChild(availWidth_px);
var Id = document.getElementById("p33");
Id.appendChild(para);		
	
	
var availHeight = window.screen.availHeight;
var para = document.createElement("p");
var availHeight_T = document.createTextNode("Sreen-Heigth ex-Taskbar:  ");
var availHeight_D = document.createTextNode(availHeight);
var availHeight_px = document.createTextNode(" px  ");
para.appendChild(availHeight_T );
para.appendChild(availHeight_D);
para.appendChild(availHeight_px);
var Id = document.getElementById("p33");
Id.appendChild(para);	
		

var pixelDepth = window.screen.pixelDepth;
var para = document.createElement("p");
var pixelDepth_T = document.createTextNode("Sreen-pixelDepth:  ");
var pixelDepth_D = document.createTextNode(pixelDepth);
var pixelDepth_px = document.createTextNode(" bits per pixel ");
para.appendChild(pixelDepth_T );
para.appendChild(pixelDepth_D);
para.appendChild(pixelDepth_px);
var Id = document.getElementById("p33");
Id.appendChild(para);	
	
var colorDepth = window.screen.colorDepth;
var para = document.createElement("p");
var colorDepth_T = document.createTextNode("Sreen-colorDepth:  ");
var colorDepth_D = document.createTextNode(colorDepth);
var colorDepth_px = document.createTextNode(" bits per pixel  ");
para.appendChild(colorDepth_T );
para.appendChild(colorDepth_D);
para.appendChild(colorDepth_px);
var Id = document.getElementById("p33");
Id.appendChild(para);	
		
	
  } 
}, 2500);


</script>
 
  
  
  
   </font>
  </body>
</html>