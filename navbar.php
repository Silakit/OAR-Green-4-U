<?php
session_start(); 

include 'head.php';
?>
<nav class="navbar navbar-expand-lg navbar-light fixed-top " style="background: rgb(141, 198, 63);" >
  <div class="container-fluid">
    <a class="navbar-brand text-light" style="text-shadow: 2px 2px 10px #000000;" href="index.php">
      <img src="IMG/Icon/Icon.png"  width="40" height="40" class="d-inline-block align-middle">OAR_App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active  text-light" aria-current="page" href="index.php" style="text-shadow: 2px 2px 10px #000000;">หน้าแรก</a>
        </li>
        <li class="nav-item">
          <div class="dropdown">
          <button type="button" class="btn nav-link text-light dropdown-toggle" data-bs-toggle="dropdown">
            ประเภทขยะ
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="bins.php?id=1">ขยะอันตราย</a></li>
            <li><a class="dropdown-item" href="bins.php?id=2">ขยะย่อยสลายได้</a></li>
            <li><a class="dropdown-item" href="bins.php?id=">ขยะรีไซเคิล</a></li>
            <li><a class="dropdown-item" href="bins.php?id=4">ขยะทั่วไป</a></li>
          </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="statistics.php">สถิติ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="reward.php">ของรางวัล</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="about.php">เกี่ยวกับ</a></li>
      </ul>
      <div class="text-end">
        <?php
        if (isset($_SESSION['username'])) { ?>
          <div class="btn-group">
            <button type="button" class="btn text-light dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
              ยินดีต้อนรับ : <?php echo $_SESSION['username']; ?>
            </button>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
            <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#profileModal">โปรไฟล์</a></li>
            <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#historyModal">ประวัติการแลกของรางวัล</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" type="button" href="logout.php" data-bs-toggle="modal" data-bs-target="#logoutModal">ออกจากระบบ</a></li>
          </ul>
        </div>
        <?php
      } else { ?>
        <a href="login.php"type="button" class="btn btn-outline-dark me-2 shadow-sm">เข้าสู่ระบบ</a>
      <?php } ?>

      </div>
    </div>
  </div>
</nav>

<!-- profile Modal -->
<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Profile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col">
              ชื่อผู้ใช้ : <?php echo $_SESSION['username']; ?>
          </div>
          <div class="col">
              <?php 

              include 'db_connect.php';

              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }

              $username = $_SESSION['username'];
              $sql = "SELECT * FROM member WHERE username = $username";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  echo "คะแนนคงเหลือ :  " . $row["point"];
                }
              }
                $conn->close();
              ?>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- logout Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Logout ?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        คุณต้องการออกจากระบบ ใช่หรือไม่
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ไม่</button>
        <a type="button" class="btn btn-danger" href="logout.php">ใช่ ออกจากระบบ</a>
      </div>
    </div>
  </div>
</div>
<!-- profile Modal -->
<div class="modal fade" id="historyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ประวัติการแลกของรางวัล</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php 

        include 'db_connect.php';

        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $username = $_SESSION['username'];
        $sql = "SELECT orders.rewards_idrewards, orders.member_username, orders.time, rewards.idrewards, rewards.name, rewards.score
        FROM orders 
        INNER JOIN rewards ON orders.rewards_idrewards = rewards.idrewards
        WHERE member_username = $username
        ORDER BY time ASC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          echo   
          "<table class='table '>
          <thead>
            <tr>
              <th>ชื่อของรางวัล</th>
              <th>คะแนน</th>
              <th>วันที่</th>
            </tr>
          </thead>
          <tbody>";
          // output data of each row
          while($row = $result->fetch_assoc()) { 
            $date = date_create($row['time']);
            echo   
            "<tr>" .
            "<td>" . $row["name"] . "</td>" .
            "<td>" . $row["score"] . "</td>" .
            "<td>" . date_format($date,"j M Y") . "</td>" .
          "</tr>" .
          "<tr>";
          }
          echo 
          "<tbody>
          </table>";
        } else {
          echo "ไม่พบข้อมูล";
        }
        $conn->close();
      ?>

        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
