<?php include("header.php");?>
<?php require_once 'connection.php';?>
<?php
if(isset($_POST["submit"])){

    $tutor_fullname= $_POST['fname'] ;
    $tutor_username= $_POST['uname'] ;
    $tutor_dob= $_POST['dob'] ;
    $tutor_gender= $_POST['gender'] ;
    $city= $_POST['city'] ;
    $state= $_POST['state'] ;
    $email= $_POST['email'] ;
    $pass1= $_POST['pass'] ;
    $confirmpass= $_POST['pass1'] ;
    $phone =$_POST['Contactnumber'];
if(empty( $tutor_fullname) || empty($tutor_username) || empty($tutor_dob) || empty($tutor_gender) || empty($city) ||
empty($state) ||  empty($email) || empty($pass1) || empty($confirmpass) || empty($phone)){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				<span class="sr-only">Close</span>
			</button>
			<strong>field is empty!</strong>
		</div>';
}
else{
    $sql="INSERT INTO tbl_user_as_tutor(fname,uname,dob,gender,city,state,email,pass1,pass2,contact_num) VALUES('$tutor_fullname','$tutor_username','$tutor_dob','$tutor_gender','$city','$state','$email','$pass1','$confirmpass','$phone')";
    $result=mysqli_query($conn,$sql);
    if($result){
    
        if($pass1!=$confirmpass){
        echo "password and confirmpass do not match!</strong>
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
    </div>";
    }
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
      <strong>successfully added!</strong>
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
    </div>";
    header("location:login.php");
     }
    }

}
?>
<?php $sql2 = "SELECT * FROM tbl_user_as_tutor";
$result2 = mysqli_query($conn,$sql2) or die(mysqli_error($conn));
$row = mysqli_fetch_assoc($result2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Title Page-->
    <title>Sign up as tutor</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/regstyle.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <center>><span class="title ">
  <label>Sign Up Form</label>
        </span></center>
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Tutor Info</h2>
                    <form method="POST" action="">
                    <input type="hidden" value=<?php echo $row['t_id']; ?> name="t_id">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="FullName" id="validationServer01" name="fname">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="User-Name" id="validationServerUsername" name="uname">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3 js-datepicker" type="date" placeholder="Birthdate" name="dob">
                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="gender">
                                    <option disabled="disabled" selected="selected">Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" id="inputEmail3" name="email">
                        </div>
                         <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="City" id="validationServer03" name="city">
                        </div>
                         <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="State"  id="validationServer04" name="state">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="password" name="pass">
                        </div><div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Confirm password" name="pass1">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Phone" name="Contactnumber">
                        </div>
                        <div class="p-t-10">
                        <button class="btn btn--pill btn--green" type="submit" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<?php include("footer.php");?>