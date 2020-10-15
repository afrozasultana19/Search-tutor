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

$id = isset($_GET['t_id']);
$sql = "SELECT * FROM tbl_user_as_tutor NATURAL JOIN tutor_info WHERE tbl_user_as_tutor.t_id=tutor_info.id AND uname='$user_tchr'";
$result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);
$tid= $row['t_id'];

?>


<!-- Delete -->
<?php
if (isset($_POST["delete"])){
    $sql2 = "DELETE FROM tbl_user_as_tutor WHERE uname='$user_tchr'";
    $result2 = mysqli_query($conn,$sql2);
    if($result2){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <strong>Deleted Successfully!</strong>
    </div>';
    session_destroy();
    header("location:index.php");
    }
    else{
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
    </button>
    <strong>Error!</strong>
</div>';
    }
}
    
    ?>
    <!-- end delete -->
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
echo "<form method='POST' action=''>";
echo'
<input type="hidden" value='. $row['t_id'].' name="t_id">
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
  echo "<td><a href='edit_tutor_info.php?id=".$row['t_id']." 'class='btn btn-info'>Edit</a></td>";
  echo '<td><input type = "submit" name="delete" value = "DELETE" class = "btn btn-danger"/></td>';
                        
echo "</form>";                        
                        
?>
</div>
</div>
        </div>
</body>
</html>
<?php include("footer.php");?>