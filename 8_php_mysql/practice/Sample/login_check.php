<?php
	session_start();
	include('include/db_con.php');
	
	function wash($var) //function used for checking data
		{
			if (get_magic_quotes_gpc())
				{
					$var=stripslashes($var);
				}
			return mysql_real_escape_string ($var);
		}
		
		$user=wash($_POST['username']);
		$pass=wash($_POST['password']);
		$sql="Select * from tbllogin where username='$user' and password='$pass'"; //sql statement
		$result=mysql_query($sql); //query
		
		if ($result) //fetching  results
			{
				if (mysql_num_rows($result) > 0)
					{
						session_regenerate_id();
						$sample=mysql_fetch_assoc($result);
						$_SESSION['ID']=$sample['userid'];
						$_SESSION['NAME']=$sample['owner'];
						session_write_close();
						header('location: home.php'); //if true you will be redirected to home.php
						exit();
					}
				else
					{
//						echo '<b>'.'Incorrect Login Preferences!'.'</b>';
						header('location: error.php'); //if not you will be redirected to index.php
						exit();
					}
				}
		else
			{
				echo 'Error/s Detected: '.mysql_error(); //used for error purposes
			}
?>