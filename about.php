<?php include("header.php");?>

<!DOCTYPE html>
<html>
<head>
	<title>About the page</title>
	<script  src="js/jquery.js"></script>
	<script type="text/javascript">
		$("doccument").ready(function(){

    $("#fadein").on("click",function(){

    	$("#textbox").fadeIn(3000,function(){
    		alert("I'done fading");
    	});
    });

    $("#fadeout").on("click",function(){

    	$("#textbox").fadeOut(3000,function(){
    		alert("I'done fading out");
    	});
    });

		})

	</script>

	<style type="text/css">
		#textbox{
			display:none;
		}
	</style>
	<link rel="stylesheet" href="style.css"> 
<link rel="stylesheet" href="css/main.css">
 <link rel="stylesheet" href="css/footer.css">
 <link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="css/th.css"> 
</head>
<body>
<a href="#" id="fadein">FadeIn</a> | <a href="#" id="fadeout">Fadeout</a>
<div id="textbox">
	<h1>Are you looking Home tutor or Tution!</h1>
	<p>Thist is a best platform to hire a tutor,find tution.We are here to help you to find tution through online.</p>
	<p class="text-center"> <small><span class="red">Disclaimer :</span> THis platform only share and exchange the information that is provided by the Tutors, Parents or Educational Directory members. Except email verification , hometutorbd.com does not verify any information of Tutors, Parents or Directory members. It is the members responsibility to verify the information integrity of Tutors, Parents or Educational Institutes.
	 Hometutorbd.com is not liable or responsible for any kind of misinformation and any incident between Tutors, 
	 Parents or Educational Institute authority. For details please review our </small> </p>
</div>
</body>
</html>
