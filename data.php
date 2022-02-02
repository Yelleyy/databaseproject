<?php

    header('Content-Type: application/json');

    require_once 'server.php';

    session_start();
    $ID_Shop=$_SESSION["ID_Shop"];

    $query = "SELECT order_detail.Fname AS Name,order_detail.ID_Food AS ID_FOOD,sum(order_detail.Amount) AS Amount,sum(order_detail.Price) AS Total
    FROM order_head 
    RIGHT JOIN order_detail 
    on order_head.ID_Order=order_detail.ID_Order 
    WHERE order_head.ID_Shop=$ID_Shop 
    GROUP BY order_detail.ID_Food";

    $result = mysqli_query($con,$query);

    $data = array();

    foreach($result as $row){
        $data[] = $row;
    }

    mysqli_close($con);

    echo json_encode($data);


?>