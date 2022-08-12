<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include 'head.php' ?>

    <title>Hello, world!</title>
  </head>
  <body>
<?php include 'navbar.php' ?> <br><br><br>
<?php
include 'db_connect.php';

$sql = "SELECT * FROM `member` WHERE `username` LIKE '".$login_user."'; ";
$result = $conn->query($sql);
if($result->num_rows > 0){
  $row = $result->fetch_assoc();
  $_SESSION['point'] = $row['point'];
  }
?>

  <?php include 'footer.php' ?>
  </body>
</html>
