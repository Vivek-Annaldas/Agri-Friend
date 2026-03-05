<?php 

$str = "Shruti";
echo "Length of $str is - ".strlen($str)."<br>";

$str2 = "Government Polytechnic, Solapur"; 
echo "Number of words in $str2 is ".str_word_count($str2)."<br><br>"; 


echo "String Built-in Functions <br>"; 	
$str3 = "computer department";
echo "Uppercase of $str3 : ".strtoupper($str3)."<br>";
echo "Lowercase of $str3 : ".strtolower($str3)."<br>";

$subject = "Computer Science in GPS is fun";
echo "<br> Before replacing : ".$subject ;
echo "<br> After replacing : ".str_replace('Science', 'Algorithms', $subject)."<br><br>";


$str4 ="convert the first character to upper-case.";
echo "Before ucwords : ".$str4."<br>";
echo "After ucwords : ".ucwords($str4."<br>");
?>
