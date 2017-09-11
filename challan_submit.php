<?php
	include 'db_connect.php';
	session_start();

	echo '<link href="css/bootstrap.min.css" rel="stylesheet">
		  <link href="css/style.css" rel="stylesheet">';

	if(isset($_POST['confirm_payment'])){
		$tmp_reg_id=$_POST['tmp_reg_id'];
		$challan_no=$_POST['challan_no'];
		$challan_date=$_POST['challan_date'];
		$status="Success";

		$reg_id=unique_id(10);

		$sql="UPDATE applicant SET reg_id='$reg_id',challan_no='$challan_no',challan_date='$challan_date',status='$status' WHERE reg_id='$tmp_reg_id'";
		$var=mysql_query($sql);
		if($var){
			echo "<div id='congo'>**** Payment Successfully Done. ****</div>
				  <div id='final_id'>Your Final Application Id - ".$reg_id."</div>
				  <div id='message'>Your Final Application Id is now your identification. Previous Application Id is now modified with it. So please remembar this id to change any further details<br/> in future. To check your admission status please login into <u>Login</u> section by this id and your given date of birth. If you have any query please call us.</div>";
		}

		echo '<a href="home.php" class="btn btn-primary" id="back_home"><b>Back to Home</b></a>';
	}

	function unique_id($size){
		$temp="KUCSE";
		$length=$size-3;
		$key1='';
		$key2=range(0,9);
			
		for($i=0;$i<$length;$i++){
			$key1.=$key2[array_rand($key2)];
		}
		return $temp.$key1;
	}

	session_destroy();
?>