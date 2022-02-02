<?php
session_start();
include("server.php");

$Name_User =$_POST['name'] ;
$Email_User =  $_POST['email'];
$Tel_User =  $_POST['tel'];
$id = $_REQUEST["ID_Order"];

$sql = "INSERT INTO `rider`(`Tel_Rider`, `Name_Rider`, `Email_Rider`, `ID_Order`)
VALUES ('$Tel_User','$Name_User','$Email_User','$id')";
$result = mysqli_query($con, $sql);
if(mysqli_error($con)){
    echo "<script type='text/javascript'>";
    echo  "alert('ออเดอร์นี้มีผู้อื่นรับแล้ว');";
    echo "window.location='rider.php';";
    echo "</script>";
}
if ($result) {
    echo "<script type='text/javascript'>";
    echo  "alert('เพิ่มเรียบร้อยเรียบร้อย');";
    echo "window.location='rider.php';";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";
    echo "window.location='rider.php';";
    echo "</script>";
}
mysqli_close($con);
?>