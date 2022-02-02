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
			$email=$_SESSION["email"];
			$q1 = "SELECT * from customer where Email_User= '$email' " or die("Error:" . mysqli_error($con));
			$result1 = mysqli_query($con, $q1);
			$r    = mysqli_fetch_array($result1);
			$idd=$r["ID_User"];
			$sql="SELECT * from addressuser where ID_User='$idd'";
			$result = mysqli_query($con,$sql);
		?>
        <div class="container">
            <br>
            <div class="row">
                <div class="col-10">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">ที่อยู่จัดส่ง</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr align='center'>
                                            <th>ID-Address</th>
                                            <th>ที่อยู่</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($row = mysqli_fetch_array($result)) {
                                            echo "<tr align='center'>";
                                            echo "<td >" . $row["ID_Address"] . "</td>";
                                            echo "<td>" . $row["Address"] . "</td>";
                                            echo "<td><a href='deladdress.php?ID=$row[0]' onclick=\"return confirm('คุณแน่ใจแล้วหรอที่จะลบ !!!')\" class='btn btn-outline-danger'>ลบ</a></td>";
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
			<a type="submit" href="confirm.php" name="button" id="button" class='btn btn-success'/>ยืนยัน</a>
			<a type="submit" href="address_add.php" class='btn btn-primary'/>เพิ่มที่อยู่</a>
        </div>				
	
</body>
</html>