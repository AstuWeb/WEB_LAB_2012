<?php
	include('include/genuine_checker.php'); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
td {
	border-right: 1px solid #C1DAD7;
	border-left: 1px solid #C1DAD7;
	border-bottom: 1px solid #C1DAD7;
	background: #fff;
	padding: 3px 3px 3px 3px;
	color: #4f6b72;
}
th {
	font: bold 11px Arial, Helvetica, sans-serif; 
	color: #4f6b72;
	border-right: 1px solid #C1DAD7;
	border-bottom: 1px solid #C1DAD7;
	border-top: 1px solid #C1DAD7;
	border-left: 1px solid #C1DAD7;
	letter-spacing: 2px;
	text-transform: uppercase;
	text-align: center;
	padding: 6px 6px 6px 12px;
	background:url(images/Untitled-1.png) no-repeat;
}	
body {
	color:##4f6b72;
	font:bold 12px "Century Gothic", "Times New Roman"; 
	background:url(images/body.png) #666666 repeat scroll;
}	
.jl {
    box-shadow: 0 0 10px #000000;
}
</style>
<link rel="shortcut icon" href="images/csu.png" type="image" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sample System</title>
</head>
<body>
<div style="margin-right:50px;">
	<?php
	include('include/db_con.php'); 
	$oper_id=$_SESSION['ID']; //convertion of $_SESSION['ID'] to $oper_id
	$result = mysql_query("SELECT * FROM tbllogin where userid='$oper_id'"); //this part tackles on querying, needed is your mysql ideas
					while($row = mysql_fetch_array($result)) // start of fetching results
						{
						echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Welcome! ". $row['owner']; //echo means to shoutout result
						echo " | ";
						echo "<a href='out.php'>Log-Out</a>";
						}
	?>
    	<table align="center" width="100%"  style="margin-left:20px; margin-top:20px;" class="jl">
        	<tr style="border-bottom:#333333;">
            	<th>
                	USERNAME
                </th>
                <th>
                	PASSWORD
                </th>
                <th>
                	OWNER
                </th>	
            </tr>
	<?php
		$sql="SELECT * FROM tbllogin ORDER BY userid ASC";
		$request=mysql_query($sql);
		while ($jl=mysql_fetch_array($request))
			{
	?>
            <tr style="border:1px solid #333333;">
            	<td align="center"><?php echo $jl['username'];  ?></td>
                <td align="center"><?php echo $jl['password']; ?></td>
                <td align="center"><?php echo $jl['owner']; ?></td>
            </tr>    
       <?php } ?>
        </table>
        </div>
    <!--</div>-->
   </body>
</html>
