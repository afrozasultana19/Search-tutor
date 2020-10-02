<?php include("header.php");?>
<?php include("nav.php");?>
<?php require_once 'db.php';?>

<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
    <span class='sr-only'>Close</span>
  </button>
  <strong>please fillout all the required fields</strong> 
</div>

<?php
  if(isset($_POST["submit"]))
  {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    if(empty($_POST['first_name'])||empty($_POST['last_name'])||empty($_POST['address'])||empty($_POST['contact']))
    {
      echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
        <span class='sr-only'>Close</span>
      </button>
      <strong>please fillout all the required fields</strong> 
    </div>";
    }
    else{
      $sql="INSERT INTO tbl_users(first_name,last_name,address,contact_no)
      VALUES('$firstName','$lastName','$address','$contact')";

      if(mysqli_query($con,$sql))
      {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
        <span class='sr-only'>Close</span>
         </button>
         <strong>Successfully Added!</strong> Check all the user page.
        </div>";
      }
    else
    {
      echo "<div class='alert alert-danger  alert-dismissible fade show' role='alert'>
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
        <span class='sr-only'>Close</span>
      </button>
      <strong>Error!</strong> Check the code.
    </div>";
    
header("location:show_all.php") ;
    }

    }
  }
?>






</div>

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <form method="DB.PHP" action="POST">
  <div class="form-group" >
    <label for="first_name">First Name</label>
    <input type="text" class="form-control" id="first_name" name="first_name" autocomplete=off>
  </div>
  <div class="form-group" >
    <label for="last_name">Last Name</label>
    <input type="text" class="form-control" id="last_name" name="last_name" autocomplete=off>
  </div>
  <div class="form-group" >
    <label for="address">Address</label>
    <input type="textarea" class="form-control" id="address" name="address" autocomplete=off>
  </div>
  <div class="form-group" >
    <label for="contact">Contact No</label>
    <input type="text" class="form-control" id="contact" name="contact" autocomplete=off>
  </div>
  
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
     
       </div>




    </div>
    <div class="col-md-3"></div>
</div>











<?php include("footer.php");?>