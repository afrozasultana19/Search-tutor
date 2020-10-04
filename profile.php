<?php include("includes/header.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/footer.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/th.css">
</head>
<body>
		<div class="container">
			<form action="" method="POST" enctype="multipart/form-data">
				<div>
					<h1 class="text-center">Personal Information</h1>
                     <div class="form-group" >
		      <label for="image">Upload Image</label>
		      <input type="file" class="form-control" id="image" name="image" >
		             </div>
		              <div class="form-group" >
		      <label for="area">Study Of Level</label>
		      <input type="text" class="form-control" id="study-level" name="study-level" >
		    </div> 
		    <div class="form-group" >
		      <label for="area">Name of Institute</label>
		      <input type="text" class="form-control" id="institute" name="institute" >
		    </div>
		     <div class="form-group" >
		      <label for="area">Session</label>
		      <input type="text" class="form-control" id="session" name="session" >
		    </div>
		     <div class="form-group" >
		      <label for="area">Department</label>
		      <input type="text" class="form-control" id="dept" name="dept" >
		    </div> 
		    <div class="form-group" >
		      <label for="area">Semester</label>
		      <input type="text" class="form-control" id="semester" name="semester" >
		    </div>	
				</div>
				<div >
				<h3 class="text-center">Tution-information</h3>
          <div class="form-group" >
		      <label for="area">Expected Tution Area</label>
		      <input type="text" class="form-control" id="area" name="area" >
		    </div>
		    <div class="form-group" >
		      <label for="scedule">Available Tution scedule</label>
		      <select class="form-control" name="schedule">
        <option value="" selected="selected">
          Tution Schedule        </option>        
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
		      <label for="image">Expected Students level</label>
		      <input type="text" class="form-control" id="student-level" name="level" >
		    </div>
		    <div class="form-group" >
		      <label for="image">Prefered subject</label>
		      <input type="text" class="form-control" id="subject" name="subject" >
		    </div>
		      <div class="form-group" >
		      <label for="image">Expected Salary</label>
<select class="form-control" name="t_fee">
        <option value="" selected="selected">
          Offered Salary        </option>
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
      </select>		    </div>
             </div>
		  <button type="submit" name="insert" id="insert" value="insert" class="btn btn-primary" >submit</button>
		</form>

		</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
<?php include("includes/footer.php");?>