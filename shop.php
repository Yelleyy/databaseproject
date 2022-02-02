<?php
session_start();
include('server.php');

$email = $_SESSION['email'];

$query = "SELECT * FROM shop WHERE Email_Shop = '$email'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);


$_SESSION["ID_Shop"] = $row['ID_Shop'];
$ID_Shop = $row['ID_Shop'];

$query2 = "SELECT sum(order_head.TotalPrice) AS Total,sum(order_head.TotalAmount) AS Amount,count(order_head.ID_Shop) AS Order_Total 
    FROM order_head 
    WHERE order_head.ID_Shop=$ID_Shop";
$result2 = mysqli_query($con, $query2);
$row2 = mysqli_fetch_array($result2);

$query3 = "SELECT order_detail.Fname AS Name
    FROM order_head 
    RIGHT JOIN order_detail 
    on order_head.ID_Order=order_detail.ID_Order 
    WHERE order_head.ID_Shop=$ID_Shop 
    GROUP BY order_detail.ID_Food
    ORDER BY order_detail.Amount DESC
    LIMIT 1";
$result3 = mysqli_query($con, $query3);
$row3 = mysqli_fetch_array($result3);


if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header('location: loginshop.php');
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row['Name_Shop']; ?></title>
    <link rel="stylesheet" type="text/css" href="./style_shop.css">
</head>

<body>
    <!--navbar-->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="storefront-outline"></ion-icon>
                        </span>
                        <span class="title"><?php echo $row['Name_Shop']; ?></span>
                    </a>
                </li>
                <li>
                    <a href="shop_profile.php">
                        <span class="icon">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </span>
                        <span class="title">ข้อมูลร้าน</span>
                    </a>
                </li>
                <li>
                    <a href="shop.php">
                        <span class="icon">
                            <ion-icon name="bar-chart-outline"></ion-icon>
                        </span>
                        <span class="title">สรุปยอดขาย</span>
                    </a>
                </li>
                <li>
                    <a href="shop_order.php">
                        <span class="icon">
                            <ion-icon name="reader-outline"></ion-icon>
                        </span>
                        <span class="title">รายการคำสั่งซื้อ</span>
                    </a>
                </li>
                <li>
                    <a href="shop_products.php">
                        <span class="icon">
                            <ion-icon name="list-circle-outline"></ion-icon>
                        </span>
                        <span class="title">รายการอาหาร</span>
                    </a>
                </li>
                <li>
                    <a href="shop_add.php">
                        <span class="icon">
                            <ion-icon name="add-circle-outline"></ion-icon>
                        </span>
                        <span class="title">เพิ่มรายการอาหาร</span>
                    </a>
                </li>
                <li>
                    <a href="shop.php?logout='1'">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">ออกจากระบบ</span>
                    </a>
                </li>
            </ul>
        </div>

        <!--main-->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
            </div>
            <!--cards-->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers"><?php echo $row2['Total']; ?> ฿</div>
                        <div class="cardName">ยอดรวมทั้งหมด</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers"><?php echo $row2['Amount']; ?> </div>
                        <div class="cardName">จำนวนขายทั้งหมด</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="stats-chart-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers"><?php echo $row2['Order_Total']; ?></div>
                        <div class="cardName">จำนวนสั่งซื้อทั้งหมด</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="basket-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers"><?php echo $row3['Name']; ?></div>
                        <div class="cardName">สินค้าที่นิยมที่สุด</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="ribbon-outline"></ion-icon>
                    </div>
                </div>
            </div>
            <!--charts-->
            <div class="graphBox">
                <div class="box">
                    <h2>ตารางยอดขาย</h2>
                    <canvas id="Chart" width="400" height="400"></canvas>
                </div>

            </div>
        </div>
        <!--icon scripts-->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="./Chart.js"></script>
        <!--event scripts-->
        <script>
            let toggle = document.querySelector('.toggle');
            let navigation = document.querySelector('.navigation');
            let main = document.querySelector('.main');

            toggle.onclick = function() {
                navigation.classList.toggle('active')
                main.classList.toggle('active')
            }

            let list = document.querySelectorAll('.navigation li');

            function activeLink() {
                list.forEach((item) =>
                    item.classList.remove('hovered'));
                this.classList.add('hovered');
            }
            list.forEach((item) =>
                item.addEventListener('mouseover', activeLink));
        </script>


</body>

</html>