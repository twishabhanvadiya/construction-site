<?php
if(!isset($_SESSION))
{
	session_start();	
}

?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="new.css">	
</head>
<body>
	<div class="header">
		<div class="d2"><img src="logg.png" height="100" width="180"></div>
		<div class="d1">STAR<br><font size=6>devolopers</font></div>
		<div style='float:right' class="d1"><a href="login1.php"><?php	
		//echo "$_SESSION['user_Name']";
		if(isset($_SESSION["user_Name"]))
			{
				echo "<a href='logout.php'><div style='padding-top:2%;float:left;width:10%;height:60%'><font color='white'>".$_SESSION["label"]."</font></div></a>";
			}
			else{
				echo "<a href='login.php'><div style='padding-top:2%;float:left;width:10%;height:60%'><font color='white'>Login</font></div></a>";
				}?></a></div>
	</div>
<div class="menu">
	<div class="button" style="margin-left:10%"><a href="index.php">home</a></div>
	<div class="button"><a href="#">projects</a>
		<div class="drop">
			<ul style='width:110%' class="ul1" type="none" margin-left="0%">
				<li style='width:95%' class="li1" margin-left="0px"><a href="curr1.php"><font size="5" align="left">current projects</font></a></li>
				<li style='width:95%' class="li1"><a href="future1.php"><font size="5">future projects</font></a></li>
				<li style='width:95%' class="li1" style="border:none"><a href="complete1.php"><font size="5">completed projects</font></a></li>
			</ul>
		</div>
	</div>
	<div class="button"><a href="milestone1.php">milestones</a></div>
	<div class="button"><a href="contactus1.php">contact</a></div>
	
</div>
</body>
</html>
