<?php 
include('config.php');
include("header.php") ?>
<!-- SLIDER END -->

<?php
$userName = $_SESSION['name'];
$query = "select * from orderdetails";
/*if($userName != ''){
	$query = $query." where vchUserName = '$userName'";
}*/
$arrResult = mysqli_query($conn, $query);
?>
		
<div class="container" id="min-height">
	<div class="row">
		<div class="col-md-12">
			<!-- HOME SECTION 1 -->
			<div class="padding-top-60">
				<h3 class="margin-bottom-15"><b>View Order</b></h3>
				<div class="row">
					<div class="col-md-12 col-sm-12 side-newsletter">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Sl.#</th>
									<th>Order Name</th>
									<th>User Name</th>
									<th>Product</th>
									<th>Quantity</th>
									<th>Order Date</th>
									<th>Order Address</th>
									<th>Order Remarks</th>
								</tr>
							</thead>
							<tbody>
								<?php while($rows = $arrResult->fetch_array()){ ?>
								<tr>
									<td><?php echo ++$i; ?></td>
									<td><?php echo $rows['vchOrderName']; ?></td>
									<td><?php echo $rows['vchUserName']; ?></td>
									<td><?php echo $rows['vchProductId']; ?></td>
									<td><?php echo $rows['quantity']; ?></td>
									<td><?php echo $rows['vchOrderDate']; ?></td>
									<td><?php echo $rows['vchOrderAddress']; ?></td>
									<td><?php echo $rows['vchOrderRemarks']; ?></td>
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

