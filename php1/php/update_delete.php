<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database1";
$conn =mysqli_connect($servername,$username,$password,$dbname);
if (!$conn)
{
die ("Connection failed: ". $conn->connect_error);
}
echo "Connected successfully <br>";
$sql = "UPDATE table1 SET firstname='shruuuu' WHERE id='1'";
if(mysqli_query ($conn,$sql))
{
  echo "Record updated successfully <br>";
} 
else 
{
 echo "could not update record: " . mysqli_error ($conn)."<br>";
}


$data="delete from table1 WHERE id=2";
if(mysqli_query ($conn,$data))
{
  echo "Record deleted successfully <br>";
} 
else 
{
 echo "could not delete record: " . mysqli_error ($conn)."<br>";
}

echo "<br><br>Retriving data : <br>";
$data1 = "SELECT id, firstname, lastname FROM table1";
$result = mysqli_query($conn,$data1);
if(mysqli_num_rows($result) > 0) 
{
 while ($row = mysqli_fetch_assoc($result))
{
 echo "id: " . $row["id"] . " . Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
 }
} 
else
{
 echo "0 results";
}
?>