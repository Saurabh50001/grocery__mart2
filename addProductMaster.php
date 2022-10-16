<?php 
include('config.php');
include("header.php") ?>
<!-- SLIDER END -->

<?php

if(isset($_REQUEST['BtnSave']))
{	
	extract($_POST);
	$query = "insert into product_master (vchProductCode ,vchProductName, vchProductCategory, vchProductSubCategory,vchSize,vchPrices,vchDescription,vchQuentity,vchRemarks)values('$vchProductCode','$vchProductName','$vchProductCategory','$vchProductSubCategory','$vchSize','$vchPrices','$vchDescription','$vchQuentity','$vchRemarks')";
	if(mysqli_query($conn, $query)){
		$successMsg 	= "Product Saved Successfully...!";
	}
	$vchProductCode 	= '';
	$vchProductName 	= '';
	$vchProductCategory 	= '';
	$vchProductSubCategory 	= '';
	$vchSize 	= '';
	$vchPrices 	= '';
	$vchDescription 	= '';
	$vchQuentity 	= '';
	$vchRemarks 	= '';
	unset($_POST);
}

/*=======================================Seaarch==========================================*/
if(isset($_REQUEST['BtnSearch']))
{
	extract($_POST);
	$find="select * from product_master where vchProductCode='$vchProductCode'";
	$result= mysqli_query($conn,$find);
	$row1 = mysqli_fetch_array($result);
	extract($row1);
}

/*======================================Update==================================*/

if(isset($_REQUEST['BtnUpdate']))
{
	extract($_POST);
	$query="update product_master set vchProductCode = '$vchProductCode' ,vchProductName = '$vchProductName', vchProductCategory = '$vchProductCategory', vchProductSubCategory = '$vchProductSubCategory',vchSize = '$vchSize',vchPrices = '$vchPrices',vchDescription = '$vchDescription' ,vchQuentity = '$vchQuentity',vchRemarks = '$vchRemarks' where vchProductCode = '$vchProductCode'" ;
	if(mysqli_query($conn, $query)){
		$successMsg 	= "Product Updated Successfully...!";
	}
	$vchProductCode 	= '';
	$vchProductName 	= '';
	$vchProductCategory 	= '';
	$vchProductSubCategory 	= '';
	$vchSize 	= '';
	$vchPrices 	= '';
	$vchDescription 	= '';
	$vchQuentity 	= '';
	$vchRemarks 	= '';
	unset($_POST);
}

/*=========================Delete====================================*/

if(isset($_REQUEST['BtnDelete']))
{
	extract($_POST);
	$sql="delete from product_master where vchProductCode = '$vchProductCode'";
	// print_r($sql);exit;
	if($conn->query($sql)===TRUE)
	{
		$successMsg = "Product Deleted Successfully....!";
		$vchProductCode 	= '';
		$vchProductName 	= '';
		$vchProductCategory 	= '';
		$vchProductSubCategory 	= '';
		$vchSize 	= '';
		$vchPrices 	= '';
		$vchDescription 	= '';
		$vchQuentity 	= '';
		$vchRemarks 	= '';
		unset($_POST);
	}
}
// intProductId
// vchProductCode
// vchProductName
// vchProductCategory
// vchProductSubCategory
// vchSize
// vchPrices
// vchDescription
// vchQuentity
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
				<h3 class="margin-bottom-15"><b>Add Product Master</b></h3>
				<div class="row">
					<form method="post" action="" enctype="multipart/form-data">
					<div class="col-md-12 col-sm-12 side-newsletter">
						<div class="col-sm-6">
							<div class="form-group">
								<label>Product Code</label>
								<input type="text" name="vchProductCode" required="" value="<?php echo $vchProductCode;?>" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Product Name</label>
								<input type="text" name="vchProductName" value="<?php echo $vchProductName;?>" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Category</label>
								<input type="text" name="vchProductCategory" value="<?php echo $vchProductCategory;?>" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Sub-Category</label>
								<input type="text" name="vchProductSubCategory" value="<?php echo $vchProductSubCategory;?>" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Size</label>
								<input type="text" name="vchSize" value="<?php echo $vchSize;?>" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Prices</label>
								<input type="number" name="vchPrices" value="<?php echo $vchPrices;?>" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Quantity</label>
								<input type="text" name="vchQuentity" value="<?php echo $vchQuentity;?>" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Description</label>
								<textarea type="text" name="vchDescription"  class="form-control"><?php echo $vchDescription;?></textarea>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Remarks</label>
								<textarea type="text" name="vchRemarks"  class="form-control"><?php echo $vchRemarks;?></textarea>
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

