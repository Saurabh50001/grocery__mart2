<?php 
include('config.php');
include("header.php") ?>
<!-- SLIDER END -->

<?php


	$userId 		= $_REQUEST['userId'];
	$userName 		= $_REQUEST['userName'];
	$fromDate 		= $_REQUEST['fromDate'];
	$toDate 		= $_REQUEST['toDate'];
	$leaveFor 		= $_REQUEST['leaveFor'];
	$remarks 		= $_REQUEST['remarks'];

	
if(isset($_REQUEST['BtnSave']))
{	
	mysqli_query($conn,"INSERT INTO empleave(userId, userName, fromDate, toDate, leaveFor, remarks)VALUES('$userId','$userName','$fromDate','$toDate','$leaveFor','$remarks')");
	if(mysqli_affected_rows($conn)>0)
	{
		//header("camps.php");
		$userId 		= '';
		$userName 		= '';
		$fromDate 		= '';
		$toDate 		= '';
		$leaveFor 		= '';
		$remarks 		= '';

		$successMsg = "Data Saved Successfully...!";
		// echo("Data feeded...!");
	}
}

/*=======================================Seaarch==========================================*/
if(isset($_REQUEST['BtnSearch']))
{
	$find="select * from empleave where userId='$userId'";
	$result= mysqli_query($conn,$find);
	
	while($row1= mysqli_fetch_array($result))
	{
	$userId 		= $row1['userId'];
	$userName 		= $row1['userName'];
	$fromDate 		= $row1['fromDate'];
	$toDate 		= $row1['toDate'];
	$leaveFor 		= $row1['leaveFor'];
	$remarks 		= $row1['remarks'];
		
		global $x;
		$x=1;
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
				<h3 class="margin-bottom-15"><b>Employee Leave</b></h3>
				<div class="row">
					<form method="post" action="" enctype="multipart/form-data">
					<div class="col-md-12 col-sm-12 side-newsletter">
						<div class="col-sm-6">
							<div class="form-group">
								<label>User Name</label>
								<select name="userId" value="<?php echo $userId;?>" class="form-control">
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
								<label>Full Name</label>
								<input type="text" name="userName" value="<?php echo $userName;?>" class="form-control">
							</div>
						</div>

						<div class="col-sm-6">
							<div class="form-group">
								<label>From</label>
								<input type="date" name="fromDate" value="<?php echo $fromDate;?>" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>To</label>
								<input type="date" name="toDate" value="<?php echo $toDate;?>" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Leave For</label>
								<input type="text" name="leaveFor" value="<?php echo $leaveFor;?>" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Remarks</label>
								<input type="text" name="remarks" value="<?php echo $remarks;?>" class="form-control">
							</div>
						</div>
						<div class="col-sm-12">
							<input type="submit" value="Save" name="BtnSave" style="background-color: #64DD17; border: 0; font-size: 16px; padding: 10px; border-top-left-radius: 15px; border-bottom-right-radius: 15px; color: white; width: 80px;outline: none;cursor: pointer">
							<input type="reset" style="background-color: #0336FF; border: 0; font-size: 16px; padding: 10px; border-top-left-radius: 15px; border-bottom-right-radius: 15px; color: white; width: 80px;outline: none;cursor: pointer">
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

