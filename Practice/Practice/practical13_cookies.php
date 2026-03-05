<?php

function createCookie($name, $value){

    setCookie($name,$value,time()+(86400*30),'/'); // will expire in 30 days
}

function displayCookie($name){
    if(isset($_COOKIE[$name])){
        echo $name ." : ".$_COOKIE[$name]."<br>";
    }else{
        echo $name." cookie is not set!";
    }
}

function deleteCookie($name){
    if(isset($_COOKIE[$name])){
        setcookie($name,'',time()-3600,'/');
        echo " Cookie deleted successfully! <br>";
    }else{
        echo $name ." cookie does not exist <br>";
    }
}

function updateCookie($name,$value){
    if(isset($_COOKIE[$name])){
        setCookie($name,$value,time()+(86400*30),'/');
    }
    else{
        echo "Cookie does not exist!";
    }
}

// createCookie('name','Pratik');
// deleteCookie('name');
updateCookie('name','Tony');
displayCookie('name');