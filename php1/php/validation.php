<html>
<body>
<form method="post" action="">
<br><br>Enter Name    <input type="text" name="sname">
<br><br>Mobile Number <input type="text" name="mobileno" maxlength=10>
<br><br>Email id      <input type="text" name="email">
<br><br><input type="submit" name="submit" value="Submit">
</form>
</body>
</html>

<?php
$msg=0;
if($_SERVER['REQUEST_METHOD']=="POST")
{
if(empty($_POST['sname'] ))
{
echo "<br>Name can't be blank";
$msg=1;
}
if(!is_numeric($_POST['mobileno']))
{
echo "<br>Enter valid Mobile Number";
$msg=1;
}
$pattern= '/\b[\w.-]+@[\w.-]+\.[A-Z a-z]{2,6}\b/';
if(!preg_match($pattern,$_POST['email']))
{
echo "<br>Enter valid Email id";
$msg=1;
}
if($msg==0)
{
echo "Data has been recorded successfully";
}
}
?>