<!DOCTYPE html>
<html lang="th">
<head>
  <title>ถังขยะ</title
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php include 'head.php'; ?>

</head>
<body>

<?php include 'navbar.php';?>

<!-- Body -->
<div class="container" style="margin-top:30px">

<div style="margin-bottom :30px">

<?php

// connection DB
include 'db_connect.php';

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

    // Check And set Textcolers
    $get_id = isset($_GET['id']) ? $_GET['id'] : 0;

    $check = $get_id;
    $textcolor = '';
    $textbin = '';
    $infoname = '';
    switch ($check) {
        case 1:
            $textcolor = 'text-danger';
            $textbin = 'ถังขยะสีแดง';
            $infoname = 'Info_red.jpg';
          break;
        case 2:
            $textcolor = 'text-success';
            $textbin = 'ถังขยะสีเขียว';
            $infoname = 'Info_green.jpg';
          break;
        case 3:
            $textcolor = 'text-warning';
            $textbin = 'ถังขยะสีเหลือง';
            $infoname = 'Info_yellow.jpg';
          break;
        case 4:
            $textcolor = 'text-primary';
            $textbin = 'ถังขยะสีฟ้า';
            $infoname = 'Info_blue.jpg';
          break;
        default:
            $textcolor = 'text-body';
      }

$sql = "SELECT idwaste_types, type_name, detail, images FROM waste_types WHERE idwaste_types='$get_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) { ?>

<!-- Type Wastes -->
<div class="row" style="margin-top:80px">
  <div class="row">
    <div class="column-66">
      <h1 class="xlarge-font"><b><?php echo $row["type_name"] ?></b></h1>
      <h1 class="large-font  <?php echo $textcolor; ?>"><b>ควรทิ้งยังไง?</b></h1>
      <p><span style="font-size:36px"><?php echo $textbin; ?> </span><?php echo $row["detail"] ?></p>
      <a href="throw.php?waste_types=<?php echo $get_id ?>"><button class="btn btn-success">ทิ้งเลย</button></a>
    </div>
    <div class=" text-center">
        <img class="img-fluid" src="IMG/Info/<?php echo $infoname; ?>" >
    </div>
  </div>
</div>
<!-- End Type Wastes -->
</div>
<?php
  }
} else {
    echo "No matches found";
}

$conn->close();
?>






<!-- End Body-->
</div>


<?php include 'footer.php';?>

</body>
</html>
