<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="practical11result.php" method="POST">
        <!-- using list -->
        <label for="">Select your fav language: </label>
        <select name="languages_list[]" size="3">
            <option value="Java">Java</option>
            <option value="Python">Python</option>
            <option value="Ruby">Ruby</option>
        </select>
        <br><br>

        <!-- using combobox -->
        <label for="">Select your fav fruit: </label>
        <select name="fruits[]">
            <option value="Mango">Mango</option>
            <option value="Apple">Apple</option>
            <option value="Banana">Banana</option>
        </select><br><br>

        <!-- using hidden field box -->
        <input type="hidden" name="hidden-field" value="ABC"><br><br>

        <input type="submit" value="Submit" name="submit">
    </form>

</body>
</html>