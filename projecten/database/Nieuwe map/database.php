<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
   <link rel="stylesheet" href="data.css"></link>
    <title>Database connect</title>
  </head>
  
  <body>
  
  <font color="#40FF1E">
  <p class="time"></p>

<script>
var myVar = setInterval(myTimer, 1000);

function myTimer() {
    var d = new Date();
    document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
</script>
  
  
  
  
  
  
  
  
  <p id="p1" align="center">
  Connecting to database<br/>
  and retreiving data:
  </p>
  </font>


  


  <div id="dom-target" style="display: none;">
    
  
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


 
    echo "database connected successfully.\n <br/>";

	echo "Retreived from ".$dbname;
	echo ":";
	echo " <br>";
	echo " <br>";
	

	$sql = "SELECT ID, Category ,Product ,Price, Description FROM products ";
	
	$result=mysqli_query($conn,$sql);

// Associative array

if (mysqli_num_rows($result) > 0) {

 while($row = mysqli_fetch_assoc($result)) {
   echo "id: " . $row["ID"]. " - Name: " . $row["Category"]. " Price " . $row["Price"]. " Product " . $row["Product"].  " Description " . $row["Description"]. "
<br>";
  }
} else {
    echo "0 results";
}



//printf ("%s \n(%s)\n(%s)\n(%s)\n(%s)\n",$row["ID"],$row["Category"],$row["Price"],$row["Product"],$row["Description"]);

	
	// Free result set
mysqli_free_result($result);

mysqli_close($conn);
	
	echo " <br>";
 echo "Database closed successfully  <br/>";
 	echo "\n\r\f";
	echo " <br />";
 	echo " <br />";
	echo " <br />";
	echo "Awaiting new data!  <br/>";
 }

//}

   

?>

</font>

</div>











 <div id="div1" align="center">
<p id="p2">Webpage wil be connected to the server <br/>
Please wait a moment!
</p>
</div>



 <h1 align="center" id="demo" style="font-size:16px;"><br/></h1>
<script>
// Set timer
var countDownDate =4;
// Update the count down every 1 second
var x = setInterval(function() {
countDownDate =countDownDate-1;
// Display the result in the element with id="demo"
//document.getElementById("demo").innerHTML = countDownDate;

var para = document.createElement("p");
var node = document.createTextNode("Connecting!");
para.appendChild(node);

var element = document.getElementById("div1");
element.appendChild(para);

// If the count down is finished, write some text 
 if (countDownDate<0) {
 clearInterval(x);
 document.getElementById("div1").innerHTML = "You are connected to the server";
sleep();
  var div3 = document.getElementById("dom-target");
    var myData = div3.textContent;
	//document.getElementById("div1").innerHTML = myData,"<br/>";
	document.getElementById("div1").innerText = myData;
  }
}, 500);
</script>



 <script>
 function sleep1(){
 setTimeout(myFunction, 3000);
 }
 </script>

 <script>
  function sleep(){
var countDownDate =4;
var x = setInterval(function() {
countDownDate =countDownDate-1;
if (countDownDate<0) {
 clearInterval(x);
  }
}, 500);
}
</script>




  </body>
  
</html>