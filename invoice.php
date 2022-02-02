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
			$email=$_SESSION["email"];
			$q1 = "SELECT * from customer where Email_User= '$email' " or die("Error:" . mysqli_error($con));
			$result1 = mysqli_query($con, $q1);
			$r    = mysqli_fetch_array($result1);
			$idd=$r["ID_User"];
			$sql="select * from order_head where ID_User='$idd'";
			$result = mysqli_query($con,$sql);
		?>
        <div class="container">
            <br>
            <div class="row">
                <div class="col-md-11">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">รายการคำสั่งซื้อ</h4>
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
                                            <th>รายละเอียดออเดอร์</th>
                                            <th>สถานะ</th>
                                        </tr>
                                    </thead>
                                        <?php
                                        while ($row = mysqli_fetch_array($result)) {
                                            echo "<tr align='center'>";
                                            echo "<td >" . $row["ID_Order"] . "</td>";
                                            echo "<td>" . $row["O_date"] . "</td>";
                                            echo "<td>" . $row["TotalAmount"] . " ชิ้น</td>";
                                            echo "<td>" .  number_format($row["TotalPrice"],2). " บาท</td>";
                                            echo "<td  align='center' >" ."<a href='invoicedetail.php?ID=$row[0]' >"
                                            .'<i class="bi bi-clipboard-data " style="color : #529714;font-size: 25px;"></i>'.  "</td> ";
                                            echo "<td align='center'>";
                                            if($row["status"]=="work"){
                                              echo "<a href='invoicerider.php?ID_Order=$row[0]'  class='btn btn-primary mt-1 mb-1' type='button' >
                                              <span class='spinner-border spinner-border-sm' role='status' ></span>
                                              กำลังดำเนินการ
                                            </a>";
                                               }
                                               else if($row["status"]=="cancel"){
                                                echo "<a href='#!'  class='btn btn-danger  mt-1 mb-1'>ยกเลิกแล้ว</a>";
                                                 }
                                               else{
                                                 echo   "<a href='#!'  class='btn btn-success  mt-1 mb-1'>เสร็จสิ้นแล้ว</a>";
                                               }
                                            echo "</td>";
                                            echo "<td align='center'> &nbsp;";
                                            if($row["status"]=="work"){
                                              echo "<a href='changecus.php?ID_Order=$row[0]' onclick=\"return confirm('ยืนยันการยกเลิก... !!!')\" 
                                              class='btn btn-danger mt-1 mb-1' type='button' >ยกเลิกออเดอร์</a>";
                                               }
                                            echo "</td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                </table>
                            </div>
                        </div>
						
                    </div>
                </div>
            </div>
			<a type="submit" href="index.php" name="button" id="button" class='btn btn-success'/>กลับหน้าแรก</a>
        </div>				
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>
</html>