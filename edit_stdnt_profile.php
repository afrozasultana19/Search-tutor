<?php include("header.php");?>

<?php require_once 'connection.php'; ?>
<?php

if(!isset($_SESSION)) 
    {     //SESSION START 
        session_start(); 
    
  
  }
  if(isset($_SESSION['user_stdnt'])){ 
    $user_tchr = "";
    $user_std = $_SESSION['user_stdnt'];}


if(isset($_POST["update"])){

    $student_fullname= $_POST['fname'] ;
    $student_username= $_POST['suname'] ;
    $student_dob= $_POST['dob'] ;
    $student_gender= $_POST['gender'] ;
    $city= $_POST['city'] ;
    $state= $_POST['state'] ;
    $contactno=$_POST['phone'] ;
    $email= $_POST['email'] ;
    $pass1= $_POST['pass'] ;
    $confirmpass= $_POST['pass1'] ;

    $sql3 = "UPDATE tbl_user_as_student SET fname='$student_fullname',suname=' $student_username',dob=' $student_dob',gender='$student_gender',city='$city',state='$state',email='$email',pass1='$pass1',pass2='$confirmpass',contactnum=' $contactno'
    WHERE suname='$user_std'";
    $result3 = mysqli_query($conn,$sql3);
    if($result3){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
      </button>
      <strong>Updated Successfully!</strong>
  </div>';
  header("location:student-profile.php");
    }
    else{
      echo'<button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      <span class="sr-only">Close</span>
  </button>
  <strong>Error!</strong>
</div>';
    }
}

    ?>
    <?php

$id = isset($_GET['s_id']);
$sql = "SELECT * FROM tbl_user_as_student  WHERE  suname='$user_std'";
$result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);

 ?>
    <!DOCTYPE html>
<html>
<head>
<title>Homepage</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="css/footer.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/th.css">

</head>
<div class="blog-wrapper clearfix">
                               
<div class="authorbox big-contact-form">
<form action="" method="POST">
    <div>
    <h3>STUDENT PROFILE</h3>
    <input type="hidden" value=<?php echo $row['s_id']; ?> name="s_id">

                        <div class="input-group">
                            <input class="form-control" type="text"  id="validationServer01" name="fname" value=<?php echo $row['fname'] ?>>
                        </div>
                        <div class="input-group">
                            <input class="form-control" type="text"  id="validationServerUsername" name="suname" value=<?php echo $row['suname'] ?>>
                        </div>
                        <div class="input-group">
                            <input class="form-control" type="date"  name="dob" value=<?php echo $row['dob'] ?>>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                            <input class="form-control" type="text"  id="validationServerUsername" name="gender" value=<?php echo $row['gender'] ?>>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="form-control" type="text"  id="inputEmail3" name="city" value=<?php echo $row['city'] ?>>                            
                        </div>
                         <div class="input-group">
                            <input class="form-control" type="text"  id="validationServer03" name="state" value=<?php echo $row['state'] ?>>
                        </div>
                         <div class="input-group">
                            <input class="form-control" type="text"  id="validationServer04" name="email" value=<?php echo $row['email'] ?>>
                        </div>
                        <div class="input-group">
                            <input class="form-control" type="password"  name="pass" value=<?php echo $row['pass1'] ?>>
                        </div>
                        <div class="input-group">
                            <input class="form-control" type="password"  name="pass1" value=<?php echo $row['pass2'] ?>>
                        </div>
                        <div class="input-group">
                            <input class="form-control" type="text"  name="phone" value=<?php echo $row['contactnum'] ?>>
                        </div>
                       
    </div>
    <button class="btn  btn-primary" type="submit" name="update">Update</button>
</form>

</div>
</div>    

<body>
<?php
 include("footer.php");
?>
