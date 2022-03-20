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
 <th scope="col"><font size="12px">AAC </font><span style="font-size: 18px">SYSTEM</span></th>	    </tr>
	  </table></td>
    <td style="font-size:14px;">
      <table width="93%" border="0" cellspacing="0" cellpadding="0">
        <tr>
        	
          	<th scope="col"><?php
			$Today = date('y:m:d',time());
			$new = date('l, F d, Y', strtotime($Today));
			echo $new;
			?></th>
          	<th scope="col" width="20px"><a href="logout.php">
            <input type="button" id="btnadd" value="Logout" align="middle" />
          	</a></th>
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
        <td width="741" align="right"><form action="result.php" method="get" ecntype="multipart/data-form">
           <input type="text" name="query" style="border:1px solid #CCC; color: #333; width:210px; height:30px;" placeholder="Search product..." /><input type="submit" id="btnsearch" value="Search" name="search" />
        </form></td>
        
        <td width="131" height="37">
        <a href="javascript:void(0)" onclick="toggle_visibility('popup-box1')"><input type="button" id="btnadd" value="+ Add Aircraft" /></a></td>
      </tr>
    
    </table></th>
  </tr>
  
  <div id="footer">
<table border="0" cellpadding="15px" align="center"; style="size: 12px; font-family: 'Courier New', Courier, monospace; color: #FFF; font-size: 12px;">
<tr>
	<td>
    &copy; 2022 All Rights Reserved. </td>
</tr>
</table>
</div>
  
  <div id="popup-box2" class="popup-position1">
<div id="popup-wrapper1">
<div id="popup-container1">
    <div id="popup-head-color1">
    <br>
    <p style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;font-size:16px;"> Edit Aircraft </p>
    </div>

<?php

include 'config.php';

$a_id = $_GET['a_id'];
$view = "SELECT * from aircraft where md5(a_id) = '$a_id'";
$result = $db_link->query($view);
$row = $result->fetch_assoc();

if(isset($_POST['update'])){

	$a_id = $_GET['a_id'];

	$a_id = $_POST['a_id'];
	$AIRCRAFT_NAME = $_POST['AIRCRAFT_NAME'];
	$CHIEF_DESIGNER = $_POST['CHIEF_DESIGNER'];
	$DESCRIPTION = $_POST['DESCRIPTION'];

	$PRIMARY_CUSTOMER = $_POST['PRIMARY_CUSTOMER'];
	$LIST_OF_PARTTS = $_POST['LIST_OF_PARTTS'];

	$insert = "UPDATE aircraft set a_id = '$a_id', AIRCRAFT_NAME = '$AIRCRAFT_NAME', CHIEF_DESIGNER = '$CHIEF_DESIGNER', DESCRIPTION = '$DESCRIPTION',, PRIMARY_CUSTOMER = '$PRIMARY_CUSTOMER', LIST_OF_PARTTS = '$LIST_OF_PARTTS' where md5(a_id) = '$a_id'";
	
	if($db_link->query($insert)== TRUE){

			echo "Sucessfully update data";
			header('location:aircraft.php');			
	}else{

		echo "Ooppss cannot add aircraft data" . $conn->error;
		header('location:aircraft.php');
	}
	
	$db_link->close();
}

?>
   
    <br>
    <form action="" method="POST">
    <table border="0" align="center">    
    <tr>
    <td align="right">Aircraft ID:</td>
    <td><input type="text" id="txtbox" name="a_id" placeholder="id" value="<?php echo $row['a_id'];?>" required><br></td>
    </tr>
    
    <tr>
    <td align="right">Aircraft Name:</td>
    <td><input type="text" id="txtbox" name="AIRCRAFT_NAME" placeholder="AircraftName" value="<?php echo $row['AIRCRAFT_NAME'];?>" required><br></td>
    </tr>
    
    <tr>
    <td align="right">Chief Designer:</td>
    <td><input type="text" id="txtbox" name="CHIEF_DESIGNER" placeholder="chief designer" value="<?php echo $row['CHIEF_DESIGNER'];?>" required><br></td>
    </tr>
    
    <tr>
    <td align="right">Description of use:</td>
    <td><input type="text" id="txtbox" name="DESCRIPTION" placeholder="Description" value="<?php echo $row['DESCRIPTION'];?>" required><br></td>
    </tr>
    
    
    
    <tr>
    <td align="right">Primary Customer:</td>
<td><input type="text" id="txtbox" name="PRIMARY_CUSTOMER" placeholder="Primary Customer" value="<?php echo $row['PRIMARY_CUSTOMER'];?>" required><br></td>
    </tr>
        <tr>
    <td align="right">List of Parts:</td>
<td><input type="text" id="txtbox" name="LIST_OF_PARTTS" placeholder="List of Parts" value="<?php echo $row['LIST_OF_PARTTS'];?>" required><br></td>
    </tr>

    
    <br>
    <tr  align="center">
    <td>&nbsp;  </td>
    <td>
    <br>
    <input type="SUBMIT" name="update" id="btnnav" value="Update"></form>
    <a href="aircraft.php"><input type="button" style="border:1px solid #900; background:#900; height:40px; width:105px; border-radius:3px; color:#FFF;" value="Cacel"></a>
    
    </td>
    </tr>
    
    </table>

</div>
</div>
</div>
  
  <br>
  
  <tr>
    <td>
    <table border="0" cellpadding="0" cellspacing="0" align="center" width="80%" style="border:1px solid #033; color:#033;">
    
     <tr>
     <th colspan="7" align="center" height="55px" style="border-bottom:1px solid #033; background: purple; color:#FFF;"> Products 	</th>
    </tr>
    
      <tr height="30px">
        <th style="border-bottom:1px solid #333;"> Category </th>
        <th style="border-bottom:1px solid #333;"> Name </th>
        <th style="border-bottom:1px solid #333;"> Quantity Left </th>
        <th style="border-bottom:1px solid #333;"> Purchase </th>
    
        <th style="border-bottom:1px solid #333;"> Supplier </th>
        <th style="border-bottom:1px solid #333;"> Action </th>
      </tr>
      
       <?php
require('config.php');
$query="SELECT * FROM aircraft";
$result=mysqli_query($db_link, $query);
while ($row=mysqli_fetch_array($result)){?>
      
      <tr align="center" height="25px;">
      	<td style="border-bottom:1px solid #333;"> <?php echo $row['a_id']; ?> </td>
        <td style="border-bottom:1px solid #333;"> <?php echo $row['AIRCRAFT_NAME']; ?> </td>
        <td style="border-bottom:1px solid #333;"> <?php echo $row['CHIEF_DESIGNER']; ?> pcs. </td>
        <td style="border-bottom:1px solid #333;">Php <?php echo $row['DESCRIPTION']; ?> </td>
        
        <td style="border-bottom:1px solid #333;"> <?php echo $row['PRIMARY_CUSTOMER']; ?> </td>
        <td style="border-bottom:1px solid #333;"> <?php echo $row['LIST_OF_PARTTS']; ?> </td>
        <td style="border-bottom:1px solid #333;">
        
        
        <a href="edit_aircraft.php?a_id=<?php echo md5($row['a_id']);?>"><input type="button" value="Edit" style="width:50px; height:20; color:#FFF; background:#069; border:1px solid #069; border-radius:3px;"></a>/<a href="delete.php"><input type="button" value="Delete" style="width:15; height:20; color:#FFF; background: #900; border:1px solid #900; border-radius:3px;"></a>
        
        </td>
        </td>
      </tr>
   <?php
}?>
      
    </table>
    
  </td>
  </tr>
</table>

</div>

</body>
</html>
