<?php

$name ="John wick";

// calculate string length
echo "Word counts in name : ".str_word_count($name)."<br><br>";
echo "Lenght of string name: ".strlen($name)."<br><br>";

// convert to uppercase
$upper = strtoupper($name);
echo "name in Uppercase: ".$upper."<br><br>";

// convert to lower
$lower = strtolower($upper);
echo "name in Lowercase: ".$lower."<br><br>";

// compare two strings
$firstname = "John";
echo "Are both strings equal? : ".strcmp($name,$firstname)."<br><br>";

// reverse the string
echo "Reversing the string: ".strrev($name)."<br><br>";

// pos function
echo "Position of wick in name: ".strpos($name,"wick")."<br><br>";

echo "Replace wick with doe: ".str_replace("wick","doe",$name)."<br><br>";

// repeate the name 10 times
echo "Repeat name 10 times: ".str_repeat($name,10)."<br><br>";

// converting first letter of name into uppercase
echo "name with ucworods: ".$ucwords($name)."<br><br>";