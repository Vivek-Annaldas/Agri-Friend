<?php
session_start();

// Check if the user is already logged in
if(isset($_SESSION['username'])) {
    echo "Welcome back, " . $_SESSION['username'] . "!<br>";
    echo "<a href='logout.php'>Logout</a>";
} else {
    // Display login form
    echo "<form action='login.php' method='post'>";
    echo "Username: <input type='text' name='username'><br>";
    echo "Password: <input type='password' name='password'><br>";
    echo "<input type='submit' value='Login'>";
    echo "</form>";
}
?>
