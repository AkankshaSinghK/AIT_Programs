<?php

/*

Arithmetic
Assignment
Comparision
Unary
Binary
Boolean
Logical
Ternary
Conditionl

*/

function subtract($a,$b){
	echo "<h3>Subtraction is ".$a-$b.".</h3><br>";
}

subtract(6,7);

//IF-ELSE
$x=10;
if ($x > 10){
	echo "in if<br>";
}else{
	echo "in else<br>";
}

//LOGICAL OPERATOR
function grade($marks){
	if ($marks>=80 && $marks<=100){
		echo "A<br>";
	}elseif($marks>=60 && $marks<=79){
		echo "B<br>";
	}elseif($marks>=40 && $marks<=59){
		echo "C<br>";
	}elseif ($marks<49){
		echo "FAIL<br>";
	}
}
grade(50);
grade(82);
grade(62);
grade(30);


?>