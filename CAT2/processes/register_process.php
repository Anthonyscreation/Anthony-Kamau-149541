<?php
$mysqli = require __DIR__ . "/db.php";

$password_1 = $_POST["password"];
$password_2 = $_POST["confirm_password"];
$email = $_POST["email"];

if ($password_1 != $password_2) {
    echo '<script>alert("The two passwords do not match")</script>';
}

$user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
$result = mysqli_query($mysqli, $user_check_query);
$user = mysqli_fetch_assoc($result);

if ($user) { // if user exists
    if ($user['email'] === $email) {
        echo '<script>alert("Email Address already exists!")</script>';
    }

    if ($user['username'] === $username) {
        echo '<script>alert("Username already exists!")</script>';
    }
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, firstname,lastname, email, password) 
VALUES (?,?,?,?,?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param(
    "sssss",
    $_POST["username"],
    $_POST["first_name"], 
    $_POST["last_name"], 
    $_POST["email"], 
    $password_hash
);

$stmt->execute();
header('location: http://localhost/CAT2/login.php');
echo '<script>alert("Sign Up Successful!")</script>';

?>