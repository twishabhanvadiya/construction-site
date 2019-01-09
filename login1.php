<?php 
    session_start();
	//session_start();
	$_SESSION["label"]="Login";
	include "dataconnect.php";		
	$ins = "select * from userdata where username= '".$_REQUEST["username"]."' AND password='".$_REQUEST["password"]."'";
	$res = mysqli_query($conn,$ins) or die("connect failled");
	if(mysqli_num_rows($res)>0)
	{
		$row = mysqli_fetch_array($res);
		$_SESSION["user_Name"] = $row['username'];
		$_SESSION["label"]="Logout";
		echo $_SESSION["user_Name"];
		header("location:index.php");
	}
	else
	{
		$user = "user";
		header("location:login.php");
		exit;	
	}
?>
