<?php
  session_start();
  include('server.php');
  $stock = "SELECT * FROM categoryf";
  $result = mysqli_query($con, $stock); 
?>
<html>
<head>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="assets3\vendor\datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link href="assets3/css/style.css" rel="stylesheet">
        <!-- Datatable -->
    <link href="assets3/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <title>ชื่อร้าน</title>
</head>
<body>
<div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, ชื่อเจ้าขอร้าน</h4>
                            <span class="ml-1">Data table</span>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-10">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">คลังสินค้า</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr align='center'>
                                                <th >ID-CategoryFood</th>
                                                <th>Category Name</th>
                                                <th>Pic</th>
                                                <th>Link</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>                                 
                                            <?php
                                            while($row = mysqli_fetch_array($result)){
                                                echo "<tr align='center'>";
                                                echo "<td >".$row["ID_CATF"]."</td>";
                                                echo "<td>".$row["CATF_Name"]."</td>";

                                                // echo "<td align='center'><img src='img/".$row["Pic"]."' width='50%' height='30%'></td>";
                                                echo "<td>".$row["link"]."</td>";
                                                echo '<td><button type="button" class="btn btn-outline-danger">ลบ</button></td>';
                                                echo "</tr>";
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
        
    <script src="assets3/vendor/global/global.min.js"></script>
    <script src="assets3/js/quixnav-init.js"></script>
    <script src="assets3/js/custom.min.js"></script>
    
    <script src="assets3/js/global.min.js"></script>

    <!-- Datatable -->
    <script src="assets3/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets3/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="assets3/js/plugins-init/datatables.init.js"></script>       
</body>