<?php 
	include 'master.php'; 
	include 'db_connect.php';
	session_start();
	
	if(isset($_POST['confirm'])){
		$fname=$_POST['cnf_fname'];
		$caste=$_POST['cnf_caste'];
		$gender=$_POST['cnf_gender'];
		$per_x=$_POST['cnf_per_x'];
		$year_x=$_POST['cnf_year_x'];
		$board_x=$_POST['cnf_board_x'];
		$per_xii=$_POST['cnf_per_xii'];
		$year_xii=$_POST['cnf_year_xii'];
		$board_xii=$_POST['cnf_board_xii'];
		$qualifying=$_POST['cnf_qualifying'];
		$per_gradu=$_POST['cnf_per_gradu'];
		$year_gradu=$_POST['cnf_year_gradu'];
		$university=$_POST['cnf_university'];
		$college=$_POST['cnf_college'];
		$roll=$_POST['cnf_roll'];
		$gate_rank=$_POST['cnf_gate_rank'];
		$father=$_POST['cnf_father'];
		$mother=$_POST['cnf_mother'];
		$income=$_POST['cnf_income'];
		$guardian=$_POST['cnf_guardian'];
		$occupation=$_POST['cnf_occupation'];
		$guardian_phone=$_POST['cnf_guardian_phone'];
		$dob=$_POST['cnf_dob'];
		$religion=$_POST['cnf_religion'];
		$resi_address=$_POST['cnf_resi_address'];
		$per_address=$_POST['cnf_per_address'];
		$nationality=$_POST['cnf_nationality'];
		$district=$_POST['cnf_district'];
		$state=$_POST['cnf_state'];
		$pin=$_POST['cnf_pin'];
		$email=$_POST['cnf_email'];
		$phone=$_POST['cnf_phone'];
		$mobile=$_POST['cnf_mobile'];
		$disability=$_POST['cnf_disability'];
		$blood=$_POST['cnf_blood'];
		$photo=$_POST['cnf_photo'];
		$sign=$_POST['cnf_sign'];
		$challan_no="";
		$challan_date="";
		$status="Pending";
		$reg_id=unique_id(10);
		$_SESSION['reg_id']=$reg_id;

		$sql="INSERT INTO applicant(reg_id,fname,caste,gender,per_x,year_x,board_x,per_xii,year_xii,board_xii,qualifying,per_gradu,year_gradu,university,college,roll,gate_rank,father,mother,income,guardian,occupation,guardian_phone,dob,religion,resi_address,per_address,nationality,district,state,pin,email,phone,mobile,disability,blood,photo,sign,challan_no,challan_date,status) VALUES('$reg_id','$fname','$caste','$gender','$per_x','$year_x','$board_x','$per_xii','$year_xii','$board_xii','$qualifying','$per_gradu','$year_gradu','$university','$college','$roll','$gate_rank','$father','$mother','$income','$guardian','$occupation','$guardian_phone','$dob','$religion','$resi_address','$per_address','$nationality','$district','$state','$pin','$email','$phone','$mobile','$disability','$blood','$photo','$sign','$challan_no','$challan_date','$status')";
		$var=mysql_query($sql);
		/*if($var1){
			echo "Done.";
		}*/
	}

	function unique_id($size){
		$temp="tmp";
		$length=$size-3;
		$key1='';
		$key2=range(0,9);
			
		for($i=0;$i<$length;$i++){
			$key1.=$key2[array_rand($key2)];
		}
		return $temp.$key1;
	}
?>
<html>
	<head>
		
	</head>
	<body>
		<div id="congo">**** Congratulation! You have successfully filled up your Application Form ****</div>
		<div id="temp_id">Your Temporary Application Id - <?php echo "<strong>".$reg_id."</strong>"; ?></div>
		<div id="message">Your Application Id is your identification. So please remembar this id to change any further details in future.<br/>To check your admission status please login into <u>Login</u> section by this id and your given date of birth. If you have any query please call us.</div>
		
		<a href="formprint.php" id="print_application" class="btn btn-primary" target="_blank">View/Download Application Form</a><br><br>
		<a href="challan.php" id="print_challan" class="btn btn-primary" target="_blank">View/Download Challan</a><br><br><br><br>
	</body>
</html>