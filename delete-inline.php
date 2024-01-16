<?php

include 'connection.php';
$stu_id=$_GET['ssid'];

$sql3="delete from student where stu_id={$stu_id}";
// echo $id;

$res003=mysqli_query($con,$sql3);
?>