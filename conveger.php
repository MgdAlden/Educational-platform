<?php

$servername="localhost";
$username="root";
$password="";
$dbname="courses_mypro_tow";



$con = mysqli_connect( $servername , $username , $password, $dbname);

if (!$con) {
    echo ' Please Check Your Connection ';
}

?>