<?php 
include('config.php');
include("header.php") ?>
<!-- SLIDER END -->

<?php

	$userid 	= $_REQUEST['userid'];
	$userName 	= $_REQUEST['userName'];
	$attendence = $_REQUEST['attendence'];

	
if(isset($_REQUEST['BtnSave']))
{
	
	mysqli_query($conn,"INSERT INTO empattendence(userId, userName, currentDate, attendence)VALUES('$userid','$userName',sysdate(),'$attendence')");
	if(mysqli_affected_rows($conn)>0)
	{
		//header("camps.php");
		$userid 	='';
		$userName 	='';
		$attendence ='';

		$successMsg = "Record Saved Successfully...!";
		// echo("Data feeded...!");
	}
}

/*=======================================Seaarch==========================================*/
if(isset($_REQUEST['BtnSearch']))
{
	$find="select * from empattendence where userid='$userid'";
	$result= mysqli_query($conn,$find);
	
	while($row1= mysqli_fetch_array($result))
	{
	$userid 	= $row1['userid'];
	$userName 	= $row1['userName'];
	$attendence = $row1['attendence'];
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
				<h3 class="margin-bottom-15"><b>Employee Attendence</b></h3>
				<div class="row">
					<form method="post" action="" enctype="multipart/form-data">
					<div class="col-md-12 col-sm-12 side-newsletter">
						<div class="col-sm-6">
							<div class="form-group">
								<label>User Name</label>
								<select name="userid" value="<?php echo $userid;?>" class="form-control">
									<option value="">--Select--</option>
									<?php
										$find="select userid from employeemaster";
										$result= mysqli_query($conn,$find);									
										while($row1= mysqli_fetch_array($result))
										{
										echo '<option value="'.$row1['userid'].'">'.$row1['userid'].'</option>';
										}
									?>
								</select>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Employee Name</label>
								<input type="text" name="userName" value="<?php echo $userName;?>" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Attendance</label>
								<select name="attendence" value="<?php echo $attendence;?>" class="form-control">
									<option value="Absent">Absent</option>
									<option value="Present">Present</option>
								</select>
							</div>
						</div>
						<div class="col-sm-12">
							<input type="submit" value="Save" name="BtnSave" style="background-color: #64DD17; border: 0; font-size: 16px; padding: 10px; border-top-left-radius: 15px; border-bottom-right-radius: 15px; color: white; width: 80px;outline: none;cursor: pointer">
							<input type="reset" style="background-color: #0336FF; border: 0; font-size: 16px; padding: 10px; border-top-left-radius: 15px; border-bottom-right-radius: 15px; color: white; width: 80px;outline: none;cursor: pointer">
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

