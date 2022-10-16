<?php 
include('config.php');
include("header.php");
?>
		
<div class="container min-height" id="min-height">
	<div class="row">
		<div class="col-md-12">
			<!-- HOME SECTION 1 -->
			<div class="padding-top-10">
				<h3 class="margin-bottom-15"><b>Customer Details</b></h3>
				<div class="row">
					<div class="col-md-12 col-sm-12 side-newsletter">
						<div class="col-sm-12">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>User Name</th>
										<th>Full Name</th>
										<th>Email Id</th>
										<th>Mobile No.</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$find="select * from registration";
										$result= mysqli_query($conn,$find);										
										while($row1= mysqli_fetch_array($result))
										{
											echo '<tr>
												
												<td>'.$row1['userid'].'</td>
												<td>'.$row1['name'].'</td>
												<td>'.$row1['email_id'].'</td>
												<td>'.$row1['mobileNo'].'</td>
											</tr>';
										}
									?>
								</tbody>
							</table>
						</div>
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

