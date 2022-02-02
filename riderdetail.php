<meta charset="UTF-8">

<head>
  <link rel="stylesheet" type="text/css" href="assets2/css/main.css">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>GrabFood </title>
</head>
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
include('server.php');
include('tool.php');
$id = $_REQUEST["ID"];
$query = "SELECT * FROM order_detail WHERE ID_Order = $id" or die("Error:" . mysqli_error($con));
$result = mysqli_query($con, $query);
$i = 1; ?>

<body>

  <div class="container">
    <br>
    <div class="row">
      <div class="col-md-11">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">รายละเอียดออเดอร์</h4>
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
                    <th> &nbsp; &nbsp; &nbsp;ราคารวม</th>
                    <th> &nbsp; &nbsp; &nbsp; &nbsp;</th>
                    <th>ร้านค้า</th>

                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($row = mysqli_fetch_array($result)) {
                    $ID_Food = $row["ID_Food"];
                    $query1 = "SELECT * FROM foodstock where ID_Food ='$ID_Food'";
                    $result1 = mysqli_query($con, $query1);
                    echo "<tr align='center'>";
                    echo "<td >" . $i .  "</td> ";
                    $row1 = mysqli_fetch_array($result1);
                    $ID_Shop = $row1["ID_Shop"];
                    $query2 = "SELECT * FROM shop where ID_Shop ='$ID_Shop'";
                    $result2 = mysqli_query($con, $query2);
                    echo "<td >" . $row1["Food_Name"] . "</td> ";
                    echo "<td><img class='mt-2 mb-2' src='img/shop/" . $row1["PicFood"] . "' width='40%' height='50%'> </td> ";
                    echo "<td>" . $row["Amount"] .  " ชิ้น</td> ";
                    echo "<td> &nbsp; &nbsp; &nbsp; &nbsp;" . number_format($row["Price"], 2) .  " บาท</td> ";
                    $row2 = mysqli_fetch_array($result2);
                    
                    echo "<td> </td> ";
                    echo "<td> " . $row2["Name_Shop"].  "</td> ";
                    echo "</tr>";
                    $i++;
                  }
                  mysqli_close($con);
                  ?>
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>
    </div>
    <a type="submit" href="rider.php" name="button" id="button" class='btn btn-success' />กลับหน้าแรก</a>
  </div>
</body>