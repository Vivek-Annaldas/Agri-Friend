<?php
$age=18;
if($age>=18)
{
echo "You are eligible for voting <br>";
}

$a=5;
$b=10;
if($a>$b)
{
echo "$a is greater than $b <br>";
}
else
{
echo "$a is smaller than $b <br>";
}

$var = 3;

switch ($var) {
  case 1: echo "Today is Monday! <br>";
    break;
  case 2: echo "Today is Tuesday! <br>";
    break;
  case 3: echo "Today is Wenesday! <br>";
    break;
  case 4: echo "Today is Thurday! <br>";
    break;
  case 5: echo "Today is Friday! <br>";
    break;
  case 6: echo "Today is Satyurday! <br>";
    break;
  case 7: echo "Today is Sunday!<br>";
    break;
  default: echo "Invalid option! <br>";
}
?>