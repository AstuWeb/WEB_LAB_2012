
<script language="javascript" type="text/javascript">

function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
    }
	
	function getclass(classId) {		
		
		var strURL="findyear.php?class="+classId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('yeardiv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
	function getCity(classId,yearId) {		
		var strURL="findcourse.php?class="+classId+"&year="+yearId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('coursediv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
				
	}
</script>
</head>
<body>
<form method="post" action="" name="form1">
<table width="60%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="150">Class</td>
    <td  width="150"><select name="class_id" onChange="getclass(this.value)">
	<option value="">Select Class</option>
	<option></option>
											<?php
											$link = mysql_connect('localhost', 'root', ''); //changet the configuration in required
												if (!$link) {
												    die('Could not connect: ' . mysql_error());
												}
												mysql_select_db('capstone');
											$query = mysql_query("select * from class order by class_name");
											while($row = mysql_fetch_array($query)){
											
											?>
											<option value="<?php echo $row['class_id']; ?>"><?php echo $row['class_name']; ?></option>
											<?php } ?>
        </select></td>
  </tr>
  <tr style="">
    <td>Year</td>
    <td ><div id="yeardiv"><select name="year" >
	<option>Select Class First</option>
        </select></div></td>
  </tr>
  <tr style="">
    <td>course</td>
    <td ><div id="coursediv"><select name="course">
	<option>Select Year First</option>
        </select></div></td>
  </tr>
  <tr>
    
  </tr>
  <tr>
    
  </tr>
</table>
</form>
</body>
</html>



