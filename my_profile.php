
<?php 

include('connection/db.php');
include('include/header.php');
include('include/my_profile.php');
$query=mysqli_query($conn,"select * from profiles where user_email='{$_SESSION['email']}'");
while ($row=mysqli_fetch_array($query)) {
	 $img=$row['img'];
	 $name=$row['name'];
	 $dob=$row['dob'];
	 $number=$row['number'];
	 $email=$row['email'];

}
 ?>
 <br>
   <div style="margin-left: 25%; width: 50%; border: 1px solid gray; padding: 10px; ">
   	 <form action="profile_add.php" method="POST" id="profile_form" name="profile_form" enctype="multipart/form-data">
   	 	
      <div class="row">
      	  <div class="col-md-6">
      	  	<img src="profile_img/<?php if(!empty($img)){ echo $img;}else{ echo 'logo.png' ;} ?>" class="img-thumbnail" alt="Cinque Terre">
      	  </div>

          <div class="col-md-4">
           <input type="file" class="form-control" name="img" id="img">
          </div>
          
      </div>
     
 <div style="margin-left: 30%;">
 <div class="row">
 	 <div class="col-md-6">
 	 	 <td> Enter Your Name : </td>
 	 </div>
 	  <div class="col-md-6">
 	 	 <td><input type="text" name="name" id="name" value="<?php if(!empty($name)) echo $name; ?>" placeholder="Enter Your name ..." class="form-group" > </td>
 	 </div>
 	
 </div>

 <div class="row">
 	 <div class="col-md-6">
 	 	 <td> Enter Your DOB : </td>
 	 </div>

 	  <div class="col-md-6">
 	 	 <td><input type="date" name="dob" id="dob" value="<?php if(!empty($dob))  echo $dob; ?>" placeholder="Enter Your dob ..." class="form-group" > </td>
 	 </div>
</div>

 <div class="row">

 	 <div class="col-md-6">
 	 	 <td> Enter Your MObile Number : </td>
 	 </div>

 	  <div class="col-md-6">
 	 	 <td><input type="Number" name="number" id="number" value="<?php if(!empty($number)) echo $number; ?>" placeholder="Enter Your MObile Number ..." class="form-group" > </td>
 	 </div>
 	 
 </div>

  <div class="row">
 	 <div class="col-md-6">
 	 	 <td> Enter Your Email : </td>
 	 </div>
 	  <div class="col-md-6">
 	 	 <td><input type="Email" name="email" id="email" value="<?php if(!empty($email)) echo $email; ?>" placeholder="Enter Your Email ..." class="form-group" > </td>
 	 </div>

 	 	  
</div>
<div class="form-group">
	<input type="submit" id="submit" placeholder="Update" value="Update" name="submit" class="btn btn-success">
</div>
</div>
   	 </form>


   </div>
		 <br>
		<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-6 mb-6">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

     <?php 

include('include/footer.php');
    ?>
<!--    <script>
   	
   	 $(document).ready(function(){
 
  $("#submit").click(function(e){
  	e.preventDefault();
  	 var data= $("#profile_form").serialize();

          $.ajax({
                type:"POST",
                url:"profile_add.php",
                data:data,
                success:function(data){
                 alert(data);
                }
          });
  })
   	 });
   </script> -->