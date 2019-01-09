<?php
include("dataconnect.php");
if(isset($_POST["submit"]))
{
	$nm=$_POST["fname"];
    $mno=$_POST["mno"];
	$que=$_POST["anyquery"];
	$email=$_POST["email"];
	$city=$_POST["city"];
	$reason=$_POST["reason"];	

	$query="insert into inquiry values('$nm','$mno','$que','$email','$city','$reason')";
	$row=mysqli_query($conn,$query);
	if(!$row)
	{
		die("cant insert data");
	}
	else
	{
		//echo"submit successful";
		include("index.php");
	}
}
?>