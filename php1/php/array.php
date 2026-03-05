<?php
$colors = array("Red", "Black", "Blue");
echo "Indexed Array <br>";
foreach ($colors as $x) 
{
  echo "$x <br>";
}
echo "<br> Indexed Array After Manuplating <br>";
$colors[0] = "Grey";
foreach ($colors as $x) 
{
  echo "$x <br>";
}

echo "<br> Associative Array <br>";
$stud = array("name" => "Shruti", "RollNo" => 2, "Dept" => "CM");
foreach ($stud as $x => $y) 
{
  echo "$x: $y <br>";
}
$stud["RollNo"] = 48;
echo "<br> Associative Array After Manuplating <br>";
foreach ($stud as $x => $y) 
{
  echo "$x: $y <br>";
}


echo "<br>Multidimension Array <br>";
$student = array
 (
 array("Shruti",3401,86.45),
 array("Kaushalya",3402,87.42),
 array("Nan",3403,85.43),
 );

for ($row = 0; $row < 3; $row++) 
{
 for ($col = 0; $col < 3; $col++) 
 {
 echo $student[$row][$col]."<br>";
 }
 echo "<br>";
}

$student[0][0]="Mansi";
echo "<br>Multidimension Array After Manuplating <br><br>";
for ($row = 0; $row < 3; $row++) 
{
 for ($col = 0; $col < 3; $col++) 
 {
 echo $student[$row][$col]."<br>";
 }
 echo "<br>";
}
?>