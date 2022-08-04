<?php

$myString = "This is a string.";
echo "Reverse : ". strrev($myString)."<br>";
echo "Length : ". strlen($myString)."<br>";
echo "Word Count : " . str_word_count($myString)."<br>";
echo "Replace : " . str_replace('string','program',$myString)."<br>";


?>