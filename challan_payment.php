<?php
	include 'login_header.php';
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Challan</title>
		<!--Bootstrap Link-->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<!--End Bootstrap Link-->
	</head>
	<body><br/><br/><br/><br/><br/>
		<div class='container'>
		<div class="row">
			<div class="col-xs-12 col-md-10 col-md-offset-1" style="text-align: center">
				<h2 id="applicant_challan_title"><b>Challan Payment</b></h2>
			</div>
		</div><br/>
		<form method="POST" action="challan_details.php">
			<div class="row">
				<div class="table-responsive">
					<table border="0" class="table table-bordered" id="applicant_challan_tab">
						<tr>
							<td><b>Application Id</b></td>
							<div class="col-sm-4">
								<td><input type="text" class="form-control" name="app_id" id="app_id" placeholder="Enter Application Id" required/></td>
							</div>
						</tr>
						<tr>
							<td><b>Email Id</b></td>
							<div class="col-sm-4">
								<td><input type="text" class="form-control" name="email" id="email" placeholder="Enter Email Id" required/></td>
							</div>
						</tr>
					</table>
				</div>
			</div> 
	        <div class="form-group row" id="applicant_challan_btn">
				<div class="col-sm-11">
					<input type="submit" class="btn btn-success" name="generate" id="generate" value="Generate"/>&nbsp;&nbsp;
					<input type="reset" name="cancel" id="cancel" value="Cancel" class="btn btn-danger"/>
				</div>
			</div>      	
		</form>	
		</div>
	</body>
</html>
