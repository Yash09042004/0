<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $color = $_POST['color'];

    // Setting the cookie with the name "user_color"
    setcookie("user_color", $color, time() + (86400 * 30), "/"); // Expires in 30 days
    echo "Preferred color set to $color.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Set Color Preference</title>
</head>
<body>
    <h2>Select Your Preferred Color</h2>
    <form method="post" action="">
        <label for="color">Choose color:</label>
        <select name="color" id="color">
            <option value="lightblue">Light Blue</option>
            <option value="lightgreen">Light Green</option>
            <option value="lightcoral">Light Coral</option>
            <option value="lightgray">Light Gray</option>
        </select>
        <input type="submit" value="Save Preference">
    </form>
</body>
</html>
