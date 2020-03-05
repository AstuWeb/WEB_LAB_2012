<?php
include('config.php');
$id = ($_REQUEST['id']);
mysqli_query($db,"DELETE FROM `entry` WHERE id = $id");
header('location:index.php');
?>
