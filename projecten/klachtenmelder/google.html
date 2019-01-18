<!DOCTYPE html>
<html>
  <head>
    <title>Place Searches</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAVWqVjNRy6q63B4RNhMSf9lxY9LMHG7CI'></script>

    <meta charset="utf-8">

  <style>
    #gmap_canvas{
      background-image:  url('/nederland.jpg');
  

    background-color:gray;
    border-width:8px;
    border-style: solid;
    border-color: maroon;
    }

    #map{
      display: none;
    }
    #map2{
      display: none;
    }
    #map3{
      display: none;
    }

    #map1{
      display: none;
    }

    #map12{
      display: none;
    }

    </style>

  </head>

<body>


<!-- input zipcode -->
    <form >

      <div class="form-group">
     
        <button type="button" class="btn btn-default" onclick="lonlat()">Enter Postcode</button>
        <input type="text" placeholder="Enter a zip code" id="zip"  autocomplete="off"/>
      </div>

    
       
      <!--<input class="button" name="submit" type="submit" value="submit" onclick="someFunc()" /> -->
    </form>

   



    <p id="map" type="hidden"></p>
    <p id="map2" type="hidden"></p>
    <p id="map3" type="hidden" >POSTCODE</p>
    <p id="map1" type="hidden" >52.3750823</p>
    <p id="map12" type="hidden">4.6259389</p>


    <hr>


<div style='overflow:hidden;height:616px;width:936px;'>

       <div id='gmap_canvas' style='height:600px;width:920px;'></div>
       <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
</div> 

<a href='http://maps-generator.com/nl'>http://Maps-Generator.com/nl</a> 

<script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=77788cb9ebd27122950fb30c8b73eead76e8bd1f'></script>




<!-- zipcode to long/lat -->
<script>

    function lonlat() {
     var zipCode = document.getElementById("zip").value;
     var lat_out = document.getElementById('map');
    var lon_out = document.getElementById('map2');
    var input = document.getElementById('zip').value;
    document.getElementById("map3").innerHTML=input;
        var xhr = $.get('https://maps.googleapis.com/maps/api/geocode/json?address=' + zipCode + '&key=AIzaSyDVPLLlJAQ679Frd0gu11khJ9mW02wsvWQ');
   
        xhr.done(function(data) {

		lat_out.innerHTML = data.results[0].geometry.location.lat;
    lon_out.innerHTML = data.results[0].geometry.location.lng;
    lonlat_l();
    });

    }
    
</script>



<!-- LOAD GOOLGE MAP -->
<script type='text/javascript'>

function lonlat_l() {


x=document.getElementById("map").innerHTML;
y=document.getElementById("map2").innerHTML; 
z=document.getElementById("map3").innerHTML; 

                            var myOptions = {zoom:12,center:new google.maps.LatLng(x,y),mapTypeId: google.maps.MapTypeId.HYBRID};
                            map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                            marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(x,y)});
                            infowindow = new google.maps.InfoWindow({content:z});
                            //infowindow = new google.maps.InfoWindow({content:'<strong>klachtenmelder</strong><br>De Centrale 32<br>8924 CZ Leeuwarden<br>'});
                            google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);
                                                                                                                  });
         
         infowindow.open(map,marker);
                   }google.maps.event.addDomListener(window, 'load', init_map);

                   </script>
</body>
</html>


