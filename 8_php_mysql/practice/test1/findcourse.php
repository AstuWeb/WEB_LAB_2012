


<?php $class=intval($_GET['class']);
$yearr=intval($_GET['year']);

$link = mysql_connect('localhost', 'root', ''); 
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if($yearr=='1'){
$year='First';
}   if($yearr=='2'){
$year='Second';
}     if($yearr=='3'){
$year='Third';
}  if($yearr=='4'){
$year='Forth';
}  if($yearr=='5'){
$year='Fifth';
}  if($yearr=='6'){
$year='Sixth';
}  if($yearr=='7'){
$year='Sevnth';
}  
mysql_select_db('capstone');
$query="SELECT * FROM subject WHERE class_id='$class' AND Year='$year'";
$result=mysql_query($query);
echo $result['subject_id'];
?>
<select name="course" required>
<option>Select Course</option>
<?php while($row=mysql_fetch_array($result)) { ?>
<option value="<?php echo $result['subject_id']; ?>"><?php echo $row['subject_title']; ?></option>
<?php } ?>
</select>
