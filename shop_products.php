<?php
    session_start();
    include('server.php');

    $email=$_SESSION['email'];

    $query = "SELECT * FROM shop WHERE Email_Shop = '$email'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
    

    $_SESSION["ID_Shop"]=$row['ID_Shop'];
    $ID_Shop=$row['ID_Shop'];

    $stock = "SELECT * FROM foodstock WHERE ID_Shop = '$ID_Shop'";
    $result2 = mysqli_query($con, $stock);
    

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
                        <a href="shop_profile.php">
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
                        <a href="shop.php?logout='1'">
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
                    <table id="productlist"style="width:100%" >
                        <thead>
                            <tr class="text-center" >
                                <th>ไอดีอาหาร</th>
                                <th>ชื่อ</th>
                                <th>จำนวน</th>
                                <th>ราคา</th>
                                <th>หมวดหมู่</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                            
                                    while($row2 = mysqli_fetch_array($result2)){
                                        $select = "SELECT * FROM categoryf WHERE ID_CATF ='$row2[6]'";
                                        $result3 = mysqli_query($con, $select);
                                        $row3 = mysqli_fetch_array($result3);
                                                
                                        echo "<tr align='center'>";
                                        echo "<td>".$row2["ID_Food"]."</td>";
                                        echo "<td>".$row2["Food_Name"]."</td>";
                                        echo "<td>".$row2["Amount"]."</td>";
                                        echo "<td>".$row2["price"]."</td>";
                                        echo "<td>".$row3["CATF_Name"]."</td>";                           
                                        echo "<td><a href='shop_edit.php?ID=$row2[0]')\" class='btn btn-outline-primary'>แก้ไข</a> <a href='delfoodshop.php?ID=$row2[0]' onclick=\"return confirm('คุณแน่ใจแล้วหรอที่จะลบ !!!')\" class='btn btn-outline-danger'>ลบ</a></td>";
                                        echo "</tr>";
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
        <script >$(document).ready(function() {table = $('#productlist').DataTable();});</script>
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