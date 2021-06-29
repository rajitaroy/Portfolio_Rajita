<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//     header("location: index.php");
//     exit;
// }
require_once('db_connection.php');

$conn = mysqli_connect("localhost","root","","portfolio");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$subject = trim($_POST['subject']);
$message = trim($_POST['message']);



$sql = "INSERT INTO contact(name,email,subject,message) VALUES ('$name','$email','$subject','$message')";
$result = mysqli_query($conn, $sql);
if($result)
{
  header("Location: success.html");
}
else
{
  echo 'Error :'.mysqli_error($conn);
}


?>