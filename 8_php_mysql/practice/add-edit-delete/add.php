<?php
include('config.php');
if(isset($_POST['submit'])){
 
 $fname=($_POST['name']);
 $lname=($_POST['lastname']);
 $file=$_FILES['photo']['tmp_name'];
 move_uploaded_file($_FILES['photo']['tmp_name'],"photos/".$_FILES  ['photo']['name']);
 $location=("photos/".$_FILES['photo']['name']);

 mysqli_query($db,"INSERT INTO `entry` (name,lastname,picture)
              VALUES ('$fname','$lname','$location')
	     ");
header('location:index.php');
}?>



