<?php include("header.php");?>

<?php require_once 'connection.php'; ?>
<?php

if(!isset($_SESSION)) 
    {     //SESSION START 
        session_start(); 
    
  
  }
  if(isset($_SESSION['user_stdnt'])){ 
    $user_tchr = "";
    $user_std = $_SESSION['user_stdnt'];}

$sql = "SELECT * FROM tbl_user_as_student WHERE suname='$user_std'";
$result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);

?>
<html lang="en"> 
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Title Page-->
    <title>Student Profile</title>

    <link rel="stylesheet" href="css/navhov.css">

   
</head>
<body>
  <div class="row">
<div class="col-md-4">
<div id="mySidenav" class="sidenav align-right">
  <a href="find_tutor.php" id="blog">Search Tutor</a>
  <a href="edit_stdnt_profile.php" id="projects">Update</a>
  <a href="publish-circular.php" id="contact">Publish circular</a>

</div>
</div>
<div class="card text-left justify-content-center   col-md-8">
  <div class="card-body ">
    <h1 class="card-title">Student Profile</h1>
    <p class="card-text">
      <table class="table table-bordered table-striped">
    <tbody>
<?php
              echo '<form action="" method="POST" enctype="multipart/form-data">';
              echo '<input type="hidden" value='.$row['s_id'].' name="s_id">';	
              echo '
              <tr>';
              echo '<td>NAME:      '.$row['fname'].'</td>';
              echo '</tr>';
              echo '<tr>';
              echo '<td> GENDER:     '.$row['gender'].'</td>';
              echo '</tr>';
              echo '<tr>';
              echo '<td>DATE Of BIRTH:   '.$row['dob'].'</td>';
              echo '</tr>';
              echo '<tr>';
              echo '<td> CITY:        '.$row['city'].'</td>';
              echo '</tr>';
              echo '<tr>';
              echo '<td> STATE:        '.$row['state'].'</td>';
              echo '</tr>';
              echo '<tr> ';
              echo '<td> EMAIL:        '.$row['email'].'</td>';
              echo '</tr>';

                echo "</form>";

?>

  </tbody>  </table></p>
  </div>
</div>         
</div>
 

          <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity=" sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>      
</body>  
</html>
<?php include("footer.php");?>