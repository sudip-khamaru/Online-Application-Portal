<head>
<script>
function goback()
{
	alert('hi');
	window.history.back();
}
</script>
</head>
<?php
	if(isset($_POST['submit'])){
		$fname=$_POST['fname'];
		$caste=$_POST['caste'];
		$gender=$_POST['gender'];
		$per_x=$_POST['per_x'];
		$year_x=$_POST['year_x'];
		$board_x=$_POST['board_x'];
		$per_xii=$_POST['per_xii'];
		$year_xii=$_POST['year_xii'];
		$board_xii=$_POST['board_xii'];
		$qualifying=$_POST['qualifying'];
		$per_gradu=$_POST['per_gradu'];
		$year_gradu=$_POST['year_gradu'];
		$university=$_POST['university'];
		$college=$_POST['college'];
		$roll=$_POST['roll'];
		$gate_rank=$_POST['gate_rank'];
		$father=$_POST['father'];
		$mother=$_POST['mother'];
		$income=$_POST['income'];
		$guardian=$_POST['guardian'];
		$occupation=$_POST['occupation'];
		$guardian_phone=$_POST['guardian_phone'];
		$dob=$_POST['dob'];
		$religion=$_POST['religion'];
		$resi_address=$_POST['resi_address'];
		$per_address=$_POST['per_address'];
		$nationality=$_POST['nationality'];
		$district=$_POST['district'];
		$state=$_POST['state'];
		$pin=$_POST['pin'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$mobile=$_POST['mobile'];
		$disability=$_POST['disability'];
		$blood=$_POST['blood'];
		
		$photo_target="upload/".basename($_FILES['photo']['name']);
		$sign_target="upload/".basename($_FILES['sign']['name']);
		$photo=$_FILES['photo']['name'];
		$sign=$_FILES['sign']['name'];

		if(move_uploaded_file($_FILES['photo']['tmp_name'],$photo_target) && move_uploaded_file($_FILES['sign']['tmp_name'],$sign_target)){
			$msg="Uploaded.";
		}
		else{
			$msg="Not uploaded.";
		}

	}
		echo "<body id='preview'><br/><br/>
		<div class='container'>
		<div class='row'>
		<div class='table-responsive' id='tab'>
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
				<td style='width:2%'><strong>Photo</strong></td><td colspan='2'><img src='upload/".$photo."' width='30%' height='25%'/></td>
				<td style='width:2%'><strong>Signature</strong></td><td colspan='2'><img src='upload/".$sign."' width='30%' height='6%'/></td>
			</tr>
		  </div></table></div></div></div></body>";
		echo '<form action="formsubmit.php" method="POST" >
				<input type="hidden" name="cnf_fname" value="'.$fname.'"/>
				<input type="hidden" name="cnf_caste" value="'.$caste.'"/>
				<input type="hidden" name="cnf_gender" value="'.$gender.'"/>
				<input type="hidden" name="cnf_per_x" value="'.$per_x.'"/>
				<input type="hidden" name="cnf_year_x" value="'.$year_x.'"/>
				<input type="hidden" name="cnf_board_x" value="'.$board_x.'"/>
				<input type="hidden" name="cnf_per_xii" value="'.$per_xii.'"/>
				<input type="hidden" name="cnf_year_xii" value="'.$year_xii.'"/>
				<input type="hidden" name="cnf_board_xii" value="'.$board_xii.'"/>
				<input type="hidden" name="cnf_qualifying" value="'.$qualifying.'"/>
				<input type="hidden" name="cnf_per_gradu" value="'.$per_gradu.'"/>
				<input type="hidden" name="cnf_year_gradu" value="'.$year_gradu.'"/>
				<input type="hidden" name="cnf_university" value="'.$university.'"/>
				<input type="hidden" name="cnf_college" value="'.$college.'"/>
				<input type="hidden" name="cnf_roll" value="'.$roll.'"/>
				<input type="hidden" name="cnf_gate_rank" value="'.$gate_rank.'"/>
				<input type="hidden" name="cnf_father" value="'.$father.'"/>
				<input type="hidden" name="cnf_mother" value="'.$mother.'"/>
				<input type="hidden" name="cnf_income" value="'.$income.'"/>
				<input type="hidden" name="cnf_guardian" value="'.$guardian.'"/>
				<input type="hidden" name="cnf_occupation" value="'.$occupation.'"/>
				<input type="hidden" name="cnf_guardian_phone" value="'.$guardian_phone.'"/>
				<input type="hidden" name="cnf_dob" value="'.$dob.'"/>
				<input type="hidden" name="cnf_religion" value="'.$religion.'"/>
				<input type="hidden" name="cnf_resi_address" value="'.$resi_address.'"/>
				<input type="hidden" name="cnf_per_address" value="'.$per_address.'"/>
				<input type="hidden" name="cnf_nationality" value="'.$nationality.'"/>
				<input type="hidden" name="cnf_district" value="'.$district.'"/>
				<input type="hidden" name="cnf_state" value="'.$state.'"/>
				<input type="hidden" name="cnf_pin" value="'.$pin.'"/>
				<input type="hidden" name="cnf_email" value="'.$email.'"/>
				<input type="hidden" name="cnf_phone" value="'.$phone.'"/>
				<input type="hidden" name="cnf_mobile" value="'.$mobile.'"/>
				<input type="hidden" name="cnf_disability" value="'.$disability.'"/>
				<input type="hidden" name="cnf_blood" value="'.$blood.'"/>
				<input type="hidden" name="cnf_photo" value="'.$photo.'"/>
				<input type="hidden" name="cnf_sign" value="'.$sign.'"/>
				<br/><br/><br/>
				<div class="container">
				<div class="row">
				<div style="text-align: center">
					<input type="submit" class="btn btn-success" name="confirm" id="confirm" value="Final Submit"/>&nbsp;&nbsp;
					
			  	</div></div></div>
			  </form>';

	echo '<link href="css/bootstrap.min.css" rel="stylesheet">
		  <link href="css/style.css" rel="stylesheet">';
?>