<meta charset="UTF-8">
<?php

    include('server.php'); 
    $id = $_REQUEST["ID_Order"];
    $sql = "UPDATE `order_head` SET status='finish' WHERE ID_Order='$id' ";
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
    
    if($result){
        echo "<script type='text/javascript'>";
        echo "alert('ออเดอร์เสร็จสิ้น');";
        echo "window.location = 'shop_order.php'; ";
        echo "</script>";
    }
    else{
        echo "<script type='text/javascript'>";
        echo "alert('มีบางอย่างผิดพลาดลองอีกครั้ง');";
        echo "</script>";
    }
?>