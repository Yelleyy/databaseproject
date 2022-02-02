<?php
    session_start();
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['email']);
        header('location: login.php');
    }
    include("server.php");
    if (!isset($_SESSION['email'])) {
        echo "<script type='text/javascript'>";
        echo "alert('กรุณาเข้าสู่ระบบ');"; 
        echo "window.location = 'login.php'; ";
        echo "</script>";
      }
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

                <li class="active treeview"><a class="waves-effect waves-dark" href="#!"><i class="bi bi-egg-fried"></i><span> อาหาร</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li class="treeview ">
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
                        <li class="treeview active">
                            <a class="waves-effect waves-dark" href="#!">
                                <i class="icon-arrow-right"></i>
                                <span>จัดการหมวดหมู่อาหาร</span>
                                <i class="icon-arrow-down"></i>
                            </a>
                            <ul class="treeview-menu active">
                                <li class="active">
                                    <a class="waves-effect waves-dark active" href="addcategoryf.php">
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

    <!-- Sidebar chat end-->
    <div class="content-wrapper">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <br>
            <div class="col-md-11">
                <div class="card">
                    <div class="card-block">
                        <div class="col fw-bold fs-5"> <br>
                            <h3 align="center" class="fw-bold">ฟอร์มเพิ่มหมวดหมู่ร้าน </h3>
                            <hr>
                            <form action="addcategoryf_db.php" method="POST" enctype="multipart/form-data" name="addprd">

                                <div class="form-group row">
                                    <label for="InputNormal" class="col-md-1 col-form-label form-control-label">ชื่อหมวดหมู่ร้าน</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" required name="name" placeholder="ชื่อหมวดหมู่ร้าน">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="file" class="col-md-1 col-form-label form-control-label">ภาพสินค้า</label>
                                    <div class="col-md-9">
                                        <label for="file" class="custom-file">
                                            <input type="file" id="file" name="img"  class="custom-file-input">
                                            <span class="custom-file-control"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary" name="btnadd"> + เพิ่มหมวดหมู่</button>
                                    </div>
                                    <br>
                                </div>
                                <br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">

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

</body>

</html>