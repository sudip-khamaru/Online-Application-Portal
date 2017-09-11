<?php
	include 'db_connect.php';
	include 'admin_login_header.php';
	
	$sql="SELECT * FROM qa WHERE answer=' '";
	$var=mysql_query($sql);
	echo "<head>
		<!--Bootstrap Link-->
		<link href='css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/style.css' rel='stylesheet'>
		<!--EndBootstrap Link-->
		</head>
		<body>
			<form method='POST' action='#'>
				<font style='position:absolute;top:20%;left:36%;font-size:20px;'>Question</font>
				<div class='col-xs-4'><select name='question' class='form-control input-sm' id='select_question'>";
					while($row=mysql_fetch_array($var)){
						extract($row);
						echo "<option value='$question'>".$question."</option>";
					}
				echo "</select></div><br>";
?>
				<font style='position:absolute;top:32%;left:36%;font-size:20px;'>Answer</font><input type="text" name="ans" id="answer"/>
				<input type="submit" class="btn btn-success" name="submit" value="Submit"/>
			</form>
		</body>

<?php
	if(isset($_POST['submit'])){
		$question=$_POST['question'];
		$ans=$_POST['ans'];
		$sql1="UPDATE qa SET answer='$ans' WHERE question='$question'";
		$var1=mysql_query($sql1);
		if($var1>0){
			echo "<font style='position:absolute;top:40%;left:40%;font-size:20px;color:green'>Answer Submitted.</font>";
		}
	}
	
?>