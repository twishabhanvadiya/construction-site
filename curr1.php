<html>
<head>
<style type="text/css">
#p1{
	float:left;
	height:35%;
	width: 30%;
	padding: 1%;
	margin-left: 2%;
}

#hd{
	font-size: 25;
	color:red;
}

#p2{
	float:left;
	height:35%;
	width: 30%;
	padding: 1%;
}
#p3{
	float:left;
	height:35%;
	width: 30%;
	padding:1%;
}
#pg1
{
	height:110%;
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
		include("header1.php");
		//include(".php");
	?>
<div style='margin-top: 1%' id="pg2">
<fieldset id="f1">
			<legend align="center"><font size=7>current projects</font></legend>
		</fieldset>

     <form name="myform" action="curr1.php" method="post">
      <table  border="0"cellpadding="9">
        <tr><td><font size="5" color="blue"> Facilities::</font></td>
        	<td><font size="5" color="blue" >Description::</font></td></tr>
        <tr><td><input type="text" id="ffac" name="fac" required/></td>
        <td><input type="text" id="fdes" name="des" required/></td></tr>
        
         <tr><td><input type="submit" value="Submit" name="submit" style="Margin-top:10%;margin-left:50%"></td>
       </table>
    
  </div>


<div id="pg1">
		<center>
		
	<table border="2" style="position: relative;" cellpadding="10%">
		<tr>
			<td ><font id="hd">Structure:</font></td>
			<td>Earthquake Resistant RCC frame structure.</td></tr>
		<tr>
			<td ><font id="hd">Lift:</font></td>
			<td>Two modern high-class auto door stretcher lifts.</td></tr>
		<tr> 
			<td ><font id="hd">Signage:</font></td>
			<td>Dedicated Sign board space for each shop & office.</td></tr>
		<tr>
			<td ><font id="hd">Parking:</font></td>
			<td>Well-planned ground floor and under-ground parking.</td></tr>
		<tr>
			<td ><font id="hd">Flooring:</font></td>
			<td>Premium quality designer vitrified ties.</td></tr>
		<tr>
			<td ><font id="hd">Windows:</font></td>
			<td>Anodised aluminium section with glass.</td></tr>
		<tr>
			<td ><font id="hd">Toilet:</font></td>
			<td>Premium Quality sanitary and plumbing fixtures.</td></tr>
		<tr>
			<td ><font id="hd">Wall-Finish:</font></td>
			<td>Double coat external palster. Putty on internal walls.<br>Water-proof branded exterior paint.</td></tr>
		<tr>
			<td ><font id="hd">Eletrification:</font></td>
			<td>Concealed copper wiring and modular switches with <br>all required electric points.</td></tr>
	</table>
	</center>
</div>


<div class=footer>
	<div class="copyright"><font size="4" > copyright@ | created by twisha and seby</font></div>
</div>
</body>
</html>