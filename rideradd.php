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
    <link rel="stylesheet" type="text/css" href="assets2/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets2/css/main.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="./login_files/pace.min.css">
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
    $id = $_REQUEST["ID_Order"];
    $sql = "SELECT * FROM order_head where ID_Order=$id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $sql1 = "SELECT * FROM customer where Email_User='$email'";
    $result1 = mysqli_query($con, $sql1);
    $row1 = mysqli_fetch_array($result1);
    ?>
    <div class="container">
        <br>
        <div class="row">
            <div class="col-10">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">ข้อมูลไรเดอร์</h4>
                    </div>
                    <div class="card-body">
                        <form action="riderupdate.php?ID_Order=<?php echo $id?>" method="post" enctype="multipart/form-data">

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>ชื่อไรเดอร์</label>
                                    <input type="text" name="name" class="form-control" value=<?php echo $row1['Name_User'] ?>>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>อีเมล</label>
                                    <input type="text" name="email" class="form-control" value=<?php echo $row1['Email_User'] ?>>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>เบอร์โทร</label>
                                    <input type="tel" name="tel" required class="form-control" value=<?php echo $row1['Tel_User'] ?>>
                                </div>
                                <div class="form-group col-md-6">
                                    <br>
                                    <button type="submit" name="upload" class="btn btn-primary">ยืนยัน</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

</body>

</html>