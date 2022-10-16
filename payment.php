<?php 
include('config.php');
include("header.php") ?>
<!-- SLIDER END -->
<?php
$vchUserName = $_SESSION['name'];

if(isset($_REQUEST['BtnSave']))
{	
	extract($_POST);
	$query = "insert into payment_details (vchOrderId, vchProductId, vchPaymentMode, vchPaymentDate, vchPaymentAmount, vchDueAmount, vchAuthExperiance, vchReceivedBy, vchPaidBy, vchRemarks)values('$vchOrderId', '$vchProductId', '$vchPaymentMode', '$vchPaymentDate', '$vchPaymentAmount', '$vchDueAmount', '$vchAuthExperiance', '$vchReceivedBy', '$vchPaidBy', '$vchRemarks')";
	if(mysqli_query($conn, $query)){
		$successMsg 	= "Product Received Successfully...!";
	}

	$vchOrderId 		= '';
	$vchProductId 		= '';
	$vchPaymentMode 	= '';
	$vchPaymentDate 	= '';
	$vchPaymentAmount 	= '';
	$vchDueAmount 		= '';
	$vchAuthExperiance 	= '';
	$vchReceivedBy 		= '';
	$vchPaidBy 			= '';
	$vchRemarks 		= '';	
	unset($_POST);
}

// vchOrderId
// vchProductId
// vchPaymentMode
// vchPaymentDate
// vchPaymentAmount
// vchDueAmount
// vchAuthExperiance
// vchReceivedBy
// vchPaidBy
// vchRemarks
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
				<h3 class="margin-bottom-15"><b>Payment Receive</b></h3>
				<div class="row">
					<form method="post" action="" enctype="multipart/form-data">
					<div class="col-md-12 col-sm-12 side-newsletter">
						<div class="col-sm-6">
							<div class="form-group">
								<label>Order Name</label>
								<select name="vchOrderId" id="vchOrderId"  required class="form-control">
									<option value="">Select Order</option>
									<?php 
									$query = "select * from orderdetails";
									$arrResult = mysqli_query($conn, $query);
									 while($rows = $arrResult->fetch_array()){
									 	echo '<option data-product="'.$rows['vchProductId'].'" data-user="'.$rows['vchUserName'].'" value="'.$rows['vchOrderName'].'">'.$rows['vchOrderName'].'</option>';
									 }
									 ?>
								</select>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Product Name</label>
								<input type="text"  required readonly name="vchProductId" id="vchProductId" value="<?php echo $vchProductId;?>" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Payment Mode</label>
								<select name="vchPaymentMode"  required class="form-control">
									<option value="Cash">Cash</option>
									<option value="Check">Check</option>
									<option value="Dimand Draft">Dimand Draft</option>
								</select>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Payment Date</label>
								<input type="date"  required name="vchPaymentDate" value="<?php echo date('d/m/Y');?>" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Payment Amount</label>
								<input type="number"  required name="vchPaymentAmount" value="<?php echo $vchPaymentAmount;?>" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Due Amount</label>
								<input type="number"  required name="vchDueAmount" value="<?php echo $vchDueAmount;?>" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Auth Experiance</label>
								<input type="text"  required name="vchAuthExperiance" value="<?php echo $vchAuthExperiance;?>" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Received By</label>
								<input type="text"  required name="vchReceivedBy" value="<?php echo $vchReceivedBy;?>" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Paid By</label>
								<input type="text"  required readonly name="vchPaidBy" id="vchPaidBy" value="<?php echo $vchPaidBy;?>" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Remarks</label>
								<textarea type="text" required  name="vchRemarks" class="form-control"><?php echo $vchRemarks;?></textarea>
							</div>
						</div>
						<div class="col-sm-12">
							<input type="submit" value="Order Now" name="BtnSave" style="background-color: #64DD17; border: 0; font-size: 16px; padding: 10px; border-top-left-radius: 15px; border-bottom-right-radius: 15px; color: white; width: 80px;outline: none;cursor: pointer">
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
<script>
	$(document).ready(function(){
		$('#vchOrderId').change(function(){
			var productName = $(this).find(':selected').attr('data-product');
			var paidBy = $(this).find(':selected').attr('data-user');
			$('#vchPaidBy').val(paidBy);
			$('#vchProductId').val(productName);
			// alert(productName);	
		})
	})
</script>
