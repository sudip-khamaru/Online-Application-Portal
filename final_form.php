<?php
	include 'db_connect.php';
	session_start();
	$reg_id=$_SESSION['reg_id'];

	$sql="SELECT * FROM applicant WHERE reg_id='$reg_id'";
	$var=mysql_query($sql);
	if($row=mysql_fetch_array($var)){
		$reg_id=$row['reg_id'];
		$status=$row['status'];
		$challan_no=$row['challan_no'];
		$challan_date=$row['challan_date'];
		$fname=$row['fname'];
		$caste=$row['caste'];
		$gender=$row['gender'];
		$per_x=$row['per_x'];
		$year_x=$row['year_x'];
		$board_x=$row['board_x'];
		$per_xii=$row['per_xii'];
		$year_xii=$row['year_xii'];
		$board_xii=$row['board_xii'];
		$qualifying=$row['qualifying'];
		$per_gradu=$row['per_gradu'];
		$year_gradu=$row['year_gradu'];
		$university=$row['university'];
		$college=$row['college'];
		$roll=$row['roll'];
		$gate_rank=$row['gate_rank'];
		$father=$row['father'];
		$mother=$row['mother'];
		$income=$row['income'];
		$guardian=$row['guardian'];
		$guardian_phone=$row['guardian_phone'];
		$dob=$row['dob'];
		$religion=$row['religion'];
		$nationality=$row['nationality'];
		$resi_address=$row['resi_address'];
		$per_address=$row['per_address'];
		$district=$row['district'];
		$state=$row['state'];
		$pin=$row['pin'];
		$email=$row['email'];
		$phone=$row['phone'];
		$mobile=$row['mobile'];
		$disability=$row['disability'];
		$blood=$row['blood'];
		$photo=$row['photo'];
		$sign=$row['sign'];
	}
	echo "<body id='preview'><br/><br/>
		<div class='container'>
		<div class='row'>
		<div class='table-responsive' id='tab'>
		<table border='1px solid black' class='table table-bordered' cellspacing='0px' cellpadding='0px' align='center' width='70%'>
		<div class='col-xs-12 col-md-10 col-md-offset-1'>
			<tr align='center'><td colspan='6'><h1><b>Payment Details</b></h1></td></tr>
			<tr align='center'>
				<td style='width:5%'><strong>Application Id</strong></td><td style='width:10%'>".$reg_id."</td>
				<td style='width:5%'><strong>Payment Status</strong></td><td style='width:5%'>".$status."</td>
			</tr>
			<tr align='center'>
				<td style='width:5%'><strong>Challan Number</strong></td><td style='width:10%'>".$challan_no."</td>
				<td style='width:5%'><strong>Challan Date</strong></td><td style='width:5%'>".$challan_date."</td>
			</tr>
		</div></table><br/><br/>
		<table border='1px solid black' class='table table-bordered' cellspacing='0px' cellpadding='0px' align='center' width='70%'>
		<div class='col-xs-12 col-md-10 col-md-offset-1'>
			<tr align='center'><td colspan='6'><h1><b>Basic Details</b></h1></td></tr>
			<tr align='center'>
				<td style='width:5%'><strong>Applicant Name</strong></td><td style='width:15%'>".$fname."</td>
				<td style='width:5%'><strong>Caste</strong></td><td style='width:5%'>".$caste."</td>
				<td style='width:5%'><strong>Gender</strong></td><td style='width:5%'>".$gender."</td>
			</tr>
		  </div></table><br/><br/>
		  <table border='1px solid black' class='table table-bordered' cellspacing='0px' cellpadding='0px' align='center' width='70%'>
		  <div class='col-xs-12 col-md-10 col-md-offset-1'>	
			<tr align='center'><td colspan='6'><h1><b>Academic Details</b></h1></td></tr>
			<tr align='center'>
				<td style='width:3%'><strong>% in 10th</strong></td><td style='width:3%'>".$per_x."</td>
				<td style='width:3%'><strong>Year</strong></td><td style='width:3%'>".$year_x."</td>
				<td style='width:3%'><strong>Board</strong></td><td style='width:10%'>".$board_x."</td>
			</tr>
			<tr align='center'>
				<td style='width:3%'><strong>% in 12th</strong></td><td style='width:3%'>".$per_xii."</td>
				<td style='width:3%'><strong>Year</strong></td><td style='width:3%'>".$year_xii."</td>
				<td style='width:3%'><strong>Board</strong></td><td style='width:10%'>".$board_xii."</td>
			</tr>
			<tr align='center'>
				<td style='width:3%'><strong>Qualifying Examination</strong></td><td style='width:3%'>".$qualifying."</td>
				<td style='width:3%'><strong>%</strong></td><td style='width:3%'>".$per_gradu."</td>
				<td style='width:3%'><strong>Year</strong></td><td style='width:10%'>".$year_gradu."</td>
			</tr>
			<tr align='center'>
				<td style='width:3%''><strong>University</strong></td><td style='width:3%' colspan='3'>".$university."</td>
				<td style='width:3%'><strong>College</strong></td><td style='width:3%'>".$college."</td>
			</tr>
			<tr align='center'>
				<td style='width:3%''><strong>Roll No.</strong></td><td style='width:3%' colspan='2'>".$roll."</td>
				<td style='width:3%' colspan='2'><strong>GATE Rank (if any)</strong></td><td style='width:3%'>".$gate_rank."</td>
			</tr>
		  </div></table><br/><br/>
		  <table border='1px solid black' class='table table-bordered' cellspacing='0px' cellpadding='0px' align='center' width='70%'>
		  <div class='col-xs-12 col-md-10 col-md-offset-1'>
			<tr align='center'><td colspan='6'><h1><b>Personal Details</b></h1></td></tr>
			<tr align='center'>
				<td style='width:5%'><strong>Father's Name</strong></td><td style='width:12%'>".$father."</td>
				<td style='width:5%'><strong>Mother's Name</strong></td><td style='width:12%'>".$mother."</td>
				<td style='width:5%'><strong>Annual Income</strong></td><td style='width:5%'>".$income."</td>
			</tr>
			<tr align='center'>
				<td style='width:2%' colspan='2'><strong>Guardian's Name (if any)</strong></td><td style='width:5%' colspan='2'>".$guardian."</td>
				<td style='width:2%'><strong>Guardian's Contact No.</strong></td><td style='width:5%'>".$guardian_phone."</td>			
			</tr>
			<tr align='center'>
				<td style='width:5%'><strong>Date of Birth</strong></td><td style='width:12%'>".$dob."</td>
				<td style='width:5%'><strong>Religion</strong></td><td style='width:12%'>".$religion."</td>
				<td style='width:5%'><strong>Nationality</strong></td><td style='width:5%'>".$nationality."</td>
			</tr>
			<tr align='center'>
				<td style='width:5%' colspan='2'><strong>Residential Address</strong></td><td style='width:12%' colspan='4'>".$resi_address."</td>
			</tr>
			<tr align='center'>
				<td style='width:5%' colspan='2'><strong>Permanent Address</strong></td><td style='width:12%' colspan='4'>".$per_address."</td>
			</tr>
			<tr align='center'>
				<td style='width:5%'><strong>District</strong></td><td style='width:12%'>".$district."</td>
				<td style='width:5%'><strong>State</strong></td><td style='width:12%'>".$state."</td>
				<td style='width:5%'><strong>Pin</strong></td><td style='width:5%'>".$pin."</td>
			</tr>
			<tr align='center'>
				<td style='width:5%'><strong>Email Address</strong></td><td style='width:5%'>".$email."</td>
				<td style='width:5%'><strong>Phone No.</strong></td><td style='width:12%'>".$phone."</td>
				<td style='width:5%'><strong>Mobile No.</strong></td><td style='width:12%'>".$mobile."</td>
			</tr>
			<tr align='center'>
				<td style='width:2%' colspan='3'><strong>Person with Disability (40% & Above)</strong></td><td style='width:5%'>".$disability."</td>
				<td style='width:2%'><strong>Blood Group</strong></td><td style='width:5%'>".$blood."</td>			
			</tr>
			<tr align='center'>
				<td style='width:2%'><strong>Photo</strong></td><td colspan='2'><img src='upload/".$photo."' width='50%' height='30%'/></td>
				<td style='width:2%'><strong>Signature</strong></td><td colspan='2'><img src='upload/".$sign."' width='50%' height='50%'/></td>
			</tr>
		  </div></table></div></div></div></body>";
	echo '<link href="css/bootstrap.min.css" rel="stylesheet">
		  <link href="css/style.css" rel="stylesheet">';
?>