<!DOCTYPE html>
<?php include 'backend-search.php'; ?>
<html lang="th">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php include 'head.php';?>
  <style>

.large-font {
  font-size: 48px;
}

.xlarge-font {
  font-size: 64px
}

* {
  box-sizing: border-box;
}


/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 30px;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 100%;
  border-radius: 5px;
  text-align: center;
  margin-bottom: 30px;
  background-color: #f1f1f1;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.img {
  border-radius: 5px 5px 0 0;
  width: 100%;
  height: auto;
}

.container {
  padding: 2px 16px;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #008000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}

</style>
</head>
<body>

<?php include 'navbar.php';?>

<!-- Body -->
<div class="container" style="margin-top:100px; margin: bottom 2000px;">
<div class="margin-top:100px">
<h2>ของรางวัล</h2>
<hr>
<div class="row">
<?php
// Create connection
include 'db_connect.php';

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM rewards ORDER BY score";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) { ?>
    <div class="column col">
     <div class="card">
      <img class="img" src="IMG/rewards/<?php echo $row["img"] ?>" style="height: 300px;" >
        <div class="container">
            <h4><b><?php echo $row["name"] ?></b></h4>
            <p class="price">คะแนน <?php echo $row["score"] ?> แต้ม</p>
            <p><?php echo $row["detail"] ?></p>
            <p><a href="checkreward.php?id=<?php echo $row["idrewards"] . "&score=" . $row["score"];  ?>"><button >แลกของรางวัล</button></a></p>
        </div>
      </div>
    </div>
<?php
  }
} else {
  echo "<br><br><h1>ไม่พบของรางวัล</h1>";
}
$conn->close();
?>
</div>
</div>
</div>

<!-- End Body -->

<?php include 'footer.php'; ?>

</body>
</html>
