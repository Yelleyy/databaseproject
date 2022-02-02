<?php 
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['login_user'])) {
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        if (count($errors) == 0) {
            $query = "SELECT * FROM shop WHERE Email_Shop = '$email' AND Pass_Shop = '$password' ";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) == 1) {  
                $_SESSION['email'] = $email;
                $_SESSION['success'] = "";
                $row = mysqli_fetch_array($result);
                    header("location: shop.php");
            } 
            else {          
                array_push($errors, "อีเมล์หรือรหัสผ่านผิดพลาด กรุณากรอกใหม่");
                $_SESSION['error'] = "อีเมล์หรือรหัสผ่านผิดพลาด กรุณากรอกใหม่";
                header("location: loginshop.php");
            }
        }
    }
?>