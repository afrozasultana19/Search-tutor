<?php include("includes/header.php");?>
<?php require_once 'connection.php';
?>
<?php
if(isset($_POST["submit"])){

$tutor_fisrtname= $_POST['fname'] ;
$tutor_lastname= $_POST['lname'] ;
$tutor_username= $_POST['uname'] ;
$tutor_dob= $_POST['dob'] ;
$tutor_gender= $_POST['gender'] ;
$city= $_POST['city'] ;
$state= $_POST['state'] ;
$level_study= $_POST['level_study'] ;
$name_of_ins= $_POST['name_of_ins'] ;
$session_of_stdudy= $_POST['session'] ;
$dept= $_POST['dept'] ;
$semester= $_POST['semester'] ;
$email= $_POST['email'] ;
$pass1= $_POST['pass'] ;
$confirmpass= $_POST['pass'] ;

$sql="INSERT INTO tbl_user_as_tutor(fname,lname,uname,dob,gender,city,state,level_study, 	name_of_ins,session,dept,semester,email,pass1,pass2) VALUES('$tutor_fisrtname','$tutor_lastname','$tutor_username','$tutor_dob','$tutor_gender','$city','$state','$level_study','$name_of_ins','$session_of_stdudy','$dept','$semester','$email','$pass1','$confirmpass')";
$result=mysqli_query($conn,$sql);
if($result){
	echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>successfully added!</strong>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
 echo "success";
  }
    
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	    <title>sign in page as tutor</title>
		<meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="fontawesome-free-5.12.0-web/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="Style_for_project/bootstrap-4.5.0-dist/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="Style_for_project/style_for_signup.css"/>
	</head>
	<body>
		
			<section class="container-fluid ">
			<h3 class="text-center">Sign up as a Tutor</h3>
			<form  method=post action="" >
				<div class="form-group row">
			    <label class="col-sm-2 col-form-label">First Name </label>
			    <div class="col-sm-10">
			      <input type="text" 
			             name="fname"
			             class="form-control" 
			             placeholder="write here"
			             id="fname"
			             required=""
			             >
			    </div>
			    </div>
			    <div class="form-group row">
			    <label class="col-sm-2 col-form-label">Last Name </label>
			    <div class="col-sm-10">
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
			 	<label class="col-sm-2 col-form-label">User Name </label>
			 	<div class="col-sm-10">
			      <input type="text" 
			             name="uname"
			             class="form-control" 
			             placeholder="write here"
			             id-"uname"
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
			    <label class="col-sm-2 col-form-label">Gender   </label>	
			    <div class="col-sm-10 row">
			    <div class="col-sm-1"></div>
			     <div class="form-check col-sm-2">
				  <input class="form-check-input" type="radio" name="gender" id="gender"  value="male">
				  <label class="form-check-label" >
				   Male
				  </label>
				</div>
				<div class="form-check col-sm-2">
				  <input class="form-check-input" type="radio" name="gender" id="gender" value="female">
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
				      <input type="text" class="form-control" name="city" placeholder="City" id="city">
				    </div>
				    <div class="col">
				      <input type="text" class="form-control" name="state" placeholder="State" id="city">
				    </div>
				  </div>
			    </div>
			   </div> 
                    
			   <h4 class="text-center">Educational Description</h4>
			   <div class="form-group">
				    <label>Level of Study</label>
				    <input type="text" class="form-control"  name="level_study" placeholder="Intermediate/Honors/Master's...">
				   
              </div>
              
              <div class="form-group">
				    <label>Name of Institute</label>
				    <input type="text" class="form-control"  name="name_of_ins" id="institute">
				   
              </div>
              <div class="form-group form-row">
			    <div class="col">
			      <input type="text" class="form-control" name="session" placeholder="Session" id="session">
			    </div>
			    <div class="col">
			      <input type="text" class="form-control" name="dept" placeholder="Department" id="dept">
			    </div>
			    <div class="col">
			      <input type="text" class="form-control" name="semester" placeholder="Semester" id="semester">
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
			      <input type="password" class="form-control" name="pass" required="" id="pass2">
			    </div>
			  </div>

              <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button type="submit" name="submit" id="submit" class="btn btn-primary" >Submit form</button>
			</form>
			</section>	
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</body>
</html>
<?php include("includes/footer.php");?>