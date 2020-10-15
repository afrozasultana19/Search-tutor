<?php include("header.php");?>
<?php
 require_once 'connection.php'; ?>
 <!doctype html>
 <html lang="en">
   <head>
     <title>Find tution</title>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">

   </head>
  
   </style>
   <body>
 <div class="container">
 <div class="jumbotron jumbotron-fluid">
    <h1 class="display-4">Tuition Information's</h1>
    <p class="lead">of Home Tutor Wanted for students</p>
  </div>
<?php
$sql="SELECT * from tbl_student_info";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_array($result))
    {
      echo "<div class='clm'";
      echo "<input type='hidden' value='".$row['id']. "' name='id/'>";
      echo'<div class="authorbox">
      <div class="site-publisher clearfix"> 
         <h4>'.$row['cir_title'].'</h4>
           <p>'.$row['details'].'</p>
       <div class="fl-left"><span class="green" itemprop="addressLocality"> <i class="fa fa-globe"></i>'.$row['street'].'</span><br> 
       <i class="fa fa-user"></i> Posted by : <span itemprop="name">'.$row['u_name'].'</span> <br>
       <i class="fa fa-clock-o"></i>'.$row['post_time'].'</div>
       <div class="fl-right"><a href="#id=834" class="fl-right btn btn-info">View Details</a></div>
       </div>
   </div>';
     echo"</div>";
    }

}
else{
    echo"<h2>Record not found</h2>";
}
?>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity=" sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>      
      <script src="js/fonticon.js"></script>
   </body>
 </html>
 <?php include("footer.php");?>








