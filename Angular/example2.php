<?php

//this is a single line comment

/* 
This a 
multi line comment
*/

echo("<h1>Hello there,HTML embedded php</h1><br>");
echo("MCA DYPIMR<br><br><h4>Variables:</h4><br>");

$name="Kusum";
$num=12;
$arr=array(15,13,'abc');

echo "Hello $name.<br>";
echo($name. " " . $num."<br>");

echo("<br><h4>Array :</h4>");
for($i=0; $i<count($arr); $i++){
	echo($arr[$i]."<br>");
}

echo("<br><h4>Scope of Variable</h4>");

$x = 5;

function test(){
	$x = 9;
	echo($x." inside<br>");
	echo($GLOBALS['x']." outside inside<br>");
	
}
function myTest(){

	echo($GLOBALS['x']." NEW<br>");
}

echo($x." outside<br>");
myTest();
test();


function add($a,$b){
	echo "<h3>Addition is ".$a+$b.".</h3>";
}

add(5,9)


?>