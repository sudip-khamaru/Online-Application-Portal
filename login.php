<?php 
	include 'master.php';
	include 'db_connect.php';
	session_start();

	if(isset($_POST['login'])){
		$username=$_POST['username'];
		$password=$_POST['password'];

		$sql="SELECT fname,reg_id,email,dob FROM applicant WHERE dob='$password'";
		$var=mysql_query($sql);
		if($row=mysql_fetch_array($var)){
			$fname=$row['fname'];
			$reg_id=$row['reg_id'];
			$email=$row['email'];
			$dob=$row['dob'];

			if($reg_id==$username || $email==$username && $dob==$password){
				$_SESSION['name']=$fname;
				$_SESSION['reg_id']=$reg_id;
				header('location:dashboard.php');
			}
			else{
				echo "<div>Invalid Application Id or Email Id.</div>";
			}
		}
		else{
			echo "<div>Invalid Application Id or Email Id or Date of Birth.</div>";
		}		
	}
?>
<html>
	<!--<head>-->
		<!--Bootstrap Link-->
		<!--<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">-->
		<!--EndBootstrap Link-->
	<!--</head>-->
	<body><br/><br/><br/><br/><br/>
		<div class='container'>
		<div class="row">
			<div class="col-xs-12 col-md-10 col-md-offset-1" style="text-align: center">
				<h2 id="applicant_login_title"><b>Applicant Login</b></h2>
			</div>
		</div><br/>
		<div class="jumbotron login_portal">
		<form method="POST" action="#">
			<div class="row">
				<div class="table-responsive">
					<table border="0" class="table table-bordered" id="applicant_login_tab">
						<tr>
							<td><b>Application Id or Email Id</b><br/><span class="glyphicon glyphicon-user"></span></td>
							<div class="col-sm-4">
								<td><input type="text" class="form-control" name="username" id="username" placeholder="Enter Application Id or Email Id" required/></td>
							</div>
						</tr>
						<tr>
							<td><b>Date of Birth</b><br/><span class="glyphicon glyphicon-lock"></span></td>
							<div class="col-sm-4">
								<td><input type="date" class="form-control" name="password" id="password" placeholder="Enter DOB" required/></td>
							</div>
						</tr>
					</table>
				</div>
			</div>
			<div class="form-group row" id="applicant_login_btn">
				<div class="col-sm-10">
					<input type="submit" class="btn btn-success" name="login" value="Login"/>&nbsp;&nbsp;
					<input type="reset" class="btn btn-danger" name="cancel" value="Cancel"/>
				</div>
			</div>
		</form>
		</div>
		</div>
	</body>
</html>