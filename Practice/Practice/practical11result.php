<?php
        if(isset($_POST['submit'])){
            if(isset($_POST['languages_list'])){
                echo "<br> Languages you selected: <br>";
                foreach($_POST['languages_list'] as $key => $value ){
                    echo $value."<br>";
                }
            }else{
                echo "You didn't select any language!";
            }

            if(isset($_POST['fruits'])){
                echo "<br> Fruit you selected: <br>";
                foreach($_POST['fruits'] as $key => $value){
                    echo $value ."<br>";
                }
            }else{
                echo "You didn't select any fruit!";
            }

            echo "<br> Value of hidden field: ".$_POST['hidden-field']."<br>";
        }