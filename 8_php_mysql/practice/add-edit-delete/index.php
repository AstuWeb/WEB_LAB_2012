<form method="post" action="add.php" enctype="multipart/form-data">
<input type="text" name="name">
<input type="text" name="lastname">
<input type="file" name="photo">
<button type="submit" name="submit">submit</button>
</form>

<?php
include('config.php');
$show = mysqli_query ($db,"SELECT * FROM `entry`");
while($entity = mysqli_fetch_array($show))
{
$id = $entity['id'];
echo $entity['id'] . "&nbsp;";
echo $entity['name'] . "&nbsp;";
echo $entity['lastname'] . "&nbsp";
echo "<img width='100' height='100' src=".$entity['picture'].">";
echo "&nbsp;";
echo "<a href='edit.php?id=$id'>edit</a>"."&nbsp;";
echo "<a href='del.php?id=$id'>delete</a>";
echo "<br>";
}
?>
