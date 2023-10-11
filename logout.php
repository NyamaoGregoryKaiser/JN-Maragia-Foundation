<?php
session_start();
session_unset();
session_destroy();

// Redirect the user to the login page or any other appropriate page after logout
header("Location: login.php");
exit();
?>