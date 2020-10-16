<?php require_once 'connection.php';
 $id = isset($_GET['id']) ? $_GET['id']: 0;
$sql = "SELECT * FROM tbl_user_as_tutor NATURAL JOIN tutor_info WHERE tbl_user_as_tutor.t_id=tutor_info.id AND t_id=($id)";
$result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);
 ?>
<?php include("header.php");?>
<!DOCTYPE html>
<html>
<head>
<title>tutor details</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="css/bootstrap.min.css"> 
      <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="css/footer.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/th.css">
      <style type="text/css">
      .container1{
        background-image: url("pic/blue-3d-modern-background-design_53876-87397.jpg");
        background-size: cover;
        background-repeat: no-repeat;
      
     }
 </style>
</head>
<body>
    <div class="container1">
<div class="content blog-list">
                                <div class="blog-wrapper clearfix">
                               
<div class="authorbox big-contact-form">
<h3>TUTOR DETAILS</h3>
<?php
echo '<form method="POST" action="">';
echo'
<input type="hidden" value="'. $row['t_id'].'" name="id">
<span class="form-control">Full Name  :'.$row['fname'].'</span>
<span class="form-control">Gender : '.$row['gender'].'</span>
<span class="form-control">Date of Birth : '.$row['dob'].'</span>
<span class="form-control">Highest Education : '.$row['levelstudy'].'</span>
<span class="form-control">Major/ Group/ Subject : '.$row['dept'].'</span>
<span class="form-control">Institute Name : '.$row['institute'].'</span>
<span class="form-control">About : '.$row['About'].'</span>



<h3>TUITION DETAILS </h3>

<span class="form-control">Expected Tuition Area : '.$row['location'].'</span>
<span class="form-control">Available Tuition Schedule : '.$row['scedule'].'</span>
<span class="form-control">Expected Students Level : '.$row['class'].'</span>
<span class="form-control">Prefered Subject : '.$row['subject'].'</span>
<span class="form-control">Expected Salary : '.$row['salary'].'</span>		

                        </div>';
       echo "<td><a href='apply_by_student.php' class='btn btn-warning'>Apply</a></td>";

                        
echo "</form>";                        
                        
?>
</div>
</div>
        </div>
</body>
</html>
<?php include("footer.php");?>