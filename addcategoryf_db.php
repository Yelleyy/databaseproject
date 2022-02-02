<meta charset="UTF-8" />
<?php
session_start();
include('server.php');

$name = $_POST['name'];
$img = (isset($_POST['img']) ? $_POST['img'] : '');
$link = $_POST['link'];
$upload = $_FILES['img'];
$numrand = (mt_rand());

if ($upload <> '') {
	$path = "img/";
	$newname = $numrand.$_FILES['img']['name'];
	$path_copy = $path.$newname;
	move_uploaded_file($_FILES['img']['tmp_name'], $path_copy);
}

$sql = "INSERT INTO categoryf (CATF_Name,Pic) VALUES ('$name','$newname')"
	or die("Error in query: $sql " . mysqli_error($con));

$result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error($conn));

if ($result) {

	echo "<script type='text/javascript'>";
	echo  "alert('เพิ่มสินค้าเรียบร้อย');";
	echo "window.location='addcategoryf.php';";
	echo "</script>";
} else {
	echo "<script type='text/javascript'>";
	echo "window.location='addcategoryf.php';";
	echo "</script>";
}
mysqli_close($con);

?>