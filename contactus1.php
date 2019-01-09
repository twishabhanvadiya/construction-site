<?php
echo '<body bgcolor="LightGray">';

		if(!isset($_SESSION))
		{
			session_start();	
		}

		if(!isset($_SESSION['user_Name']))
		{
			header("location:login.php");
		}

include("dataconnect.php");
include("header1.php");
echo"<div style='width:100%';height:30%>";
$query="SELECT * FROM `inquiry` LIMIT 0, 30 ";
	$sql=mysqli_query($conn,$query);
	if(!$sql)
	{
		die("cant resolve query");
	}
	else
	{
		echo"<div><br><center><table border='1' style='font-size:20''><tr><th>Name</th>
		<th>mob.No.</th>
		<th>Query</th>
		<th>Email id</th>
		<th>City</th>
		<th>interested to invest</th></tr>";
		while($row=mysqli_fetch_array($sql))
		{
			$name=$row['name'];
			$mno=$row['mno'];
			$query=$row['anyquery'];
			$email=$row['email'];	
			$city=$row['city'];					
			$intr=$row['interested'];
			echo"<tr><td>$name</td>
			<td>$mno</td>
			<td>$query</td>
			<td>$email</td>
			<td>$city</td>
			<td>$intr</td></tr>";
		}
		echo"</div>";
		//include("index.php");
	}
	echo"</div>";
	//include("footer.php");
echo "</body>";
?>