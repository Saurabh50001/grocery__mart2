<?php 
include('config.php');
include("header.php");
?>
		
<div class="container min-height" id="min-height">
	<div class="row">
		<div class="col-md-12">
			<!-- HOME SECTION 1 -->
			<div class="padding-top-10">
				<h3 class="margin-bottom-15"><b>Employee Details</b></h3>
				<div class="row">
					<div class="col-md-12 col-sm-12 side-newsletter">
						<div class="col-sm-12">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>Sl No.</th>
										<th>User Name</th>
										<th>Full Name</th>
										<th>Father's Name</th>
										<th>Email Id</th>
										<th>Mobile No.</th>
										<th>Salary</th>
										<th>Qualification</th>
										<th>Date Of Joining</th>
										<th>Address</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$find="select * from employeemaster";
										$result= mysqli_query($conn,$find);										
										while($row1= mysqli_fetch_array($result))
										{
											echo '<tr>
												<td>'.++$i.'</td>
												<td>'.$row1['userid'].'</td>
												<td>'.$row1['name'].'</td>
												<td>'.$row1['fName'].'</td>
												<td>'.$row1['email_id'].'</td>
												<td>'.$row1['mobileNo'].'</td>
												<td>'.$row1['salary'].'</td>
												<td>'.$row1['qulification'].'</td>
												<td>'.$row1['dataOfJoin'].'</td>
												<td>'.$row1['address'].'</td>
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

