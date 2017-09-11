<?php
	include 'db_connect.php';
	include 'admin_login_header.php';

	$limit=10;
    if(isset($_GET["page"])){
      $page=$_GET["page"];
    }
    else{
      $page=1;
    };

    $record_index=($page-1)*$limit;
    $sql="SELECT id,reg_id,fname,caste,gender,gate_rank,dob,religion,resi_address,district,nationality,state,pin,email,mobile FROM applicant LIMIT $record_index,$limit";
    $retval=mysql_query($sql);
    echo "<div id='applicant_record'><table border=2 style='position:absolute;left:3%;top:20%;width:95%;'>";
    echo "<tr align='center'><td><strong>Sl. No.</strong></td><td><strong>Reg. Id</strong></td><td><strong>Name</strong></td><td><strong>Caste</strong></td><td><strong>Gender</strong></td><td><strong>GATE Rank</strong></td><td><strong>DOB</strong></td><td><strong>Religion</strong></td><td><strong>Address</strong></td><td><strong>Dist</strong></td><td><strong>Natioanlity</strong></td><td><strong>State</strong></td><td><strong>Pin</strong></td><td><strong>Email</strong></td><td><strong>Mobile</strong></td></tr>";

    //$str="";

    if($page>0){
      if(mysql_num_rows($retval)>0){
        while($row = mysql_fetch_array($retval)){
          echo "<tr align='center'><td><font>".$row[0]."</font></td><td><font>".$row[1]."</font></td><td><font>".$row[2]."</font></td><td><font>".$row[3]."</font></td><td><font>".$row[4]."</font></td><td><font>".$row[5]."</font></td><td><font>".$row[6]."</font></td><td><font>".$row[7]."</font></td><td><font>".$row[8]."</font></td><td><font>".$row[9]."</font></td><td><font>".$row[10]."</font></td><td><font>".$row[11]."</font></td><td><font>".$row[12]."</font></td><td><font>".$row[13]."</font></td><td><font>".$row[14]."</font></td></tr>";
        }
      }
	    else{
	       echo "<tr style='text-align:center;color:red'><td colspan='15'>No records</td></tr>";
      }
    }
    else{
	     echo "<tr style='text-align:center,color:red'><td colspan='15'>No records</td></tr>";
    }
    echo "</table></div>";
	
	$sql1="SELECT COUNT(*) FROM applicant";
    $retval1=mysql_query($sql1);
    $row=mysql_fetch_row($retval1);
    $total_records=$row[0];
    $total_pages=ceil($total_records / $limit);

    echo "<a href='applicant_details.php?page=".($page+1)."' class='btn btn-primary' style='position:absolute;left:44%;top:107%;width:6%;text-align:center;text-decoration:none;'>Next</a></li>";
    echo "<a href='applicant_details.php?page=".($page-1)."' class='btn btn-primary' style='position:absolute;left:51%;top:107%;width:6%;text-align:center;text-decoration:none;'>Previous</a></li>";

?>

<html>
	<head>
		<!--Bootstrap Link-->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<!--EndBootstrap Link-->
	</head>
</html>