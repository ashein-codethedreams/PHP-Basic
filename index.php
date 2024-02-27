<?php 

//global
$name ="Ashein";
// echo $name;

function showAge(){
    global $name; //declaration of global var in local
 $age=24;
 echo "age of ".$name." is ".$age. "<br>";
}
showAge();

//in php , local block also doesn't know global variables

function sayMyName($initial){
    echo "$initial Aye Myat Mon<br>";
}
for($i=0;$i<10;$i++){
    sayMyName($i);
}

?>

