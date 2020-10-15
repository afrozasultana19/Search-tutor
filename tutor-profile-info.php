<?php include("header.php");?>
<?php
require_once 'connection.php';
if(isset($_POST["insert"])){
	
	
         $about = $_POST['about'];
	     $study = $_POST['study_level'];
	     $institute = $_POST['institute'];
         $dept = $_POST['dept'];
	     $location = $_POST['area'];
	     $scedule = $_POST['scedule'];
	     $class = $_POST['student_level'];
	      $subject = $_POST['subject'];
		 $salary = $_POST['t_fee'];
		 if( (empty($about) || empty($study) || empty( $institute) ||empty( $dept) || empty($location) || empty($scedule) || empty($class) || empty($subject) ||
		empty($salary))){
			echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				<span class="sr-only">Close</span>
			</button>
			<strong>field is empty!</strong>
		</div>';
		}
		else{
			$sql2 ="INSERT INTO tutor_info (about,levelstudy,institute,dept,location,scedule,class,subject,salary)
			VALUES('$about','$study','$institute','$dept','$location','$scedule','$class','$subject','$salary')";
			$result2 = mysqli_query($conn,$sql2);
		   if($result2)
		   {
			 echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
			  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			   <span aria-hidden='true'>&times;</span>
					<span class='sr-only'>Close</span>
							  </button>
					 <strong>Successfully Added!</strong> Check all the user page.
							 </div>"; 
			}
			
		}
	    
	
		
}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tutor Details info</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/footer.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/th.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <style>
	 .image{
  width: 200px;
  height:170px;
  padding: 10px;
  border: 3px solid gray;
  border-radius: 70px;
  margin: 0;
}
  #textbox{
display:none;
}
</style>
</head>
<body>


	    <div class="container">
			<form  method="POST" action="" enctype="multipart/form-data">
				<div>
					<h1 class="text-center">Personal Information</h1>
					<div class="form-group" >
                <label for="description">About</label>
             <input type="textarea" class="form-control" id="about" name="about">
                     </div>
				
		              <div class="form-group" >
		      <label for="study_level">Study Of Level</label>
			  <select class="form-control" id="study_level" name="study_level">
    <option  value="">Tutors  Education</option>
    <option  value="Doctorate">Doctorate</option>
    <option  value="Doctorate (Running)">Doctorate (Running)</option>
	<option  value="Post Graduate">Post Graduate</option>
    <option  value="Post Graduation (Running)">Post Graduation (Running)</option>
	<option  value="Graduate">Graduate</option>
    <option  value="Graduation (Running)">Graduation (Running)</option>
	<option  value="Diploma">Diploma</option>
    <option  value="Diploma (Running)">Diploma (Running)</option>
	<option  value="Higher Secondary">Higher Secondary</option>
    <option  value="Secondary">Secondary</option>
  </select>		    </div> 
		    <div class="form-group" >
		      <label for="institute">Name of Institute</label>
		      <input type="text" class="form-control" id="institute" name="institute" >
		    </div>
		     <div class="form-group" >
		      <label for="dept">Department</label>
		      <input type="text" class="form-control" id="dept" name="dept" >
		    </div> 	
				<div>
				<h3 class="text-center">Tution-information</h3>
                <div class="form-group" >
		         <label for="area">Expected Tution Area</label>
		        <input type="text" class="form-control" id="area" name="area" >
		         </div>
		         <div class="form-group" >
		        <label for="scedule">Available Tution scedule</label>
		       <select class="form-control"  id ="scedule" name="scedule">
              <option value=""> Tution Schedule</option>        
             <option value="Morning">Morning</option>
             <option value="Afternoon">Afternoon</option>
              <option value="Evening">Evening</option>
                <option value="Night">Night</option>
		      <option value="Morning/Evening">Morning/Evening</option>
		       <option value="Morning/Afternoon">Morning/Afternoon</option>
		         <option value="Morning/Night">Morning/Night</option>
		        <option value="Afternoon/Evening">Afternoon/Evening</option>
		        <option value="Afternoon/Night">Afternoon/Night</option>
		           <option value="Evening/Night">Evening/Night</option>
		      <option value="Flexible/Negotiable">Flexible/Negotiable</option>
            </select>
		    </div>
		    <div class="form-group" >
		      <label for="student_level">Expected Students level</label>
		      <input type="text" class="form-control" id="student_level" name="student_level" >
		    </div>
		    <div class="form-group" >
		      <label for="subject">Prefered subject</label>
		      <input type="text" class="form-control" id="subject" name="subject" >
		    </div>
		      <div class="form-group" >
		      <label for="t_fee">Expected Salary</label>
         <select class="form-control" id= "t_fee" name="t_fee">
           <option value=""> Offered Salary</option>
            <option value="1000 - 2000">Tk-1000 - 2000</option>
            <option value="2000 - 3000">Tk-2000 - 3000</option>
            <option value="3000 - 4000">Tk-3000 - 4000</option>
             <option value="4000 - 5000">Tk-4000 - 5000</option>
		     <option value="5000 - 6000">Tk-5000 - 6000</option>
		   <option value="6000 - 7000">Tk-6000 - 7000</option>
		    <option value="7000 - 8000">Tk-7000 - 8000</option>
		     <option value="8000 - 9000">Tk-8000 - 9000</option>
		    <option value="9000 - 10000">Tk-9000 - 10000</option>
		      <option value="10000 - 11000">Tk-10000(+)</option>
		        <option value="Negotiable">Negotiable</option>
			</select>	
			 </div>
             </div>
		  <button type="submit" name="insert" id="insert" value="Submit" class="btn btn-primary" >submit</button>
		</form>
</div>
		</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script>
		$("doccument").ready(function(){

    $("#study_level").change(function(){
        var str = $("#study_level").val();
		alert(str);
    
    });


		})
   </script>
		</body>
</html>

<?php include("footer.php");?>