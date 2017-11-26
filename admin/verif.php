<?php
//Modified Login Script from Various Sources
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['nis']) || empty($_POST['password'])) {
$error = "<div class='alert alert-danger' role='alert'><i class='fa fa-warning duapuluh' aria-hidden='true'></i><br>NIS and or Password Cannot Be Found</div>";
}
else
{
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
}
if (!isset($_SESSION['CREATED'])) {
    $_SESSION['CREATED'] = time();
} else if (time() - $_SESSION['CREATED'] > 1800) {
    // session started more than 30 minutes ago
    session_regenerate_id(true);    // change session ID for the current session and invalidate old session ID
    $_SESSION['CREATED'] = time();  // update creation time
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
// Define $nis and $password
$nis=$_POST['nis'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
//$connection = mysqli_connect("localhost", "u4158364_fairway", "ndasway01", "u4158364_master"); //osiskanisius.org
$connection = mysqli_connect("localhost", "u4158364_fairway", "ndasway01", "u4158364_cccup_score"); //localhost
// Selecting Database
//$db = mysqli_select_db("u877999005_csnv");
// To protect mysqli injection for Security purpose
$nis = stripslashes($nis);
$password = stripslashes($password);
$nis = mysqli_real_escape_string($connection, $_POST['nis']);
$password = mysqli_real_escape_string($connection, $_POST['password']);
// Selecting Database
//$db = mysqli_select_db("casanova", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($connection, "select * from korbid where password='$password' AND nis='$nis'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['nis']=$nis; // Initializing Session
header("location: masterkey.php"); // Redirecting To Other Page
} else {
$error = "<div class='alert alert-danger' role='alert'>Wrong Password or NIS</div>";
}
mysqli_close($connection); // Closing Connection
}
}
?>