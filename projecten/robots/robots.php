<!DOCTYPE html>
<html lang="en">

  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="robots.css"">
  <title>PHP</title>  
  
  </head>
  
  
  
  <body>
  <div class="wrapper"  style="border:1px solid"> 
       <h1 id="h5" align="center"> 
	   
              Ornelio Reiph<br />
			  Project: Responsive
       </h1>
   </div>

   
   
   <div class="wrapper2">
   <h1 align="center">Humanoid robots</h1>
     <?php
$myfile = fopen("text/text1.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("text/text1.txt"));
fclose($myfile);
?>
</div>
   

<img id="img1" src="images/humanoid1.jpg"  /> 
 
   <div class="wrapper3">
   <h1 align="center">Purpose of robots</h1>
     <?php
$myfile = fopen("text/text2.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("text/text2.txt"));
fclose($myfile);
?>
</div>
   
   
    <div class="wrapper4" style="border:1px solid"> 
       <h1 id="h5" align="center"> 
	   
              <?php
                   echo "The date is " . date("l ") . date ("d/m/Y")."<br>";
                   echo "Opend at: " . date("h:i:s a");
               ?>
       </h1>
   </div>
   
  </body>
</html>