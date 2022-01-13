<?php
include ('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>book update</title>
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
</head>
	
<body>

						
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">book update Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- book update -->
	<div class="login">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">Book update Form</h3>
			<p class="est animated wow zoomIn" data-wow-delay=".5s"></p>
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<!-- main content start-->
		<div id="page-wrapper" style="min-height: 252px;">
			<div class="main-page">
				<div class="forms">
					
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						
						<div class="form-body">
                            <form method="post" action="dataAccess.php" enctype="multipart/form-data">
                                 <div class="form-group"> 
                                     <label for="exampleInputEmail1">book title</label>
                             <input type="text" class="form-control" id="exampleInputEmail1" name="booktitle"> 
                            </div> 
                    
                            <div class="form-group"> 
                            <label for="exampleInputPassword1">book Category</label>
                            <select class="form-control" name="bookCat">
                            <option>Select Category</option>
                            <?php
                            $fetchcat = mysqli_query($con, "Select * from category");
                            while($rows = mysqli_fetch_array($fetchcat))
                            {
                            ?>
                            <option value="<?= $rows['cat_id']; ?>" > <?= $rows['cat_name']; ?></option>
                            <?php
                            }
                            ?>
                            </select>
                             </div> 
                             
                         
                            <div class="form-group"> 
                            <label for="exampleInputPassword1">book price</label>
                             <input type="text" class="form-control" id="exampleInputPassword1" name="bookprice"> 
                             </div> 

                             <div class="form-group"> 
                                     <label for="exampleInputEmail1">book publisher</label>
                             <input type="text" class="form-control" id="exampleInputEmail1" name="bookpublisher"> 
                            </div> 
                            
                            <div class="form-group"> 
                            <label for="exampleInputPassword1">book quantity</label>
                             <input type="text" class="form-control" id="exampleInputPassword1" name="bookquantity" > 
                             </div> 

							 <div class="form-group"> 
                            <label for="exampleInputPassword1">book img</label>
                             <input type="file" class="form-control" id="exampleInputPassword1" name="bookimg" > 
                             </div> 

                              <input type="submit" class="btn btn-default" name="btnbook" value="Insert Record">
                             </form> 
						</div>
					</div>
					

				</div>
			</div>
		</div>
<!-- //category -->

</body>
</html>