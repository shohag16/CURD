
<?php
session_start();

if (!isset($_SESSION['login'])) {
header("Location: login.php");
}

$conn = mysqli_connect('localhost','root', '', 'school');

$sql = "SELECT * FROM  student";
$result= mysqli_Query($conn, $sql);

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Student List</title>
  </head>
  <body>
    <br>
    <br>
  <br>


    <div class="container">
      <div class="row">
        <div class="col-md-3">
        <a class="btn btn-primary" href="insert.php">Add New</a><br><br>
          <a class="btn btn-warning" href="logout.php">Logout</a>
        </div>
        <div class= "col-md-9">
          <?php if(isset($_SESSION['success'])){ ?>
          <div class="alert alert-success">
              <strong>Success!</strong> Added Successfully
            </div>
          <?php } ?>


          <h1>Sthdent List</h1>
          <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Class</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    <?php while($row = mysqli_fetch_assoc($result)){ ?>
      <tr>
        <td scope="row"><?php echo $row['id']?></td>
        <td> <?php echo $row['name'] ?> </td>
        <td> <?php echo $row['class'] ?></td>
        <td> <?php echo $row['address'] ?></td>
        <td>
          <a class="btn btn-primary" href="show.php?id=<?php echo $row['id'];?> ">View</a>
          <a class="btn btn-info"  href="update.php?id=<?php echo $row['id'];?> ">Update</a>
          <a class="btn btn-danger" onclick=" return confirm('Are You Sure?');" href="delete.php?id=<?php echo $row['id'];?> ">Delete</a>
        </td>
      </tr>
  <?php  } ?>



  </tbody>
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
<?php unset($_SESSION['success']); ?>
