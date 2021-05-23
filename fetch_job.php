<?php 

include('connection/db.php');


   $keyword=$_POST['key'];
   $category=$_POST['category'];
$query="select * from all_jobs LEFT JOIN  company ON all_jobs.customer_email=company.admin WHERE keyword LIKE '%$keyword%' OR category='$category' ";
$sql=mysqli_query($conn,$query);
// var_dump($sql);

while ($row=mysqli_fetch_array($sql)) { 
	echo '
          
 <section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <span class="subheading">Recently Added Jobs</span>
          <h2 class="mb-4"><span>Recent</span> Jobs</h2>
        </div>
      </div>
      <div class="row">
  

    
        <div class="col-md-12 ftco-animate">

          <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

            <div class="mb-4 mb-md-0 mr-5">
              <div class="job-post-item-header d-flex align-items-center">
                <h2 class="mr-3 text-black h3">'. $row['job_title'].'</h2>
                <div class="badge-wrap">
                 <span class="bg-primary text-white badge py-2 px-3">'.$row['city'].'</span>
                </div>
              </div>
              <div class="job-post-item-body d-block d-md-flex">
                <div class="mr-3"><span class="icon-layers"></span> <a href="#">'. $row['company'].'</a></div>
                <div><span class="icon-my_location"></span> <span>'. $row['country'] .','. $row['state'].','.$row['city'].' </span></div>
              </div>
            </div>

            <div class="ml-auto d-flex">
              <a href="job-single.php" class="btn btn-primary py-2 mr-1">Apply Job</a>
              <a href="#" class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
                <span class="icon-heart"></span>
              </a>
            </div>
          </div>
        </div><!-- end -->

  


     



	';
	

}



 ?>

