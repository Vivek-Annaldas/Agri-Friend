<?php

session_start();

function setSessionVariables($name,$value){
    if(isset($_SESSION)){
        $_SESSION[$name] = $value;
        echo "Session variable set!<br>";
    }else{
        echo "Session does not exist!<br>";
    }
}

function displayAllSessionVariables(){
    if(isset($_SESSION)){
        print_r($_SESSION).'<br>';
    }else{
        echo "Session does not exist!<br>";
    }
}

function displaySessionVariable($name){
    if(isset($_SESSION[$name])){
        echo $name ." : ".$_SESSION[$name]."<br>";
    }else{
        echo 'Session '.$name.  ' is not set!<br>';
    }
}

function modifySessionVariable($name, $value){
    if(isset($_SESSION)){
        $_SESSION[$name] = $value;
        echo "Session variable Modified!<br>";
    }else{
        echo "Session does not exist!<br>";
    }
}

function endSession(){
    session_unset();
    session_destroy();
    echo "Session destroyed!";
}

setSessionVariables('name','pratik');
// endSession();
displaySessionVariable('name');
// modifySessionVariable('name','Tony');
// displayAllSessionVariables();

