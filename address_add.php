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
	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col col-8">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">เพิ่มที่อยู่</h4>
					</div>
					<div class="card-body">
						<div class="basic-form">
							<form action='address_adddb.php' method="POST" enctype="multipart/form-data">
								<div class="form-row">
									<div class="form-group col-md-6">
										<label>รายละเอียดที่อยู่</label>
										<textarea type="textarea" rows="10" cols="30" name="address" class="form-control" ></textarea>
										<br><button type="submit" class="btn btn-primary">ยืนยัน</button>
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