<?php session_start(); include 'head.php'; ?>
<!DOCTYPE html>
<html lang="th" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign in - OAR_App</title>

  <link rel="icon" href="IMG/Icon/Icon.png">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

  <style>
.bg{
  background-image: url("IMG/bg-login.png");
  background-repeat: no-repeat;
  background-size: cover;
}
  </style>

</head>

<body class="text-center bg">

  <main class="form-signin">
    <div class="position-absolute top-50 start-50 translate-middle">
      <form action="login_authen1.php" method="POST">
        <img class="mb-4" src="IMG/Icon/Icon.png" alt="">
        <h1 class="h3 mb-3 fw-normal">ลงชื่อเข้าใช้</h1>
        <a> ชื่อผู้ใช้เดียวกันกับ UBU-WiFi</a> <br><br />

        <div class="form-floating">
          <input style="background: rgba(255, 255, 255, 0.25);" type="username" class="form-control" name="username" id="username" placeholder="ชื่อผู้ใช้"  value="<?php if(isset($_COOKIE['Username'])) {echo $_COOKIE['Username'];} ?>" required>
          <label for="floatingInput">ชื่อผู้ใช้</label>
        </div>
        <div class="form-floating">
          <input style="background: rgba(255, 255, 255, 0.25);" type="password" class="form-control" name="password" id="password" placeholder="Password"  value="<?php if(isset($_COOKIE['Password'])) {echo $_COOKIE['Password'];} ?>" required>
          <label for="floatingPassword">รหัสผ่าน</label>
        </div>
  <br>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="true" id="remember" name="remember"> Remember me
          </label>
        </div>
        <button class="w-100 btn btn-lg btn-success" type="submit" name"submit" id="submit">เข้าสู่ระบบ</button>
        <br><br>
        <div class="row">
          <div class="col">
            <a class="w-100 btn btn-sm btn-dark" href="index.php">หน้าแรก</a>
          </div>
          <div class="col">
            <a class="w-100 btn btn-sm btn-warning" href="https://account.ubu.ac.th/sspr/public/forgottenpassword/?locale=th">ลืมรหัสผ่าน</a>
          </div>

        </div>

        <p class="mt-5 mb-3 text-muted">© สำนักวิทยบริการ 2021</p>
      </form>
    </div>
  </main>
</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
