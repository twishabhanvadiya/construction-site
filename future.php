<html>
<head>
<style type="text/css">
#p1{
	float:left;
	height:40%;
	width: 30%;
	padding: 1%;
	margin-left: 2%;

}
#p2{
	float:left;
	height:40%;
	width: 30%;
	padding: 1%;
}
#p3{
	float:left;
	height:40%;
	width: 30%;
	padding:1%;
}
#pg1
{
	height:100%;
	width: 100%;
	background-color: none;
}
#f1
{
	border-color: gray;
	border:groove;
	border-bottom: none;
	border-left: none;
	border-right:none;
} 

#hd{
	font-size: 25;
	color:red;
}
</style>
	<link rel="stylesheet" type="text/css" href="new.css">	
</head>
<body bgcolor="LightGray">
	<?php
		include("header.php");
		include("dataconnect.php");
	?>
<div style='margin-top: 1%' id="pg1">
	<center>
	<div id="p1"><img src="img5.png" width="100%" height="100%"></div>
	<div id="p2"><img src="img41.png" width="100%" height="100%"></div>
	<div id="p3"><img src="img4.png" width="100%" height="100%"></div>
	</center>
	<fieldset id="f1">
		<legend align="center"><font size=7>future projects</font></legend>

	<?php
	$query="SELECT * FROM `future projects` LIMIT 0, 30 ";
	$sql=mysqli_query($conn,$query);
	if(!$sql)
	{
		die("cant resolve query");
	}
	else
	{
		echo"<br><center><table border='0' style='font-size:20'>";
		while($row=mysqli_fetch_array($sql))
		{
			$facility=$row['facilities'];
			$descr=$row['description'];
			echo"<tr><td><font id='hd'>$facility</td><td>$descr</td></tr>";
		}
		//include("index.php");
	}
	?>
</table>
</center>
	</fieldset>
	</div>
</div>
<div class=footer>
	<div class="copyright"><font size="4" > copyright@ | created by twisha and seby</font></div>
</div>
</body>
</html>