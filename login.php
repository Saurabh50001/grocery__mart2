
<?php
include('config.php');
	$userid = $_REQUEST['userid'];
	$password = $_REQUEST['password'];	
	$comb=$_REQUEST['commm'];

	$x=0;

	
if(isset($_REQUEST['BtnSave']))
{
	$result = mysqli_query($conn,"select * from registration where userid = '$userid' and password = '$password'");
	if($result->num_rows > 0){
		$row = $result->fetch_array();
		$_SESSION['name'] 		= $row['name'];
		$_SESSION['userid'] 	= $row['userid'];
		$_SESSION['password'] 	= $row['password'];
		$_SESSION['email_id'] 	= $row['email_id'];
		$_SESSION['mobileNo'] 	= $row['mobileNo'];
		header("Location: index.php");
	}else{
		$successMsg = "Your User Name or Password was Invalied...!";
	}
}


?>
<?php include("header.php") ?>
<div class="container">
	<div class="row">
		<div class="col-md-8">

			<!-- HOME SECTION 1 -->
			<div class="padding-top-60">
				<?php if (isset($successMsg)) {  ?>
				<div class="alert alert-danger fade in alert-dismissible" style="margin-top:18px;">
				    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
				    <strong>Alert!</strong> <?php echo $successMsg; ?>
				</div>
				<?php } ?>
				<h3 class="margin-bottom-15"><b>Users/Customers Sign In</b></h3>
				<div class="row">
					<form method="post" action="" enctype="multipart/form-data">
					<div class="col-md-12 col-sm-12 side-newsletter">						
						<div class="col-sm-9">
							<div class="form-group">
								<label>User Name:</label>
								<input type="text" required="required" name="userid" class="form-control">
							</div>
						</div>
						<div class="col-sm-9">
							<div class="form-group">
								<label>Password:</label>
								<input type="password" required="required" name="password" class="form-control">
								<a href="#">Forgot Password?</a>
							</div>
						</div>
						<div class="col-sm-9">
							<div class="form-group">
								<button name="BtnSave" type="submit" class="btn btn-success">Sign In</button>
								<button type="reset" class="btn btn-danger">Reset</button>
							</div>
						</div>
					</div>
				</form>
				</div>
			</div>
		
		</div>
		<?php include('sidebar.php'); ?>
		<!-- // ASIDE 1  -->
	</div>
</div>


	<<?php include("footer.php") ?>