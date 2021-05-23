<?php 
 include('connection/db.php');
 $del=$_GET['del'];



  $query=mysqli_query($conn,"delete from  all_jobs where job_id ='$del'");
  if ($query) {
  	 echo "<script>alert('Record has been successfully Deleted !!!!')</script>";
  	 header('location:Job_create.php');
  }else{
  	echo "<script>alert('Record has been successfully Deleted !!!!')</script>";
  }

 ?>