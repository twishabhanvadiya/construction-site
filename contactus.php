<html>
<head>
 </head>
 <style type="text/css">
   #border
   {
      border-radius: 25px;
      width:40%;
    border:solid;
    border-color:black;
   }
   #fno,#fname,#fmail{  
    width:100%;
    padding: 7%;
   }
   #fquery{
      width:200%;
      padding: 7%;
   }
   #b{
    background-image:url("contimg.png"); 
    background-repeat: no-repeat;
    background-size:100% 100%;
   }
   #formdiv{
  float:left;
  height:100%;
  width: 50%;
  padding: 1%;
  margin-left: 2%;
  background-color:none;
  position: relative;
  }

   #c{
  float:left;
  height:100%;
  width: 40%;
  padding: 1%;
  margin-left: 2%;
background-color: none;
}
 </style>
 <script type="text/javascript">
   function validateForm(){
    var name=document.getElementById("fname").value;
    var no=document.getElementById("fno").value;
    var nm=/^[a-zA-Z]+$/;
    if(!name.match(nm))
    {
      alert("invalid first name.");
      return false;
   
    }
    var no1=/^\d{10}$/;
    if(!no.match(no1))
    {
      alert("invalid number");
      return false;
    }
    else
    {      var r=confirm("check your details before submitting");
        if(r==true)
          return true;
        else
          return false;
    }
    }
 </script>
<link rel="stylesheet" type="text/css" href="new.css">
</head>
<body id="b"  bgcolor="LightGray">
  <?php
    include("header.php");
    //include(".php");
  ?>
<div style='margin-top: 1%' class="maincontent">
    <div id="formdiv">
    <fieldset id="f11">
    <legend><font size="6">INQUIRY</font></legend>
    <form name="myform" action="insertcontact.php" method="post" onsubmit="return validateForm()">
      <table  cellpadding="9">
        <tr><td><font size="5" color="blue"> Name::</font></td></tr>
        <tr><td><input type="text" id="fname" name="fname" required/></td></tr>
        <tr><td><font size="5" color="blue" >Mobile No::</font></td></tr>
        <tr><td><input type="number" id="fno" name="mno" required/></td></tr>
        <tr><td><font size="5" color="blue"> query::</font></td></tr>
        <tr><td><input type="textarea" id="fquery" name="anyquery" required/></td></tr>
        <tr><td><font size="5" color="blue" >E-mail::</font></td></tr>
        <tr><td><input type="email" id="fmail" name="email" required/></td></tr>
        <tr><td><font size="5" color="blue">City::</font></td></tr>
        <tr><td><select name="city">
          <option value="junagadh">Junagadh</option>
          <option value="ahmeadabad">ahemedabad</option>
          <option value="Rajkot">Rajkot</option>
          <option value="Baroda">Jamanagar</option>
          <option value="Surat">Surat</option>
        </select></td></tr>
        <tr><td><font size="5" color="blue" >Reason for ask::</font></td>
        <td><input type="radio" name="reason" value="1" checked>interest to invest<br>
        <input type="radio" name="reason" value="0"> just for inquiry<br></td></tr>
        <tr><td><input type="submit" value="Submit" name="submit" style="Margin-top:10%;margin-left:50%"></td>
        <td><input type="reset" value="Cancel" name="cancel" style="Margin-top:7.8%;margin-left:20%"></td></tr>
      </table>
    </fieldset>
  </div>
 </form>
 <div id="c">
    <fieldset id="f11">
      <legend><font size="6">DETAILS</font></legend>   
      <pre>







      </pre> 
      <center>
        <table style=font-size:30px;>
          <h1><b><tr><td>phone:</b></h1></td><td>8989898**9</td></tr>
          <tr><td>email:</td><td>star.dreamer@gmail.com</td></tr>
  

          <tr><td>add-office:</td><td>26336*9</td></tr></b></h1>
        </table></center>
    </fieldset>
  </div>
</div>

<div class=footer>
  <div class="copyright"><font size="4" > copyright@ | ceated by twisha and seby</font></div>
</div>
</body>
</html>