<?php require_once 'connection.php'; 
 
?>

<?php 
if(!isset($_SESSION)) 
    {     //SESSION START 
        session_start(); 
    
  
  }
    if(isset($_SESSION['user_tchr'])){ 
             $user_tchr = $_SESSION['user_tchr'];
             $user_std ="";
            
  
           }
   elseif(isset($_SESSION['user_stdnt'])){ 
             $user_tchr = "";
             $user_std = $_SESSION['user_stdnt'];}
   else{
    $user_tchr = "";
   $user_std ="";

 }
  ?>



<!DOCTYPE html>
<html>
<head>
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
<header><div class="container-fluid">
   <div class="row">
    <div class="col-sm-10">
    <img src="pic/image.png" width="100" height="70">
  </div>
  <div class="col-md-2 col-sm-6 text-right">
   <a href="#"> <img src="pic/fb-logo.png"  width="15" height="15"></a>
    <a href="#"> <img src="pic/insta-logo.png" width="15" height="15"></a>
   <div class="user-box"><i class="fa fa-user"></i>   Welcome !! <?php 
                            if($user_tchr){
                                echo $user_tchr;
                                echo '<button><a title="Logout" href="logout.php" > Logout</a></button>';
                               }
                            elseif ($user_std) {
                                 echo $user_std;
                                echo '<button><a title="Logout" href="logout.php" > Logout</a></button>'; 
                               }  
                            else{
                                echo  ' <button><a title="Login" href="login.php" > Login</a></button>';
                               }



   ?></div> 
     </div>
  </div>
</div>
<nav class="navbar navbar-expand-lg navbar-primary|secondary|success|danger|warning|info|light|dark bg-primary|secondary|success|danger|warning|info|light|dark static-top">
  <a class="navbar-brand" href="index.php"> <i class="fa fa-home"></i>HOME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="find_tutor.php">Find Tutor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="publish-circular.php">Hire a Tutor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="find_tuitions.php">Find Tution</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact us</a>
      </li>
      <?php
      if($user_tchr){
        $id = isset($_GET['t_id']);
         echo "<li class='nav-item' style='color:blue;'>
         <a class='nav-link' href='tutor-profile.php'>Tutor:".$user_tchr."</a>
                </li>" ;
      }
      if($user_std){
        echo ' <li class="nav-item" style="color:blue;">
                   <a class="nav-link" href="student-profile.php">Student:'.$user_std.'</a>
                </li>' ;
      }
       
       ?>
       <li class="nav-item">
         <a class="nav-link" href="registerpage.php">Sign-Up</a>  
        </li>
      </ul>
  </div>
</nav>
</header>