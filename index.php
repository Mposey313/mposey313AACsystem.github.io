<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AAC</title>
</head>

<link rel="stylesheet" type="text/css" href="css/css1.css">
<script>
	function toggle_visibility(id){
		var e = document.getElementById(id);
		if(e.style.display=='block')
			e.style.display = 'none';
		else
			e.style.display = 'block';
		}
</script>

<body>

<div id="container">
<div id="header">
<table cellspacing="0" width="100%" border="0" cellpadding="20px">
<tr>
	<td width="56%">
    <table width="41%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
	    <th scope="col"><font size="12px">AAC </font><span style="font-size: 18px">SYSTEM</span></th>
	    </tr>
	  </table></td>
    <td style="font-size:14px;">
      <table width="93%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          	<th scope="col">&nbsp;</th>
          	<th scope="col" width="20px">&nbsp;</th>
        </tr>
  </table></td>
    </tr>

</table>
</div>

<br><br><br><br><br>
<!-- Footer -->
<div id = "headnav"> 
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>

	<td width="669" height="62">
	<table width="959" border="0" cellspacing="0" cellpadding="0">
	  <tr>
	    <th width="93" height="62" scope="col"><a href="index.php">Dashboard</a></th>
	    <th width="51" scope="col"><a href="aircraft.php">AIRCRAFT</a></th>
          <th width="100" scope="col"><a href="wheel.php">WHEELS</a></th>
	    
		</tr>
	  </table>
      </td>
      
      <td width="13">
	    </tr>
      <table border="0" cellspacing="0" cellpadding="0">
      	<tr>
        	<td align="left" style="color:#FFF">
           
            </td>
        </tr>
      </table>
      </td>

</tr>
</table>
</div>
<br>

<table width="83%" border="0" align="center" cellpadding="0" cellspacing="0">
      
      <tr>
        <td width="741" align="right">&nbsp;</td>
        
        <td width="131" height="37">&nbsp;</td>
      </tr>
    
    </table></th>
  </tr>
  

  
  <tr>
    <td>
    <table border="0" cellpadding="0" cellspacing="0" align="center" width="83%" style="border:1px solid #033; color:#033;">
    
     <tr>
    
        
      </tr>
      
        <!-- Search goes here! -->
 
 <?php
require('config.php');
$query="SELECT * FROM aircraft";
$result=mysqli_query($db_link, $query);
while ($row=mysqli_fetch_array($result)) {?>
      
   
   <?php
}?>
  
  		<!-- Search end here -->
      
       <?php
require('config.php');

if(isset($_GET['search'])){
			$d1 = $_GET['d1'];
			$d2 = $_GET['d2'];
			
$query="SELECT mop, SUM(total) FROM ssales WHERE dates BETWEEN '$d1' and '$d2' GROUP BY mop";
$result=mysqli_query($db_link, $query);
while ($row=$result->fetch_assoc()){?>
      
      <tr align="center" style="height:35px">
      	
      	
   
      </tr>
   <?php
}}?>
      
      
    </table>
    <table border="0" cellpadding="0" cellspacing="0" align="center" width="83%" style="border:1px solid #033; color:#033;">
    
     <tr>
     <th colspan="7" align="center" height="55px" style="border-bottom:1px solid #033; background: purple; color:#FFF;"> Modules</th>
       
       
    </tr>
    
      <tr height="30px">
        <th width="11%" style="border-bottom:1px solid #333;"> <a href="aircraft.php"> Aircraft Module </a></th>
        <th width="6%" style="border-bottom:1px solid #333;">  <a href="wheel.php"> Wheel Module </a> </th>
        
        
      
        <!-- Search goes here! -->
 

  
  		<!-- Search end here -->
      
      
      
      
    </table>
    
  </td>
  </tr>
</table>
<br><br><br>
<div id="bdcontainer"></div>

<div id="footer">
<table border="0" cellpadding="15px" align="center"; style="size: 12px; font-family: 'Courier New', Courier, monospace; color: #FFF; font-size: 12px;">
<tr>
	<td>
    &copy; 2022 All Rights Reserved.  </td>
</tr>
</table>
</div>

</div>


<div id="popup-box1" class="popup-position">
<div id="popup-wrapper">
<div id="popup-container">
    <div id="popup-head-color1">
    <p style="text-align:right !important; font-family: 'Courier New', Courier, monospace;font-size:15px;"><a href= "javascript:void(0)" onclick="toggle_visibility('popup-box1')"><font color="#FFF"> X </font></a></p>
    <p style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;font-size:16px;"> Add Wheel Part Form </p>
    </div>
    <br>
    <form action="add_wheel.php" method="POST">
    <table border="0" align="center">
    
   <tr>
    <td align="right">Part ID:</td>
    <td><input type="text" id="txtbox" name="id" placeholder="ID" required><br></td>    </tr>
    
    <tr>
    <td align="right">Aircraft ID:</td>
    <td><input type="text" id="txtbox" name="AIRCRAFT_ID" placeholder="Aircraft ID" required><br></td>
    </tr>
    
    <tr>
    <td align="right">Number On Hand:</td>
    <td><input type="text" id="txtbox" min="1" name="NUMBER_ON_HAND" maxlength="11" placeholder="number on hand" required><br></td>
    </tr>
    
    <tr>
    <td align="right">Price of Part:</td>
    <td><input type="text" id="txtbox" name="PRICE_OF_PART" maxlength="50" placeholder="Price" required><br></td>
    </tr>
    
    
    
    <tr>
    <td align="right">Part Description:</td>
    
        <td><input type="text" id="txtbox" name="DESCRIPTION" maxlength="50" placeholder="Part Description" required><br></td>

    </tr>
    
       <br>
    <tr  align="left">
    <td>&nbsp;  </td>
    <td><input type="SUBMIT" id="btnnav" value="Submit"></a></td>
    </tr>
    
    </table>
    </form>

</div>
</div>
</div>

</body>
</html>
