<?php 
 include('include/header.php');
 include('include/sidebar.php');
 ?>
 
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashoard</a></li>
              <li class="breadcrumb-item"><a href="Customers.php">Job-Providers</a></li>
              <li class="breadcrumb-item"><a href="#">Add Job-Provider</a></li>
            
            </ol>
          </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
       <h1 class="h2"> Add Job-Provider</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
               
              </div>
              <!-- <a class="btn btn-primary" href="add_cutomer.php">Add Customer</a> -->
            </div>
          </div>
          <div style="width: 60%; margin-left: 20%; background-color: #F2F4F4;" >
            <div id="msg"></div>
             <form action="" method="post" style="margin:3%; padding: 3%;" name="customer_form" id="customer_form">
                 <div class="form-group">
                    <label for="Cutomer Email">Enter  Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter Cutomer Email">
                 </div>
                    <div class="form-group">
                    <label for="Cutomer Username">Enter Username</label>
                    <input type="text"  name="Username" id="Username" class="form-control" placeholder="Enter Cutomer Username">
                 </div>
                  <div class="form-group">
                    <label for="First name">Enter Password</label>
                    <input type="pass"  name="Password" id="Password" class="form-control" placeholder="Enter Password">
                 </div>
               
                  <div class="form-group">
                    <label for="First name">Enter Fisrt Name</label>
                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter first Name">
                 </div>
                  <div class="form-group">
                    <label for="Last name">Enter last Name</label>
                    <input type="text"  name="last_name" id="last_name" class="form-control" placeholder="Enter first Name">
                 </div>
                     <div class="form-group">
                    <label for="Admin Type">Admin Type</label>
                    <select name="admin_type" name="admin_type" class="form-control" id="admin_type">
                      <option value="1"> Super Admin</option>
                      <option value="2"> Customer Admin</option>
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
        var email=$("#email").val();
        var Username=$("#Username").val();
        var Password=$("#Password").val();
        var first_name=$("#first_name").val();
        var last_name=$("#last_name").val();
        var admin_type=$("#admin_type").val();
        var data= $("#customer_form").serialize();

         $.ajax({
               type:"POST",
               url:"Customer_add.php",
               data:data,
               success:function(data){
                alert(data);
               }
         });
     });
     });last_name


  </script>
   
  </body>
</html>
Password