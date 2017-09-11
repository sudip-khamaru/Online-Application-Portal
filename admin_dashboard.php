<?php
	include 'db_connect.php';
	include 'admin_login_header.php';
	
	$name=$_SESSION['username'];
?>
<html>
	<head>
		<!--Bootstrap Link-->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<!--EndBootstrap Link-->
	</head>
	<body>
		<h3 id="head_details">Applicant Details</h3><a href="applicant_details.php" class="btn btn-success" id="details">Click Here</a>
		<h3 id="head_faq">FAQs</h3><a href="faqs.php" class="btn btn-warning" id="faq_details">Click Here</a>
	</body>
</html>