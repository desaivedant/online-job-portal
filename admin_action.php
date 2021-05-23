<?php 
include('connection/db.php');

 $email=$_POST['admin_email'];
 $pass=$_POST['admin_pass'];


 $query=mysqli_query($conn,"select * from admin_login where admin_email='$email' and admin_pass='$pass'");
  if (mysqli_num_rows($query)>0) {
   header('location:admin_dashboard.php');
  }else{
  	echo "not";
  }

 ?>