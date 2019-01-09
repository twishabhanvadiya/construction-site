<?php
$con="localhost";
$user="root";
$psw="";
$db="stardev";
$conn=mysqli_connect($con,$user,$psw,$db);
if(!$conn)
{
	die("Connection Failed");
}
?>