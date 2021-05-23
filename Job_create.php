<?php 
 include('connection/db.php');

 include('include/header.php');
 include('include/sidebar.php');
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashoard</a></li>
              <li class="breadcrumb-item"><a href="#">Jobs</a></li>
            
            </ol>
          </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
       <h1 class="h2"> All Jobs</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
               
              </div>
              <a class="btn btn-primary" href="add_create_job.php">Create Job</a>
            </div>
          </div>

           <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>#SL</th>
               
                <th>Admin name</th>
                <th>Job Title</th>
                <th>Description</th>
                <th>Country</th>
                <th>State</th>
                <th>City</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

        <?php 
         include('connection/db.php');

        $query=mysqli_query($conn,"select * from   all_jobs where customer_email='{$_SESSION['email']}'");
        while($row=mysqli_fetch_array($query)){
        ?>
                    
            <tr>
            	<td><?php echo $row['job_id']; ?></td>
                <td><?php echo $row['customer_email']; ?></td>
                <td><?php echo $row['job_title']; ?></td>
                <td><?php echo $row['des']; ?></td>
                <td><?php echo $row['country']; ?></td>
                <td><?php echo $row['state']; ?></td>
                <td><?php echo $row['city']; ?></td>
                
                 <td>
                    <div class="row">
                       <div  class="btn-group">
                          <a href="job_edit.php?edit=<?php echo $row['job_id'];  ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> </a>
                           <a href="job_delete.php?del=<?php echo $row['job_id'];  ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> </a>
                       </div>
                    </div>
                 </td>
            </tr>
          <?php }  ?>
        </tbody>
        <tfoot>
            <tr>
                 <th>#SL</th>
                  <th>Admin name</th>
                <th>Job Title</th>
                <th>Description</th>
                <th>Country</th>
                <th>State</th>
                <th>City</th>
              <th>Action</th>
            </tr>
        </tfoot>
    </table>


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
   
  </body>
</html>
