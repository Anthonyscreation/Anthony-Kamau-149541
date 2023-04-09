<?php 
session_start();
//Database Connection
include('db.php');

$eid=$_POST['id'];
//Getting Post Values
$username=$_POST['username'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$bio=$_POST['bio'];

//Query for data updation
$query=mysqli_query($conn, "update users set username='$username', firstname='$first_name', lastname='$last_name', email='$email', bio='$bio' where ID='$eid'");

if ($query) {
    unset(
        $_SESSION['username'],
        $_SESSION['email'],
        $_SESSION['first_name'],
        $_SESSION['last_name'],
        $_SESSION['bio'],
    );
    $_SESSION['username'] = $username;
    $_SESSION['first_name']  = $first_name;
    $_SESSION['last_name'] = $last_name;
    $_SESSION['email'] = $email;
    $_SESSION['bio'] = $bio;
    echo "<script>alert('You have successfully update the data');</script>";
    echo "<script type='text/javascript'> document.location ='http://localhost/CAT2/dashboard-users.php'; </script>";
}
else{
    echo "<script>alert('Something Went Wrong. Please try again');</script>";
    echo "<script type='text/javascript'> document.location ='http://localhost/CAT2/dashboard-users.php'; </script>";
}
?>