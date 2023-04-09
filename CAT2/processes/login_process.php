<?php
session_start();

$mysqli = require __DIR__ . "/db.php";

$password = $_POST["password"];
$username = $_POST["username"];

$user_check_query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($mysqli, $user_check_query);
$user = mysqli_fetch_assoc($result);

if ($user) {
    if ($user['username'] !== $username) {
        echo '<script>alert("Username does not exist!")</script>';
    }

    else if (!password_verify($password, $user['password'])) {
        echo '<script>alert("Password does not match!")</script>';
    }

    else{
        if (password_verify($password, $user['password'])) {
            // prevent session fixation attack
            session_regenerate_id();

            // set username in the session
            $_SESSION['user_id']  = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['first_name']  = $user['firstname'];
            $_SESSION['last_name'] = $user['lastname'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['bio'] = $user['bio'];

            header('location: http://localhost/CAT2/dashboard-users.php');
        }
    }
} else{
    echo '<script>alert("User does not exist!")</script>';
    header('location: http://localhost/CAT2/login.php');
}
?>