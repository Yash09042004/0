<?php
// Check if the cookie "user_color" is set
$backgroundColor = isset($_COOKIE['user_color']) ? $_COOKIE['user_color'] : "white";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome Page</title>
</head>
<body style="background-color: <?php echo $backgroundColor; ?>;">
    <h2>Welcome!</h2>
    <p>This page remembers your preferred color.</p>
    <a href="11]delcookie.php">Reset Color Preference</a>
</body>
</html>
