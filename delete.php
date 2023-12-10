<?php
include "conveger.php";
$id=$_GET['id'];

$query= "DELETE FROM `info_course` WHERE id= $id ";
$result= mysqli_query($con,$query);

if($result){

header("Location: admin.php?msg=Record delete successfully");

}



?>