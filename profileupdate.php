<meta charset="UTF-8" />
<?php 
    session_start();
    include('server.php');

    $email = $_SESSION['email'];

    $Name_User =$_POST['name'] ;
    $Email_User =  $_POST['email'];
    $Pass_User =  $_POST['password'];
    $Tel_User =  $_POST['tel'];
    $BDate_User =  $_POST['date'];
   
    $sql = "UPDATE Customer SET Name_User='$Name_User',Email_User='$Email_User',Pass_User='$Pass_User',Tel_User='$Tel_User',
    BDate_User='$BDate_User'  WHERE Email_User='$email'"; 
    $result1 = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error($con));
    if ($result1) {
        echo "<script type='text/javascript'>";
        echo  "alert('แก้ไขเรียบร้อยเรียบร้อย');";
        echo "window.location='profile.php';";
        echo "</script>";
    } else {
        echo "<script type='text/javascript'>";
        echo "window.location='profile.php';";
        echo "</script>";
    }
    mysqli_close($con);
?>