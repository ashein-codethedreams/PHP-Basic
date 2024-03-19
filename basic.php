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
echo "<br>";

//in php , local block also doesn't know global variables

function sayMyName($initial){
    echo "$initial Aye Myat Mon<br>";
}
for($i=0;$i<10;$i++){
    sayMyName($i);
}
echo "<br>";
//foreach is used for looping arrays and objects
$arrays =["AMM","programmer","24"]; //numeric array
echo "array count is ".count($arrays).".<br>";

foreach($arrays as $array){
    echo "$array ";
}
echo "<br>";

$myBio =[
    "name"=>"AMM",
    "job"=>"programmer",
    "age"=>"24"
] ;//associated array

foreach($myBio as $key=>$detail){
     echo "$key = $detail <br>";
}
?>

