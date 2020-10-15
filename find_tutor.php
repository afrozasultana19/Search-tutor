
<?php include("header.php");?>
<?php
 require_once 'connection.php'; ?>
  <?php 
   $id = isset($_GET['t_id']) ? $_GET['t_id'] : 0;
 $sql = "SELECT * FROM tbl_user_as_tutor NATURAL JOIN tutor_info WHERE tbl_user_as_tutor.t_id=tutor_info.id";
 $result = mysqli_query($conn,$sql);
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

     ?>
      </div>
                
<?php
 }
 ?>                                  
<div class="sidebar col-md-4">
						  <div class="widget clearfix"> <hr class="top-zero">
                                <h3 class="widget-title">Let's find the best tutors</h3>                                   
    <form method="get" action="tutors.php?">     
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
    <input type="text" class="form-control" placeholder="Tutors Institute (eg. BUET, Dhaka University)" name="institute" value="">  
	<input type="text" class="form-control" placeholder="Tuition Area (eg. Gulshan, Banani)" name="location" value="">	
	<select name="city" style="width: 100%;" class="form-control">        
		<option value="" selected="selected">
          District        </option> 
		<option value="BAGERHAT"> BAGERHAT </option>
		<option value="BANDARBAN"> BANDARBAN </option>
		<option value="BARGUNA"> BARGUNA </option>
		<option value="BARISAL"> BARISAL </option>
		<option value="BHOLA"> BHOLA </option>
		<option value="BOGURA"> BOGURA </option>
		<option value="BRAHMANBARIA"> BRAHMANBARIA </option>
		<option value="CHANDPUR"> CHANDPUR </option>
		<option value="CHAPAI NABABAGANJ"> CHAPAI NABABAGANJ </option>
		<option value="CHATTOGRAM"> CHATTOGRAM </option>
		<option value="CHUADANGA"> CHUADANGA </option>
		<option value="COMILLA"> COMILLA </option>
		<option value="COX'S BAZAR"> COX'S BAZAR </option>
		<option value="DHAKA"> DHAKA </option>
		<option value="DINAJPUR"> DINAJPUR </option>
		<option value="FARIDPUR"> FARIDPUR </option>
		<option value="FENI"> FENI </option>
		<option value="GAIBANDHA"> GAIBANDHA </option>
		<option value="GAZIPUR"> GAZIPUR </option>
		<option value="GOPALGONJ"> GOPALGONJ </option>
		<option value="HABIGANJ"> HABIGANJ </option>
		<option value="JAMALPUR"> JAMALPUR </option>
		<option value="JESSORE"> JESSORE </option>
		<option value="JHALOKATI"> JHALOKATI </option>
		<option value="JHENAIDAHA"> JHENAIDAHA </option>
		<option value="JOYPURHAT"> JOYPURHAT </option>
		<option value="KHAGRACHHARI"> KHAGRACHHARI </option>
		<option value="KHULNA"> KHULNA </option>
		<option value="KISHORGONJ"> KISHORGONJ </option>
		<option value="KURIGRAM"> KURIGRAM </option>
		<option value="KUSHTIA"> KUSHTIA </option>
		<option value="LAKSHMIPUR"> LAKSHMIPUR </option>
		<option value="LALMONIRHAT"> LALMONIRHAT </option>
		<option value="MADARIPUR"> MADARIPUR </option>
		<option value="MAGURA"> MAGURA </option>
		<option value="MANIKGONJ"> MANIKGONJ </option>
		<option value="MAULVI BAZAR"> MAULVI BAZAR </option>
		<option value="MEHERPUR"> MEHERPUR </option>
		<option value="MUNSHIGONJ"> MUNSHIGONJ </option>
		<option value="MYMENSINGH"> MYMENSINGH </option>
		<option value="NAOGAON"> NAOGAON </option>
		<option value="NARAIL"> NARAIL </option>
		<option value="NARAYANGONJ"> NARAYANGONJ </option>
		<option value="NARSINGDI"> NARSINGDI </option>
		<option value="NATORE"> NATORE </option>
		<option value="NETROKONA"> NETROKONA </option>
		<option value="NILPHAMARI"> NILPHAMARI </option>
		<option value="NOAKHALI"> NOAKHALI </option>
		<option value="PABNA"> PABNA </option>
		<option value="PANCHAGARH"> PANCHAGARH </option>
		<option value="PATUAKHALI"> PATUAKHALI </option>
		<option value="PIROJPUR"> PIROJPUR </option>
 <option value="RAJBARI"> RAJBARI </option>
 <option value="RAJSHAHI"> RAJSHAHI </option>
 <option value="RANGAMATI"> RANGAMATI </option>
 <option value="RANGPUR"> RANGPUR </option>
 <option value="SATKHIRA"> SATKHIRA </option>
 <option value="SHARIATPUR"> SHARIATPUR </option>
 <option value="SHERPUR"> SHERPUR </option>
 <option value="SIRAJGANJ"> SIRAJGANJ </option>
 <option value="SUNAMGANJ"> SUNAMGANJ </option>
 <option value="SYLHET"> SYLHET </option>
 <option value="TANGAIL"> TANGAIL </option>
 <option value="THAKURGAON"> THAKURGAON </option>  
 </select>
	

<button type="submit" class="btn btn-primary btn-full"><i class="fa fa-search"></i> Search Tutors</button>
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


