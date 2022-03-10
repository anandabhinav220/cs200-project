<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sci-Tech issue Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php 
   include 'connect_mysql.php';
   
?>


<?php
$sql="USE CS200_project";
$conn->query($sql);
$sql="SELECT email,pswd FROM users WHERE email='$_POST[email]' and pswd='$_POST[pswd]'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "Login Successful";
    echo "<br>";
    echo "Welcome ".$_POST['email'];
    echo "<br> <a href='./Home.php' ><button type='button' class='mt-1 btn btn-primary'>Go to Scitech Website</button> </a>";

} else {
    echo "Login Failed";
    echo "<br>";
    echo "Please Login with your email address and password or signup<br>";
    echo "<a href='./index.php' ><button type='button' class='mt-1 btn btn-primary'>Signup</button> </a>";


}
?>