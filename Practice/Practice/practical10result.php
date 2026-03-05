<?php
    if($_POST['submit']){
        echo "Name: ".$_POST['name']."<br>";
        echo "Email: ".$_POST['email']."<br>";
        echo "Gender: ".$_POST['gender']."<br>";
        echo "Favourite Programming Languages: <br>";

        if(isset($_POST['java'])){
            echo $_POST['java']."<br>";
        }
        if(isset($_POST['python'])){
            echo $_POST['python']."<br>";
        }
        if(isset($_POST['ruby'])){
            echo $_POST['ruby']."<br>";
        }
    }