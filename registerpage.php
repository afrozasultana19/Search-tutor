<?php
include("connection.php"); ?>
<?php
include("includes/header.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign In cover page</title>
		 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="css/bootstrap.min.css">
	   <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/th.css">
	  <style type="text/css">
	  	.imagecover{
        background-image: url("pic/blue-3d-modern-background-design_53876-87397.jpg");
        background-size: cover;
        background-repeat: no-repeat;
      )
     }
 </style>
      </head>
<body>
	<section>
	     <div class="imagecover">
	     	<h2>SIGN IN PAGE</h2>
		   <div class="center"><a href="signup_tutor.php"><button type="button" class="btn btn-dark btn-lg">As a Tutor</button></a>
			<a href="signup_student.php"><button type="button" class="btn btn-dark btn-lg">As a Student</button></a></div>
	     </div>
	</section>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

<?php
 include("blog.php");

 include("includes/footer.php");
?>