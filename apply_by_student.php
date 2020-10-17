<?php
include("header.php");?>
<?php
require("connection.php");
if(isset($_POST['apply'])){
    $std_name = $_POST['name'];
    $review_by_std = $_POST['review'];
    $sql = "INSERT INTO tbl_review_apply (student_name,review_std) VALUES ('$std_name','$review_by_std ')";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo 'Aplied by studentSuccessfull';
    }
    else{
        echo "error!";
        echo "you are not logged in.";
    }

}

 ?>


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
    <div class="row"> 
        <div class="col-md-4"></div> 
  <div class="card bg-primary|secondary|success|danger|warning|info|light|dark text-primary|secondary|success|danger|warning|info|light|dark">
  <div class="card-header">Apply</div>
  <div class="card-body">
    <h5 class="card-title">Review after apply</h5>
    <form method= "POST">

  <div class="form-group">
    <label ></label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="form-group">
    <label>Riview</label>
    <input type="text" class="form-control" id="review" name="review">
  </div>
  <button type="submit" name="apply" class="btn btn-primary btn-lg">apply</button>
</form>
    </div>
    <div class="col-md-4"></div> 
</div></div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>