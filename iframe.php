<?php 
include('connection/db.php');


  $page=$_GET['page'];
           if($page=="" || $page==1){
            $page1=0;
           }
           else{
              $page1=($page*5)-5;

           }
           

   $keyword=$_POST['key'];
   $category=$_POST['category'];
   $query1="select * from all_jobs LEFT JOIN  company ON all_jobs.customer_email=company.admin WHERE keyword LIKE '%$keyword%' OR category='$category' limit $page1,5 ";
 

$sql=mysqli_query($conn,$query1);




 ?>
 <div id="id_all_jobs">
<section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Recently Added Jobs</span>
            <h2 class="mb-4"><span>Recent</span> Jobs</h2>
          </div>
        </div>
        <div class="row">
  <?php 

 while ($row=mysqli_fetch_array($sql)) {  ?>
          <div class="col-md-12 ftco-animate">

            <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
                <div class="job-post-item-header d-flex align-items-center">
                  <h2 class="mr-3 text-black h3"><?php echo $row['job_title'] ; ?></h2>
                  <div class="badge-wrap">
                   <span class="bg-primary text-white badge py-2 px-3"><?php echo $row['city']; ?> </span>
                  </div>
                </div>
                <div class="job-post-item-body d-block d-md-flex">
                  <div class="mr-3"><span class="icon-layers"></span> <a href="#"><?php echo $row['company']; ?></a></div>
                  <div><span class="icon-my_location"></span> <span><?php echo $row['country'] ?>,<?php echo $row['state']; ?>,<?php echo $row['city']; ?> </span></div>
                </div>
              </div>

              <div class="ml-auto d-flex">
                <a href="blog-single.php?id=<?php echo $row['job_id']; ?>" class="btn btn-primary py-2 mr-1">Apply Job</a>
                <a href="#" class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
                  <span class="icon-heart"></span>
                </a>
              </div>
            </div>
          </div><!-- end -->

<?php }  ?>


       
        </div>

        
      
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                
                <li><a href="#">&lt;</a></li>
                 <?php
                 $c=mysqli_query($conn,"select * from all_jobs LEFT JOIN  company ON all_jobs.customer_email=company.admin WHERE keyword LIKE '%$keyword%' OR category='$category' ");
                $count=mysqli_num_rows($c);
                 $a=$count/5;
                  ceil($a);
                  for ($b=1; $b <=$a ; $b++) { 
                    ?>
                <li class="active"><span><a href="iframe.php?page=<?php echo $b;?>"><?php echo $b; ?></a></span></li>
                   <?php 
                    }
                   ?>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    </div>
