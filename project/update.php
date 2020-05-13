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
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Insert Student</title>
  </head>
  <body>
    <br>
    <br>
    <br>


    <div class="container">
      <div class="row">
        <div class="col-md-3">
        <a class="btn btn-primary" href="index.php">Back to Student Page</a>
        </div>
        <div class="col-md-9">
          <h1>Edit Student</h1
            <div>
              <form action="edit.php?id=<?php echo $id?> " method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" required placeholder="Student Name" value="<?php echo $std['name']?>" />
                  </div>
                  <div class="form-group">
                    <label>Class</label>
                      <input type="text" name="class" class="form-control" required placeholder="Class" value="<?php echo $std['class']?>"/>
                    </div>
                    <div class="form-group">
                      <label>Address</label>
                      <input type="text" class="form-control" placeholder="Address" required name="address" value="<?php echo $std['address'];?> "/>
                      </div>

                <input class="btn btn-primary" type="submit" value="Update" />
                </form>
              </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" ></script>
  </body>
</html>
