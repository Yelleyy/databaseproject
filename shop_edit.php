<?php
    session_start();
    include('server.php');


    $email=$_SESSION['email'];
    $query = "SELECT * FROM shop WHERE Email_Shop = '$email'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);

    $ID_Food = $_REQUEST["ID"];
    $stock = "SELECT * FROM foodstock WHERE ID_Food = '$ID_Food'";
    $result2 = mysqli_query($con, $stock);
    $row2 = mysqli_fetch_array($result2);

    $categoryf = "SELECT * FROM categoryf";
    $result3 = mysqli_query($con, $categoryf);

    

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
    <style>
        .form-group{
            margin-top: 15px;
            margin-right: 20px;
        }
    </style>
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
                        <a href="shop_profile.php">
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
                    <div class="card-body">
                        <div class="basic-form">
                            <form action='shop_update.php' method="post" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>ชื่อสินค้า</label>
                                        <input type="text" id="Food_Name" name="Food_Name"class="form-control" value=<?php echo $row2['Food_Name']?> >
                                    </div>&nbsp;&nbsp;&nbsp;
                                    <div class="form-group col-md-5">
                                        <label>จำนวน</label>
                                        <input type="text" name="Amount" class="form-control" value=<?php echo $row2['Amount']?>> 
                                    </div>&nbsp;&nbsp;&nbsp;
                                    <div class="form-group col-md-6">
                                        <label>ราคา</label>
                                        <input type="text" name="price" class="form-control" value=<?php echo $row2['price']?>>
                                    </div>&nbsp;&nbsp;&nbsp;                             
                                    <div class="form-group col-md-5">
                                        <label>หมวดหมู่</label>
                                        <select id="inputState" name="id" class="form-control"?>>
                                            <?php
                                                while($row3 = mysqli_fetch_array($result3)){
                                                    echo "<option value=" .$row3["ID_CATF"]. " >".$row3["CATF_Name"]."</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <br>
                                    <div class="form-group col-md-6">
                                        <label>เลือกไฟล์รูปภาพของคุณ</label>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input type="file" name="img">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" name="upload" class="btn btn-primary">ยืนยัน</button>
                            </form>
                        </div>
                    </div>
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