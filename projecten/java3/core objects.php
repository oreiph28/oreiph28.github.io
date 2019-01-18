<!DOCTYPE html>
<html>
<head>
  <title>core objects</title>

 <link rel="stylesheet" href="css/core.css"></link>

</head>


<body>

<h1>  CORE OBJECTS  </h1>
<h2 align="center"> CORE OBJECTS</h2>


<!--                     array function                 -->
<button type="button" onclick="array()"> array </button>
<br/>
<br/>

<!--                    Array undefined function         -->
<button type="button" onclick="array_undefined()">array undefined</button>
<br/>
<br/>

<!--                     CHANGING ARRAY VALUE            -->
<button type="button" onclick="array_change()"> change array value</button>
<br/>
<br/>

<!--                     CREATING ARRAY                         -->
<button type="button" onclick="creating_array()">creating an array</button>
<br/>
<br/>

<!--                    CREATING ARRAY WITHOUT ARGUMENT           -->
<button type="button" onclick="array_noArgument()">noArgument</button>
<br/>
<br/>

<!--                         CREATING A LITTERAL ARRAY          -->
<button type="button" onclick="array_litteral()"> array litteral</button>
<br/>
<br/>


<!--            The length property                             -->

<button type="button" onclick="length_property()">length property</button>
<br/>
<br/>

<!--                        COMDINING ARRAYS CONCAT             -->
<button type="button" onclick="combining_arrays()"> combining arrays</button>
<br/>
<br/>

<!--                           ASSOCIATIVE ARRAYS               -->
<button type="button" onclick="associative_array()"> Associative arrays</button>
<br/>
<br/>


<!--                       THE MATH OBJECT                      -->
<h2 align="center">THE MATH OBJECT </h2>
<button type="button" onclick="math_object()"> math object </button>
<br/>
<br/>

<!--                      THE MATH OBJECT METHODS             -->
<button type="button" onclick="math_squareRoot()">the math object methods</button>
<br/>
<br/>

<!--                      user_input()  math square root       -->
<button type="button" onclick="user_input()">math square root</button>
<br/>
<br/>

<!--                         SetInterval                        -->
<button type="button" onclick="set_Interval()"> set interval to 3 second</button>
<br/>
<br/>


<!--                            clearInterval                     -->      
<button type="button" onclick="clear_Interval()">clear interval</button>
<br/>
<br/>

 <!--                             date_object()                  -->
<button  type="button" onclick="date_object()">the date is:</button>
<br/>
<br/>

                

<!--============================================================-->
<!--                          JAVA  SCRIPTS                     -->
<!--============================================================-->


<!--                  ARRAY SCRIPT                               -->
<script>
 function array(){
var courses = new Array("HTML", "CSS", "JS"); 

<!--  document.write("Arra value="+ courses[10]);  -->
alert("Arra value="+courses[1]);
}
</script>

<!--              ARRAY SCRIPT "UNDEFINED"                      -->
<script>
function array_undefined(){
var courses=new Array("JAVA","HTML","CSS");
alert("Array value="+courses[10]+"."+ "  Its outside of the Array.");
}

</script>


<!--                       CHANGING ARRAY VALUE                  -->
<script>
 function array_change(){
      var names=new Array("Nelio","Martin","Melinda","Jhon");
      alert("Name="+names[1]);

      names[2]="Goerge";
      alert("The name has changed to="+names[2]+".");
}
</script>



<!--                           CREATING ARRAYS     -->
<script>
 function creating_array(){
var programming_Languages=new Array(3);
programming_Languages[1]="HTML";
programming_Languages[2]="CSS";
programming_Languages[3]="JAVA";

alert("Programming languages="+programming_Languages[2]);
}
</script>




<!--         CREATING ARRAY WITHOUT AN ARGUMENT  -->
<script>
  function array_noArgument(){
var noArgument=new Array();
    noArgument[0]="argument1";
    noArgument[1]="argument2";
    noArgument[2]="argument3";
    noArgument[3]="argument4";
alert("this button creates a array without a argument value.\n output="+noArgument[1]);

}
</script>

<!--                ARAY LITTERAL SCRIPT          -->
<script>
  function array_litteral(){
var courses=["HTML","CSS","JS"];
alert("this output is a litteral array witch value="+ courses[2]);
}
</script>


<script>
  function length_property(){
var courses=["HTML","CSS","JS"];
alert("The length of the array is="+courses.length);
}
</script>



<script>

  function combining_arrays(){
var c1=["HTML","CSS"];
var c2=["JS", "C++"];
var courses=c1.concat(c2);
alert("the combined arrays="+courses[2]);

}
</script>



<script>
function associative_array(){

var person=[];
person["name"]="John";
person["age"]=46;
alert("Age="+person["age"]);
}
</script>


<script>
  function math_object(){
alert("the math value=" +Math.PI);
}
</script>


<script>
function math_squareRoot(){
var number= Math.sqrt(4);
alert("The number="+ number);
}
</script>



<script>
 function user_input(){
var n=prompt("Enter a number","");
var answer=Math.sqrt(n);
alert("The square root of "+n+" is "+ answer);
}
</script>

<script>
function set_Interval(){
alert("alert interval has been set to 2 sec");
setInterval(set_Interval,3000);

}
</script>


<script>
function clear_Interval(){
alert("alert interval has been stopped");
clearInterval(set_Interval());
}
</script>


<script>
function  date_object(){
var d=new Date();
var Year=d.getFullYear();
var Month=d.getMonth();
var Day=d.getDate();
var week=d.getDay();
var Hour=d.getHours();
var Minutes=d.getMinutes();
var Seconds=d.getSeconds();
var Milliseconds=d.getMilliseconds();

document.body.innerHTML="Day:"+Day+ " Month:"+ Month+" Year:"+Year+"  Time "+Hour+":" +Minutes+":"+Seconds+":"+Milliseconds+":";
setInterval(date_object,1000);
}
</script>




</body>
</html>






