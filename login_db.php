<?php 
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['login_user'])) {
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        if (count($errors) == 0) {
            $query = "SELECT * FROM customer WHERE Email_User = '$email' AND Pass_User = '$password' ";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) == 1) {  
                $_SESSION['email'] = $email;
                $_SESSION['success'] = "";
                $row = mysqli_fetch_array($result);
                if($row["Level"]=="admin"){
                    Header("Location: admin.php");
                }
                else if($row["Level"]=="member"){
                    header("location: index.php");
                }
                else if($row["Level"]=="rider"){
                     header("location: rider.php");
                }
            } 
            else {          
                array_push($errors, "อีเมล์หรือรหัสผ่านผิดพลาด กรุณากรอกใหม่");
                $_SESSION['error'] = "อีเมล์หรือรหัสผ่านผิดพลาด กรุณากรอกใหม่";
                header("location: login.php");
            }
        }
    }
?>