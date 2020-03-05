<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="images/csu.png" type="image" />
<title>Error Message</title>
<style type="text/css">
body {
	background:url(images/body.png) #666666 repeat scroll;
}
</style>
</head>
<!--we make our own xammp alike error message-->
<h1>Incorrect Login Preferences!</h1>
<p> The username or password or both, that you have entered is incorrect. Please check it and login again. </p>
<h2>Validation Error</h2>
<?php
echo '<p>'.'&nbsp;&nbsp;&nbsp;'.'<i>'.'<a href="index.php">'.'login now'.'</a>'.'</i>'.'<br/>';
echo '&nbsp;&nbsp;&nbsp;'.'<i style="font-size:13px">'.date("m/d/y  h:i:s a").'</i>'.'<br/>';  //date function was used... 
echo '&nbsp;&nbsp;&nbsp;'.'<i style="font-size:13px">'.'Powered By: Espionage'.'</i>'.'</p>'; ?>
<!--end of message-->
<body>
</body>
</html>
