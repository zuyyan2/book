<?php
include ('connect.php');
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Home Page</title>
<style>
body{
	margin-top:0;
	margin-bottom:0;
}
nav{
	background-color:#000;
	font-size:16px;
	margin-bottom:6px;
}

.navbar a {
        padding: 3px 0;
        border-left: 1px solid #ccc9c9;
        text-decoration: none;
        color: white;
        display: block;
}
      a:hover {
        background-color: #444444;
      }
 li ul {

        height: auto;
        margin: 0;
        padding: 0;
		
      }
/* li:hover ul {
        display: #;
 }/*
  /* li ul li {
        background-color:blue;
      }*/
	  .dropdown-menu{
		  background-color:black;
		  color:white;
	  }
	/*  li ul li a {
        border-left: 1px solid #444444;
        border-right: 1px solid #444444;
        border-top: 1px solid #c9d4d8;
        border-bottom: 1px solid #444444;
      }*/
	  
     li ul li a:hover {
        background-color:blue;
      }
</style>
</script>
</style>
</head>


<body>
<div class="container-fluid">
<div class="page-header">
<div class="header-grid-right animated wow slideInright animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
					<ul>
						<li style="color:black;"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>&nbsp;abcbook@gmail.com</li>
				
						<li style="color:black;"><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="login.php" style="color:black;">&nbsp;Logout</a></li>
		
					</ul>
				</div>
				


&nbsp;&nbsp;<p style="color:#000; font-size:58px; font-family:Algerian; font-style:italic;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-BOOK &nbsp;<span style="font-size:20px;">Choose your best</span></p>
</div>
<nav class="navbar">
<ol class="nav nav-pills nav-justified">
<li><a href="homepage.php">HOME</a></li>
<li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">LIBARAY <b class="caret"></b></a>
	            <ul class="dropdown-menu multi-column columns-2">
		           
			            <center>
							<div style="font-color:black; font-size:18px;">
				            <ul class="multi-column-dropdown">
					            <li ><a href="biography.php">Biography</a></li>
					            <li><a href="science.php">Science fiction</a></li>
					            <li><a href="kids.php">Kids</a></li>
					            <li><a href="romance.php">Romance</a></li>
					         
				            </ul>
			            
				            <ul class="multi-column-dropdown">
					            <li><a href="fairy tale.php">Fairy Tale</a></li>
					            <li><a href="religious.php">Religious</a></li>
					            <li><a href="mystery.php">Mystery/Thriller</a></li>
					            <li><a href="comedies.php">Comedies</a></li>
					          
				            </ul>
	</div>
	</center>
	            </ul>
	        </li>
<li><a href="Competition.php">COMPETITION</a></li>
<li><a href="about.php">ABOUT US</a></li>
<li><a href="contactus.php">CONTACT US</a></li>
</ol>
</nav>
</div>
	</div>
</body>
</html>
