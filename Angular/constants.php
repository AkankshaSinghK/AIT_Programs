<?php 
    /*

- const
- define(name, value, case-insensitive) 
Parameters:

name: Specifies the name of the constant
value: Specifies the value of the constant
case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false(optional)

*/
const myconst = "Heyy";
define('Admissions','Admissions are open...');
echo "Hey constant value is ".Admissions;
echo "<br> my constant ".myconst;

echo strrev('HELLO');
?>