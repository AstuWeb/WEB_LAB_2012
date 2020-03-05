<?php
	unset($_SESSION['ID']); //unset is used to delete some data for your various task
	unset($_SESSION['NAME']);
	include('include/cookie.php'); //include is used to include php files you want to put
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
/*example of internal php*/
body {
	background:url(images/body.png) #666666 repeat scroll;
}
.jl {
    box-shadow: 0 0 10px #000000;
}
/*end of css*/
</style>
<link rel="shortcut icon" href="images/csu.png" type="image" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sample System</title>
</head>
<body>
<?php
	if(isset($_COOKIE['jl'])) //checking if $_COOKIE['jl'] is set
		$visit = $_COOKIE['jl'];  // if yes then the echo below will be posted
		echo '<b>Cookie Information: </b><label style="margin-top:50px; margin-right:absolute;">'."Your last visit was - ". $visit.'</label>'; 
?>
<!--html form-->
	<form method="post" action="login_check.php">
    	<table align="center" width="100px" cellpadding="5px" style=" border:1px solid #666666;margin-top:150px;" class="jl">
        	<tr>
            	<td>
                	<label>Username: </label> <input name="username" type="text" /><br />
                    <label>Password: </label> <input name="password" type="password" /><br />
                    	                      <input style="margin-left:100px;" name="submit" value="Login" type="submit" />
                </td>
            </tr>
        </table>
    </form>
<!--end of html form-->
</body>
</html>
