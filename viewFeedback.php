<?php 
include('config.php');
include("header.php") ?>
<!-- SLIDER END -->

<?php
$query = "select * from feedback ";

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
				<h3 class="margin-bottom-15"><b>Feedback Report</b></h3>
				<div class="row">
					<div class="col-md-12 col-sm-12 side-newsletter">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Sl.#</th>
									<th>Name</th>
									<th>Email</th>
									<th>Mobile No.</th>
									<th>Subject</th>
									<th>Message</th>
								</tr>
							</thead>
							<tbody>
								<?php while($rows = $arrResult->fetch_array()){ ?>
								<tr>
									<td><?php echo ++$i; ?></td>
									<td><?php echo $rows['name']; ?></td>
									<td><?php echo $rows['email']; ?></td>
									<td><?php echo $rows['mobile']; ?></td>
									<td><?php echo $rows['subject']; ?></td>
									<td><?php echo $rows['message']; ?></td>
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

