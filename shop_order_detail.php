<?php
    session_start();
    include('server.php');

    $email = $_SESSION['email'];

    $id = $_REQUEST["ID"];
    $query = "SELECT * FROM order_detail WHERE ID_Order = '$id'";
    $result = mysqli_query($con, $query);
    

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
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="style_shop.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    </head>
    <body>
    <div class="contain">
            <div class="navigation">
                <ul>
                    <li>
                        <a href="#">
                            <span class="icon"><ion-icon name="storefront-outline"></ion-icon></span>
                            <span class="title"><?php echo $row['Name_Shop']; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="data.php">
                            <span class="icon"><ion-icon name="document-text-outline"></ion-icon></span>
                            <span class="title">ข้อมูลร้าน</span>
                        </a>
                    </li>                    
                    <li>
                        <a href="shop.php">
                            <span class="icon"><ion-icon name="bar-chart-outline"></ion-icon></span>
                            <span class="title">สรุปยอดขาย</span>
                        </a>
                    </li>                                
                    <li>
                        <a href="shop_order.php">
                            <span class="icon"><ion-icon name="reader-outline"></ion-icon></span>
                            <span class="title">รายการคำสั่งซื้อ</span>
                        </a>
                    </li>
                    <li>
                        <a href="shop_products.php">
                            <span class="icon"><ion-icon name="list-circle-outline"></ion-icon></span>
                            <span class="title">รายการอาหาร</span>
                        </a>
                    </li>
                    <li>
                        <a href="shop_add.php">
                            <span class="icon"><ion-icon name="add-circle-outline"></ion-icon></span>
                            <span class="title">เพิ่มรายการอาหาร</span>
                        </a>
                    </li>
                    <li>
                        <a href="#6">
                            <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
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
            <div class="graphBox">
                <div class="boxtable">
                    <table id="orderlist"style="width:100%" >
                        <thead>
                            <tr class="text-center" >
                            <th>ลำดับที่</th>
                            <th>รายการ</th>
                            <th>รูป</th>
                            <th>จำนวนทั้งหมด</th>
                            <th>ราคารวม</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1;
                                            while ($row = mysqli_fetch_array($result)) {
                                                $ID_Food = $row["ID_Food"];
                                                $query1 = "SELECT * FROM foodstock where ID_Food ='$ID_Food'";
                                                $result1 = mysqli_query($con, $query1);
                                                echo "<tr align='center'>";
                                                echo "<td >" . $i .  "</td> ";
                                                $row1 = mysqli_fetch_array($result1);
                                                echo "<td >" . $row1["Food_Name"] . "</td> ";
                                                echo "<td><img class='mt-2 mb-2' src='img/shop/" . $row1["PicFood"] . "' width='40%' height='50%'> </td> ";
                                                echo "<td>" . $row["Amount"] .  " ชิ้น</td> ";
                                                echo "<td>" . number_format($row["Price"], 2) .  " บาท</td> ";
                                                echo "</tr>";
                                                $i++;
                                            }
                                            ?>                   
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>       


<!--icon scripts--> 
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
        


<!--table scripts-->        
        <script >$(document).ready(function() {table = $('#orderlist').DataTable();});</script>
<!--event scripts-->
        <script>
            let toggle = document.querySelector('.toggle');
            let navigation = document.querySelector('.navigation');
            let main = document.querySelector('.main');

            toggle.onclick = function(){
                navigation.classList.toggle('active')
                main.classList.toggle('active')
            }

            let list = document.querySelectorAll('.navigation li');
            function activeLink(){
                list.forEach((item)=>
                item.classList.remove('hovered'));
                this.classList.add('hovered');
            }
            list.forEach((item) =>
            item.addEventListener('mouseover',activeLink));
        </script>


    </body>
</html>