<?php
 session_start();
 $email = $_POST['email'];
 $name = $_POST['name'];
 $pass = $_POST['pass'];
 $conpass = $_POST['conpass'];
 $conn = mysqli_connect('localhost','root', '', 'school');
 $sqli = "SELECT * FROM  users WHERE email='$email' ";
 $result= mysqli_Query($conn, $sqli);
 $rowcount = mysqli_num_rows($result);

 if ($pass!= $conpass) {

   $_SESSION['error_msg']="Password didn't match";
   header("Location: registration.php");
 }else if($rowcount == 1){
       $_SESSION['err_msg'] ="Email Already taken. Please Try Another";
       header("Location: registration.php");
   }

else {

  $sql = "INSERT INTO users VALUES(NULL,'$name','$email','$pass')";
  if(mysqli_Query($conn,$sql)){


    $_SESSION['reg_msg']="Registration Successfully. Please Login";
    header("Location: login.php");
  }

}


 ?>
