<?php include("header.php");?>
<?php require_once 'connection.php'; ?>
<?php

if(!isset($_SESSION)) 
    {     //SESSION START 
        session_start(); 
    
  
  }
    if(isset($_SESSION['user_tchr'])){ 
             $user_tchr = $_SESSION['user_tchr'];
             $user_std ="";
            
  
           }

if(isset($_POST["update"])){
  $tutor_fullname= $_POST['fname'] ;
    $tutor_username= $_POST['uname'] ;
    $tutor_dob= $_POST['dob'] ;
    $tutor_gender= $_POST['gender'] ;
    $city= $_POST['city'] ;
    $state= $_POST['state'] ;
    $email= $_POST['email'] ;
    $pass1= $_POST['pass'] ;
    $confirmpass= $_POST['pass1'] ;
    $phone = $_POST['contactnum'];
    $about = $_POST['about'];
	     $study = $_POST['study_level'];
	     $institute = $_POST['institute'];
         $dept = $_POST['dept'];
	     $location = $_POST['area'];
	     $scedule = $_POST['scedule'];
	     $class = $_POST['student_level'];
	      $subject = $_POST['subject'];
	     $salary = $_POST['t_fee'];
  if(empty( $tutor_fullname) || empty($tutor_username) || empty($tutor_dob) || empty($tutor_gender) || empty($city) ||
   empty($state) ||  empty($email) || empty($pass1) || empty($confirmpass) || empty($phone) || empty($about) || empty($study) ||
    empty( $institute) ||empty( $dept) || empty($location) || empty($scedule) || empty($class) || empty($subject) ||
   empty($salary)){
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
      </button>
      <strong>field is empty!</strong>
  </div>';
  }
  else{
    $sql2 = "UPDATE tutor_info SET  About ='$about',levelstudy='$study',institute='$institute',dept='$dept',location='$location',scedule='$scedule',class='$class',subject='$subject',salary='$salary'
    WHERE id=".$_POST['id'];
    $result2 = mysqli_query($conn,$sql2);
    if($result2){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
      </button>
      <strong>Updated Successfully!</strong>
  </div>';
  header("location:tutor-profile.php");
    }
    else{
      echo'<button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      <span class="sr-only">Close</span>
  </button>
  <strong>Error!</strong>
</div>';
    }

    

    $sql3 = "UPDATE tbl_user_as_tutor SET fname='$tutor_fullname',uname='$tutor_username',dob='$tutor_dob',gender='$tutor_gender',city='$city',state='$state',email='$email',pass1='$pass1',pass2='$confirmpass',contact_num='$phone'
    WHERE t_id=".$_POST['t_id'];
    $result3 = mysqli_query($conn,$sql3);
    if($result3){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
      </button>
      <strong>Updated Successfully!</strong>
  </div>';
  header("location:tutor-profile.php");
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
 

}
?>
<?php

$id = isset($_GET['t_id']);
$sql = "SELECT * FROM tbl_user_as_tutor NATURAL JOIN tutor_info WHERE tbl_user_as_tutor.t_id=tutor_info.id AND uname='$user_tchr'";
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
    <h3>TUTOR DETAILS</h3>
    <input type="hidden" value=<?php echo $row['t_id']; ?> name="t_id">
    <input type="hidden" value=<?php echo $row['id']; ?> name="id">

                        <div class="input-group">
                            <input class="form-control" type="text"  id="validationServer01" name="fname" value=<?php echo $row['fname'] ?>>
                        </div>
                        <div class="input-group">
                            <input class="form-control" type="text"  id="validationServerUsername" name="uname" value=<?php echo $row['uname'] ?>>
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
                            <input class="form-control" type="text"  name="contactnum" value=<?php echo $row['contact_num'] ?>>
                        </div>
                        <div class="form-group" >
                <label for="description">About</label>
                             <input type="textarea" class="form-control" id="about" name="about" value=<?php echo $row['About'] ?>>
                     </div>
                       
    </div>
    <div><h3>TUITION DETAILS </h3>
				<div>
					
				
		              <div class="form-group" >
		      <label for="study_level">Study Of Level</label>
			  <input type="text" class="form-control" id="study_level" name="study_level" value=<?php echo $row['levelstudy'] ?>>    
             </div> 
		    <div class="form-group" >
		      <label for="institute">Name of Institute</label>
		      <input type="text" class="form-control" id="institute" name="institute" value=<?php echo $row['institute'] ?>>
		    </div>
		     <div class="form-group" >
		      <label for="dept">Department</label>
		      <input type="text" class="form-control" id="dept" name="dept"value=<?php echo $row['dept'] ?> >
		    </div> 	
				<div>
				<h3 class="text-center">Tution-information</h3>
                <div class="form-group" >
		         <label for="area">Expected Tution Area</label>
		        <input type="text" class="form-control" id="area" name="area" value=<?php echo $row['location'] ?>>
		         </div>
		         <div class="form-group" >
		        <label for="scedule">Available Tution scedule</label>
            <input type="text" class="form-control" id="area" name="scedule" value=<?php echo $row['scedule'] ?>>
		    </div>
		    <div class="form-group" >
		      <label for="student_level">Expected Students level</label>
		      <input type="text" class="form-control" id="student_level" name="student_level"value=<?php echo $row['class'] ?> >
		    </div>
		    <div class="form-group" >
		      <label for="subject">Prefered subject</label>
		      <input type="text" class="form-control" id="subject" name="subject" value=<?php echo $row['subject'] ?>>
		    </div>
		      <div class="form-group" >
		      <label for="t_fee">Expected Salary</label>
          <input type="text" class="form-control" id="subject" name="t_fee" value=<?php echo $row['salary'] ?>>
			 </div>
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
