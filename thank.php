<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="css/thank.css">
		<link rel="stylesheet" href="css/animate.css">
        <script src="js/modernizr.custom.js"></script>
        <link rel="stylesheet" href="css/font/font.css">
        <link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){     
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
        </script>
        <style>
.mySlides {display:none;}
</style>
	</head>
<body>
	<div class="div animated fadeInRightBig" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRightBig;">
		<div class="opac">
		</div>
	</div>
	
	<div class="w3-content animated bounceInDown" style="max-width:50%; visibility: visible; animation-delay: 0.9s; animation-name: bounceInDown;">
  		<div class="mySlides w3-container w3-red">
		    <h1 style="text-align: center;letter-spacing: 20px;padding-top: 30px;"><b>THANK YOU!</b></h1>
  		</div>

  		<div class="mySlides w3-container w3-red">
		    <h1 style="text-align: center;letter-spacing: 5px;padding-top: 50px;"><b>Your Submission  <br> Have Been Received</b></h1>
  		</div>

  		<div class="mySlides w3-container w3-red">
		    <h1 style="text-align: center;letter-spacing: 5px;padding-top: 50px;"><b>We Will Get Back To <br> You Soon!</b></h1>
  		</div>
	</div>
		
		<p class="text-primary text-center">
            <a href="index.php" class="btn">Go Back To HomePage</a>
        </p>

	<script>
			var slideIndex = 0;
			carousel();

			function carousel() {
			    var i;
			    var x = document.getElementsByClassName("mySlides");
			    for (i = 0; i < x.length; i++) {
			      x[i].style.display = "none"; 
			    }
			    slideIndex++;
			    if (slideIndex > x.length) {slideIndex = 1} 
			    x[slideIndex-1].style.display = "block"; 
			    setTimeout(carousel, 2000); 
			}
	</script>
</body>
</html>