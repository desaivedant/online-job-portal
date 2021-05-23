 <?php 
 include('include/header.php');
 include('include/sidebar.php');
 ?>
<?php 
include('connection/db.php');
 echo $edit= $_GET['edit'];
$query=mysqli_query($conn,"select * from  all_jobs where job_id='$edit'");
// var_dump($query);
while ($row=mysqli_fetch_array($query)) {
 $Title=$row['job_title'];
 $Description=$row['des'];
 $country=$row['country'];
 $state=$row['state'];
 $City=$row['city'];
}



 ?>
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashoard</a></li>
              <li class="breadcrumb-item"><a href="Job_create.php">ALL Job List</a></li>
              <li class="breadcrumb-item"><a href="#">Add JOB</a></li>
            
            </ol>
          </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
       <h1 class="h2"> Add JOB</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
               
              </div>
              <!-- <a class="btn btn-primary" href="add_cutomer.php">Add Customer</a> -->
            </div>
          </div>
          <div style="width: 60%; margin-left: 20%; background-color: #F2F4F4;" >
            <div id="msg"></div>
             <form action="" method="post" style="margin:3%; padding: 3%;" name="job_form" id="job_form">
                 <div class="form-group">
                    <label for="Cutomer Email">JOB Title</label>
                     <input type="text"  value="<?php echo $Title; ?> " name="job_title" id="job_title" class="form-control" placeholder="Enter Job Title  ">
                 </div>
                    <div class="form-group">
                    <label for="Cutomer Username">Description</label>
                    
                    <textarea name="Description" id="Description"  class="form-control" cols="30" rows="10"><?php echo $Description; ?></textarea>
                 </div>
                 <input type="hidden" name="id" id="is" value="<?php echo $_GET['edit']; ?>">
                  <div class="form-group">
                    <label for="">Country</label>
                    <select name="country" class="countries form-control" value="<?php echo $country; ?>" id="countryId">
                    <option value="">Select Country</option>
                </select>
                  </div>
                  

                  <div class="form-group">
                    <label for="">State</label>
                    <select name="state" class="states form-control"  value="<?php echo $state; ?>" id="stateId">
                          <option value="">Select State</option>
                      </select>
                  </div>


                  <div class="form-group">
                    <label for="">City</label>
                         <select name="city" class="cities form-control" value="<?php echo $city; ?>" id="cityId">
                              <option value="">Select City</option>
                          </select>
                  </div>

                      <div class="form-group">
                   
                    <input type="submit" class="btn btn-block btn-success" placeholder="Save" name="submit" id="submit">
                 </div>
           


             </form>


          </div>

          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>
          <div class="table-responsive">
            
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
  <!-- datatables plugin -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

  <script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
  </script>
  <script>
     $(document).ready(function(){
     $("#submit").click(function(){
        var Description=$("#Description").val();
        var job_title=$("#job_title").val();
        var countryId=$("#countryId").val();
        var stateId=$("#stateId").val();
        var cityId=$("#cityId").val();

          if (job_title=='') {
            alert("Please Enter Job Title!!");
            return false;
              }

             if (Description=='') {
            alert("Please Enter Description!!");
            return false;
              }

                    if (countryId=='') {
            alert("Please Select Country !!");
            return false;
              }
                    if (stateId=='') {
            alert("Please Select State !!");
            return false;
              }

             if (cityId=='') {
            alert("Please Select City !!");
            return false;
              }
        var data= $("#job_form").serialize();

         
     });
     });


  </script>
   
  </body>
</html>
<?php 
include('connection/db.php');

 if (isset($_POST['submit'])) {
  $id=$_POST['id'];
  $job_title=$_POST['job_title'];
  $Description=$_POST['Description'];
  $Country=$_POST['country'];
  $State=$_POST['state'];
  $City=$_POST['city'];
  
  

  $query1=mysqli_query($conn,"update all_jobs  set job_title='$job_title',des='$Description', country='$Country',  state='$State',city='$City' where job_id='$id'");
  if ($query1) {
    echo "<script>alert('Record has been Update successfully  !!!!')</script>";
  }else{
    echo "<script>alert('some error Please try again  !!!!')</script>";
  }
 }


 ?>