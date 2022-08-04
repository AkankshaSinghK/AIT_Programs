<?php


    print_r($_REQUEST);
    $username=$_POST['name'];
    $age = $_POST['age'];
    if($age>18 && $age<=100){
        echo "<h1>Welcome $username </h1>";
        
    }
    else{
        echo "<h1>Your age must be greater than 18 or less than 100.</h1>";
    }


?>