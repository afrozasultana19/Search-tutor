<?php require_once 'connection.php';
 $id = isset($_GET['id']) ? $_GET['id']: 0;
$sql = "SELECT * FROM tbl_student_info WHERE id=($id)";
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
    <h1> Circular Details</h1>
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
 echo "<td><a href='apply_by_tutor.php' class='btn btn-warning'>Apply</a></td>";

                    
echo "</form>";                        
                        
?>


             </div>
         </div>
    </div>
</div>