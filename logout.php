<?php 
session_start();
session_unset();


include('connection/db.php');


	header('location:admin_login.php');


 ?>