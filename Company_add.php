<?php 
include('connection/db.php');

  $Company=$_POST['Company'];
  $Description=$_POST['Description'];
  $admin=$_POST['admin'];

 $query= mysqli_query($conn,"insert into Company(company,des,admin)values('$Company','$Description','$admin')");

 // var_dump($query);
 if ($query) {
 	 echo "Data has been successfully Inserted !";
 }else{
 	echo "some error please try again !";
 }
 
 ?>