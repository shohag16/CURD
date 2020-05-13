<?php
session_start();

if (!isset($_SESSION['login'])) {
header("Location: login.php");
}

 $name = $_POST['name'];
 $class = $_POST['class'];
 $address = $_POST['address'];
$conn = mysqli_connect('localhost','root', '', 'school');
$sql = "INSERT INTO student VALUES(NULL,'$name','$class','$address')";
if(mysqli_Query($conn,$sql)){

  $_SESSION['success'] =1;

  header("Location: index.php");
}else {
$_SESSION['error'] =1;
header("Location: insert.php");

}

 ?>
