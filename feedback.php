<?php
	include 'master.php';
	include 'db_connect.php';
	session_start();

	$myquery2="select name,feedback from feedback order by id desc limit 10";
	$var1=mysql_query($myquery2);
	echo "<table style='position:absolute;left:16%;width:70%;top:55%;border:1px solid;color:0599c9'><tr><td></tr><tr><td><br>";
	echo "<table style='color:0599c9' align='center'>";
	while($result2=mysql_fetch_array($var1))
	{
		$name=$result2['name'];
		$post_feedback=$result2['feedback'];

		echo "<tr bgcolor=#f7f7e0><td><b>&nbsp;&nbsp;*&nbsp".$name." :&nbsp;</b></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><strong>&nbsp".$post_feedback."</strong><br><font color=#f7f7e0>.</font></td></tr>";

		echo "<tr><td><font color=#f7f7e0>.</font><td></tr>";
	}
	echo "</table></tr><tr><td></tr></table>";
?>

<!doctype html>
<html lang="en">
	<body>


				<form method="POST" action="process_feedback.php"><br/><br/><br/><br/>
<table height="10%" align="center"><tr><td><h3>Give Your Valuable feedback<br/></h3></td></tr></table>

				    <table style="position:absolute;left:30%;top:24%;width:30%" border="0" >

				         <tr><td> <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Name</label></td>

				             <td> <input type="text" class="form-control form-control-lg" name="app_name" id="app_name" placeholder="Enter Your Name" required/><br></td></tr>


				        <tr><td>  <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Feedback</label></td>

				              <td><textarea class="form-control form-control-lg" name="feedback" id="feedback" placeholder="Enter Feedback" required></textarea><br/></td></tr>


				          <tr><td colspan="2" align="right"><input type="submit" class="btn btn-primary" name="submit_feedback" id="submit_feedback" value="Feedback"/></td></tr>

				    </table>


						<?php
							if(isset($_SESSION['comment']))
							{
								echo "<div id='comment'>".$_SESSION['comment']."</div>";
							}

							if(isset($_SESSION['success']))
							{
								echo "<div id='success_comment'>".$_SESSION['success']."</div>";
							}
						?>

				</form>

	</body>
</html>
