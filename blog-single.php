<?php 
session_start();
if (isset($_SESSION['email'])==true) {
 
}else{
  header('location:job-post.php');
}
 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>JobPortal - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">JobPortal</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
	          <li class="nav-item active"><a href="contact.php" class="nav-link">Contact</a></li>
	        <?php 
             if ( isset( $_SESSION['email'])==true) { ?>
              <li class="nav-item cta mr-md-2"><a href="job-post.php" class="nav-link"><?php echo $_SESSION['email'];  ?></a></li>
               <li class="nav-item cta cta-colored"><a href="logout.php" class="nav-link">logout</a></li>
              <?php
             }else{ ?>
              <li class="nav-item cta mr-md-2"><a href="job-post.php" class="nav-link">Login</a></li>
           
              <?php  
             }
            ?>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <?php 
include('connection/db.php');
  $id=$_GET['id'];

$query=mysqli_query($conn,"select * from all_jobs where job_id='$id'");
while ($row=mysqli_fetch_array($query)) {
  $title=$row['job_title'];
  $des=$row['des'];
  $country=$row['country'];
  $state=$row['state'];
  $city=$row['city'];
  $id_job=$row['job_id'];

}
?>
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
          	<p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-3"><a href="blog.html">Job<i class="ion-ios-arrow-forward"></i></a></span> <span>Apply job</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Apply job</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">


            <h2 class="mb-3"><td><?php echo $title; ?></td></h2>
            <h5><?php echo $country ;?>,<?php echo $state; ?>, <?php echo $city;  ?></h5>
            <p><?php echo $des; ?></p>
            
            <form action="apply_job.php" method="post" id="JobPortal" enctype="multipart/form-data" style="border: 1px solid gray">
              <div style=" padding: 2%;">
                <input type="hidden" name="job_seeker" value="<?php echo $_SESSION['email']; ?> " id="job_seeker">
                <input type="hidden" name="id_job" value="<?php echo $id_job; ?> " id="id_job">
               <div class="row">
                  <div class="col-sm-6">
                    <label for="">Enter Your First Name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name...">
                  </div>
                  <div class="col-sm-6">
                    <label for="">Enter Your Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name...">
                  </div>
              </div>
                <div class="row">
                   <div class="col-sm-6">
                    <label for="">Enter DOB</label>
                    <input type="date" class="form-control" name="dob" id="dob" placeholder="date of birth...">
                  </div>
                  <div class="col-sm-6">
                    <label for="">Choose Resume</label>
                    <input type="file" name="file" id="file" class="form-control" >
                  </div>


                </div>
                <div class="row">
                   <div class="col-sm-6">
                    <label for="">Enter Your Contect Number</label>
                    <input type="number" class="form-control" name="number" id="number" placeholder="Contect Number..">
                  </div>
                  <div class="col-sm-6">
                    <label for="">Email</label>
                    <input type="text" class="form-control "  value="<?php echo $_SESSION['email']; ?> " disabled>
                  </div>


                </div>

               <br> 
              

            
               <input type="submit" name="submit" id="submit" value="submit" placeholder="Submit" class=" btn btn-primary btn-block ">
           </div>

            </form>
          
          

		

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
        	<div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About</h2>
              <p>As one of the very few profitable pure play internet companies in the country, Onile Job Portal is India’s premier online classifieds company in recruitment,education and related services.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
         
         
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">3rd Floor,Central Bazzar,J.N Tata Road,Navsari.</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91 951268655</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@onlinejobportal.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

          
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
<!--    <script>
     $(document).ready(function(){
     $("#submit").click(function(e){
 e.preventDefault();
        var first_name=$("#first_name").val();
        var last_name=$("#last_name").val();
        var dob=$("#dob").val();
        var job_seeker=$("#job_seeker").val();
        var id_job=$("#id_job").val();

    //     var file_data = $('#file').prop('files')[0];   
    // var form_data = new FormData();                  
    // form_data.append('file', file_data);
    // alert(form_data);
    var formData = new FormData($("#JobPortal")[0]);
     formData.append("file",property);
        // var file=document.getElementById('file').files[0].name;
alert(formData);
          if (first_name=='') {
            alert("Please Enter first_name !!");
            return false;
              }
                 if (last_name=='') {
            alert("Please Enter last_name !!");
            return false;
              }
               if (dob=='') {
            alert("Please Enter dob !!");
            return false;
              }
                 if (file=='') {
            alert("Please Enter file !!");
            return false;
              }

          
             // var formData = new FormData($('#JobPortal')[0]);

        // var data= $("#JobPortal").serialize();

          $.ajax({
                type:"POST",
                url:"apply_job.php",
                data:{first_name:first_name,last_name:last_name,dob:dob, file:file,id_job:id_job,job_seeker:job_seeker},
                success:function(data){
                 alert(data);
                }
          });
     });
     });


  </script> -->
  </body>
</html>



