<meta charset="UTF-8" />
<?php
session_start();
include('server.php');
$address = $_POST["address"];
$email = $_SESSION["email"];
$query = "SELECT * FROM customer WHERE Email_User = '$email'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
$id_user = $row['ID_User'];

$sql = "INSERT INTO addressuser (Address,ID_User) VALUES ('$address','$id_user')"
	or die("Error in query: $sql " . mysqli_error($con));

$result1 = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error($con));

if ($result1) {

	echo "<script type='text/javascript'>";
	echo  "alert('เพิ่มที่อยู่เรียบร้อย');";
	echo "window.location='confirm.php';";
	echo "</script>";
} else {
	echo "<script type='text/javascript'>";
	echo "window.location='confirm.php';";
	echo "</script>";
}
mysqli_close($con);

?>