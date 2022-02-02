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
include("tool.php");
include("server.php");
date_default_timezone_set("Asia/Bangkok");
$ID_Shop=$_SESSION['ID_Shop'];

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets2/css/main.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>GrabFood Cart</title>
</head>
<div class="container">
    <div class="row align-items-start">
        <br><br><br>
    </div>
</div>
<style>
    table,
    th,
    td {
        border: 1px solid black;
    }
</style>

<body>
    <!-- <form id="frmcart" name="frmcart" method="post" action="saveorder.php"> -->
    <div class="container">
        <div class="col col-mb">
            <table class="table table-hover style='background-color: FFFFFF;">
                <tr>
                    <h3 class="text fw-bold " style="background-color: FCD647  ;">รายการสินค้า</h3>
                </tr>
                <tr class="text fw-bold fs-5" style="background-color: FFFFFF;">
                    <td align="center">สินค้า</td>
                    <td align="right">ราคา</td>
                    <td align="right">จำนวน (ชิ้น)</td>
                    <td align="right">รวม (บาท)</td>
                </tr>
                <?php
                foreach ($_SESSION['cart'] as $ID_Product => $qty) {
                    $sql    = "select * from foodstock where ID_Food=$ID_Product";
                    $query    = mysqli_query($con, $sql);
                    $row    = mysqli_fetch_array($query);
                    $sum    = $row['price'] * $qty;
                    $sum2   = $qty;
                    $total    += $sum;
                    $total_qty += $sum2;

                    echo "<tr class='table table-hover'style='background-color: FFFFFF  ;'>";
                    echo "<td align='center'>" . $row["Food_Name"] . "</td>";
                    echo "<td align='right'>" . number_format($row['price'], 2) . "</td>";
                    echo "<td align='right'>$qty</td>";
                    echo "<td align='right'>" . number_format($sum, 2) . "</td>";
                    echo "</tr>";
                }
                echo "<tr style='background-color: FFFFFF  ;'>";
                echo "<td  align='right' colspan='3' bgcolor='#F9D5E3'><b>รวม : " . number_format($total_qty) . "</b></td>";
                echo "<td align='right' bgcolor='#F9D5E3'>" . "<b>" . number_format($total, 2) . "</b>" . "</td>";
                echo "</tr>";

                ?>
            </table>
            <?php
            $email = $_SESSION['email'];
            // $name = $_POST["name"];
            // $phone = $_POST["phone"];
            // $address = $_POST["address"];


            $q1 = "SELECT * from customer where Email_User= '$email' " or die("Error:" . mysqli_error($con));
            $result1 = mysqli_query($con, $q1);
            $row1    = mysqli_fetch_array($result1);
            $ID_User=$row1["ID_User"];
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = test_input($_POST["name"]);
                $email = test_input($_POST["email"]);
                $phone = test_input($_POST["phone"]);
                $address = test_input($_POST["address"]);
            }

            function test_input($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            ?>
            </br>
            <h2 class="fw-bold">กรุณากรอกรายละเอียด</h2>
            </p>
            <form method="post" class="fw-bold">
                <p>ชื่อ</p><input class="form-control" type="text" name="name" value='<?php echo $row1["Name_User"]; ?>'></p>
                <p>Email</p>
                <fieldset disabled><input class="form-control" name="email" type="email" value='<?php echo $row1["Email_User"];$email = $row1["Email_User"]; ?>'></fieldset>
               
                <p>Phone</p> <input class="form-control" type="text" name="phone" pattern="[0]{1}[0-9]{9}" required value='<?php echo $row1["Tel_User"]; ?>'></p>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">เลือกที่อยู่</label>
                    <select id="inputGroupSelect01" name="id" class="form-control">
                        <?php
                        $sql5 = "select * from addressuser where ID_User='$ID_User'";
                        $result5 = mysqli_query($con, $sql5);
                        while ($row5 = mysqli_fetch_array($result5)) {
                            echo "<option value=" . $row5["ID_Address"] . " >" . $row5["Address"] . "</option>";
                        }
                        ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-success " name="submit">สั่งซื้อ</button>
                <a class="btn btn-primary " href="address.php">แก้ไขที่อยู่</a>
            </form>
            <?php
                include("server.php");
                if(array_key_exists('submit', $_POST)) {
                    $dttm = Date("Y-m-d H:i:s");
                    $address=  $_POST['id'];
                    if(empty($address)){
                        echo "<script type='text/javascript'>";
                        echo "alert('กรุณาเพิ่มที่อยู่ในการจัดส่ง..');";
                        echo "window.location = 'confirm.php'; ";
                        echo "</script>";
                    }
                    $sql1	= "INSERT into order_head (O_date,TotalAmount,TotalPrice,ID_Address,ID_shop,ID_User) values ('$dttm', '$total_qty', '$total','$address', '$ID_Shop', '$ID_User')";
                    $query1	= mysqli_query($con, $sql1);
                    $sql2 = "SELECT max(ID_Order) as ID_Order from order_head where ID_User='$ID_User' and O_date='$dttm' ";
                    $query2	= mysqli_query($con, $sql2);
                    $row2 = mysqli_fetch_array($query2);
                    $ID_Order = $row2['ID_Order'];


                    foreach($_SESSION['cart'] as $ID_Product=>$qty)
                    {
                        $sql3	= "SELECT * FROM `foodstock` WHERE ID_Food=$ID_Product";
                        $query3	= mysqli_query($con, $sql3);
                        $row3	= mysqli_fetch_array($query3);
                        $total	= $row3['price']*$qty;
                        $Food_Name =$row3['Food_Name'];
                        $PicFood =$row3['PicFood'];
                        $sql4	= "INSERT into order_detail (Fname,Price,Amount,ID_Food,ID_Order) values ('$Food_Name','$total','$qty','$ID_Product', '$ID_Order')";
                        $query4	= mysqli_query($con, $sql4);
                        
                    }
                    echo "<script type='text/javascript'>";
                    echo "alert('สั่งซื้อเรียบร้อย..');";
                    echo "window.location = 'index.php'; ";
                    echo "</script>";


                }
            ?>

</body>


</html>