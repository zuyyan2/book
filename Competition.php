<?php
include ('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Competitions</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Best Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery.min.js"></script>
<!-- //js -->
<!-- cart -->
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- timer -->
<link rel="stylesheet" href="css/jquery.countdown.css" />
<!-- //timer -->
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
<style>
 body {
/*	background-image:url("images/web back.jpg");
	background-position:cover;
	background-size:cover;*/
}
.slideshow-container {
  max-width: 900px;
  position: relative;
  margin-left:100px;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 5px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

</style>
</head>
	
<body>
<?php
include ('header.php');
?>
<center>
<h1 style="font-family: Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, 'serif'; font-size: 50px; color:#000; 
font-style: italic; margin-right:45px;"><b><u>Upcoming Competition</b></u></h1>
</center>
<br>
<!-- slider -->
<div class="container-fluid">
<div class="slideshow">
<div class="mySlides fade">
  
  <img src="images/combanner1.jpg" style="width:975px; height:450px;">
</div>

<div class="mySlides fade">

<img src="images/combanner2.jpg" style="width:975px; height:450px;">
</div>

<div class="mySlides fade">
  
<img src="images/combanner3.png" style="width:975px; height:450px;">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
    </div>
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 1500); // Change image every 2 seconds
}

</script>

<center>
<h1 style="font-family: Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, 'serif'; font-size: 50px; color:#000; 
font-style: italic; margin-right:45px;"><b><u>Previous Competition</b></u></h1>
</center>
<br>
<br>
<div class="col-md-12">
<div class="row">
<center>
<div class="col-md-4">
<a href="Beacon hill park.html"><img src="images/comfooter2.jpg"width="190"height="220"></a>
</div>
 <div class="col-md-4">
<a href="fairmont banff spring.html"><img src="images/s2.jpg"width="190"height="220"></a>
</div>
<div class="col-md-4">
<a href="fairmont empress.html"><img src="images/s1.jpg"width="190"height="220"></a>
</div>
<div style="margin-bottom:6%;" class="row"></div>
<div class="col-md-4">
<a href="Gibraltar point light house.html"><img src="images/s3.jpg"width="190"height="220"></a>
</div>
<div class="col-md-4">
<a href="parliament building.html"><img src="images/comfooter3.jpg"width="190"height="220"></a>
</div>
<div class="col-md-4">
<a href="train.html"><img src="images/s4.jpg " width="190"height="220"></a>
</div>
</center>
</div>

<br>
<br>
<?php
include ('footer.php');
?>
</body>
</html>