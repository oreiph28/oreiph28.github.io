<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <title>Adres</title>
    <link rel="stylesheet" href="ik.css">
   <link rel="icon" href="images/nelio.png" type="image/gif" sizes="16x16">

  </head>
  
 <body>
   
  <div class="topnav">
    <a href="portfolio.php">Home  </a>
    <a href="ik.php">Me</a>
    <a href="persoon.php">Adress</a>
    <a href="cv.php">CV</a>
    <a href="certificaten.php">Certificates</a>
    <a href="contact.php">Contact</a>
    <a href="Nawoord">Nawoord</a>
  </div>
  
  
 <div align="center" id="div1">
  <p>
   <h3 id="h3">Adres:</h3>
   ********<br />
    *******</b>
    Netherlands<br /> 
   </p>
 </div>
  
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
<div  id="google" style='overflow:hidden;height:350px;width:550px;'>
<div id='gmap_canvas' style='height:350px;width:550px;'></div>
<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
</div>

<script type='text/javascript'>
  function init_map(){
     var myOptions = {zoom:16,center:new google.maps.LatLng(53.2012334,5.799913300000071),mapTypeId: google.maps.MapTypeId.HYBRID};
     map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
     marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(53.2012334,5.799913300000071)});
     infowindow = new google.maps.InfoWindow({content:'<strong>Leeuwarden</strong><br>leeuwarden<br>'});
     google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});
     infowindow.open(map,marker);
                    }
     google.maps.event.addDomListener(window, 'load', init_map);
 </script>

  </body>
</html>
