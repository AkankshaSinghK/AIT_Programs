<?php

$cookie_name = 'User';
$cookie_value = 'MCA';
setcookie($cookie_name,$cookie_value,time()+(86400*3),'/');
echo "Cookie name " . $cookie_name . " Value " . $_COOKIE[$cookie_name];

?>