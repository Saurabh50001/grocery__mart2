<?php 
include('config.php');
include("header.php") ?>
<!-- SLIDER END -->
<?php
$vchUserName = $_SESSION['name'];

if(isset($_REQUEST['BtnSave']))
{	
	extract($_POST);
	$query = "insert into orderdetails (vchOrderName, vchUserName, vchProductId, vchOrderDate, vchOrderAddress, vchOrderRemarks,quantity)values('$vchOrderName', '$vchUserName', '$vchProductId', '$vchOrderDate', '$vchOrderAddress', '$vchOrderRemarks','$quantity')";
	if(mysqli_query($conn, $query)){
		$successMsg 	= "Product Order Successfully...!";
	}
	$vchOrderName 		= '';
	$vchProductId 		= '';
	$vchOrderDate 		= '';
	$vchOrderAddress 	= '';
	$vchOrderRemarks 	= '';
	$quantity 			= ''; 	
	unset($_POST);
}

// intOrderId
// vchOrderName
// vchUserName
// vchProductId
// vchOrderDate
// vchOrderAddress
// vchOrderRemarks
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
				<h3 class="margin-bottom-15"><b>Product Order</b></h3>
				<div class="row">
					<form method="post" action="" enctype="multipart/form-data">
					<div class="col-md-12 col-sm-12 side-newsletter">
						<div class="col-sm-6">
							<div class="form-group">
								<label>Order Name</label>
								<input type="text"  required name="vchOrderName" required="" value="<?php echo $vchOrderName;?>" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>User Name</label>
								<input type="text"  required name="vchUserName" value="<?php echo $vchUserName;?>" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Product Name</label>
								<select name="vchProductId"  required value="<?php echo $vchProductId;?>" class="form-control">
									<option value="">Select Product</option>
									<?php 
									$query = "select * from product_master";
									$arrResult = mysqli_query($conn, $query);
									 while($rows = $arrResult->fetch_array()){
									 	echo '<option value="'.$rows['vchProductName'].'">'.$rows['vchProductName'].'</option>';
									 }
									 ?>
								</select>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Order Date</label>
								<input type="date"  required name="vchOrderDate" value="<?php echo $vchOrderDate;?>" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Quantity</label>
								<input type="number"  required name="quantity" value="<?php echo $quantity;?>" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Address</label>
								<textarea type="text" required  name="vchOrderAddress" class="form-control"><?php echo $vchOrderAddress;?></textarea>
								
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Remarks</label>
								<textarea type="text" required  name="vchOrderRemarks" class="form-control"><?php echo $vchOrderRemarks;?></textarea>
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

