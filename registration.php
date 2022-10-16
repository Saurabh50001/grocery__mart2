<?php 
include('config.php');
include("header.php") ?>
<!-- SLIDER END -->

<?php


	$userid = $_REQUEST['userid'];
	$password = $_REQUEST['password'];
	$name = $_REQUEST['name'];
	$emailid = $_REQUEST['emailid'];
	$mobileNo = $_REQUEST['mobileNo'];
	$photo = $_REQUEST['photo'];

	$comb=$_REQUEST['commm'];

	$x=0;

	
if(isset($_REQUEST['BtnSave']))
{
	mysqli_query($conn,"INSERT INTO registration(userid, password, name, email_id, mobileNo, photo)VALUES('$userid','$password','$name','$emailid','$mobileNo','$photo')");
	if(mysqli_affected_rows($conn)>0)
	{
		//header("camps.php");
		$successMsg = "Data Saved Successfully...!";
		// echo("Data feeded...!");
	}
}

/*=======================================Seaarch==========================================*/
if(isset($_REQUEST['BtnSearch']))
{
	$find="select * from registration where userid='$userid'";
	$result= mysqli_query($conn,$find);
	
	while($row1= mysqli_fetch_array($result))
	{
	$userid = $row1['userid'];
	$password = $row1['password'];
	$name = $row1['name'];
	$emailid = $row1['email_id'];
	$mobileNo = $row1['mobileNo'];
	$photo = $row1['photo'];
		
		global $x;
		$x=1;
	}
}

/*======================================Update==================================*/

if(isset($_REQUEST['BtnUpdate']))
{
	$query="update registration set
	password='$password',name='$name',email_id='$emailid',mobileNo='$mobileNo',photo='$photo' where userid='$userid'" ;
	if($conn->query($query)===TRUE)
	{
		$successMsg = "Data updated...!";
	}
}

/*=========================Delete====================================*/

if(isset($_REQUEST['BtnDelete']))
{
	$sql="delete from registration where userid='$userid'";
	if($conn->query($sql)===TRUE)
	{
		$successMsg = "Record Deleted....!";
	}
}

?>
		
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<!-- HOME SECTION 1 -->
			<div class="padding-top-60">
				<?php if (isset($successMsg)) {  ?>
				<div class="alert alert-success fade in alert-dismissible" style="margin-top:18px;">
				    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
				    <strong>Success!</strong> <?php echo $successMsg; ?>
				</div>
				<?php } ?>
				<h3 class="margin-bottom-15"><b>Users/Customers Register</b></h3>
				<div class="row">
					<form method="post" action="" enctype="multipart/form-data">
					<div class="col-md-12 col-sm-12 side-newsletter">
						<div class="col-sm-6">
							<div class="form-group">
								<label>User Name</label>
								<input type="text" name="userid" value="<?php echo $userid;?>" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Password</label>
								<input type="Password" name="password" value="<?php echo $password;?>" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Confirm Password</label>
								<input type="Password" name="ConfirmPassword" value="<?php echo $password;?>" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Name</label>
								<input type="text" name="name" value="<?php echo $name;?>" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Email Id</label>
								<input type="email" name="emailid" value="<?php echo $emailid;?>" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Mobile No.</label>
								<input type="number" name="mobileNo" value="<?php echo $mobileNo;?>" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Upload Pic.</label>
								<input type="file" name="photo" value="<?php echo $donerid;?>" class="form-control">
							</div>
						</div>
						<!-- <div class="col-sm-12">
							<div class="form-group">
								<label>Gender</label>
								<input type="radio" name="RdGender" value="Male"><span>Male</span>
								<input type="radio" name="RdGender" value="Female"><span>Female</span>
							</div>
						</div> -->
						<div class="col-sm-12">
							<input type="submit" value="Save" name="BtnSave" style="background-color: #64DD17; border: 0; font-size: 16px; padding: 10px; border-top-left-radius: 15px; border-bottom-right-radius: 15px; color: white; width: 80px;outline: none;cursor: pointer">
							<input type="reset" style="background-color: #0336FF; border: 0; font-size: 16px; padding: 10px; border-top-left-radius: 15px; border-bottom-right-radius: 15px; color: white; width: 80px;outline: none;cursor: pointer">
							<input type="submit" value="Update" name="BtnUpdate" style="background-color: #FF8F00; border: 0; font-size: 16px; padding: 10px; border-top-left-radius: 15px; border-bottom-right-radius: 15px; color: white; width: 80px;outline: none;cursor: pointer">
							<input type="submit" value="Delete" name="BtnDelete" style="background-color: #D50000; border: 0; font-size: 16px; padding: 10px; border-top-left-radius: 15px; border-bottom-right-radius: 15px; color: white; width: 80px;outline: none;cursor: pointer">
							<input type="submit" value="Search" name="BtnSearch" style="background-color:brown; border: 0; font-size: 16px; padding: 10px; border-top-left-radius: 15px; border-bottom-right-radius: 15px; color: white; width: 80px;outline: none;cursor: pointer">
						</div>
					</div>
				</form>
				</div>
			</div>
		
		</div>
		<?php include('sidebar.php'); ?>
<!-- Side Menu -->
	</div>
</div>
	
	<?php include("footer.php") ?>

