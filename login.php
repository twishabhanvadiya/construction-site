<?php
include("header1.php");
echo"
<html>
<head>
	<style type='text/css'>
		#text1
		{
			height:20%;
			width:60%;
		}
		#email1
		{
			height: 7%;
			width:40%;
		}
		#button1
		{
			height:20%;
			width:40%;
		}
		input[type=submit]
		{
			background:teal;
			color:white;
			height:30px;
			width:100px;
			border:none;
		}
		input[type=reset]
		{
			background:teal;
			color:white;
			height:30px;
			width:100px;
			border:none;
		}
		input[type=text]
		{
			background:lightblue;
		}
		input[type=Password]
		{
			background:lightblue;
		}
	</style>
<link rel='stylesheet' type='text/css' href='si.css'>
<style>
</style>
</head>
	<body>
		<center>
			<div id='content'><div style='text-align:center; padding-top:10%; font-family:Courier New;'>
					<table align='center' cellpadding='5'>
						<form action='login1.php' method='POST'>
						<tr><td colspan='2'><font size='6'><h2><center>Login</center></h2></font></td></tr>
						<tr><td><font size='6'><b> User Name: </b></font> </td>
						<td><input type='text' style='height:40px;border:none' name='username' placeholder='User name'area-describedby='email-format'required style='height:30px;width:180px'></td></tr>
					<tr><td><font size='6'><b> Password: </b></font></td><td><input type='Password' name='password' placeholder='Password'maxlength='15' style='border:none;height:40px;' area-descri1bedby='pass-format'required style='height:30px;width:180px'></td></tr><br></font>
					<tr><td style='padding-top:10%'><center><input type='submit' value='Submit' style='Margin-top:3%'></center></td>
					<td style='padding-top:10%'><center><input type='reset' value='Reset' style='Margin-top:3%'></center></td></tr></td>
					</form>
				</table>
				<h2><a href='reg.php' style='text-decoration: none;'>Sign Up</a></h2>
				</div>
			</div>
		</center>
	</body>
</html>";
?>