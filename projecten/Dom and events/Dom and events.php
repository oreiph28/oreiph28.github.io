<!DOCTYPE html>
<html>



<head>
  <title>Dom and events</title>
  <link rel="stylesheet" href="dom and events.css">
</head>





<body>

<!-- ========================================BODY HEADER============================ -->
<h1 align="center" style="color:blue"> DOM AND EVENTS </h1>
<br/>


<!-- ========================================Passport image======================== -->
<img   src="C:\Users\Room\Pictures\pictures\nelio1.jpg" height="15%"  width="5%" border="3p"x alt="" draggable="true"  autofocus />
<br/>
<br/>
<br/>
<br/>
<br/>



<!-- ================= ========Smiley image========================================== --> 
<img  id="myimg" src="smile.jpg" alt=" Smiley image cannot be found " width="60" height="60"><br/>

<button type="button" onclick="view_smiley()">show smiley picture</button>
<button type="button" onclick="myFunction()" align="rigth">Reload</button>

<p id="p1"> <b>The <i>alternate(alt="" atribute)</i> says:  "smiley" image cannot be found.  </b></p>



<br/>
<br/>
<br/>
<br/>


<!-- ========================changeging the href attributes of a link:============== -->                       
<p id="language"><b>Choose a Programming language:  </p>

<button type="button" onclick="HTML()">HTML</button>
<button type="button" onclick="JAVA()">JAVA</button>
<button type="button" onclick="CSS()">CSS</button>
<button type="button" onclick="PHP()">PHP</button>
<button type="button" onclick="myFunction()" align="rigth">Reload</button>

<p id="programming"  style="color:#AA00AA"> <font size="4"><b> Learn to Program!</b>  </font>  </p>

<a href="" target="_blank">Open link </a>  </b>

<br/>
<br/>
<br/>
<br/>



<!-- ======================  changing <p> elements contents  button================    -->
<h5 style="color:#AA00AA"> <font size="4"> CHANGING ELEMENTS CONTENTS  </font> </h5>

<button type="button" onclick="change_content()">change all paragrhaps contents</button>
<button type="button" onclick="myFunction()" align="rigth">Reload</button>
 
  <p> this is text 1</p>
  <p> this is text 2</p>
  <p style="color:#243764"> this is text 3</p>
  <p> this is text 4</p>
  <p> this is text 5</p>
<br/>
<br/>




<!-- ======================selecting_childNodes()     button=======================-->
<button type="button" onclick="selecting_childNodes()">   selecting_childNodes </button>
<button type="button" onclick="myFunction()" align="rigth">Reload</button>

<div id ="demo">
      <p>Child node 1</p>
      <p>Child node 2</p>
</div>
<br/>
<br/>



<!-- ======================selecting_childNodes()     button=======================-->

<button type="button" onclick="Changing_Style()">Change Style color and witdh</button>
<button type="button" onclick="myFunction()" align="rigth">Reload</button>

<div id="demo1" style="width:50px; color:red" >    <b>Style color and witdh of div element</b>  </span></div>


<br/>
<br/>
<br/>
<br/>



<!-- ======================Creating_Elements    button=======================-->

<h3 style="color:#0000AA"> <font size="3"> 
This creates a new paragraph <br/>
and adds it to the existing div element on the page. 
</font> </h3>

<button type="button" onclick="Creating_Elements()">Creating_Elements</button>
<button type="button" onclick="myFunction()" align="rigth">Reload</button>

<div id ="demo2">Click to add an extra text</div>

<br/>
<br/>
<br/>
<br/>


<!-- ======================Removing_Elements    button=======================-->

<h3 style="color:#0000AA"> <font size="3"> 
This Removes a new paragraph <br/>
</font> </h3>

<button type="button" onclick="Removing_Elements()">Removing_Elements</button>
<button type="button" onclick="myFunction()" align="rigth">Reload</button>

<div id="demo5">
  <p id="p4">This is a paragraph.</p>
  <p id="p5">This is another paragraph.</p>
</div>




<!-- ======================Replacing_Elements    button=======================-->

<h3 style="color:#0000AA"> <font size="3"> 
This Replace a paragraph <br/>
</font> </h3>

<button type="button" onclick="Replacing_Elements()">Replacing_Elements</button>
<button type="button" onclick="myFunction()" align="rigth">Reload</button>

<div id="demo6">
  <p id="p7">This is a paragraph.</p>
  <p id="p9">This is another paragraph.</p>
</div>


<!-- ===============================================================================
=================================JAVA SCRIPTS======================================= 
==================================================================================== -->


<!-- SCRIPT 1                          change content script                         -->
<script>
  function change_content(){
    var arr = document.getElementsByTagName("p");
    for (var x = 0; x < arr.length; x++) {
    arr[x].innerHTML = "all paragraps contents has changed";
                                         }
                           }
</script>



<!-- SCRIPT 2                         slecting child nodes  script                  -->
<script> 
  function selecting_childNodes(){
     var a = document.getElementById("demo");
     var arr = a.childNodes;
     for(var x=0;x<arr.length;x++) {
       arr[x].innerHTML = " Child nodes text has changed";
                                   }
                                 }
</script>



<!-- SCRIPT 3                         Reload page script                           -->
<script>
  function myFunction() {
    location.reload();
}
</script>



<!-- SCRIPT 4                         Changing atributes of image  SCRIPT               -->
<script>
  function  view_smiley(){
    var el = document.getElementById("myimg");
    el.src = "smiley.jpg";
    document.getElementById("p1").innerHTML = "<b> The smiley picture is now showing </b>";
                       }
</script>



<!-- SCRIPT 5                         Changing href tagg JAVA SCRIPT                   -->
<script>
  function JAVA(){
    var el = document.getElementsByTagName("a");
    el[0].href = "https://www.youtube.com/watch?v=WPvGqX-TXP0&t=58s";
    document.getElementById("programming").innerHTML = "<b> Learning JavaScript (JAVA) </b>";
    document.getElementById("language").innerHTML = "<b> You selected <i>JAVA</i>:";
                 }
</script>



<!-- SCRIPT 6                        Changing href tagg  HTML  SCRIPT                   -->
<script>
 function HTML(){
   var el = document.getElementsByTagName("a");
   el[0].href = "https://www.youtube.com/watch?v=bWPMSSsVdPk";
   document.getElementById("programming").innerHTML = "<b> Learning HyperText Markup Language (HTML) </b>";
   document.getElementById("language").innerHTML = "<b>You selected <i>HTML</i>:";
               }
</script>



<!-- SCRIPT 7                       Changing href tagg  CSS    SCRIPT                   -->
<script>
  function CSS(){
   var el = document.getElementsByTagName("a");
   el[0].href = "https://www.youtube.com/watch?v=0afZj1G0BIE";
   document.getElementById("programming").innerHTML = "<b> Learning Cascading Style Sheets (CSS) </b>";
   document.getElementById("language").innerHTML = "<b>You selected <i>CSS</i>:";
                }
</script>



<!-- SCRIPT 8                      Changing href tagg PHP   SCRIPT                     -->
<script>
  function PHP(){
   var el = document.getElementsByTagName("a");
   el[0].href = "https://www.youtube.com/watch?v=ZdP0KM49IVk&t=732s";
   document.getElementById("programming").innerHTML = "<b> Learning Hypertext Preprocessor(PHP) </b>";
   document.getElementById("language").innerHTML = "<b> You selected <i>PHP</i>:";
               }
</script>


  
<!-- SCRIPT 9                     Changing style of html elements SCRIPT               -->
<script>
  function Changing_Style(){
      var x = document.getElementById("demo1");
    
      x.style.color = '#6600FF';
    
      x.style.width = '600px';
                           }
</script>



  
<!-- SCRIPT 10                     Creating Elements                                 -->
<script>
  function Creating_Elements(){
  //creating a new paragraph
    var p = document.createElement("p");
    var node = document.createTextNode("Extra text added at a new line");
    //adding the text to the paragraph
    p.appendChild(node);

    var div = document.getElementById("demo2");
    //adding the paragraph to the div
    div.appendChild(p);
}
</script>

  
<!-- SCRIPT 11                     Removing Elements                                 -->
<script>
  function Removing_Elements(){
    var parent = document.getElementById("demo5");
    
    var child = document.getElementById("p5");
    
    parent.removeChild(child);
}
</script>



<!--                            Replacing Elements                                  -->

<script>
  function Replacing_Elements(){
    var p = document.createElement("p");
    var node = document.createTextNode("This paragraph has been replaced");
    p.appendChild(node);

    var parent = document.getElementById("demo6");
    var child = document.getElementById("p7");
    parent.replaceChild(p, child);
}

</script>



</body>
</html>