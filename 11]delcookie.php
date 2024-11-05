<?php
// To delete a cookie, set its expiration time in the past
setcookie("user_color", "", time() - 3600, "/");

echo "Color preference has been reset.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Delete Cookie</title>
</head>
<body>
    <p>Color preference cookie deleted.</p>
    <a href="11]welcome.php">Go back to Welcome Page</a>
</body>
</html>
