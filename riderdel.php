<?php
session_start();
include("server.php");

$id = $_REQUEST["ID_Order"];

$sql = "DELETE FROM rider WHERE ID_Order='$id' ";
$result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error($con));

if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('ยกเลิกการจัดส่ง');";
    echo "window.location = 'rider.php'; ";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";
    echo "alert('มีบางอย่างผิดพลาดลองอีกครั้ง');";
    echo "</script>";
}

mysqli_close($con);
?>