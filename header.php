<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>ONLINE GROCERY & ESSENTIALS DELIVERY SYSTEM</title>
	<!-- Favicon -->
	<link rel="shortcut icon" href="img/logo.jpg">

	<!-- ICON CSS -->
	<link rel="stylesheet" href="js/font-awesome/css/font-awesome.min.css">

	<!-- CSS -->
	<link rel="stylesheet" href="js/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="js/slick/slick.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/style.css">

	<!-- MODERNIZR -->
     <script src="js/modernizr-2.8.3-respond-1.4.2.min.js"></script>

</head>
<body class="home4" style="background-color: burlywood;">

<div class="wrapper">
	<header class="header header4 header5" style="background-color: khaki;">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php"><img src="img/logo.jpg" style="width: 114px;
    margin-top: -10px;
    height: 64px;" class="img-responsive" alt=""/></a>
				</div>
				
				<div class="search-alt pull-left">
					<!-- <form>
						<input type="text" placeholder="Search">
						<button type="submit"></button>
					</form> -->
					<h2>ONLINE GROCERY & ESSENTIALS DELIVERY SYSTEM</h2>
				</div>
				
				<div class="log-reg pull-right">
					<?php if($_SESSION['userid']){ ?>
					<a href="logout.php">Log Out</a>
					<?php }else{ ?>
					<a href="login.php">Sign In</a>
					<a href="registration.php">Sign Up</a>
					<?php }?>
				</div>
			</div>
		</nav>
		
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="nav-white hidden-xs">
		<div class="container">
		<div class="collapse navbar-collapse navbar-ex1-collapse pull-left">
			<ul class="nav navbar-nav">
				<li class="dropdown dropdown-v1">
					<a href="index.php" >Home </a>
				</li>	
				<li class="dropdown dropdown-v1">
					<a href="#" >About Us </a>
				</li>
				<li class="dropdown dropdown-v1">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Master <span class="fa fa-angle-down"></span></a>
					<ul class="dropdown-menu">
						<li><a href="registration.php">Customer Master</a></li>						
						<li><a href="employeeMaster.php">Employee Master</a></li>						
						<li><a href="empAttendance.php">Attendance</a></li>						
						<li><a href="empLeave.php">Leave</a></li>
						<li><a href="empSalary.php">Salary</a></li>
						<li><a href="customerDetail.php">View Customer</a></li>
						<li><a href="employeeDetail.php">View Employee</a></li>
						<li><a href="empAttendanceRecord.php">View Attendance Record</a></li>						
						<li><a href="empLeaveRecord.php">View Leave Record</a></li>
						<li><a href="empSalaryRecord.php">View Salary Record</a></li>
					</ul>
				</li>				
				<li class="dropdown dropdown-v1">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Product Master <span class="fa fa-angle-down"></span></a>
					<ul class="dropdown-menu">
						<li><a href="addProductMaster.php">Add Product</a></li>
						<li><a href="viewProductMaster.php">View Product</a></li>
					</ul>
				</li>
				<li class="dropdown dropdown-v1">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Order <span class="fa fa-angle-down"></span></a>
					<ul class="dropdown-menu">
						<li><a href="order.php">Order Now</a></li>
						<li><a href="viewOrder.php">View Order</a></li>
					</ul>
				</li>
				<li class="dropdown dropdown-v1">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Payment <span class="fa fa-angle-down"></span></a>
					<ul class="dropdown-menu">
						<li><a href="payment.php">Payment</a></li>
						<li><a href="viewPayment.php">Payment Report</a></li>
					</ul>
				</li>
				<li class="dropdown dropdown-v1">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Report <span class="fa fa-angle-down"></span></a>
					<ul class="dropdown-menu">
						<li><a href="viewProductMaster.php">Product Master</a></li>
						<li><a href="viewOrder.php">Order</a></li>
						<li><a href="viewPayment.php">Payment Report</a></li>
						<li><a href="customerDetail.php">Customer Report</a></li>
						<li><a href="employeeDetail.php">Employee Report</a></li>
						<li><a href="viewContactUs.php">Contact Us Report</a></li>
						<li><a href="viewFeedback.php">Feedback Report</a></li>
					</ul>
				</li>
				<li class="dropdown dropdown-v1">
					<a href="feedback.php" >Feedback </a>
				</li>
				<li class="dropdown dropdown-v1">
					<a href="contactus.php" >Contact Us </a>
				</li>	
			</ul>
		</div>
		
		<div class="navbar-social pull-right">
			<a href="https://facebook.com" target="_blank"><img src="img/icon/3.png" class="img-responsive" alt=""/></a>
			<a href="https://twitter.com/" target="_blank"><img src="img/icon/4.png" class="img-responsive" alt=""/></a>
			<a href="https://instagram.com" target="_blank"><img src="img/icon/5.png" class="img-responsive" alt=""/></a>
		</div>		
		</div>
		</div>
		
		<!-- /.navbar-collapse -->		
	</header>	
