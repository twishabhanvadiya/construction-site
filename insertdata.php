<?php
include("dataconnect.php");
if(isset($_POST["submit"]))
{
	$fac=$_POST["fac"];
    $des=$_POST["des"];
		

	$query="INSERT INTO  `stardev`.`future projects` (`facilities` ,`description`)VALUES ('$fac',  '$des')";
	$row=mysqli_query($conn,$query);
	if(!$row)
	{
		die("cant insert data");
	}
	else
	{
		//echo"submit successful";
		include("future1.php");
	}
}
?>