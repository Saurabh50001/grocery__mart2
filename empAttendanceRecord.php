<?php 
include('config.php');
include("header.php");
?>
		
<div class="container min-height">
	<div class="row">
		<div class="col-md-12">
			<!-- HOME SECTION 1 -->
			<div class="padding-top-10">
				<h3 class="margin-bottom-15"><b>Employee Attendance Record</b></h3>
				<div class="row">
					<div class="col-md-12 col-sm-12 side-newsletter">
						<div class="col-sm-12">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>Sl No.</th>
										<th>User Name</th>
										<th>Full Name</th>
										<th>Date</th>
										<th>Attendance</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$find="select * from empattendence";
										$result= mysqli_query($conn,$find);										
										while($row1= mysqli_fetch_array($result))
										{
											echo '<tr>
												<td>'.++$i.'</td>
												<td>'.$row1['userId'].'</td>
												<td>'.$row1['userName'].'</td>
												<td>'.$row1['currentDate'].'</td>
												<td>'.$row1['attendence'].'</td>
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

