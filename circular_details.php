<?php require_once 'connection.php'; ?>
<?php

if(!isset($_SESSION)) 
    {     //SESSION START 
        session_start(); 
    
  
  }
  if(isset($_SESSION['user_stdnt'])){ 
    $user_tchr = "";
    $user_std = $_SESSION['user_stdnt'];}
$sql = "SELECT * FROM tbl_student_info LEFT JOIN tbl_user_as_student  WHERE tbl_student_info.id =tbl_user_as_student.s_id AND suname='$user_std'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

?>


<!-- Delete -->
<?php
if (isset($_POST["delete"])){
    $sql2 = "DELETE FROM tbl_student_info WHERE suname='$user_std'";
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
<div class="authorbox">
      <div class="site-publisher clearfix"> 
         <h4>'.$row['cir_title'].'</h4>
           <p>'.$row['details'].'</p>
       <div class="fl-left"><span class="green" itemprop="addressLocality"> <i class="fa fa-globe"></i>'.$row['street'].'</span><br> 
       <i class="fa fa-user"></i> Posted by : <span itemprop="name">'.$row['u_name'].'</span> <br>
       <i class="fa fa-clock-o"></i>'.$row['post_time'].'</div>
       </div>
   </div>


<h3>TUITION DETAILS </h3>
<span class="form-control">Prefered Subject : '.$row['sub'].'</span>
<span class="form-control">Tuition Schedule : '.$row['schedul'].'</span>
<span class="form-control">Tution Days per week : '.$row['days'].'</span>
<span class="form-control">Number of Students : '.$row['num_of_std'].'</span>
<span class="form-control">Expected Salary : '.$row['offer_salary'].'</span>		

                        </div>';
  echo '<td><input type = "submit" name="delete" value = "DELETE" class = "btn btn-danger"/></td>';
  echo "<td><a href='#?id=".$row['id']." 'class='btn btn-info'>Apply</a></td>";

                    
echo "</form>";                        
                        
?>
</div>
</div>
        </div>
</body>
</html>
<?php include("footer.php");?>