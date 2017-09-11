<?php 
	include 'db_connect.php';
	include 'login_header.php';
	
	if(isset($_POST['generate'])){
		$app_id=$_POST['app_id'];
		$email=$_POST['email'];
	}

	$sql="SELECT fname,caste FROM applicant WHERE reg_id='$app_id' AND email='$email'";
	$var=mysql_query($sql);
	
	if($row=mysql_fetch_array($var)){
		$fname=$row['fname'];
		$caste=$row['caste'];
	}

	if($caste=="General"){
		$price=100;
	}
	elseif($caste=="OBC-A" || $caste=="OBC-B"){
		$price=75;
	}
	else{
		$price=50;
	}

	echo "<body><br/><br/><br/><br/>
		<div class='container'>
		<div class='row'>
			<div class='col-xs-12 col-md-10 col-md-offset-1' style='text-align: center'>
				<h2 id='applicant_payment_title'><b>Payment Details</b></h2>
			</div>
		</div><br/>
		<form action='challan_submit.php' method='POST' >
		<div class='row'>
			<div class='table-responsive'>
				<table border='1px solid black' cellspacing='0px' cellpadding='0px' class='table table-bordered' id='applicant_payment_tab'>
					<tr align='center'>
						<td style='width:1%'><strong>Name</strong></td><td style='width:1%'>".$fname."</td>
					</tr>
					<tr align='center'>
						<td style='width:1%'><strong>Caste</strong></td><td style='width:1%'>".$caste."</td>
					</tr>
					<tr align='center'>
						<td style='width:1%'><strong>Application Fees</strong></td><td style='width:1%'>".$price."</td>
					</tr>
					<tr align='center'>
						<td style='width:1%'><strong>Challan Number</strong></td><td style='width:1%'><input type='text' class='form-control' name='challan_no' id='challan_no'></td>
					</tr>
					<tr align='center'>
						<td style='width:1%'><strong>Challan Date</strong></td><td style='width:1%'><input type='date' class='form-control' name='challan_date' id='challan_date'></td>
					</tr>
				</table>
			</div>
		</div>
		<div class='form-group row' id='applicant_payment_btn'>
			<input type='hidden' name='tmp_reg_id' value='".$app_id."'/>
			<input type='submit' class='btn btn-success' name='confirm_payment' id='confirm_payment' value='Confirm Payment'/>&nbsp;&nbsp;
			<input type='reset' name='cancel' id='cancel' value='Cancel' class='btn btn-danger'/>
		</div>
		</form>
		</div>
		</body>";

		echo '<link href="css/bootstrap.min.css" rel="stylesheet">
			  <link href="css/style.css" rel="stylesheet">';
?>