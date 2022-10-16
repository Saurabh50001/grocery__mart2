<?php 
include('config.php');
include("header.php") ?>
<!-- SLIDER END -->

<?php


	$userId 		= $_REQUEST['userId'];
	$userName 		= $_REQUEST['userName'];
	$forMonth 		= $_REQUEST['forMonth'];
	$amount 		= $_REQUEST['amount'];
	$remarks 		= $_REQUEST['remarks'];

	
if(isset($_REQUEST['BtnSave']))
{	
	mysqli_query($conn,"INSERT INTO empsalary(userId, userName, forMonth, amount, currentDate, remarks)VALUES('$userId','$userName','$forMonth','$amount',Sysdate(),'$remarks')");
	if(mysqli_affected_rows($conn)>0)
	{
		//header("camps.php");
		$userId 		= '';
		$userName 		= '';
		$forMonth 		= '';
		$amount 		= '';
		$remarks 		= '';

		$successMsg = "Data Saved Successfully...!";
		// echo("Data feeded...!");
	}
}

/*=======================================Seaarch==========================================*/
if(isset($_REQUEST['BtnSearch']))
{
	$find="select * from empsalary where userId='$userId'";
	$result= mysqli_query($conn,$find);
	
	while($row1= mysqli_fetch_array($result))
	{
	$userId 		= $row1['userId'];
	$userName 		= $row1['userName'];
	$forMonth 		= $row1['forMonth'];
	$amount 		= $row1['amount'];
	$remarks 		= $row1['remarks'];
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
				<h3 class="margin-bottom-15"><b>Employee Salary</b></h3>
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
								<label>Salary Fot The Month</label>
								<input type="Text" name="forMonth" value="<?php echo $forMonth;?>" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Salary Amount</label>
								<input type="number" name="amount" value="<?php echo $amount;?>" class="form-control">
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

