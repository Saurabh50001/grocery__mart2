<?php 
include('config.php');
include("header.php") ?>
<?php


	$name = $_REQUEST['name'];
	$mobile = $_REQUEST['mobileNo'];
	$email = $_REQUEST['emailid'];
	$subject = $_REQUEST['subject'];
	$message = $_REQUEST['message'];
	
	$comb=$_REQUEST['commm'];

	$x=0;

	
if(isset($_REQUEST['BtnSave']))
{
	mysqli_query($conn,"INSERT INTO feedback(name,mobile,email,subject,message) VALUES('$name','$mobile','$email','$subject','$message')");
	if(mysqli_affected_rows($conn)>0)
	{
		//header("camps.php");
		$successMsg = "Data Saved Successfully...!";
		// echo("Data feeded...!");
	}
}


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
				<h3 class="margin-bottom-15"><b>Feedback</b></h3>
				<div class="row">
					<form method="post" action="" enctype="multipart/form-data">
					<div class="col-md-12 col-sm-12 side-newsletter">						
						<div class="col-sm-6">
							<div class="form-group">
								<label>Name</label>
								<input type="text" name="name" value="<?php echo $name;?>" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Email Id</label>
								<input type="email" name="emailid" value="<?php echo $emailid;?>" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Mobile No.</label>
								<input type="number" name="mobileNo" value="<?php echo $mobileNo;?>" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Subject</label>
								<input type="text" name="subject" value="<?php echo $subject;?>" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Message</label>
								<textarea  name="message" rows="5" cols="30" value="<?php echo $message;?>" class="form-control"></textarea>
							</div>
						</div>
						<div class="col-sm-6">
							<div style="margin-top: 25px;">
								<input type="submit" value="Send" name="BtnSave" style="background-color: orangered; border: 0; font-size: 16px; padding: 10px; border-radius: 50%; color: white; width: 80px;outline: none">
								<input type="reset" style="background-color: red; border: 0; font-size: 16px; padding: 10px;border-radius: 50%; color: white; width: 80px;outline: none">
								
							</div>
						</div>
					</div>
				</form>
				</div>
			</div>
		
		</div>
		<?php include('sidebar.php'); ?>
			</div>
</div>
		<!-- ASIDE 1  -->

			<!---------------------------------------------Enter Event--------------------------------------------->	
<script>	
function enterevent4()
			{
				var x=event.keyCode||event.which;
				if(x===13)
					{
						event.preventDefault();
						document.custformm.custname.focus();
					}
			}
	function enterevent5()
			{
				var x=event.keyCode||event.which;
				if(x===13)
					{
						event.preventDefault();
						document.custformm.custemail.focus();
					}
			}
	function enterevent6()
			{
				var x=event.keyCode||event.which;
				if(x===13)
					{
						event.preventDefault();
						document.custformm.custphone.focus();
					}
			}
	function enterevent7()
			{
				var x=event.keyCode||event.which;
				if(x===13)
					{
						event.preventDefault();
						document.custformm.custwhatno.focus();
					}
			}
	function enterevent8()
			{
				var x=event.keyCode||event.which;
				if(x===13)
					{
						event.preventDefault();
						document.custformm.custaddr.focus();
					}
			}
	function enterevent9()
			{
				var x=event.keyCode||event.which;
				if(x===13)
					{
						event.preventDefault();
						document.custformm.custdist.focus();
					}
			}
	
	function enterevent10()
			{
				var x=event.keyCode||event.which;
				if(x===13)
					{
						event.preventDefault();
						document.custformm.custstate.focus();
					}
			}
	function enterevent11()
			{
				var x=event.keyCode||event.which;
				if(x===13)
					{
						event.preventDefault();
						document.custformm.custpin.focus();
					}
			}
	function enterevent12()
			{
				var x=event.keyCode||event.which;
				if(x===13)
					{
						event.preventDefault();
						document.custformm.fem.focus();
					}
			}
	function enterevent13()
			{
				var x=event.keyCode||event.which;
				if(x===13)
					{
						event.preventDefault();
						document.custformm.mal.focus();
					}
			}
	function enterevent14()
			{
				var x=event.keyCode||event.which;
				if(x===13)
					{
						event.preventDefault();
						document.custformm.custsexx.focus();
					}
			}
	
	</script>

	<<?php include("footer.php") ?>