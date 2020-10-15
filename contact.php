<?php include("header.php");?>
<?php require("connection.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>contact us form</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet"> 
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/carousel.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="style.css"> 
<link rel="stylesheet" href="css/main.css">
 <link rel="stylesheet" href="css/footer.css">
 <link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="css/th.css"> 
  <link rel="stylesheet" type="text/css" href="fontawesome-free-5.12.0-web/css/all.min.css">
 
</head>
<body>
  <section class="section gb nopadtop">
            <div class="container">
                <div class="boxed boxedp4">
					<div class="container">
          <form action="" method=post>
            
              <input type="text"  name="address" placeholder="Enter Address" class="form-control">
              <button type="submit" name="submit">Submit</button>
          </form>

          <?php 
              if(isset($_POST["submit"]))
              {
                  $address = $_POST["address"];
                  $address = str_replace("  ","+",$address);
                  ?>


                  <iframe width="100%" height="500" src="https://maps.google.com/maps?q=,<?php echo $address; ?>&output=embed"></iframe>
                    <?php
              }
         ?>
          </div>

                    <div class="row contactv2 text-center">
                        <div class="col-md-4">
                            <div class="small-box">
                                <i class="flaticon-email wow fadeIn"></i>
                                <h4>Contact us today</h4>
                                <small>Phone: +880 1947-398521 </small>
                                <p><a href="#">info@searchtutorbd.com</a></p>
                            </div><!-- end small-box -->
                        </div><!-- end col -->

                        <div class="col-md-4">
                            <div class="small-box">
                                <i class="flaticon-map-with-position-marker wow fadeIn"></i>
                                <h4>Visit Our Office</h4>
                                <small>192,Abashik,B-block,road No:#8 </small>
                                <small>Chandgaon,Chattogram, Bangladesh </small>
                            </div><!-- end small-box -->
                        </div><!-- end col -->

                        <div class="col-md-4">
                            <div class="small-box">
                                <i class="flaticon-share wow fadeIn"></i>
                                <h4>Be Social</h4>
                                <small>Twitter : @hometutorbd</small>
                                <small>Facebook : /searchtutorbangladesh</small>
                            </div><!-- end small-box -->
                        </div><!-- end col -->
                    </div><!-- end contactv2 -->

                    <div class="row">  <div class="col-md-6 col-md-offset-3">  </div>
                        <div class="col-md-6 col-md-offset-3">
                            <div class="section-title text-center">
                                <h3>Contact Form</h3>
                                <p>For any Advertisement, Membership query, Feedback, Support Request  Please contact us via contact form.</p>
								
                            </div><!-- end title -->
                            
                            <form class="big-contact-form" role="search" action="" method="post">
                                <input type="text" name="name" class="form-control" placeholder="Enter your name.." value="">
                                <input type="email" class="form-control" placeholder="Enter email.." name="email" value="">
                                <input type="text" class="form-control" placeholder="Your phone.." name="phone" value="">
                                <input type="text" class="form-control" placeholder="Subject.." name="subject" value="">
                                <textarea class="form-control" name="message" placeholder="Message goes here.."></textarea>
                                <button type="submit" name="support" class="btn btn-primary">Submit</button>
                            </form>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div>
        </section>

 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>        
</body>
</html>
<?php include("footer.php");?>