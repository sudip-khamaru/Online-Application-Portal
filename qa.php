<?php 
include 'master.php';
include 'db_connect.php';

$sql="select * from qa";
$row=mysql_query($sql);
if(isset($_POST['submit']))
{
	$question=$_POST['question'];
	
	$sql2="insert into qa(id,name,question,answer) value('','','$question','')";
	$row2=mysql_query($sql2);
	if($row2>0)
	{
		echo '<font style="position:absolute;left:36%;top:30%">Your Question Has Been Sent Successfully</font>';
	}
	else
	{
	echo '<font style="position:absolute;left:30%;top:30%">Sorry! There is a Problem, Plz try again later</font>';
	}

}

?>
<html>
<body>
<table style="position:absolute;left:10%;top:12%;border:1px solid;width:80%">
<tr><td align="center"><h3>List Of Questions You Have Asked</h3></td></tr>
<tr><td align="center"><br/><form action="" method="post"><input type="text"  name="question" placeholder="Ask Your Question" style="height:34px;width:280px"> &nbsp;&nbsp;<input type="submit" value="Send" style="height:34px;width:80px" class="btn btn-success" name="submit"></form>
<tr><td><br/><br/><br/><?php echo '<table>' ; while($row1=mysql_fetch_array($row)){extract($row1); if($answer!=''){ echo '<tr><td><b> &nbsp;&nbsp; Qusetion :  </b></td><td><b>'.$question.'</b></td></tr><tr><td colspan="2"><b>&nbsp;&nbsp;Answer : '.$answer.'</b></td></tr><tr><td colspan="2">&nbsp;</td></tr>';}} echo '</table>';?></td></tr>

</table>
</body>
<html>