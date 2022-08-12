<?php
session_start();

$login_user = $_POST['username'];
$password = $_POST['password'];

if(isset($_POST['remember'])) { $remember = $_POST['remember']; }
else {$remember = "false";}


$AuthenResult = file_get_contents
("https://www.ubu.ac.th/ubuservice/ldap/ldapauthen.php?login_user=$login_user&login_password=$password&&sys_user=LibUser&sys_pass=bHf5Exs6GvjH7V2DSekv");

if($AuthenResult == "true"){
  $_SESSION['username'] = $login_user;


  if($remember == "true"){
    setcookie("Username",$login_user,time()+3600); // Set Cookies username 1 Hour
    setcookie("Password",$password,time()+3600);   // Set Cookies password 1 Hour
   }
   include 'db_connect.php';

   // Check connection
   if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }

   $username =  $_SESSION['username'];
   $sql = "SELECT * FROM member WHERE username='$username'";
   $result = $conn->query($sql);
   
  if ($result->num_rows > 0) {
    // output data of each row
   } else {
     $sql = "INSERT INTO member (idmember, username)
     VALUES (NULL, $username)";

     if ($conn->query($sql) === TRUE) {

     } else {

     }

     $conn->close();
   }

  header('location:index.php');
}else{
  echo "<script>alert('ชื่อหรือรหัสผ่านไม่ถูกต้อง กรุณาลองใหม่อีกครั้ง'); window.location ='login.php';</script>";
}


 ?>
