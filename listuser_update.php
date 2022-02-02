<meta charset="UTF-8" />
<?php 
    session_start();
    include('server.php');

    $Name_User =$_POST['Name_User'] ;
    $Email_User =  $_POST['Email_User'];
    $Pass_User =  $_POST['Pass_User'];
    $Tel_User =  $_POST['Tel_User'];
    $BDate_User =  $_POST['BDate_User'];
    $ID_User = $_REQUEST["ID"];
    
    
    $sql = "UPDATE Customer SET Name_User='$Name_User',Email_User='$Email_User',Pass_User='$Pass_User',Tel_User='$Tel_User'
    ,BDate_User='$BDate_User' WHERE ID_User=$ID_User "; 
    $result1 = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error($con));
    if ($result1) {
        echo "<script type='text/javascript'>";
        echo  "alert('แก้ไขเรียบร้อยเรียบร้อย');";
        echo "window.location='listuser.php';";
        echo "</script>";
    } else {
        echo "<script type='text/javascript'>";
        echo "window.location='listuser.php';";
        echo "</script>";
    }
    mysqli_close($con);
?>