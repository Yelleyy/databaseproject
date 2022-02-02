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
include("server.php");
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="assets2/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="assets2/icon/icofont/css/icofont.css">
    <link rel="stylesheet" type="text/css" href="assets2/icon/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" type="text/css" href="assets2/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets2/plugins/chartist/dist/chartist.css" type="text/css" media="all">
    <link href="assets2/css/svg-weather.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets2/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets2/css/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style1.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>GrabFood </title>
</head>

<body>
    <br>
    <?php
    $email = $_SESSION["email"];
    $sql = "SELECT * FROM order_head where status='work'";
    $result = mysqli_query($con, $sql);
    $sql1 = "SELECT * FROM `rider`join order_head on rider.ID_Order=order_head.ID_Order;";
    $result1 = mysqli_query($con, $sql1);
    ?>
    <div class="container">
        <br>
        <h1><strong><?php echo "สวัสดีคุณ " . $_SESSION['email']; ?>&nbsp;&nbsp;<a href="index.php?logout='1'" style="color: red;font-size: 30px"><strong>ออกจากระบบ</strong></a></strong></h1>    
        <br>
        <hr>
        
        <div class="row">
            <div class="col-10">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">ออเดอร์ที่สามาถรับได้</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr align='center'>
                                        <th>ID-Order</th>
                                        <th>วันที่</th>
                                        <th>จำนวนทั้งหมด</th>
                                        <th>ราคารวม</th>
                                        <th>ดูรายการออเดอร์</th>
                                        <th>สถานะ</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo "<tr align='center'>";
                                        echo "<td >" . $row["ID_Order"] . "</td>";
                                        echo "<td>" . $row["O_date"] . "</td>";
                                        echo "<td>" . $row["TotalAmount"] . " ชิ้น</td>";
                                        echo "<td>" .  number_format($row["TotalPrice"], 2) . " บาท</td>";
                                        echo "<td  align='center' >" . "<a href='riderdetail.php?ID=$row[0]' >"
                                            . '<i class="bi bi-clipboard-data " style="color : #529714;font-size: 25px;"></i>' .  "</td> ";
                                        echo "<td align='center'>";
                                        if ($row["status"] == "work") {
                                            echo "<a href='#!' class='btn btn-primary mt-1 mb-1' type='button' >
                                                 <span class='spinner-border spinner-border-sm' role='status' ></span>
                                                 กำลังดำเนินการ
                                               </a>";
                                        } else if ($row["status"] == "cancel") {
                                            echo "<a href='#!' class='btn btn-danger  mt-1 mb-1'>ยกเลิกแล้ว</a>";
                                        } else {
                                            echo   "<a  class='btn btn-success  mt-1 mb-1'>เสร็จสิ้นแล้ว</a>";
                                        }
                                        echo "</td>";
                                        echo "<td align='center'>";
                                        if ($row["status"] == "work") {
                                            echo "<a href='rideradd.php?ID_Order=$row[0]' class='btn btn-success mt-1 mb-1'  >รับออเดอร์</a>";
                                        }
                                        echo "</td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                            
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-10">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">ออเดอร์ที่รับมาแล้ว</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr align='center'>
                                        <th>ID-Order</th>
                                        <th>วันที่</th>
                                        <th>จำนวนทั้งหมด</th>
                                        <th>ราคารวม</th>
                                        <th>ดูรายการออเดอร์</th>
                                        <th>สถานะ</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row1 = mysqli_fetch_array($result1)) {
                                        echo "<tr align='center'>";
                                        echo "<td >" . $row1["ID_Order"] . "</td>";
                                        echo "<td>" . $row1["O_date"] . "</td>";
                                        echo "<td>" . $row1["TotalAmount"] . " ชิ้น</td>";
                                        echo "<td>" .  number_format($row1["TotalPrice"], 2) . " บาท</td>";
                                        echo "<td  align='center' >" . "<a href='riderdetail.php?ID=$row1[4]' >"
                                            . '<i class="bi bi-clipboard-data " style="color : #529714;font-size: 25px;"></i>' .  "</td> ";
                                        echo "<td align='center'>";
                                        if ($row1["status"] == "work") {
                                            echo "<a href='#!' class='btn btn-primary mt-1 mb-1' type='button' >
                                                 <span class='spinner-border spinner-border-sm' role='status' ></span>
                                                 เตรียมจัดส่ง
                                               </a>";
                                        } else if ($row1["status"] == "cancel") {
                                            echo "<a href='#!' class='btn btn-danger  mt-1 mb-1'>ยกเลิกแล้ว</a>";
                                        } else {
                                            echo   "<a  class='btn btn-success  mt-1 mb-1'>เสร็จสิ้นแล้ว</a>";
                                        }
                                        echo "</td>";
                                        echo "<td align='center'>";
                                        if ($row1["status"] == "work") {
                                            echo "<a href='riderdel.php?ID_Order=$row1[4]' class='btn btn-danger mt-1 mb-1'  >ยกเลิกการจัดส่ง</a>";
                                        }
                                        echo "</td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>