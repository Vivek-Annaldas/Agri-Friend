<?php
session_start();

// Check if form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simulated authentication (replace with your actual authentication logic)
    $username = $_POST['username'];
    $password = $_POST['password'];

    // For demonstration, let's just consider any non-empty username as authenticated
    if(!empty($username)) {
        $_SESSION['username'] = $username;
        header("Location: index.php"); // Redirect to main page after successful login
        exit;
    } else {
        echo "Invalid username or password!";
    }
}
?>

<form action="login.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br>
    <input type="submit" value="Login">
</form>
