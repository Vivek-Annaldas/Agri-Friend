<html>
<head>
<title></title>
</head>
<body>
<form action="" method="post" name="f1">
Select Vegetable : <br>
<select name="foods[]" size="3">
<option value="Tomatoes">Tomatoes</option>
<option value="Cucumbers">Cucumbers</option>
<option value="Celery">Celery</option>
</select><br><br>
<input type="submit" name="submit1" value="Submit"/><br><br><br><br>
</form>


<form action="" method="post" name="f2">
Select Fruit : <br>
<select name="foods1[]">
<option value="Mango">Mango</option>
<option value="Banana">Banana</option>
<option value="Watermelon">Watermelon</option>
<option value="Grapes">Grapes</option>
</select><br><br>
<input type="submit" name="submit1" value="Submit"/>
</form>

<input type="hidden" name="hidden">

<?php
if(isset($_POST['foods'])) 
{
    $vegetables = $_POST['foods'];
    echo 'You have chosen ';
    foreach($vegetables as $vegetable) 
	{
        echo $vegetable . "<br>";
    }
} 
else 
{
    echo "You haven't selected any vegetables <br>";
}

if(isset($_POST['foods1'])) 
{
    $fruits = $_POST['foods1'];
    echo 'You have chosen ';
    foreach($fruits as $fruit) 
	{
        echo $fruit . "<br>";
    }
} 
else 
{
    echo "You haven't selected any fruit";
}

$_POST['hidden']="2";
if(isset($_POST['hidden'])) 
{
    $hiddenValue = $_POST['hidden'];
    echo "<br> Hidden value is $hiddenValue";
}
else 
{
    echo "<br> Hidden value is not set";
}
?>
</body>
</html>
