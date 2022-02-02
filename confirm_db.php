<?php
session_start();
if (!isset($_SESSION['email'])) {
    echo "<script type='text/javascript'>";
    echo "alert('กรุณาเข้าสู่ระบบ');";
    echo "window.location = 'login.php'; ";
    echo "</script>";
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header('location: login.php');
}
include("tool.php");
include("server.php");
date_default_timezone_set("Asia/Bangkok");

if (array_key_exists('submit', $_POST)) {
    include("server.php");

    $dttm = Date("Y-m-d H:i:s");
    $status = 'not paid';
    mysqli_query($con, "BEGIN");


    $sql1    = "INSERT INTO `order_head`( `O_date`, `TotalAmount`, `TotalPrice`, `status`, `ID_Address`, `ID_Shop`, `ID_User`) VALUES values ('$dttm', '$total_qty', ''$total', '$status','$idaddress', '$idshop', '$iduser')";
    $query1    = mysqli_query($con, $sql1);
    $sql2 = "SELECT max(o_id) as o_id from order_head where o_name='$name' and o_email='$email' and o_dttm='$dttm' ";
    $query2    = mysqli_query($con, $sql2);
    $row2 = mysqli_fetch_array($query2);
    $o_id = $row2['o_id'];

    foreach ($_SESSION['cart'] as $p_id => $qty) {
        $sql3    = "select * from stock where id=$p_id";
        $query3    = mysqli_query($con, $sql3);
        $row3    = mysqli_fetch_array($query3);
        $total    = $row3['price'] * $qty;

        $sql4    = "INSERT into order_detail (o_id,p_id,d_qty,d_subtotal) values ('$o_id', '$p_id', '$qty', '$total')";
        $query4    = mysqli_query($con, $sql4);
    }
    echo "<script type='text/javascript'>";
    echo "alert('สั่งซื้อเรียบร้อย!!');";
    echo "window.location = 'status.php'; ";
    echo "</script>";
}
?>
</body>


</html>