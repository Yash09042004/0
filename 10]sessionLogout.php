<?php
session_start();
session_unset();
session_destroy();

header("Location: 10]sessionLogin.php");
exit();
?>
