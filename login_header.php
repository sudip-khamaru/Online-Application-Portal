<?php
	session_start();
	echo '<div style="position:absolute;left:0%;top:0%;border:1px solid black;background-color:black;height:7%;width:99.9%">
			  <font style="position:absolute;left:52%;top:35%" size=3px color="white">Applicant Name - <b>'.$_SESSION['name'].'</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Application Id - <b>'.$_SESSION['reg_id'].'</b></font></br>
		  	<a href=logout.php style="position:absolute;left:95%;top:35%;text-decoration:none;font-size:15px;color:white"><b>logout</b></a>
		  </div>';
?>