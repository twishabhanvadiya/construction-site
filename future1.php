<html>
<head>
<style type="text/css">
 #ffac,#fname,#fmail{  
    width:100%;
    padding: 7%;
   }
   #fdes{
      width:200%;
      padding: 7%;
   }
#pg1
{
	height:40%;
	width: 100%;
	background-color: none;
}

#hd{
	font-size: 25;
	color:red;
}
#pg2
{
	height:60%;
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
</style>
	<link rel="stylesheet" type="text/css" href="new.css">	
</head>
<body bgcolor="LightGray">
	<?php
		if(!isset($_SESSION))
		{
			session_start();	
		}

		if(!isset($_SESSION['user_Name']))
		{
			header("location:login.php");
		}

		include("header1.php");
		include("dataconnect.php");
	?>
<div style='margin-top: 1%' id="pg1">
	<fieldset id="f1">
		<legend align="center"><font size=7>future projects</font></legend>

     <form name="myform" action="insertdata.php" method="post">
      <table  border="0"cellpadding="9">
        <tr><td><font size="5" color="blue"> Facilities::</font></td>
        	<td><font size="5" color="blue" >Description::</font></td></tr>
        <tr><td><input type="text" id="ffac" name="fac" required/></td>
        <td><input type="text" id="fdes" name="des" required/></td></tr>
        
         <tr><td><input type="submit" value="Submit" name="submit" style="Margin-top:10%;margin-left:50%"></td>
       </table>
    </fieldset>
  </div>
 </form>

<div id="pg2">
	<?php
	$query="SELECT * FROM `future projects` LIMIT 0, 30 ";
	$sql=mysqli_query($conn,$query);
	if(!$sql)
	{
		die("cant resolve query");
	}
	else
	{
		echo"<br><center><table border='1' style='font-size:20''><tr><th>Facility</th><th>Description</th></tr>";
		while($row=mysqli_fetch_array($sql))
		{
			$facility=$row['facilities'];
			$descr=$row['description'];
			echo"<tr><td><font id='hd'>$facility</font></td><td>$descr</td></tr>";
		}
		//include("index.php");
	}
	?>
</table>
</center>
	
	</div>
<div class=footer>
	<div class="copyright"><font size="4" > copyright@ | created by twisha and seby</font></div>
</div>
</body>
</html>