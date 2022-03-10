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
$sql="SELECT email FROM users WHERE email='$_POST[email]'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "User already exists <br>";
    echo "Please Login with your email address and password";
} else {
   $sql = "INSERT INTO users (email, pswd)
   VALUES ('$_POST[email]', '$_POST[pswd]')";
   if ($conn->query($sql) === TRUE) {
   echo "User added successfully";
   echo "<br>";
   echo "You may login Now";
   } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
   }

}
echo '<br><a href="./login.html" ><button type="button" class="mt-1 btn btn-primary">Login</button> </a>';
?>
</body>

</html>