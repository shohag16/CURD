<?php
session_start();

if (!isset($_SESSION['login'])) {
header("Location: login.php");
}

$email=$_POST['email'];
$pass=$_POST['pass'];
$conn = mysqli_connect('localhost','root', '', 'school');
$sql = "SELECT * FROM  users WHERE email='$email' AND password='$pass'";
$result= mysqli_Query($conn, $sql);

$rowcount = mysqli_num_rows($result);

if ($rowcount == 1) {

    $_SESSION['login'] =true;
    header("Location: index.php");
}else{

  header("Location: login.php ");
  $_SESSION['error'] =true;
}
