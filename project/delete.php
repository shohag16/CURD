<?php
session_start();

if (!isset($_SESSION['login'])) {
header("Location: login.php");
}
$db = mysqli_connect('localhost', 'root', '', 'school');
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	 if(mysqli_query($db, "DELETE FROM student WHERE id=$id")){
     header('location: index.php');
   }else {
     echo "Not Deleted";
   }

}
