<?php 

session_start();
$_SESSION['name'] = 'Welcome ABC';
echo $_SESSION['name'];

?>