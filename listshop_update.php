<meta charset="UTF-8" />
<?php 
    session_start();
    include('server.php');

    $Name_Shop =$_POST['Name_Shop'] ;
    $Email_Shop =  $_POST['Email_Shop'];
    $Pass_Shop =  $_POST['Pass_Shop'];
    $Tel_Shop =  $_POST['Tel_Shop'];
    $ID_Shop = $_REQUEST["ID"];
    
    
    $sql = "UPDATE Shop SET Name_Shop='$Name_Shop',Email_Shop='$Email_Shop',Pass_Shop='$Pass_Shop',Tel_Shop='$Tel_Shop' WHERE ID_Shop=$ID_Shop "; 
    $result1 = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error($con));
    if ($result1) {
        echo "<script type='text/javascript'>";
        echo  "alert('แก้ไขเรียบร้อยเรียบร้อย');";
        echo "window.location='listshop.php';";
        echo "</script>";
    } else {
        echo "<script type='text/javascript'>";
        echo "window.location='listshop.php';";
        echo "</script>";
    }
    mysqli_close($con);
?>