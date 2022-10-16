<?php 
include('config.php');
include("header.php") ?>
<!-- SLIDER END -->

<?php
$query = "select * from payment_details ";

$arrResult = mysqli_query($conn, $query);
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
		
<div class="container" id="min-height">
	<div class="row">
		<div class="col-md-12">
			<!-- HOME SECTION 1 -->
			<div class="padding-top-60">
				<h3 class="margin-bottom-15"><b>View Payment</b></h3>
				<div class="row">
					<div class="col-md-12 col-sm-12 side-newsletter">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Sl.#</th>
									<th>Order Name</th>
									<th>Product Name</th>
									<th>Payment Mode</th>
									<th>Payment Date</th>
									<th>Payment Amount</th>
									<th>Due Amount</th>
									<th>Auth Experiance</th>
									<th>Received By</th>
									<th>Paid By</th>
									<th>Remarks</th>

								</tr>
							</thead>
							<tbody>
								<?php while($rows = $arrResult->fetch_array()){ ?>
								<tr>
									<td><?php echo ++$i; ?></td>
									<td><?php echo $rows['vchOrderId']; ?></td>
									<td><?php echo $rows['vchProductId']; ?></td>
									<td><?php echo $rows['vchPaymentMode']; ?></td>
									<td><?php echo $rows['vchPaymentDate']; ?></td>
									<td><?php echo $rows['vchPaymentAmount']; ?></td>
									<td><?php echo $rows['vchDueAmount']; ?></td>
									<td><?php echo $rows['vchAuthExperiance']; ?></td>
									<td><?php echo $rows['vchReceivedBy']; ?></td>
									<td><?php echo $rows['vchPaidBy']; ?></td>
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

