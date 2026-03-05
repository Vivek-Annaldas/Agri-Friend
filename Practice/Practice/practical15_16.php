<?php

$servername = "localhost";
$username = "root";
$password = "Pratik";
$database = "demo_db";

$conn = mysqli_connect($servername,$username,$password,$database);

function display($conn){
    if($conn){
        $query = "select * from student";
        $result = mysqli_query($conn,$query);
    
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<br>";
                echo $row["id"] . " " . $row["name"]. "<br>";
            }
        }else{
            echo "0 result!";
        }
        $conn->close();
    }
}

function insertData($conn,$id,$username){

    if($conn){
        $query = "INSERT INTO student(id,name) VALUES('$id','$username')";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "Data inserted successfully!";
        }else{
            echo "Problem while inserting data";
        }
    }else{
        echo "Cannot insert, Problem in database connection!";
    }
}

function deleteRow($conn,$id){
    if($conn){
        $query = "DELETE FROM student where id = '$id'";
        
        if(mysqli_query($conn,$query)){
            echo "<br> Row deleted Successfully<br>";
        }else{
            echo "<br> Problem while deleting row!<br>";
        }
    }else{
        echo "Cannot delete, Problem in database connection!";
    }
}

function updateData($conn, $id, $username){
    if($conn){
        $query = "UPDATE student SET name= '$username' where id = '$id'";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "Data updated successfully!";
        }else{
            echo "Problem while updating data";
        }
    }else{
        echo "Cannot update, Problem in database connection!";
    }
}

// insert data
// insertData($conn,1,'Roy');

// delete data
// deleteRow($conn,3);

// update data
// updateData($conn, 2,'Pragnanddha');

// display data
display($conn);

