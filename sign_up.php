


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
    <!-- <link href="css/signin.css" rel="stylesheet"> -->
  </head>


  <body class="text-center">
    <div style="margin-left: 25%; width: 50%; margin-top: 5%;">
      <div style=" border: 1px solid gray; padding: 10px;">
    <form class="form-signin" action="sign_up.php" method="post"  >
      <img class="mb-4" src="https://www.thejobsportal.co.za/sites/default/files/jobsportal.png" alt="" style="margin-left: -15%" width="372" height="122">
      <h1 class="h3 mb-3 font-weight-normal">Please Sign Up</h1>
      <div class="row">
        <div class="col-md-6">
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email"  name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      </div>
      <div class="col-md-6">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="Password" id="inputPassword" class="form-control" placeholder="Password" required>
     </div>
   </div>
   <br>
   <div class="row">
    <div class="col-md-6">
      <label for="inputEmail" class="sr-only">First Name</label>
      <input type="first_name" id="first_name" class="form-control" name="first_name" placeholder="Enter Your First name" required autofocus>
</div>
<div class="col-md-6">
      <label for="inputEmail" class="sr-only">Last Name</label>
      <input type="last_name" id="last_name" class="form-control" name="last_name" placeholder="Enter Your Last Name" required autofocus>

</div>
</div>
<br>
<div class="row">
    <div class="col-md-6">
      <label for="inputEmail" class="sr-only">Mobile Number</label>
      <input type="Number" id="mobile_number" class="form-control" name="mobile_number" placeholder="Enter Your Mobile Number" required autofocus>
</div>
 <div class="col-md-6">
      <label for="inputEmail" class="sr-only">Date Of Birth</label>
      <input type="date" id="dob" class="form-control" name="dob" placeholder="Enter Your Date Of Birth" required autofocus>

</div>
</div>
     <br>
      <input type="submit" class="btn btn-lg btn-primary " name="submit" value="sign Up">
      <br>
      <br>
      <a href="job-post.php">Already Account ?</a>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </div>
</div>
  </body>
</html>
<?php
include('connection/db.php');

if (isset($_POST['submit'])) {
  $email=$_POST['email'];
  $Password=$_POST['Password'];
  $first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];
  $dob=$_POST['dob'];
  $mobile_number=$_POST['mobile_number'];


 $query=mysqli_query($conn,"insert into jobskeer(email,password,first_name,last_name,dob,mobile_number)values('$email','$Password','$first_name','$last_name','$dob','$mobile_number')");
var_dump($query);
if ($query) {
  echo "<script>alert('Now You Can Login!')</script>";
  header('location:job-post.php');
}else{
  echo "<script>alert('Some Error Please Try Again!')</script>";
}


}



?>