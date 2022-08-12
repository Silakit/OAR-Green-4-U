<!DOCTYPE html>
<?php include 'backend-search.php'; ?>
<html lang="th">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php include 'head.php';?>

</head>
<body>

<?php include 'navbar.php';?>

<!-- Body -->
<div class="container" style="margin-top:30px">

<!-- Wastes -->
<div style="margin-bottom :30px">
<?php
    $name = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["name"])) {
        $nameErr = "Name is required";
      } else {
        $name = ($_POST["name"]);
      }
    }

    // connection DB
    include 'db_connect.php';

    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT wastes.name, wastes.waste_types_idwaste_types, waste_types.idwaste_types, waste_types.type_name, waste_types.detail
    FROM wastes
    INNER JOIN waste_types ON wastes.waste_types_idwaste_types=waste_types.idwaste_types
    WHERE wastes.name = '$name'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
       $get_id = $row["idwaste_types"];

       // Check And set Textcolers
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
        ?>

          <!-- Type Wastes -->

          <div class="row" style="margin-top:80px">
          <div class="column-66">
            <h1 class="xlarge-font"><b><?php echo $row["name"] ?></b></h1>
            <h1 class="large-font  <?php echo $textcolor; ?>"><b>ควรทิ้งยังไง?</b></h1>
            <p><span style="font-size:36px"><?php echo $textbin; ?> </span><?php echo $row["detail"] ?></p>
            <a href="throw.php?waste_types=<?php echo $get_id ?>"><button class="btn btn-success">ทิ้งเลย</button></a>
          </div>
          <div class=" text-center">
              <img class="img-fluid" src="IMG/Info/<?php echo $infoname; ?>" >
          </div>

          <!-- Type Wastes -->
      <?php
      }
    } else {
      echo "<br><br><h1>ไม่พบชื่อขยะ</h1>";
    }

    mysqli_close($conn);
?>
</div>
</div>



<!-- End Body -->
</div>


<?php include 'footer.php';?>

</body>
</html>
