<?php
include 'connect.php';

if (isset($_GET['deleteid'])) {
    $id=$_GET['deleteid'];
    $sql = "delete from `enter` where `enter`.`id`= $id";
    $result= mysqli_query($con,$sql);
    if($result){
        header("location:display.php");
    }
}
?>