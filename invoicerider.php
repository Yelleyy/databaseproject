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
include("tool.php");
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="assets2/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="assets2/plugins/bootstrap/css/bootstrap.min.css">

    <!-- <link href="assets2/css/svg-weather.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="assets2/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets2/css/responsive.css">
    <link rel="stylesheet" href="style1.css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>GrabFood </title>
</head>

<body>
    <br>
    <?php
    $email = $_SESSION["email"];
    $id = $_REQUEST["ID_Order"];
    $query = "SELECT * FROM rider WHERE ID_Order = '$id'" or die("Error:" . mysqli_error($con));
    $result = mysqli_query($con, $query);
    ?>
    <div class="container">
        <br>
        <?php if (mysqli_num_rows($result) == 0) {
            echo " <h1><strong>ยังไม่มีคนขับรับออเดอร์นี้</strong></h1>";
        }
        else{
        ?>
        <div class="row">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header">

                        <h4 class="card-title">รายละเอียดคนขับ</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">

                                <thead>
                                    <tr align='center'>
                                        <th>ID-Rider</th>
                                        <th>เบอร์โทรคนขับ</th>
                                        <th>ชื่อคนขับ</th>
                                    </tr>
                                </thead>
                                <?php

                                while ($row = mysqli_fetch_array($result)) {

                                    echo "<tr align='center'>";

                                    echo "<td >" . $row["ID_Rider"] . "</td>";
                                    echo "<td>" . $row["Tel_Rider"] . "</td>";
                                    echo "<td>" . $row["Name_Rider"] . "</td>";
                                    echo "</tr>";
                                }

                                ?>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <?php } ?>
        <a type="submit" href="invoice.php" name="button" id="button" class='btn btn-success' />กลับหน้าแรก</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>

</html>