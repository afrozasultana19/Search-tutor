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
</div>
</body>
</html>
