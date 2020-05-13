<?php
session_start();

if (!isset($_SESSION['login'])) {
header("Location: login.php");
}
$id=$_GET['id'];

	$name = $_POST['name'];
  $class = $_POST['class'];
	$address = $_POST['address'];
 $conn = mysqli_connect('localhost', 'root', '', 'school');
	mysqli_query($conn, "UPDATE student SET name='$name', address='$address' WHERE id=$id");

	header('location: show.php?id=' .$id);
