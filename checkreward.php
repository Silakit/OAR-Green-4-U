<?php
session_start();
if (isset($_SESSION['username'])) { 
    $idrewards = isset($_GET['id']) ? $_GET['id'] : 0;
    $score = isset($_GET['score']) ? $_GET['score'] : 0;
    // Create connection
    include 'db_connect.php';
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $total = 0;
    $username =  $_SESSION['username'];
    $sql = "SELECT member.username, member.point, score.member_username 
    FROM member
    INNER JOIN score ON member.username = score.member_username 
    WHERE member.username = $username";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        $member_point = $row["point"];
        
      } 
    }

    $sql = "SELECT member.username, member.point, score.member_username , rewards.idrewards, rewards.score
    FROM member
    INNER JOIN score ON member.username = score.member_username 
    INNER JOIN rewards ON rewards.idrewards = $idrewards
    WHERE rewards.score <= member.point";

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {

      $sql = "INSERT INTO orders (idorder, rewards_idrewards, member_username, time)
      VALUES (NULL, $idrewards, $username, current_timestamp)";

      if ($conn->query($sql) === TRUE) {
        $total = $member_point - $score;
        $sql = "UPDATE member SET point = '$total' WHERE username  = '$username'";

        if ($conn->query($sql) === TRUE) {
          echo "<script type='text/javascript'>";
          echo "alert('รับคำขอของท่านแล้ว กำลังตวรจสอบ');";
          echo "window.location = 'reward.php'; ";
          echo "</script>";
        }
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    } else {
      echo "<script type='text/javascript'>";
      echo "alert('คะแนนของคุณไม่พอ');";
      echo "window.location = 'reward.php'; ";
      echo "</script>";
    }
    mysqli_close($conn);
} else { 
    echo "<script type='text/javascript'>";
    echo "alert('กรุณาเข้าสู่ระบบ');";
    echo "window.location = 'login.php'; ";
    echo "</script>";
   }
?>
