<?php session_start(); ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
     <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <div style="border: 1px solid gray;padding: 40px;">
        <form class="form-signin" action="job-post.php" method="post" >
      <img class="mb-4" src="https://www.thejobsportal.co.za/sites/default/files/jobsportal.png" alt="" style="margin-left: -15%" width="372" height="122">
      <h1 class="h3 mb-3 font-weight-normal">Please Sign In</h1>
      <div class="form-group">
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
    </div>
      <div class="form-group">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="Password" class="form-control" placeholder="Password" required>
    </div>
     <!--  <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div> -->
      <input class="btn btn-lg btn-primary btn-block" type="submit"  name="submit" placeholder="sign in">
      <a href="sign_up.php">Create a Account</a>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </div>
  </body>
</html>

<?php 
include('connection/db.php');



if (isset($_POST['submit'])) {

  $email=$_POST['email'];
  $pass=$_POST['Password'];
  
$query=mysqli_query($conn,"select * from jobskeer where email='$email' and password='$pass' ");

// var_dump($query);
  if ($query) {
 
if (mysqli_num_rows($query)>0) {
    
  $_SESSION['email']= $email;
   header('location:index.php');

}else{
  echo "<script>alert('Email or password is  incorrect ,Please try again')</script>";
}


}
}


 ?>