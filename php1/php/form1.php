<html>
<body>
<form action="" method="POST">
Enter Your Name : 
<input type="text" name="user"/><br><br>
Select Gender : <br>
<input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label><br>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label><br>
<input type="radio" id="other" name="gender" value="other">
<label for="other">Other</label><br><br>
Select Hobby : <br>
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
<label for="vehicle1"> I have a bike</label><br>
<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
<label for="vehicle2"> I have a car</label><br>
<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
<label for="vehicle3"> I have a boat</label><br><br>

<input type="submit" value="Submit" name="submit" />

</form>
</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	
	if(isset($_POST['submit']))
	{
    $name = ($_POST['user']);
    
    $gender = ($_POST['gender']);

    $hobbies = isset($_POST['vehicle1']) ? $_POST['vehicle1'] : '';
    $hobbies1 = isset($_POST['vehicle2']) ? $_POST['vehicle2'] : ''; 
    $hobbies2 = isset($_POST['vehicle3']) ? $_POST['vehicle3'] : ''; 

    echo "<h2>Entered Data:</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Gender: $gender</p>";
    echo "<p>Hobbies: $hobbies $hobbies1 $hobbies2 </p>";
}
}

?>
