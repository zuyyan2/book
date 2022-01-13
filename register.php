
<!DOCTYPE html>
<html>
<head>
<title>register</title>
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
	<script src="js/simpleCart.min.js"> </script>
<!-- cart -->
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
<style>
     body {
 background-image: url("images/background.jpg");
 background-color: #cccccc;
     }
</style>

</head>
	
<body>



&nbsp;&nbsp;<p style="color:#000; font-size:58px; font-family:Algerian; font-style:italic;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-BOOK &nbsp;<span style="font-size:20px;">Choose your best</span></p>
</div>

	<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">register Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- register -->
<div class="login">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s"><i>Register Here</i></h3>
			<p class="est animated wow zoomIn" data-wow-delay=".5s"></p>
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<form action="dataaccess.php" method="POST">

                    <lable><i><b>User Name:</i></b></lable>
                    <input type="text" class="form-control" 
                id="name" name="username" required> 
                <br>
                <lable><i><b>E-mail:</i></b></lable>
                    <input type="email" class="form-control" 
                id="email1" name="useremail" placeholder="abc@gmail.com" required>
					
            <br>
            <lable><i><b>Contact:</i></b></lable>
                    <input type="number" class="form-control" 
                id="number1" name="contact" required >
<br>
<lable><i><b>Address:</i></b></lable>
                    <input type="text" class="form-control" 
                id="address1" name="address" placeholder="address" required> 
<br>
<lable><i><b>Zip Code:</i></b></lable>
                    <input type="number" class="form-control" 
                id="zipcode" name="zipcode" placeholder="example:14758" required>
<br>
<lable><i><b>Password:</i></b></lable>
                    <input type="password" class="form-control" 
                id="Password1" name="passwords" required>
<br>
<lable><i><b>Comfirm Password:</i></b></lable>
                    <input type="password" class="form-control" 
                id="Password2" name="comfirmpasswords" required>
    <br> 
    
    <lable><i><b>Gender:</i></b></lable>
                    <input type="text" class="form-control" 
                id="Password2" name="Gender" require>
    <br>  
                <input type="submit" class="btn btn-default" name="btnregister" value="Insert">
				</form>
			</div>
			
		</div>
	</div>

    
<!-- //register -->
<?php
include ('footer.php');
?>
</body>
</html>