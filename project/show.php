<?php
session_start();

if (!isset($_SESSION['login'])) {
header("Location: login.php");
}
$id = $_GET['id'];
$conn = mysqli_connect('localhost','root', '', 'school');

$sql = "SELECT * FROM  student WHERE id= $id";
$result= mysqli_Query($conn, $sql);
$std = mysqli_fetch_assoc($result);



 ?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>view student Information</title>
  </head>
  <body>
    <br>
    <br>
  <br>


    <div class="container">
      <div class="row">
        <div class="col-md-3">
        <a class="btn btn-primary" href="index.php">Back To Student List</a>
        </div>
        <div class="col-md-9">
          <h1>Sthdent Information</h1>
          <table class="table">

    <tr>
      <th scope="col">ID:</th>
      <td scope="row"><?php echo $std['id'];?></td>
    </tr>
    <tr>
      <th scope="col">Name:</th>
      <td> <?php echo $std['name'];?> </td>
    </tr>
    <tr>
      <th scope="col">Class:</th>
      <td> <?php echo $std['class'];?></td>
    </tr>
      <tr>
          <th scope="col">Address:</th>
          <td><?php echo $std['address'];?> </td>
      </tr>

</table>

        </div>

      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
