<?php

$dbhost = 'localhost';
$dbuser = 'root';
$password = '123456';
$dbname = 'registeration';

$conn = new mysqli($dbhost,$dbuser,$password,$dbname);

if($conn){
    echo "<h1>Connected Successfully</h1>";
}



if(isset($_GET['Insert'])){
    $sid = $_GET["sid"];
    $sname = $_GET["sname"];
    $query = "INSERT into user(Student_ID,Student_Name) VALUES ($sid,'$sname')";
    $updated = mysqli_query($conn,$query);
    if($updated){
        echo "Update Successful!";
    }
    else{
        echo 'Sorry could not update.';
    }
}

if(isset($_GET['Delete'])){
    $sid = $_GET["sid"];
    $sname = $_GET["sname"];
    $query = "DELETE FROM user WHERE Student_ID=$sid";
    $updated = mysqli_query($conn,$query);
    if($updated){
        echo "Deletion Successful!";
    }
    else{
        echo 'Sorry could not delete.';
    }
}

if(isset($_GET['Update'])){
    $sid = $_GET["sid"];
    $sname = $_GET["sname"];
    $query = "Update user set Student_Name='$sname' WHERE Student_ID = $sid";
    
    $updated = mysqli_query($conn,$query);
    if($updated){
        echo "Updation Successful!";
    }
    else{
        echo 'Could not update';
    }
}

if (isset($_GET['View'])){
//Create SQL query
$query = 'SELECT * FROM user';

//Execute Query
$update = mysqli_query($conn,$query);

// $result = mysqli_fetch_array($update);

// echo "<h3>Student ID : ".$result['Student_ID']."<br>Student Name : ". $result['Student_Name']."</h3>";

echo '<table border=2 style="color:brown;font-size:25px;border-collapse:collapse;"><caption>Student Record</caption><tr><th style="padding:15px;">Student_ID</th><th style="padding:15px;">Student_Name</th>';

while($result = mysqli_fetch_array($update)){
    echo "<tr><td style='padding:15px;'>".$result['Student_ID']."</td><td style='padding:15px;'>".$result['Student_Name']."</td></tr>";
}

echo"</table>";
}


/* 

TASK : Design a form and pass data to another page.The form contains Student ID and Student Name.The buttons are : INSERT,UPDATE(edit) ,DELETE,VIEW(list)
1) Write a code to count number of sessions started using session variable in PHP.
2) Design a HTML form for Library Membership and perform CRUD operations.
3) Database Name : Library, Data Table : Member and Fields : MemberId,Member Name,Joining date.
*/

?>

