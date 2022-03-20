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
        	<th scope="col">Welcome: </th>
          	<th scope="col">&nbsp;</th>
          	
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
            <?php
			$date_time=date("h:i:sa");
			
			echo $date_time;
			?>
            </td>
        </tr>
      </table>
      </td>

</tr>
</table>
</div>
<br>

<table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
      
      <tr>
        <td width="741" align="right">
        
        <form action="searchwheel.php" method="get" ecntype="multipart/data-form">
        <input type="text" name="query" style="border:1px solid #CCC; color: #333; width:210px; height:30px;" placeholder="Search product..." /><input type="submit" id="btnsearch" value="Search" name="search" />
        </form>
        
        </td>
        
        <td width="131" height="37" align="right">
        <a href="javascript:void(0)" onclick="toggle_visibility('popup-box1')"><input type="button" id="btnadd" value="+ Add Wheel Part" /></a></td>
      </tr>
    
    </table></th>
  </tr>
  
  <br>
  
  <tr>
    <td>
    <table border="0" cellpadding="0" cellspacing="0" align="center" width="80%" style="border:1px solid #033; color:#033;">
    
     <tr>
     <th colspan="7" align="center" height="55px" style="border-bottom:1px solid #033; background: purple; color:#FFF;"> Wheel Parts</th>
    </tr>
    
      <tr height="30px">
        <th style="border-bottom:1px solid #333;">Part ID </th>
         <th style="border-bottom:1px solid #333;">Aircraft ID </th>
        <th style="border-bottom:1px solid #333;"> Number On Hand </th>
        <th style="border-bottom:1px solid #333;"> Price of Part </th>
        <th style="border-bottom:1px solid #333;"> Part Description</th>
        
        
        <th style="border-bottom:1px solid #333;"> Action </th>
      </tr>
      
					<?php
					include 'config.php';
					
					if(isset($_GET['search'])){
						$query = $_GET['query'];

						$sql = "select * from wheel where id like '%$query%' or NUMBER_ON_HAND like '%$query%'";

						$result = $db_link->query($sql);
						if($result->num_rows > 0){
							while($row1 = $result->fetch_array()){
		
						?>
						<tr align="center" style="height:25px">
      	<td style="border-bottom:1px solid #333;"> <?php echo $row1['id']; ?> </td>
        <td style="border-bottom:1px solid #333;"> <?php echo $row1['a_id']; ?> </td>
        <td style="border-bottom:1px solid #333;"> <?php echo $row1['NUMBER_ON_HAND']; ?> pcs. </td>
        <td style="border-bottom:1px solid #333;">$. <?php echo $row1['PRICE_OF_PART']; ?> </td>
        <td style="border-bottom:1px solid #333;"> <?php echo $row1['DESCRIPTION']; ?> </td>
       
       
        <td style="border-bottom:1px solid #333;">
        
        
        <a href="edit_wheelpart.php?id=<?php echo md5($row1['id']);?>"><input type="button" value="Edit" style="width:50px; height:20; color:#FFF; background:#069; border:1px solid #069; border-radius:3px;"></a>/<a href="delete_wheelpart.php?id=<?php echo md5($row1['id']);?>"><input type="button" value="Delete" style="width:15; height:20; color:#FFF; background: #900; border:1px solid #900; border-radius:3px;"></a>
        
        </td>
      </tr>
						<?php
					
							}

						}else{
							echo "<center>No records</center>";
						}
					}
				$db_link->close();
				?>
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
    &copy; 2022 All Rights Reserved.</td>
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