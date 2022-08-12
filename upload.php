<?php
      session_start();

      if (isset($_SESSION['username'])) {

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $waste_types_idwaste_types = ($_POST["waste_types_idwaste_types"]);
            switch ($waste_types_idwaste_types) {
                case 1:
                    $target_dir = "images/Hazardous_Wastes/";
                    break;
                case 2:
                    $target_dir = "images/Biodegradable_Wastes/";
                    break;
                case 3:
                    $target_dir = "images/Recycle_Wastes/";
                    break;
                case 4:
                    $target_dir = "images/General_Wastes/";
                    break;
              }
            }

          $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
          $fileName = ($_FILES["fileToUpload"]["name"]);
          $uploadOk = 1;
          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


          // Check if file already exists
          if (file_exists($target_file)) {
            echo "<script type='text/javascript'>";
            echo "alert('ขออภัย ไฟล์นี้ีมีอยู่แล้ว');";
            echo "window.location = 'throw.php?waste_types=$waste_types_idwaste_types.php'; ";
            echo "</script>";
            $uploadOk = 0;
          }

          // Check file size > 5MB
          if ($_FILES["fileToUpload"]["size"] > 5000000) {
            echo "<script type='text/javascript'>";
            echo "alert('ขออภัย ไฟล์ของคุณมีขนาดใหญ๋เกินไป');";
            echo "window.location = 'throw.php?waste_types=$waste_types_idwaste_types.php'; ";
            echo "</script>";
            $uploadOk = 0;
          }

          // Allow certain file formats
          if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
          && $imageFileType != "gif" ) {
            echo "<script type='text/javascript'>";
            echo "alert('ขออภัย ระบบอนุญาตให้อัปโหลดไฟล์ประเภท JPG, JPEG, PNG & GIF files เท่านั้น');";
            echo "window.location = 'throw.php?waste_types=$waste_types_idwaste_types.php'; ";
            echo "</script>";
            $uploadOk = 0;
          }

          // Check if $uploadOk is set to 0 by an error
          if ($uploadOk == 0) {
            echo "<script type='text/javascript'>";
            echo "alert('ขออภัย ไฟล์ของคุณไม่ได้รับการอัปโหลด');";
            echo "window.location = 'throw.php?waste_types=$waste_types_idwaste_types.php'; ";
            echo "</script>";


          // if everything is ok, try to upload file
          } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
              //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";

              // Create connection
              include 'db_connect.php';

              // Check connection
              if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
              }

              $username =  $_SESSION['username'];
              $sql = "INSERT INTO score (idscore, proof, no_throw, score, time, waste_types_idwaste_types , member_username)
              VALUES (NULL, '$fileName', 1, NULL , current_timestamp, $waste_types_idwaste_types, $username)";
              if ($conn->query($sql) === TRUE) {

              echo "<script type='text/javascript'>";
              echo "alert('ไฟล์ของคุณได้รับการอัปโหลดเรียบร้อยแล้ว');";
              echo "window.location = 'index.php'; ";
              echo "</script>";
              }
              $conn->close();

            } else {
              echo "<script type='text/javascript'>";
              echo "alert('ขออภัย เกิดข้อผิดพลาดในการอัปโหลดไฟล์ของคุณ');";
              echo "window.location = 'throw.php?waste_types=$waste_types_idwaste_types.php'; ";
              echo "</script>";
            }
          }


    } else {

      echo "<script type='text/javascript'>";
      echo "alert('กรุณาเข้าสู่ระบบ');";
      echo "window.location = 'login.php'; ";
      echo "</script>";

     }

?>
