<?php session_start(); ?>
<?php
session_start();

require_once 'connection.php';
if(isset($_POST["login_user"])){
    $user=$_POST['uname'];
    $pass=$_POST['pass1']; 
    $user_type=$_POST['user_type']; 
  if($user==="" || $pass==""){
  echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  <strong>field is empty!</strong> 
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";}
else{ 
  if($user_type == "hometutor"){
 $username_check="SELECT * FROM tbl_user_as_tutor WHERE uname='$user' AND pass1='$pass'";
  $result=mysqli_query($conn,$username_check);
  $user_count=mysqli_num_rows($result);
  if($user_count){
    $user_pass=mysqli_fetch_assoc($result);
    $db_pass = $user_pass['pass1'];
    $user_as_tutor = $user_pass['uname'];
    $_SESSION['user_tchr'] = $user_as_tutor;
    if($db_pass){
      header("location:index.php");
    }
    else{
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>password incorrect!</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    }
  }
  else{
     echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>invalid user!</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  }
}
if($user_type == "student"){
 $username_st="SELECT * FROM tbl_user_as_student WHERE suname='$user' AND pass1='$pass'";
  $qury=mysqli_query($conn,$username_st);
  $user_ct=mysqli_num_rows($qury);
  if($user_ct){
    $user_pass2 =mysqli_fetch_assoc($qury);
    $db_pass2 = $user_pass2['pass1'];
     $user_as_student = $user_pass2['suname'];
     $_SESSION['user_stdnt'] = $user_as_student;
    if($db_pass2==TRUE && $user_as_student){
      header("location:index.php");
    }
    else{
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>password incorrect!</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    }
  }
  else{
     echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>invalid user!</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  }

}
if($user_type == "admin"){
$sql="SELECT * FROM admin WHERE fullname='$user' AND password='$pass'";
  $admin=mysqli_query($conn,$sql);
  if($admin){
   echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>successfull!</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  }
  else{
     echo "<script>Invalid</script>";

  }

}
}
   } ?>
<?php include("includes/header.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login </title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main1.css">
<!--===============================================================================================-->
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
      <div class="wrap-login100">
        <form class="login100-form validate-form" method="post" action="" autocomplete="off">
          <span class="login100-form-logo">
            <i class="zmdi zmdi-landscape"></i>
          </span>

          <span class="login100-form-title p-b-34 p-t-27">
            Log in
          </span>
          

           <span class="login100-form-title p-b-34 p-t-27"> <label>I am a :&nbsp; </label>  <input name="user_type" type="radio"  value="hometutor" required> Home Tutor &nbsp;<input name="user_type"  type="radio" value="student" required> Student:  &nbsp;<input name="user_type"  type="radio" value="admin" required>  Admin</span>


          <div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100" type="text" name="uname" placeholder="Username">
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter password">
            <input class="input100" type="password" name="pass1" placeholder="Password">
            <span class="focus-input100" data-placeholder="&#xf191;"></span>
          </div>

          <div class="contact100-form-checkbox">
            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
            <label class="label-checkbox100" for="ckb1">
              Remember me
            </label>
          </div>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn" name="login_user">
              Login
            </button>
          </div>

          <div class="text-center p-t-90">
            <a class="txt1" href="#">
              Forgot Password?
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
  

  <div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js/container-login100-form-btn.js"></script>

</body>
</html>
<?php include("includes/footer.php");?>