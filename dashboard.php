<?php
	include 'db_connect.php';
	include 'login_header.php';
	
	$name=$_SESSION['name'];
	$reg_id=$_SESSION['reg_id'];

	$sql="SELECT status FROM applicant WHERE reg_id='$reg_id'";
	$var=mysql_query($sql);
	if($row=mysql_fetch_array($var)){
		$status=$row['status'];
	}

	if($status=="Pending"){
		$messege="Payment not done yet. Please download challan and make payment for getting your Final Application Id.";
		$color="red";
	}
	else{
		$messege="Payment done. Please download your Application Form for further process.";
		$color="green";
	}

	if(isset($_POST['challan'])){
		if($status=="Pending"){
			header('location:challan_payment.php');
		}
		else{
			echo "<div id='success'>Paymeny already done. No need to make payment again.</div>";
		}
	}
?>
<html>
	<head>
		<!--Bootstrap Link-->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<!--EndBootstrap Link-->
	</head>
	<body>
		<div id="welcome">**** Welcome! <?php echo $name; ?> ****</div>
		<div id="payment_status">Payment Status - <font color=<?php echo $color; ?>><?php echo $status; ?></font></div>
		<div id="payment_messege"><font color=<?php echo $color; ?>><?php echo $messege; ?></div>
		<a href="final_form.php" class="btn btn-primary" id="print_application">View/Download Application Form</a>
		<a href="challan.php" id="print_challan" class="btn btn-primary">View/Download Challan</a>
		<form method="POST">
			<input type="submit" class="btn btn-warning" name="challan" value="Make Your Payment" id="make_payment"/>
		</form>
	</body>
</html>