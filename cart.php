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
$i=0;
$ID_Product = $_GET['ID_Product'];

$ID_Shop = $_GET['ID_Shop'];
// echo '<h1>'.$_SESSION["shop"].'</h1>';

$op = $_GET['op'];
if ($op == 'add' && !empty($ID_Product)) {
	if (isset($_SESSION['cart'][$ID_Product])) {
		$_SESSION['cart'][$ID_Product]++;
	} else {
		$_SESSION['cart'][$ID_Product] = 1;
	}
}

if ($op == 'remove' && !empty($ID_Product)) {

	unset($_SESSION['cart'][$ID_Product]);
}

if ($op == 'update') {
	$amount_array = $_POST['amount'];
	foreach ($amount_array as $ID_Product => $amount) {
		$_SESSION['cart'][$ID_Product] = $amount;
	}
}
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
	<title>GrabFood Cart</title>
</head>

<body>
	<form id="frmcart" name="frmcart" method="post" action="?op=update">
		<br><br><br>
		<div>
			<div></div>
		</div>
		<div class="container">
			<div class="col col-mb">
				<table class="table table-hover">
					<tr>
						<h2 class="text fw-bold " style="background-color: ffb ;" align="center">ตะกร้าสินค้า</h2>
					</tr>
					<tr class="text fw-bold fs-5 ">
						<td>สินค้า</td>
						<td align='center'>รูป</td>
						<td>ราคา</td>
						<td>จำนวน</td>
						<td>รวม</td>
						<td></td>
					</tr>
					<?php
					$total = 0;
					if (!empty($_SESSION['cart'])) {
						include("server.php");
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
						foreach ($_SESSION['cart'] as $ID_Food => $qty) {
							$sql = "SELECT * FROM `foodstock` where ID_Food='$ID_Food'";
							$query = mysqli_query($con, $sql);
							$row = mysqli_fetch_array($query);
							$sum = $row['price'] * $qty;
							$total += $sum;

							echo "<tr >";
							echo "<td >" . $row["Food_Name"] . "</td>";
							echo "<td align='center'><img src='img/shop/" . $row["PicFood"] . "' width='50%' height='150px'></td>";
							echo "<td >" . number_format($row["price"], 2) . " บาท</td>";
							echo "<td >";
							echo "<input type='text' name='amount[$ID_Food]' value='".number_format($qty)."' size='2'/> ชิ้น</td>";
							echo "<td >" . number_format($sum, 2) . " บาท</td>";
							echo "<td ><a href='cart.php?ID_Product=$ID_Food&op=remove' class='btn btn-danger btn-xs'>ลบ</a></td>";
							echo "</tr>";
						}
						echo "<tr class='text fw-bold fs-5 '>";
						echo "<td ><b>ราคารวม</b></td>";
						echo "<td ></td>";
						echo "<td ></td>";
						echo "<td ></td>";
						echo "<td >" . "<b>" . number_format($total, 2) . "</b>" . " บาท</td>";
						echo "<td ></td>";
						echo "</tr>";
						echo "<tr>";
						echo "<td ><a href=home.php class='btn btn-warning btn-xs'>กลับหน้ารายการสินค้า</a></td>";
						echo "<td ></td>";
						echo "<td colspan=4 align=right><input type='submit' value='คำนวณสินค้าใหม่' class='btn btn-primary btn-xs'/> <a href=confirm.php?ID_Shop=$ID_Shop class='btn btn-success btn-xs'>สั่งซื้อ</a></td>";
						echo "</tr>";
					}
					?>
				</table>
			</div>
	</form>
</body>

</html>