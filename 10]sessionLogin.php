<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sample credentials (In practice, check these in a database)
    if ($username == 'yash' && $password == 'yash') {
        $_SESSION['username'] = $username;
        header("Location: 10]sessionWelcome.php");
        exit();
    } else {
        echo "Invalid login. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login Form</h2>
    <form method="post" action="">
        <fieldset>
            <legend>Login</legend>
            <label for="username" >Username:</label>
         <input type="text" name="username" required><br>
         <label for="password" >Password: </label>
        <input type="password" name="password" required><br>
        <input type="submit" value="Login">
        </fieldset>
    </form>
</body>
</html>
