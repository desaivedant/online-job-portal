<?php 
session_start(); 

 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Admin login</title>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/admin_login.css" rel="stylesheet">

    <!-- <script src="js/admin_login.js"></script> -->
  </head>

  <body class="text-center">
 <!-- <div id="msg"></div> -->
    <form class="form-signin" id="admin_login" method="post" action="admin_login.php" name="admin_login">
      <img class="mb-4" src="img/logo.png" alt="" width="102" height="102">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required autofocus>

      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="pass"  id="pass" class="form-control" placeholder="Password" required>
        <br>
      <input class="btn btn-lg btn-primary btn-block" name="submit" id="submit" type="submit" placeholder="sign in">
      <p class="mt-5 mb-3 text-muted">&copy; 2019-2020</p>
    </form>
  </body>
</html>

<?php 
include('connection/db.php');



if (isset($_POST['submit'])) {

  $email=$_POST['email'];
  $pass=$_POST['pass'];
  
$query=mysqli_query($conn,"select * from admin_login where admin_email='$email' and admin_pass='$pass' ");

// var_dump($query);
  if ($query) {
 
if (mysqli_num_rows($query)>0) {
    
  $_SESSION['email']= $email;
  header('location:admin_dashboard.php');

}else{
  echo "<script>alert('Email or password is  incorrect ,Please try again')</script>";
}


}
}


 ?>