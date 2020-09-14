<?php
include("includes/header.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>publish a circular</title>
		 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="css/footer.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/th.css">
</head>
<body>
<div class="jumbotron">
  <h1 class="display-4">You want to hire a tutor!</h1>
</div>
	<div class="container" style="background-color:  #ffffcc">
		<div class="fl-leftt">
			<form class="big-contact-form" action="" method="post" autocomplete="off">
<div class="fl-left"><h1 class="text-center">STUDENT INFORMATION </h1></div>
<div class="fl-right"><h3><small>Already have a parent account? <a href="login.php">Login First</a></small></h3></div>
<p>
  <input class="form-control" name="username" placeholder="User Name (5 to 15 Character)" value="" />  
</p>
<p><input class="form-control" name="email" type="email" placeholder="Enter Your Email (Verification required)" value="" /> 
</p>
<p> 
  <input class="form-control" type="password" name="password_1" placeholder="Choose Your Password (8 to 16 Character)" value="" /></p>
<p>
  <input class="form-control" type="password" name="password_2" placeholder="Reapeat Password (Same as Password field)" value=""/>
</p>
<input class="form-control" type="text" name="fullname" placeholder="Enter Your Full Name" value=""/>
<input type="text" class="form-control" name="phone_no" placeholder="Enter Your Phone/Mobile" value="" />
<label>Contact Address:</label>
<textarea class="form-control" name="contact_ad" placeholder="Only Street Address (Do not include District/Post Code)"></textarea>
<br>
<h1 class="text-center">CIRCULAR INFORMATION</h1>
<p><input class="form-control" type="text" name="c_title" placeholder="Circular Title (eg. Home tutor wanted, Urgent Tutor Wanted, Lady Tutor wanted)" value=""   />
 <input class="form-control" type="text" name="c_subject"  placeholder="Tuition Subject : (eg. Math, English, Arabic, All Subject)" value="" />
 </p>
 <p>  <select class="form-control" name="t_schedule">
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
</p>
 <p>   <select class="form-control" name="t_week">
        <option value="" selected="selected">
          Days per week        </option>        
        <option value="1 Day/Week">1 Day/Week</option>
        <option value="2 Days/Week">2 Days/Week</option>
        <option value="3 Days/Week">3 Days/Week</option>
        <option value="4 Days/Week">4 Days/Week</option>
		<option value="5 Days/Week">5 Days/Week</option>
		<option value="6 Days/Week">6 Days/Week</option>
		<option value="7 Days/Week">7 Days/Week</option>
      </select>
</p>
 <p> <select class="form-control" name="nos">
        <option value="" selected="selected">
          Number of Students        </option>        
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="Batch">Batch</option>
      </select> 
</p>
 <p>  
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
      </select>
</p>

 <p> 
 <label>Circular Details:</label>
 <textarea class="form-control" placeholder="Circular Details (50 to 500 character)" name="c_details"></textarea>
 </p>
<p class="form-control"> <input name="terms" type="checkbox"  value="1"> I accept the <a href="#">terms & conditions.</a> </p>
<button type="submit" name="publish_circular" class="btn btn-primary"> Publish Circular </button>

</form>
		</div>
	</div>

      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity=" sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>      
      <script src="js/fonticon.js"></script>
</body>
</html>
<?php
 include("blog.php");
?>
<?php
 include("includes/footer.php");
?>