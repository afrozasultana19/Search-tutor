<?php include("header.php");?>

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
$sql = "SELECT * FROM tbl_user_as_tutor WHERE uname='$user_tchr'";
$result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);
$tid= $row['t_id'];

?>
<?php
if(isset($_POST["insert"]))
{

	$check= $_FILES["images"]["tmp_name"];

	if( !empty($check) && file_exists($check) )
	{

  $file = addslashes(file_get_contents($check));
  
   $img   =  "UPDATE tbl_user_as_tutor SET pic='$file' WHERE uname='$user_tchr'";
  $result2 = mysqli_query( $conn, $img ) or die (mysqli_error($conn));
  if($result2)
  {
      echo " <div class='alert alert-primary alert-dismissible fade show' role='alert'>
       <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
         <span aria-hidden='true'>&times;</span>
         <span class='sr-only'>Close</span>
       </button>
       <strong>submitted</strong>
     </div> " ;
  }


   
  
	
 }
} 
 ?>
<html lang="en"> 
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Title Page-->
    <title>Tutor Profile</title>

    <link rel="stylesheet" href="css/navhov.css">

   
</head>
<body>
  <div class="row">
<div class="col-md-4">
  <span><form action="" method="POST" enctype="multipart/form-data">
  <div class="form-group" >
		         <label for="image">Upload Image</label>
		         <input type="file" class="form-control" id="images" name="images" >
             </div>
             <button type="submit" name="insert" id="insert" value="insert" class="btn btn-primary" >image upload</button>
  </form><span>
<br>
<br>
<div id="mySidenav" class="sidenav align-right">
  <a href="tutor_details.php" id="about">About</a>
  <a href="#" id="blog">Search Tution</a>
  <a href="#" id="projects">Settings</a>
  <a href="tutor-profile-info.php" id="contact">Tutor info</a>
</div>
</div>
<div class="card text-left justify-content-center   col-md-8">
  <div class="card-body ">
    <h4 class="card-title">TUTOR Profile</h4>
    <p class="card-text">
      <table class="table table-bordered table-striped">
    <tbody>
<?php
              echo '<form action="" method="POST" enctype="multipart/form-data">';
              echo '<input type="hidden" value='.$row['t_id'].' name="t_id">';
              echo '		   
             <tr>
              <td><img src= "data:image/jpeg;base64,'.base64_encode($row['pic']).'" height="300" width="300" class="rounded-circle" alt="image"><h1><strong>'.$row['fname'].'</strong></h1></td>
              </tr>';	
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