<?php 

//global
$name ="Ashein";
// echo $name;

function showAge(){
    global $name; //declaration of global var in local
 $age=24;
 echo "age of ".$name." is ".$age;
}
showAge();

//in php , local block also doesn't know global variables
?>

