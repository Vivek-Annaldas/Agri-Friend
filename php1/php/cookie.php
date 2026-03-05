<?php
 $cookie_name="UserName";
 $cookie_value="Shruti";
 setcookie($cookie_name,$cookie_value,time()+(86400 * 30), "/"); // 86400 = 1 day
 
 
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set. <br>";
?>
<html>
<body>
<?php
 session_start();
 if(!isset($_COOKIE[$cookie_name]))
 {
 echo "Cookie named ".$cookie_name." is not set!";
 }
 else
 {
 echo "Cookie ".$cookie_name." is set! <br>";
 echo "Value is : ".$_COOKIE[$cookie_name];
 }
?>
</body>
</html>