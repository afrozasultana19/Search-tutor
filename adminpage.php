<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
     
  <a class="collapsible-header waves-effect arrow-r"><i class="far fa-envelope"></i> Contact me<i
              class="fas fa-angle-down rotate-icon"></i></a>
          <div class="collapsible-body">
            <ul>
              <li><a href="adminpage.php" class="waves-effect">dashboard</a>
              </li>
              <li><a href="index.php" class="waves-effect">Home</a>
              </li>
              <li><form method="POST"><button class="btn btn--pill btn--green" type="submit" name="tutor">Tutors</button></form>
              </li>
              <li><form method="POST"><button class="btn btn--pill btn--green" type="submit" name="student">Tutors</button></form>
              </li>
              <li><form method="POST"><button class="btn btn--pill btn--green" type="submit" name="applied">Tutors</button></form>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </li>
  </ul>
  <div class="sidenav-bg rgba-blue-strong"></div>
</div>
         <?php
require("connection.php");
if(isset($_POST['tutor'])){
    echo'<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
      <caption>List of users</caption>
      <thead class="thead-dark|thead-light">
      <tr>
          <th scope="col">FullName</th>
          <th scope="col">Gender</th>
          <th scope="col">Date Of birth</th>
          <th scope="col">city</th>
          <th scope="col">state</th>
        </tr></thead>';
$sql= "SELECT * FROM tbl_user_as_tutor";
$res1 = mysqli_query($conn,$sql);
if(mysqli_num_rows($res1)>0){
   while($r = mysqli_fetch_assoc($res1)){
       echo '
         <tbody>
           <tr>
             <td>'.$r['fname'].'</td>
             <td>'.$r['gender'].'</td>
             <td>'.$r['dob'].'</td>
             <td>'.$r['city'].'</td>
             <td>'.$r['state'].'</td>
           </tr> 
         </tbody>
       ';
   }
}
}
if(isset($_POST['student'])){
    echo'<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
      <caption>List of users</caption>
      <thead class="thead-dark|thead-light">
      <tr>
          <th scope="col">FullName</th>
          <th scope="col">Gender</th>
          <th scope="col">Date Of birth</th>
          <th scope="col">city</th>
          <th scope="col">state</th>
        </tr></thead>';
    $sql= "SELECT * FROM tbl_user_as_student";
    $res1 = mysqli_query($conn,$sql);
    if(mysqli_num_rows($res1)>0){
       while($r = mysqli_fetch_assoc($res1)){
           echo '
            
             <tbody>
               <tr>
                 <td>'.$r['fname'].'</td>
                 <td>'.$r['gender'].'</td>
                 <td>'.$r['dob'].'</td>
                 <td>'.$r['city'].'</td>
                 <td>'.$r['state'].'</td>
               </tr> 
             </tbody>
           ';
       }
}
}
if(isset($_POST['applied'])){
    echo'<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
      <caption>List of users</caption>
      <thead class="thead-dark|thead-light">
      <tr>
          <th scope="col">Apply by student name</th>
          <th scope="col">Review</th>
          <th scope="col">Apply by tutor name</th>
          <th scope="col">Riview</th>
        </tr></thead>';
    $sql= "SELECT * FROM tbl_review_apply";
    $res1 = mysqli_query($conn,$sql);
  
    if(mysqli_num_rows($res1)>0){
       while($r = mysqli_fetch_assoc($res1)){
           echo '
            
             <tbody>
               <tr>
                 <td>'.$r['student_name'].'</td>
                 <td>'.$r['review_std'].'</td>
                 <td>'.$r['tutor_name'].'</td>
                 <td>'.$r['review_tutor'].'</td>

               </tr> 
             </tbody>
           ';
       }
}
}
?>
</table>
   </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <script> $(document).ready(function() {
// SideNav Button Initialization
$(".button-collapse").sideNav2();
// SideNav Scrollbar Initialization
var sideNavScrollbar = document.querySelector('.custom-scrollbar');
var ps = new PerfectScrollbar(sideNavScrollbar);
   }); </script>
</body>
</html>
