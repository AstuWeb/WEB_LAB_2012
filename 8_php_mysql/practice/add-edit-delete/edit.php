<?php
include('config.php');
$id =$_GET['id'];
$connect = mysqli_query($db,"SELECT * FROM entry WHERE id  = $id");
$con= mysqli_fetch_array($connect); 

$fname=($con['name']);
$lname=($con['lastname']);
$picture=($con['picture']);


if(isset($_POST['submit']))
{
$fname_save=($_POST['name']);
$lname_save=($_POST['lastname']);
move_uploaded_file($_FILES['photo']['tmp_name'],"photos/".$_FILES  ['photo']['name']);
$picture_save=("photos/".$_FILES['photo']['name']);

mysqli_query($db,"UPDATE `entry` SET name='$fname_save', lastname='$lname_save', picture='$picture_save'WHERE id=$id");
header('location:index.php');
}
?>
<form method="post" enctype="multipart/form-data">
<input type="text" name="name" value="<?php echo $con['name'];?>">
<input type="text" name="lastname" value="<?php echo $con['lastname']?>"> 
<input type="file" name="photo">
<button type="submit" name="submit">submit</button>
</form>






