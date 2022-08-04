<?php
/* 

In PHP, there are three types of arrays:

Indexed arrays - Arrays with a numeric index
Associative arrays - Arrays with named keys
Multidimensional arrays - Arrays containing one or more arrays

The count() function is used to return the length (the number of elements) of an array.

There are two ways to create indexed arrays:

---The index can be assigned automatically (index always starts at 0), like this:

$cars = array("Volvo", "BMW", "Toyota");
or the index can be assigned manually:

$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}


---Associative arrays are arrays that use named keys that you assign to them.

There are two ways to create an associative array: 

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
or:

$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

*/

$names = array("ABC"=>"12","XYZ"=>"15","PQR"=>"16");
$fruits = array("Apple","Grapes","Mango");
echo("<h1>Indexed Array</h1>");
for($x=0;$x<count($fruits);$x++){
    echo ($x+1).". ".$fruits[$x]."<br>";
}
echo("<h1>Associative Array</h1>");
foreach($names as $key=>$value){
    echo "Key: ".$key." => "."Value: ".$value."<br>";
}

/*

Question: Create an array for MCA subjects and marks.Calculate percentage for the same. 

*/

$scores = array('AIT'=>85,'Python'=>86,'ADMS'=>70);
$sum = 0;
foreach($scores as $subject=>$score){
   
    $sum += $score;
}
$percentage = $sum/count($scores);
echo "<h3>Result is : ".number_format($percentage,2)."</h3>";    
?>