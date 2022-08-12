<!DOCTYPE html>
<?php include 'backend-search.php';?>
<html lang="th">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <?php include ('head.php'); ?>


</head>
<body>

<?php include 'navbar.php';?>

<!-- Body -->
<div class="container" style="margin-top:100px">

<!-- Upload file -->
<?php
      $waste_types = isset($_GET['waste_types']) ? $_GET['waste_types'] : 0;
?>
<div class="row mt-3">
            <div class="col-12">
                  <h3>อัพโหลดรูปภาพการทิ้งขยะ</h3>
                  <p>รูปภาพขณะท่านทิ้งขยะลงถังที่ถูกประเภท</p>
                  <p style="color : red;">(จำกัดขนาดไฟล์รูปต้องไม่เกิน 5 MB)</p>
                  <form name="upload" method="post" action="upload.php" enctype="multipart/form-data">
                        <div class="custom-file">
                        <input type="file" class="custom-file-input" name="fileToUpload" id="fileToUpload" accept="image/*" required>
                        <input type="hidden" name="waste_types_idwaste_types" value="<?php echo $waste_types ?>">
                        <label class="custom-file-label" for="customFile">เลือกไฟล์</label>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary btn-sm d-block mx-auto mt-4 px-5">ตกลง</button>

                  </form>
                  <script>
                        // Add the following code if you want the name of the file appear on select
                        $(".custom-file-input").on("change", function() {
                        var fileName = $(this).val().split("\\").pop();
                        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                        });
                  </script>


            </div>
      </div>
<!-- End Upload file -->

</div>
<!-- End Body -->
<!-- Footer -->
<footer>
  <div class="text-center p-4  fixed-bottom" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <br>
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">สำนักวิทยบริการ มหาวิทยาลัยอุบลราชธานี</a>
  </div>
</footer>
<!-- End -->
</body>
</html>
