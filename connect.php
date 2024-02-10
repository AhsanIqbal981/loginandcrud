<?php

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname = "project test";

$con = mysqli_connect($servername ,$username , $password , $dbname);

if(!$con){

    echo "connection can not be made";
}
?>