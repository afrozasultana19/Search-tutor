
<?php include("header.php");?>
<?php
 require_once 'connection.php'; ?>
     
 <?php
 if(isset($_POST['search'])){
  $gender= $_POST['gender'];
  $education = $_POST['educations'];
  $institute = $_POST['institute'];
  $location = $_POST['location'];
  if($gender =="" && $education =="" && $education =="" && $institute == "" && $location == "" && 
  $location == "")
  {
      echo '<h3>Result Not Found</h3>';
  }
  if($gender  && $education =="" && $institute == "" && $location == "" ){
    $sql="SELECT * FROM tbl_user_as_tutor  JOIN tutor_info WHERE tbl_user_as_tutor.t_id=tutor_info.id AND gender='$gender'";
    $result1 = mysqli_query($conn,$sql);
    $nums=mysqli_num_rows($result1);
    $row1 = mysqli_fetch_assoc($result1);
    if($row1){
      echo '
     <div class= "container-fluid">
      <form method="POST">
      <input type="hidden" value="'. $row1['t_id'].'"  name="t_id">
        <figure class="col-md-4">
          <a href="#" data-size="">
          <img src= "data:image/jpeg;base64,'.base64_encode($row1['pic']).'" height="300" width="300" class="rounded-circle" alt="image">
          </a>
        </figure>
        <div class="course-details">                                            
        </div>
         <div class="course-location clearfix"> <span class="pull-left"><small><i class="fa fa-globe"></i>"'.$row1['location'].'"</small></span> <span class="pull-right"> <small><i class="fa fa-eye"></i> 1</small></span></div>
         <div class="course-footer clearfix"> ';
         echo "<td><a href='tutors.php?id=".$row1['t_id']." 'class='btn btn-full btn-green'>View details</a></td>";                                           
        echo' </div>';
    echo'</form>
    </div>';
  
    }
  
 
  }
  if($gender == "" &&  $education   && $institute == "" && $location == "" ){
    $sql="SELECT * FROM tbl_user_as_tutor NATURAL JOIN tutor_info WHERE tbl_user_as_tutor.t_id=tutor_info.id AND levelstudy='$education'";
    $result1 = mysqli_query($conn,$sql);
  $nums=mysqli_num_rows($result1);
  if($nums>0){$row1 = mysqli_fetch_assoc($result1);
    if($row1){
      echo '
      <div class= "container-fluid">   
      <form method="POST">
        <figure class="col-md-4">
          <a href="#" data-size="">
          <img src= "data:image/jpeg;base64,'.base64_encode($row1['pic']).'" height="300" width="300" class="rounded-circle" alt="image">
          </a>
        </figure>
        <div class="course-details">                                            
        <h4> <a href="tutors.php?id='.$row1['t_id'].'" title="'.$row1['fname'].'">'.$row1['fname'].'</a></h4>
        <p>"'.$row1['About'].'" </p>
         </div>
         <div class="course-location clearfix"> <span class="pull-left"><small><i class="fa fa-globe"></i>"'.$row1['location'].'"</small></span> <span class="pull-right"> <small><i class="fa fa-eye"></i> 1</small></span></div>
         <div class="course-footer clearfix"> ';
         echo "<td><a href='tutors.php?id=".$row1['t_id']." 'class='btn btn-full btn-green'>View details</a></td>";                                           
        echo' </div>';
    echo'</form>';
  
    }}
  

  }
  if($gender == "" &&   $education =="" && $institute  && $location == "" ){
    $sql="SELECT * FROM tbl_user_as_tutor  NATURAL JOIN tutor_info WHERE tbl_user_as_tutor.t_id=tutor_info.id AND   institute='$institute'";
  
    $result1 = mysqli_query($conn,$sql);
  $nums=mysqli_num_rows($result1);
  $row1 = mysqli_fetch_assoc($result1);
  if($row1){
    echo ' 
    <div class= "container-fluid">        
    <form method="POST">
      <figure class="col-md-4">
        <a href="#" data-size="">
        <img src= "data:image/jpeg;base64,'.base64_encode($row1['pic']).'" height="300" width="300" class="rounded-circle" alt="image">
        </a>
      </figure>
      <div class="course-details">                                            
      <h4> <a href="tutors.php?id='.$row1['t_id'].'" title="'.$row1['fname'].'">'.$row1['fname'].'</a></h4>
      <p>"'.$row1['About'].'" </p>
       </div>
       <div class="course-location clearfix"> <span class="pull-left"><small><i class="fa fa-globe"></i>"'.$row1['location'].'"</small></span> <span class="pull-right"> <small><i class="fa fa-eye"></i> 1</small></span></div>
       <div class="course-footer clearfix"> ';
       echo "<td><a href='tutors.php?id=".$row1['t_id']." 'class='btn btn-full btn-green'>View details</a></td>";                                           
      echo' </div>';
  echo'</form> </div></div>';

  }
}
  if($gender == "" &&   $education ==""  &&  $institute == "" &&  $location){
   $sql= "SELECT * FROM tbl_user_as_tutor  NATURAL JOIN tutor_info WHERE tbl_user_as_tutor.t_id=tutor_info.id AND  location='$location'";
   $result1 = mysqli_query($conn,$sql);
  $nums=mysqli_num_rows($result1);
  $row1 = mysqli_fetch_assoc($result1);
  if($row1){
    echo '  
    <div class= "container-fluid">       
    <form method="POST">
      <figure class="col-md-4">
        <a href="#" data-size="">
        <img src= "data:image/jpeg;base64,'.base64_encode($row1['pic']).'" height="300" width="300" class="rounded-circle" alt="image">
        </a>
      </figure>
      <div class="course-details">                                            
      <h4> <a href="tutors.php?id='.$row1['t_id'].'" title="'.$row1['fname'].'">'.$row1['fname'].'</a></h4>
      <p>"'.$row['About'].'" </p>
       </div>
       <div class="course-location clearfix"> <span class="pull-left"><small><i class="fa fa-globe"></i>"'.$row1['location'].'"</small></span> <span class="pull-right"> <small><i class="fa fa-eye"></i> 1</small></span></div>
       <div class="course-footer clearfix"> ';
       echo "<td><a href='tutors.php?id=".$row1['t_id']." 'class='btn btn-full btn-green'>View details</a></td>";                                           
      echo' </div>';
  echo'</form>';

  }
 }
if($gender  && $education && $institute && $location){
  $sql="SELECT * FROM tbl_user_as_tutor NATURAL JOIN tutor_info WHERE tbl_user_as_tutor.t_id=tutor_info.id  ";
  $result1 = mysqli_query($conn,$sql);
  $nums=mysqli_num_rows($result1);
  $row1 = mysqli_fetch_assoc($result1);
  if($row1){
    echo '
   <div class= "container-fluid">     
    <form method="POST">
    <input type="hidden" value='.$row['t_id'].' name="t_id">
      <figure class="col-md-4">
        <a href="#" data-size="">
        <img src= "data:image/jpeg;base64,'.base64_encode($row1['pic']).'" height="300" width="300" class="rounded-circle" alt="image">
        </a>
      </figure>
      <div class="course-details">                                            
      <h4> <a href="tutors.php?id='.$row1['t_id'].'" title="'.$row1['fname'].'">'.$row1['fname'].'</a></h4>
      <p>"'.$row1['About'].'" </p>
       </div>
       <div class="course-location clearfix"> <span class="pull-left"><small><i class="fa fa-globe"></i>"'.$row1['location'].'"</small></span> <span class="pull-right"> <small><i class="fa fa-eye"></i> 1</small></span></div>
       <div class="course-footer clearfix"> ';
       echo "<td><a href='tutors.php?id=".$row1['t_id']." 'class='btn btn-full btn-green'>View details</a></td>";                                           
      echo' </div>';
  echo'</form>';

  }
}

}
  ?>
  <?php 
   $id = isset($_GET['t_id']) ? $_GET['t_id'] : 0;
 $sql1 = "SELECT * FROM tbl_user_as_tutor NATURAL JOIN tutor_info WHERE tbl_user_as_tutor.t_id=tutor_info.id";
 $result = mysqli_query($conn,$sql1);
 if(mysqli_num_rows($result)>0){
 
 ?> 
<!doctype html>
<html lang="en">
  <head>
    <title>Find Tuitions</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/th.css">
     <link rel="stylesheet" href="css/main.css">

    
  </head>
  
  <body>
  <div class="container">
                <div class="boxed">
                    <div class="row">                      
                    <div class="col-md-8">
                      
                            
    <?php
         while($row = mysqli_fetch_assoc($result)){
             echo '
           
               <form method="POST">
               <input type="hidden" value="'. $row['t_id'].'"  name="t_id">
                 <figure class="col-md-4">
                   <a href="#" data-size="">
                   <img src= "data:image/jpeg;base64,'.base64_encode($row['pic']).'" height="300" width="300" class="rounded-circle" alt="image">
                   </a>
                 </figure>
                 <div class="course-details">                                            
                 <h4> <a href="tutors.php?id='.$row['t_id'].'" title="'.$row['fname'].'">'.$row['fname'].'</a></h4>
                 <p>"'.$row['About'].'" </p>
                  </div>
                  <div class="course-location clearfix"> <span class="pull-left"><small><i class="fa fa-globe"></i>"'.$row['location'].'"</small></span> <span class="pull-right"> <small><i class="fa fa-eye"></i> 1</small></span></div>
                  <div class="course-footer clearfix"> ';
                  echo "<td><a href='tutors.php?id=".$row['t_id']." 'class='btn btn-full btn-green'>View details</a></td>";                                           
                 echo' </div>';
             echo'</form>';
                
        
         }
        }

     ?>
      </div>
                                
<div class="sidebar col-md-4">
						  <div class="widget clearfix"> <hr class="top-zero">
                                <h3 class="widget-title">Let's find the best tutors</h3>                                   
    <form method="POST" action="">     
	<select class="form-control" name="gender">
	<option selected="selected" value="">Tutors Gender</option>
    <option value="">All</option>
	<option value="Male">Male</option>
    <option value="Female">Female</option>
    </select>
	<select class="form-control" title="Tutors Education" name="educations">
    <option selected="selected"  value="">Tutors  Education</option>
    <option  value="Doctorate">Doctorate</option>
    <option  value="Doctorate (Running)">Doctorate (Running)</option>
	<option  value="Post Graduate">Post Graduate</option>
    <option  value="Post Graduation (Running)">Post Graduation (Running)</option>
	<option  value="Graduate">Graduate</option>
    <option  value="Graduation (Running)">Graduation (Running)</option>
	<option  value="Diploma">Diploma</option>
    <option  value="Diploma (Running)">Diploma (Running)</option>
	<option  value="Higher Secondary">Higher Secondary</option>
    <option  value="Secondary">Secondary</option>
  </select>                                  
    <input type="text" class="form-control" placeholder="Tutors Institute " name="institute" value="">  
	<input type="text" class="form-control" placeholder="Tuition Area" name="location" value="">	
<button type="submit" class="btn btn-primary btn-full" name="search"><i class="fa fa-search"></i> Search Tutors</button>
 </form>                                
                           </div> 
                      </div>
                 </div>
           </div> 
     </div>  
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php
 include("blog.php");
        
 include("footer.php");
?>

      
