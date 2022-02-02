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

$sql = "SELECT sum(`TotalPrice`) as sumprice,sum(TotalAmount)as sumamount FROM `order_head`";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

$sql1 = "SELECT sum(`TotalPrice`) as sumprice,sum(TotalAmount)as sumamount,COUNT(order_head.ID_Shop) as count,shop.Name_Shop 
FROM `order_head` join shop on order_head.ID_Shop=shop.ID_Shop GROUP BY order_head.ID_Shop ORDER BY `sumprice` DESC";
$result1 = mysqli_query($con, $sql1);

$sql2 = "SELECT sum(`TotalPrice`) as sumprice,sum(TotalAmount)as sumamount,COUNT(order_head.ID_Shop) as count,shop.Name_Shop 
FROM `order_head` join shop on order_head.ID_Shop=shop.ID_Shop GROUP BY order_head.ID_Shop ORDER BY `sumprice` DESC";
$result2 = mysqli_query($con, $sql2);
$row2=mysqli_fetch_array($result2);

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <title>Admin GrabFood</title>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
   <!-- Favicon icon -->

   <link rel="icon" type="image/x-icon" href="https://food.grab.com/favicon.ico">

   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">
   <!-- <link rel="stylesheet" type="text/css" href="assets2/icon/themify-icons/themify-icons.css"> -->
   <!-- <link rel="stylesheet" type="text/css" href="assets2/icon/icofont/css/icofont.css"> -->
   <link rel="stylesheet" type="text/css" href="assets2/icon/simple-line-icons/css/simple-line-icons.css">
   <link rel="stylesheet" type="text/css" href="assets2/plugins/bootstrap/css/bootstrap.min.css">
   <!-- <link rel="stylesheet" href="assets22/plugins/chartist/dist/chartist.css" type="text/css" media="all"> -->
   <!-- <link href="assets22/css/svg-weather.css" rel="stylesheet"> -->
   <link rel="stylesheet" type="text/css" href="assets2/css/main.css">
   <!-- <link rel="stylesheet" type="text/css" href="assets2/css/responsive.css"> -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
   <link rel="stylesheet" href="style1.css">
</head>

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
            <div class="navbar-custom-menu f-right">


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
               <li class="active treeview">
                  <a class="waves-effect waves-dark" href="admin.php">
                     <i class="bi bi-house"></i><span> หน้าหลัก</span>
                  </a>
               </li>

               <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="bi bi-egg-fried"></i><span> อาหาร</span><i class="icon-arrow-down"></i></a>
                  <ul class="treeview-menu">
                     <li class="treeview">
                        <a class="waves-effect waves-dark" href="#!">
                           <i class="icon-arrow-right"></i>
                           <span>จัดการอาหาร</span>
                           <i class="icon-arrow-down"></i>
                        </a>
                        <ul class="treeview-menu">
                           <li>
                              <a class="waves-effect waves-dark" href="listfood.php">
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
                        <ul class="treeview-menu">
                           <li>
                              <a class="waves-effect waves-dark" href="addcategoryf.php">
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

               <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="bi bi-shop"></i><span> ร้านค้า</span><i class="icon-arrow-down"></i></a>
                  <ul class="treeview-menu">

                     <li class="treeview">
                        <a class="waves-effect waves-dark" href="#!">
                           <i class="icon-arrow-right"></i>
                           <span>จัดการร้านค้า</span>
                           <i class="icon-arrow-down"></i>
                        </a>
                        <ul class="treeview-menu">
                           <li><a class="waves-effect waves-dark" href="listshop.php">
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
               <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="bi bi-bag"></i><span> ออเดอร์</span><i class="icon-arrow-down"></i></a>
                  <ul class="treeview-menu">

                     <li class=" treeview">
                        <a class="waves-effect waves-dark " href="#!">
                           <i class="icon-arrow-right"></i>
                           <span>จัดการออเดอร์</span>
                           <i class="icon-arrow-down"></i>
                        </a>
                        <ul class=" treeview-menu">
                           <li><a class="waves-effect waves-dark " href="listorder.php">
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

      <div class="content-wrapper">
         <!-- Container-fluid starts -->
         <!-- Main content starts -->
         <div class="container-fluid">
            <div class="row">
               <div class="main-header">
                  <h4>สรุปผล</h4>
               </div>
            </div>
            <!-- 4-blocks row start -->
            <div class="row dashboard-header">
               <div class="col-lg-3 col-md-6">
                  <div class="card dashboard-product">
                     <span>สินค้า</span>
                     <h2 class="dashboard-total-products"><?php echo $row[1]; ?> รายการ</h2>
                     <span class="label label-warning">Sales</span>ยอดขายทั้งหมด
                     <div class="side-box">
                        <i class="ti-signal text-warning-color"></i>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="card dashboard-product">
                     <span>ร้านค้า</span>
                     <h2 class="dashboard-total-products"><?php  echo $row2[3];?> <i class='fas fa-crown' style="color:#F4D03F ;"></i></h2>
                     <span class="label label-primary">Tops</span>ร้านค้ายอดนิยม 
                     <div class="side-box ">
                        <i class="ti-gift text-primary-color"></i>
                     </div>
                  </div>
               </div>

               <div class="col-lg-3 col-md-6">
                  <div class="card dashboard-product">
                     <span>สินค้า</span>
                     <h2 class="dashboard-total-products"><span><?php echo number_format($row[0], 2); ?></span> บาท</h2>
                     <span class="label label-success">Sales</span>ยอดขาย
                     <div class="side-box">
                        <i class="ti-direction-alt text-success-color"></i>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="card dashboard-product">
                     <span>สินค้า</span>
                     <h2 class="dashboard-total-products"><span><?php echo number_format($row[0] * 0.1, 2);  ?></span> บาท</h2>
                     <span class="label label-danger">Sales</span>กำไร
                     <div class="side-box">
                        <i class="ti-rocket text-danger-color"></i>
                     </div>
                  </div>
               </div>
            </div>
            <!-- 4-blocks row end -->

            <!-- 1-3-block row start -->
            <div class="row">

               <div class="col-lg">
                  <div class="card">
                     <div class="card-header">
                        <h5 class="card-header-text">Bar chart</h5>
                     </div>
                     <div class="card-block">
                        <div id="barchart" style="min-width: 250px; height: 330px; margin: 0 auto"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Main content ends -->
         <!-- Container-fluid ends -->
         <div class="fixed-button">
            <a href="#" class="btn btn-md btn-primary">
               <i class="fa fa-shopping-cart" aria-hidden="true"></i> Go to top
            </a>
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
   <script>
      'use strict';
      $(document).ready(function() {
         dashboard();

         /*Counter Js Starts*/
         $('.counter').counterUp({
            delay: 10,
            time: 400
         });
         /*Counter Js Ends*/

         //  Resource bar
         $(".resource-barchart").sparkline([5, 6, 2, 4, 9, 1, 2, 8, 3, 6, 4, 2, 1, 5], {
            type: 'bar',
            barWidth: '15px',
            height: '80px',
            barColor: '#fff',
            tooltipClassname: 'abc'
         });

         function setHeight() {
            var $window = $(window);
            var windowHeight = $(window).height();
            if ($window.width() >= 320) {
               $('.user-list').parent().parent().css('min-height', windowHeight);
               $('.chat-window-inner-content').css('max-height', windowHeight);
               $('.user-list').parent().parent().css('right', -300);
            }
         };
         setHeight();

         $(window).on('load', function() {
            setHeight();
         });
      });

      $(window).resize(function() {
         dashboard();
         //  Resource bar
         $(".resource-barchart").sparkline([5, 6, 2, 4, 9, 1, 2, 8, 3, 6, 4, 2, 1, 5], {
            type: 'bar',
            barWidth: '15px',
            height: '80px',
            barColor: '#fff',
            tooltipClassname: 'abc'
         });
      });

      function dashboard() {

      };
      var price=[];
      var amount=[];
      var order=[]; 
      var shop = [];
      <?php while ($row1 = mysqli_fetch_array($result1)) { ?>    
      price.push(<?php  echo $row1[0];?>)
      amount.push(<?php  echo $row1[1];?>)
      order.push(<?php  echo $row1[2];?>)
      shop.push("<?php  echo $row1[3];?>")
         <?php      }?>
      Highcharts.chart('barchart', {

         title: {
            text: 'ตารางสรุปผลเรียงตามรายได้มากสุด'
         },
         xAxis: {
            categories: shop
      },
      series: [{
         type: 'column',
         name: 'ยอดขาย',
         data: price,
         color: '#f57c00'
      }, {
         type: 'column',
         name: 'จำนวนที่ขายได้',
         data: amount,
         color: '#2BBBAD'
      }, {
         type: 'column',
         name: 'จำนวนออเดอร์',
         data: order,
         color: '#39444e'
      }]
      });
   </script>
</body>

</html>