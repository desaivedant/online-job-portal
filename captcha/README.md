# Captcha-Class-File-in-Php-
You can Simplay call the captcha class file  where you want to use captcha  and use captcha image and captcha text 
<h1> Use This Captcha In Another File </h1>
<p>copy and paste This code in that file where you want to use this captcha </p>
<hr>
<?php <br>
include('captcha/noise_dot_captcha.php');<br><br><br>
$Noise_dot_captcha = new Noise_dot_captcha(); <br><br>
 echo $Noise_dot_captcha->html();<br>
       echo $_SESSION[Add_security];<br>

 ?>
 <hr>
