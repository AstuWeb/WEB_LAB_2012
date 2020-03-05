<!--//---------------------------------+
//  Developed by Roshan Bhattarai    |
//	http://roshanbh.com.np           |
//  Contact for custom scripts       |
//  or implementation help.          |
//  email-nepaliboy007@yahoo.com     |
//---------------------------------+-->
<?
#### Roshan's Ajax dropdown code with php
#### Copyright reserved to Roshan Bhattarai - nepaliboy007@yahoo.com
#### if you have any problem contact me at http://roshanbh.com.np
#### fell free to visit my blog http://roshanbh.com.np
?>

<?php $country=intval($_GET['country']);
$link = mysql_connect('localhost', 'root', ''); //changet the configuration in required
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('db_ajax');
$query="SELECT id,statename FROM state WHERE countryid='$country'";
$result=mysql_query($query);

?>
<select name="state" onchange="getCity(<?=$country?>,this.value)">
<option>Select State</option>
<?php while($row=mysql_fetch_array($result)) { ?>
<option value=<?=$row['id']?>><?=$row['statename']?></option>
<?php } ?>
</select>
