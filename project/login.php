
<?php

session_start();
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
      <div class="row justify-content-center">

        <div class="col-md-6">
          <?php if(isset($_SESSION['error'])){ ?>
          <div class="alert alert-warning">
              <strong>Error!</strong> Email And password Worng
            </div>
          <?php } ?>
          <?php if(isset($_SESSION['reg_msg'])){ ?>
          <div class="alert alert-success">
              <strong>Success!</strong><?php echo $_SESSION['reg_msg'];  ?>
            </div>
          <?php } ?>
        
          <h1>Login</h1
            <div>
              <form action="confirmLogin.php" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email" required placeholder="Email" />
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="pass" required placeholder="Password" />
                </div>

                <input class="btn btn-primary" type="submit" value="Login" />
                <a class="btn btn-link" href="registration.php">Creat an account</a>
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
<?php unset($_SESSION['error']); ?>
<?php unset($_SESSION['reg_msg']); ?>
<?php unset($_SESSION['err_msg']); ?>
