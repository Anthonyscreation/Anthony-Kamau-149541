<?php
session_start();

unset(
    $_SESSION['user_id'],
    $_SESSION['username'],
    $_SESSION['email'],
    $_SESSION['first_name'],
    $_SESSION['last_name'],
    $_SESSION['bio'],
);

session_destroy();
header('location: http://localhost/CAT2/login.php');

?>