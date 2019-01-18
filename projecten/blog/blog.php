<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="dcterms.created" content="ma, 19 nov 2018 08:21:31 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Blog</title>
    <link rel="stylesheet" href="blog.css">
 
  </head>
  <body>

  
<form class="blog" name="Blogform" method="post" action=""> 
   <table align="center" class="table" width="450px">
      <tr>
         <td valign="top">
            <label for="first_name">First Name</label>
         </td>
 
         <td valign="top">    
		    <input  type="text" name="first_name" maxlength="50" size="30">
         </td>
	  </tr>
	  
	  <tr>
         <td valign="top">
	        <label for="last_name">Last Name</label>
	     </td>
	 
         <td valign="top">
	        <input type="text" name="last_name" maxlength="50" size="30">
	     </td>
	   </tr>
	   
	   <tr>
	     <td valign="top">
	        <label for="email">Email</label>
	     </td>
	   
	     <td valign="top">
	        <input type="email" name="email" size="30">
	     </td> 
       </tr>
	   
	   <tr>
	   
	      <td class="bericht" valign="top">
		     <label for="bericht">Bericht</label>
		  </td>
		  
		   <td class="bericht1" >
		   <textarea id="input1 name="bericht" rows="8" cols="26"></textarea>
		     
		   </td>
	    </tr>
	
    </table>
	   
			 <input id="submit" type="button" onclick="mySubmit()" value="Submitform">  
  </form>
  
  
  
  
  
  <!--  ============================================SCRIPTs===================== -->
  
  <script>
  function mySubmit(){
     document.getElementById("myForm").submit();
  }
  </script>
  
  
 
 <!-- ================================================PHP====================== --> 
 <font color="#FDFEFF">
  <?php
$servername = "localhost";
$username = "oreiph";
$password = "1771128903";
$dbname = "oreiph_webshop";
$show_tables = "show DATABASES";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "CREATE DATABASE Testing123";

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

echo " <br>";
echo " <br>";

$sql = "CREATE TABLE Testing123 (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
bericht VARCHAR(300) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}






$conn->close();
?>

  </font>
  </body>
</html>