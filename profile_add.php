

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Cover Template for Bootstrap</title>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style type="text/css">
    	/*
 * Globals
 */

/* Links */
a,
a:focus,
a:hover {
  color: #fff;
}

/* Custom default button */
.btn-secondary,
.btn-secondary:hover,
.btn-secondary:focus {
  color: #333;
  text-shadow: none; /* Prevent inheritance from `body` */
  background-color: #fff;
  border: .05rem solid #fff;
}


/*
 * Base structure
 */

html,
body {
  height: 100%;
  background-color: #333;
}

body {
  display: -ms-flexbox;
  display: -webkit-box;
  display: flex;
  -ms-flex-pack: center;
  -webkit-box-pack: center;
  justify-content: center;
  color: #fff;
  text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
  box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
}

.cover-container {
  max-width: 42em;
}


/*
 * Header
 */
.masthead {
  margin-bottom: 2rem;
}

.masthead-brand {
  margin-bottom: 0;
}

.nav-masthead .nav-link {
  padding: .25rem 0;
  font-weight: 700;
  color: rgba(255, 255, 255, .5);
  background-color: transparent;
  border-bottom: .25rem solid transparent;
}

.nav-masthead .nav-link:hover,
.nav-masthead .nav-link:focus {
  border-bottom-color: rgba(255, 255, 255, .25);
}

.nav-masthead .nav-link + .nav-link {
  margin-left: 1rem;
}

.nav-masthead .active {
  color: #fff;
  border-bottom-color: #fff;
}

@media (min-width: 48em) {
  .masthead-brand {
    float: left;
  }
  .nav-masthead {
    float: right;
  }
}


/*
 * Cover
 */
.cover {
  padding: 0 1.5rem;
}
.cover .btn-lg {
  padding: .75rem 1.25rem;
  font-weight: 700;
}


/*
 * Footer
 */
.mastfoot {
  color: rgba(255, 255, 255, .5);
}
    </style>
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
  <!--     <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">Cover</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="#">Home</a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Contact</a>
          </nav>
        </div>
      </header> -->

      <main role="main" class="inner cover">
        <h1 class="cover-heading">Cover your page.</h1>

            <?php 
session_start();

include('connection/db.php');
 $img=$_FILES['img']['name'];
 $user_email= $_SESSION['email'];
  $name=$_POST['name'];
  $dob=$_POST['dob'];
   $number=$_POST['number'];
   $email=$_POST['email'];
$tmp_name =$_FILES['img']['tmp_name'];

$sql=mysqli_query($conn,"select * from profiles where user_email='{$_SESSION['email']}'");
  $sql_check=mysqli_num_rows($sql);
if (!empty($sql_check)) {
	 $query=mysqli_query($conn,"update profiles Set img='$img',name='$name',dob='$dob',number='$number',email='$email' where user_email='$user_email' ");
			// $query= mysqli_query($conn,"insert into ()")
			if($query) {
				 echo "<h1>Profile updated Successfully !!</h1>";
			}else{
				echo "<h1>Some Error Please Try Again !!</h1>";
			}

	}else{
			move_uploaded_file($_FILES["img"]["tmp_name"],'profile_img/'.$img);

			$query=mysqli_query($conn,"insert into profiles(img,name,dob,number,email,user_email)values('$img','$name','$dob','$number','$email','$user_email')");
			// $query= mysqli_query($conn,"insert into ()")
			if($query) {
				 echo "<h1>Profile Added Successfully !!</h1>";
			}else{
				echo "<h1>Some Error Please Try Again !!</h1>";
			}
}
 ?>
 

       

        <p class="lead">
          <a href="http://localhost/job_portal/my_profile.php"  class="btn btn-lg btn-secondary">Back</a>
        </p>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

<!--     <script type="text/javascript">
function Redirect(){
  window.location.href = ("http://localhost/job_portal");
}
document.write("Please wait you will be redirected in 10sec");
setTimeout('Redirect(), 10000);
</script>
 -->
  </body>
</html>
