<meta charset="UTF-8">
<?php

    include('server.php'); 
    $id = $_REQUEST["ID"];
    $sql = "DELETE FROM addressuser WHERE ID_Address='$id' ";
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " .mysqli_error($con));

    if($result){
        echo "<script type='text/javascript'>";
        echo "alert('ลบเสร็จสิ้น');";
        echo "window.location = 'address.php'; ";
        echo "</script>";
    }
    else{
        echo "<script type='text/javascript'>";
        echo "alert('มีบางอย่างผิดพลาดลองอีกครั้ง');";
        echo "</script>";
    }
?>