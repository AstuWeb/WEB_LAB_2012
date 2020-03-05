

<?php $class=intval($_GET['class']);
$link = mysql_connect('localhost', 'root', ''); //changet the configuration in required
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('capstone');
$query="SELECT semister_id,Semister FROM semister ";
$result=mysql_query($query);

?>
<select name="semister" onchange="getCity(<?=$class?>,this.value)">
<option>Select Year</option>

<option value="1">First</option>
<option value="2">Second</option>
<option value="3">Third</option>
<option value="4">Forth</option>
<option value="5">Fifth</option>
<option value="6">Sixth</option>
<option value="7">Sevnth</option>
</select>
