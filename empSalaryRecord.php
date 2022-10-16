<?php 
include('config.php');
include("header.php");
?>
		
<div class="container min-height">
	<div class="row">
		<div class="col-md-12">
			<!-- HOME SECTION 1 -->
			<div class="padding-top-10">
				<h3 class="margin-bottom-15"><b>Employee Salary Record</b></h3>
				<div class="row">
					<div class="col-md-12 col-sm-12 side-newsletter">
						<div class="col-sm-12">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>Sl No.</th>
										<th>User Name</th>
										<th>Full Name</th>
										<th>For The Month</th>
										<th>Amount</th>
										<th>Remarks</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$find="select * from empsalary";
										$result= mysqli_query($conn,$find);										
										while($row1= mysqli_fetch_array($result))
										{
											echo '<tr>
												<td>'.++$i.'</td>
												<td>'.$row1['userId'].'</td>
												<td>'.$row1['userName'].'</td>
												<td>'.$row1['forMonth'].'</td>
												<td>'.$row1['amount'].'</td>
												<td>'.$row1['remarks'].'</td>
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
	
	<?php include("footer.php") ?>

