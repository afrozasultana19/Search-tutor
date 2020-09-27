<?php include("includes/header.php");?>
<?php require("connection.php");?>
<?php
if(isset($_POST["submit"])){

$student_fisrtname= $_POST['fname'] ;
$student_lastname= $_POST['lname'] ;
$student_username= $_POST['suname'] ;
$student_dob= $_POST['dob'] ;
$student_gender= $_POST['gender'] ;
$city= $_POST['city'] ;
$state= $_POST['state'] ;
$contactno=$_POST['Contactnumber'] ;
$email= $_POST['email'] ;
$pass1= $_POST['pass'] ;
$confirmpass= $_POST['pass'] ;



$sql="INSERT INTO tbl_user_as_student(fname,lname,suname,dob,gender,city,state,contactnum,email,pass1,pass2) VALUES('$student_fisrtname','$student_lastname','$student_username','$student_dob','$student_gender','$city','$state','$contactno','$email','$pass1','$confirmpass')";
$result=mysqli_query($conn,$sql);
if($result){
	echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>successfully added!</strong>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
header("locayion:login.php");
 }
    
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>sign in page as student</title>
		<meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="fontawesome-free-5.12.0-web/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="Style_for_project/bootstrap-4.5.0-dist/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="Style_for_project/style_for_signup.css"/>
	</head>
	<body>
			<section class="container-fluid ">
			<h3 class="text-center">Sign up as a Student</h3>
			<br>
						<p class="text-right">Already have student acount <a href="login.php">Login</a></p>
			<form  method=post action="signup_student.php">
				<div class="form-group row">
			    <label class="col-sm-1 col-form-label">First Name </label>
			    <div class="col-md-5">
			      <input type="text" 
			             name="fname"
			             class="form-control" 
			             placeholder="write here"
			             id="fname"
			             required=""
			             >
			    </div>
			    <label class="col-sm-1 col-form-label">Last Name </label>
			    <div class="col-md-5">
			      <input type="text" 
			             name="lname"
			             class="form-control" 
			             placeholder="write here"
			             id="lname"
			             required=""
			             >
			    </div>
			    </div>
			    
			 
			 <div class="form-group row">
			 	<label class="col-sm-2 col-form-label">Student User Name </label>
			 	<div class="col-sm-10">
			      <input type="text" 
			             name="suname"
			             class="form-control" 
			             placeholder="write here"
			             id="suname"
			             required=""
			             >
			    </div>
			 </div>
		

			    <div class="form-group row">
			    <label class="col-sm-2 col-form-label">Date of Birth </label>
			    <div class="col-sm-10">
			      <input type="date" 
			             name="dob"
			             class="form-control" 
			             placeholder="write here"
			             id="dob"
			             required=""
			             >
			    </div>
			    </div>
			    <div class="form-group row">
			    <label class="col-sm-2 col-form-label"> Gender  </label>	
			    <div class="col-sm-10 row">
			    <div class="col-sm-1"></div>
			     <div class="form-check col-sm-2">
				  <input class="form-check-input" type="radio" name="gender"  value="male" id="gender">
				  <label class="form-check-label" >
				   Male
				  </label>
				</div>
				<div class="form-check col-sm-2">
				  <input class="form-check-input" type="radio" name="gender"  value="female" id="gender">
				  <label class="form-check-label" >
				   Female
				  </label>
				</div>
			    </div>
			    </div>
			    
			   <div class="form-group row">
			   	<label class="col-sm-2 col-form-label">Address</label>	
			    <div class="col-sm-10">
			     <div class="form-row">
				    <div class="col-7">
				      <input type="textarea" class="form-control" name="city" placeholder="City" id="city">
				    </div>
				    <div class="col">
				      <input type="text" class="form-control" name="state" placeholder="State" id="state">
				    </div>
				  </div>
			    </div>
			   </div> 
			   <div class="form-group row">
			 	<label class="col-sm-2 col-form-label">Contact Number </label>
			 	<div class="col-sm-10">
			      <input type="text" 
			             name="Contactnumber"
			             class="form-control" 
			             placeholder="write here"
			             id="Contactnumber"
			             required=""
			             >
			    </div>
			 </div>
			  <div class="form-group row">
			    <label class="col-sm-2 col-form-label">Email</label>
			    <div class="col-sm-10">
			      <input type="email" class="form-control" name="email" required="" id="email">
			    </div>
			  </div>
              <div class="form-group row">
			    <label  class="col-sm-2 col-form-label">Password</label>
			    <div class="col-sm-10">
			      <input type="password" class="form-control" name="pass" required="" id="pass1">
			
			    </div>
			  </div>
  
              <div class="form-group row">
			    <label  class="col-sm-2 col-form-label">Confirm Password</label>
			    <div class="col-sm-10">
			      <input type="password" class="form-control" name="pass2" required="" id="pass">
			  
			    </div>
			  </div>

              <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required="">
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit" name="submit" id="submit">Submit form</button>
			</form>
			</section>
		  </div>
		 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</body>
</html>
<?php include("includes/footer.php");?>