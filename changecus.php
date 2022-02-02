<meta charset="UTF-8">
<?php

    include('server.php'); 
    $id = $_REQUEST["ID_Order"];
    $sql = "UPDATE `order_head` SET status='cancel' WHERE ID_Order='$id' ";
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
    
    if($result){
        echo "<script type='text/javascript'>";
        echo "alert('ยกเลิกเสร็จสิ้น');";
        echo "window.location = 'invoice.php'; ";
        echo "</script>";
    }
    else{
        echo "<script type='text/javascript'>";
        echo "alert('มีบางอย่างผิดพลาดลองอีกครั้ง');";
        echo "</script>";
    }
?>