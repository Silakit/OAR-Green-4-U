<!DOCTYPE html>
<?php include 'backend-search.php'; ?>
<html lang="th">
<head>
  <title>About</title>
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
    margin-bottom: 20px;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 100%;
  border-radius: 5px;
  text-align: center;

}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 5px 5px 0 0;
}

.container {
  padding: 2px 16px;
}

</style>
</head>
<body>

<?php include 'navbar.php';?>

<!-- Body -->
<div class="container" style="margin-top:100px">
<div class="column-66">
    <h2>หลักการและเหตุผล</h2>
    <hr>
    <p style="text-indent: 2.5em;">ด้วยสำนักวิทยบริการ มหาวิทยาลัยอุบลราชธานี ได้จัดทำโครงการ Green Library ที่เกี่ยวข้องกับการประหยัดพลังงานและการรักษาสิ่งแวดล้อม ซึ่งการคัดแยกขยะแต่ละประเภทเป็นหนึ่งในนโยบายของ Green Library เพื่อเป็นการแก้ปัญหาในเรื่องการคัดแยกขยะที่ไม่ถูกต้อง </p>
    <p style="text-indent: 2.5em;">ดังนั้น สำนักวิทยบริการ จึงได้พัฒนาคิดค้นแอปพลิเคชันคัดแยกขยะเพื่อสิ่งแวดล้อมขึ้น เพื่อช่วยในการคัดแยกขยะและให้ความรู้ในเรื่องการคัดแยกขยะแต่ละประเภทอย่างถูกวิธี นอกจากนี้ยังสามารถเก็บคะแนน เพื่อนำคะแนนมาใช้ในสำนักวิทยบริการ เช่น การยืมหนังสือได้นานกว่าที่กำหนด การแลกของรางวัล เป็นต้น</p>
    <br>
    <h2>ผู้พัฒนา</h2>
    <hr>
</div>

<div class="row">
  <div class="column">
    <div class="card">
    <img src="IMG/photos/img_avatar.png" alt="Avatar" style="width:100%">
    <div class="container">
        <h4><b>สมประสงค์ ศาลาน้อย</b></h4>
        <p>Programmer</p>
    </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
    <img src="IMG/photos/img_avatar.png" alt="Avatar" style="width:100%">
    <div class="container">
        <h4><b>รติพงษ์ ศิลากิจ</b></h4>
        <p>Programmer</p>
    </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
    <img src="IMG/photos/img_avatar2.png" alt="Avatar" style="width:100%">
    <div class="container">
        <h4><b>รัชนีกร เหมือนมาตย์</b></h4>
        <p>Graphic design</p>
    </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
    <img src="IMG/photos/img_avatar2.png" alt="Avatar" style="width:100%">
    <div class="container">
        <h4><b>ชนิตา ศรีสุวรรณ</b></h4>
        <p>Graphic design</p>
    </div>
    </div>
  </div>
</div>

</div>
<!-- End Body -->
<br><br>
<?php include 'footer.php' ?>

</body>
</html>
