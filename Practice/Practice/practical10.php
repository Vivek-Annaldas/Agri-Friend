<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="practical10result.php" method="POSt">
        <label for="">Enter your name: </label>
        <input type="text" name="name" required><br><br>

        <label for="">Enter your email: </label>
        <input type="email" name="email" required><br><br>

        <label for="">Select your Gender: </label><br>
        Male : <input type="radio" name="gender" value="Male"><br>
        Female: <input type="radio" name="gender" value="Female"><br>

        <label for="">Select your favourite Programming Language: </label><br>
        Java: <input type="checkbox" name="java" value="java" ><br>
        Python: <input type="checkbox" name="python" value="python"><br>
        Ruby: <input type="checkbox" name="ruby" value="ruby"><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>