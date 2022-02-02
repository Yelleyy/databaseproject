<?php
session_start();
if (isset($_GET['logout'])) {
   session_destroy();
   unset($_SESSION['email']);
   header('location: login.php');
}
if (!isset($_SESSION['email'])) {
   echo "<script type='text/javascript'>";
   echo "alert('กรุณาเข้าสู่ระบบ');";
   echo "window.location = 'login.php'; ";
   echo "</script>";
}
include("server.php");
$id = $_REQUEST["ID"];
$query = "SELECT * FROM order_detail WHERE ID_Order = '$id'" or die("Error:" . mysqli_error($con));
$result = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <title>Admin GrabFood</title>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
   <!-- Favicon icon -->

   <link rel="icon" type="image/x-icon" href="https://food.grab.com/favicon.ico">

   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="assets2/icon/themify-icons/themify-icons.css">
   <link rel="stylesheet" type="text/css" href="assets2/icon/icofont/css/icofont.css">
   <link rel="stylesheet" type="text/css" href="assets2/icon/simple-line-icons/css/simple-line-icons.css">
   <link rel="stylesheet" type="text/css" href="assets2/plugins/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets2/plugins/chartist/dist/chartist.css" type="text/css" media="all">
   <link href="assets2/css/svg-weather.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="assets2/css/main.css">
   <link rel="stylesheet" type="text/css" href="assets2/css/responsive.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
   <link rel="stylesheet" href="style1.css">
   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
   <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
   <link rel="stylesheet" href="assest_shop\vendor\datatables.net-bs4/css/dataTables.bootstrap4.min.css">
   <link href="assest_shop/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
   <!-- Custom Stylesheet -->
   <link href="assest_shop/style.css" rel="stylesheet">
</head>
<style>
   table {
      color: #004;
   }
</style>

<body class="sidebar-mini fixed">
   <div class="loader-bg">
      <div class="loader-bar">
      </div>
   </div>
   <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header-top hidden-print">
         <a href="admin.php" class="logo"><img class="img-fluid able-logo" src="assets2/images/logo-grabfood-white.svg" alt="Theme-logo"></a>
         <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
            <ul class="top-nav lft-nav">

            </ul>
            <!-- Navbar Right Menu-->
            <nav class="navbar-custom-menu f-right">


               <ul class="top-nav">

                  <!-- window screen -->
                  <li class="pc-rheader-submenu">
                     <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                        <i class="icon-size-fullscreen"></i>
                     </a>

                  </li>
                  <!-- User Menu-->
                  <li class="dropdown">
                     <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                        <span><img class="img-circle " src="assets2/images/bottom-food-options.svg" style="width:40px;" alt="User Image"></span>
                        <span>Admin <b>Grab</b> <i class=" icofont icofont-simple-down"></i></span>
                     </a>
                     <ul class="dropdown-menu settings-menu">
                        <li><a href="#"><i class="icon-user"></i> Profile</a></li>
                        <li><a href="index.php?logout='1'"><i class="icon-logout"></i> Logout</a></li>
                     </ul>
                  </li>
               </ul>
   </div>
   </nav>
   </header>
   <!-- Side-Nav-->
   <aside class="main-sidebar hidden-print ">
      <section class="sidebar" id="sidebar-scroll">
         <!-- Sidebar Menu-->
         <ul class="sidebar-menu">
            <li class="treeview">
               <a class="waves-effect waves-dark" href="admin.php">
                  <i class="bi bi-house"></i><span> หน้าหลัก</span>
               </a>
            </li>

            <li class=" treeview"><a class="waves-effect waves-dark" href="#!"><i class="bi bi-egg-fried"></i><span> อาหาร</span><i class="icon-arrow-down"></i></a>
               <ul class=" treeview-menu">
                  <li class="treeview ">
                     <a class="waves-effect waves-dark " href="#!">
                        <i class="icon-arrow-right"></i>
                        <span>จัดการอาหาร</span>
                        <i class="icon-arrow-down"></i>
                     </a>
                     <ul class=" treeview-menu">
                        <li class="">
                           <a class="waves-effect waves-dark " href="listfood.php">
                              <i class="bi bi-search"></i>
                              ดูรายการอาหาร
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="treeview">
                     <a class="waves-effect waves-dark" href="#!">
                        <i class="icon-arrow-right"></i>
                        <span>จัดการหมวดหมู่อาหาร</span>
                        <i class="icon-arrow-down"></i>
                     </a>
                     <ul class="treeview-menu active">
                        <li>
                           <a class="waves-effect waves-dark " href="addcategoryf.php">
                              <i class="bi bi-plus-lg"></i>
                              เพิ่มหมวดหมู่อาหาร
                           </a>
                        </li>
                        <li>
                           <a class="waves-effect waves-dark" href="delcategoryf.php">
                              <i class="bi bi-search"></i>
                              ดูรายการหมวดหมู่อาหาร
                           </a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </li>

            <li class=" treeview"><a class="waves-effect waves-dark" href="#!"><i class="bi bi-shop"></i><span> ร้านค้า</span><i class="icon-arrow-down"></i></a>
               <ul class="treeview-menu">

                  <li class=" treeview">
                     <a class="waves-effect waves-dark" href="#!">
                        <i class="icon-arrow-right"></i>
                        <span>จัดการร้านค้า</span>
                        <i class="icon-arrow-down"></i>
                     </a>
                     <ul class=" treeview-menu">
                        <li><a class="waves-effect waves-dark " href="listshop.php">
                              <i class="bi bi-search"></i> ดูรายการร้านค้า
                           </a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </li>


            <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="bi bi-person-circle"></i><span> ผู้ใช้</span><i class="icon-arrow-down"></i></a>
               <ul class="treeview-menu">

                  <li class=" treeview">
                     <a class="waves-effect waves-dark " href="#!">
                        <i class="icon-arrow-right"></i>
                        <span>จัดการผู้ใช้</span>
                        <i class="icon-arrow-down"></i>
                     </a>
                     <ul class=" treeview-menu">
                        <li><a class="waves-effect waves-dark " href="listuser.php">
                              <i class="bi bi-search"></i> ดูรายการผู้ใช้
                           </a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </li>
            <li class="active treeview"><a class="waves-effect waves-dark" href="#!"><i class="bi bi-bag"></i></i><span> ออเดอร์</span><i class="icon-arrow-down"></i></a>
               <ul class="treeview-menu active">

                  <li class="active treeview">
                     <a class="waves-effect waves-dark active" href="#!">
                        <i class="icon-arrow-right"></i>
                        <span>จัดการออเดอร์</span>
                        <i class="icon-arrow-down"></i>
                     </a>
                     <ul class="active treeview-menu">
                        <li class="active"><a class="waves-effect waves-dark active" href="listorder.php">
                              <i class="bi bi-search"></i> ดูรายการออเดอร์
                           </a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </li>
         </ul>
      </section>
   </aside>
   </div>
   <!-- Sidebar chat end-->
   <div class="content-wrapper">
      <!-- Container-fluid starts -->
      <div class="container-fluid">
         <br>
         <div class="row">
            <div class="col-md-11">
               <div class="card">
                  <div class="card-header">
                     <h4 class="card-title">คลังสินค้า</h4>
                  </div>
                  <div class="card-body">
                     <div class="table-responsive">
                        <table id="example" class="display" style="min-width: 845px">
                           <thead>
                              <tr align='center'>
                                 <th>ลำดับที่</th>
                                 <th>รายการ</th>
                                 <th>รูป</th>
                                 <th>จำนวนทั้งหมด</th>
                                 <th>ราคารวม</th>
                                 <th>ร้านค้า</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php $i=1;
                              while ($row = mysqli_fetch_array($result)) {
                                 $ID_Food = $row["ID_Food"];
                                 $query1 = "SELECT * FROM foodstock where ID_Food ='$ID_Food'";                      
                                 $result1 = mysqli_query($con, $query1);
                                 echo "<tr align='center'>";
                                 echo "<td >" . $i .  "</td> ";
                                 $row1 = mysqli_fetch_array($result1);
                                 $ID_Shop=$row1["ID_Shop"];
                                 $query2 = "SELECT * FROM shop where ID_Shop ='$ID_Shop'";                      
                                 $result2 = mysqli_query($con, $query2);
                                 echo "<td >" . $row1["Food_Name"] . "</td> ";
                                 echo "<td><img class='mt-2 mb-2' src='img/shop/" . $row1["PicFood"] . "' width='40%' height='50%'> </td> ";
                                 echo "<td>" . $row["Amount"] .  " ชิ้น</td> ";
                                 echo "<td>" . number_format($row["Price"], 2) .  " บาท</td> ";
                                 $row2 = mysqli_fetch_array($result2);
                                 echo "<td>" . $row2["Name_Shop"].  " บาท</td> ";
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
         </div>

      </div>
   </div>
   </div>
   <!-- Required Jqurey -->
   <script src="assets2/plugins/Jquery/dist/jquery.min.js"></script>
   <script src="assets2/plugins/jquery-ui/jquery-ui.min.js"></script>
   <script src="assets2/plugins/tether/dist/js/tether.min.js"></script>

   <!-- Required Fremwork -->
   <script src="assets2/plugins/bootstrap/js/bootstrap.min.js"></script>

   <!-- Scrollbar JS-->
   <script src="assets2/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
   <script src="assets2/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

   <!--classic JS-->
   <script src="assets2/plugins/classie/classie.js"></script>

   <!-- notification -->
   <script src="assets2/plugins/notification/js/bootstrap-growl.min.js"></script>

   <!-- Sparkline charts -->
   <script src="assets2/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

   <!-- Counter js  -->
   <script src="assets2/plugins/waypoints/jquery.waypoints.min.js"></script>
   <script src="assets2/plugins/countdown/js/jquery.counterup.js"></script>

   <!-- Echart js -->
   <script src="assets2/plugins/charts/echarts/js/echarts-all.js"></script>

   <script src="https://code.highcharts.com/highcharts.js"></script>
   <script src="https://code.highcharts.com/modules/exporting.js"></script>
   <script src="https://code.highcharts.com/highcharts-3d.js"></script>

   <!-- custom js -->
   <script type="text/javascript" src="assets2/js/main.min.js"></script>
   <script type="text/javascript" src="assets2/pages/dashboard.js"></script>
   <script type="text/javascript" src="assets2/pages/elements.js"></script>
   <script src="assets2/js/menu.min.js"></script>
   <script>
      var $window = $(window);
      var nav = $('.fixed-button');
      $window.scroll(function() {
         if ($window.scrollTop() >= 200) {
            nav.addClass('active');
         } else {
            nav.removeClass('active');
         }
      });
   </script>
   <script src="assest_shop/vendor/global/global.min.js"></script>
   <!-- <script src="assets3/js/quixnav-init.js"></script> -->
   <script src="assest_shop/js/custom.min.js"></script>

   <script src="assest_shop/js/global.min.js"></script>

   <!-- Datatable -->
   <script src="assest_shop/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
   <script src="assest_shop/vendor/datatables/js/jquery.dataTables.min.js"></script>
   <script src="assest_shop/js/plugins-init/datatables.init.js"></script>

</body>

</html>