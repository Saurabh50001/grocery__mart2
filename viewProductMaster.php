<?php 
include('config.php');
include("header.php") ?>
<!-- SLIDER END -->

<?php

$query = "select * from product_master";
$arrResult = mysqli_query($conn, $query);
?>
		
<div class="container" id="min-height">
	<div class="row">
		<div class="col-md-12">
			<!-- HOME SECTION 1 -->
			<div class="padding-top-60">
				<h3 class="margin-bottom-15"><b>View Product Master</b></h3>
				<div class="row">
					<div class="col-md-12 col-sm-12 side-newsletter">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Sl.#</th>
									<th>Product Code</th>
									<th>Product Name</th>
									<th>Category</th>
									<th>Sub Category</th>
									<th>Size</th>
									<th>Prices</th>
									<th>Description</th>
									<th>Quentity</th>
									<th>Remarks</th>
								</tr>
							</thead>
							<tbody>
								<?php while($rows = $arrResult->fetch_array()){ ?>
								<tr>
									<td><?php echo ++$i; ?></td>
									<td><?php echo $rows['vchProductCode']; ?></td>
									<td><?php echo $rows['vchProductName']; ?></td>
									<td><?php echo $rows['vchProductCategory']; ?></td>
									<td><?php echo $rows['vchProductSubCategory']; ?></td>
									<td><?php echo $rows['vchSize']; ?></td>
									<td><?php echo $rows['vchPrices']; ?></td>
									<td><?php echo $rows['vchDescription']; ?></td>
									<td><?php echo $rows['vchQuentity']; ?></td>
									<td><?php echo $rows['vchRemarks']; ?></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
						
					</div>
				</div>
			</div>
		
		</div>
		<?php //include('sidebar.php'); ?>
<!-- Side Menu -->
	</div>
</div>
<style>
	#min-height{
		min-height: 25em;
	}
</style>
	<?php include("footer.php") ?>

