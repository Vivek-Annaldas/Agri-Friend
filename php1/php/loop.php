<?php
echo "while loop <br>";
$i1 = 1;
while($i1 <= 3)
{
    echo "The number is " . $i1 . "<br>";
	$i1++;
}

echo "<br>";
echo "do-while loop <br>";
$i2 = 1;
do{
    echo "The number is " . $i2 . "<br>";
	$i2++;
}
while($i2 <= 3);

echo "<br>";
echo "for loop <br>";
for($i3=1; $i3<=3; $i3++)
{
    echo "The number is " . $i3 . "<br>";
}

echo "<br>";
echo "for-each loop <br>";
$colors = array("Red", "Green", "Blue");
foreach($colors as $value){
    echo $value . "<br>";
}
?>