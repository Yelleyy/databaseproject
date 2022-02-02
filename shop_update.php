<meta charset="UTF-8" />
<?php 
    session_start();
    include('server.php');

    $Food_Name =$_POST['Food_Name'] ;
    $Amount =  $_POST['Amount'];
    $price =  $_POST['price'];
    $ID_CATF =  $_POST['id'];
    
    $email=$_SESSION['email'];
    $query = "SELECT ID_shop FROM shop WHERE Email_Shop = '$email'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
    $id_shop=$row['ID_shop'];

    $upload = $_FILES['img'];
    $numrand = (mt_rand());

if ($upload <> '') {
	$path = "img/shop/";
	$newname = $numrand.$_FILES['img']['name'];
	$path_copy = $path.$newname;
	move_uploaded_file($_FILES['img']['tmp_name'], $path_copy);
}
    $sql = "UPDATE foodstock SET Food_Name='$Food_Name',Amount='$Amount',price='$price',ID_CATF='$ID_CATF' WHERE ID_Food=$id_shop "; 
    $result1 = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error($con));
    if ($result1) {
        echo "<script type='text/javascript'>";
        echo  "alert('แก้ไขเรียบร้อยเรียบร้อย');";
        echo "window.location='shop_products.php';";
        echo "</script>";
    } else {
        echo "<script type='text/javascript'>";
        echo "window.location='shop_products.php';";
        echo "</script>";
    }
    mysqli_close($con);
?>