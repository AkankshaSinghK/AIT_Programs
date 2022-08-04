<?php

/*

Use the switch statement to select one of many blocks of code to be executed.

Syntax
switch (n) {
  case label1:
    code to be executed if n=label1;
    break;
  case label2:
    code to be executed if n=label2;
    break;
  case label3:
    code to be executed if n=label3;
    break;
    ...
  default:
    code to be executed if n is different from all labels;
}

*/


$weekday = "Friday";

switch($weekday){
    case "Monday":
        echo "It's a Monday.";
        break;
    case "Tuesday":
        echo "Tuesday";
        break;
    case "Wednesday":
        echo "Wednesday";
        break;
    case "Thursday":
        echo "Thursday";
        break;
    case "Friday":
        echo "Friday";
        break;
    case "Saturday":
        echo "Saturday";
        break;
    case "Sunday":
        echo "Sunday";
        break;
    default:
        echo "Sorry not a weekday.";
        break;  
}
?>