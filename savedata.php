<?php

include 'connection.php';

echo $a = $_POST['sname'];
echo $b = $_POST['saddress'];
echo $c = $_POST['class'];
echo $d = $_POST['sphone'];


$sql3 = "insert into student(stu_name,stu_add,stu_class,stu_phone) values ('{$a}', '{$b}', '{$c}', '{$d}')";

$res3 = mysqli_query($con,$sql3);




?>