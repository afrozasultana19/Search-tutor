<?php require_once 'connection.php'; ?>
<?php


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
<html>
<head>
	<title>login as user</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	   <link rel="stylesheet" href="css/bootstrap.min.css">
	   <link rel="stylesheet" href="css/font-awesome.min.css">
	   <link rel="stylesheet" href="css/style.css">
       <link rel="stylesheet" href="css/th.css">
</head>
<body>
                           <div class="login-box">
								<form class="big-contact-form" method="post" action="" autocomplete="off">                        
							  <span class="form-control"> <label>I am a :&nbsp; </label>  <input name="user_type" type="radio"  value="hometutor" required> Home Tutor &nbsp;<input name="user_type"  type="radio" value="student" required> Student:  &nbsp;<input name="user_type"  type="radio" value="admin" required>  Admin</span>
                               <input class="form-control" name="uname" type="text" placeholder="User name" value="" required>
							   <input class="form-control" name="pass1" type="password" placeholder="Password" required>
							   <button type="submit"   name="login_user" class="btn btn-primary">Login Now</button>
							   <p class="text-right">Forgot password? <a href="#">Recover now</a></p>
                            
                        </form>
						</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="js/carousel.js"></script>
</body>
</html>
<?php include("includes/footer.php");?>