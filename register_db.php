<?php 
    session_start();
    include('server.php');
    $errors = array();

    if (isset($_POST['register_user'])) {
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $tel = mysqli_real_escape_string($con, $_POST['tel']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $password2 = mysqli_real_escape_string($con, $_POST['password2']);
        $date = $_POST['date'];
        if ($password == $password2) {

            $user_check_query = "SELECT * FROM customer WHERE Email_User = '$email' OR Tel_User = '$tel' LIMIT 1";
            $query = mysqli_query($con, $user_check_query);
            $result = mysqli_fetch_assoc($query);

            if ($result) { 
                if ($result['Email_User'] == $email) {
                    array_push($errors, "อีเมลนี่มีคนใช้แล้ว");
                    $_SESSION['error'] = "อีเมลนี่มีคนใช้แล้ว";
                }
                if ($result['Tel_User'] == $tel) {
                    array_push($errors, "โปรดใช้เบอร์โทรศัพท์อื่น");
                    $_SESSION['error'] = "โปรดใช้เบอร์โทรศัพท์อื่น";
                }
                header("location: register.php"); 
            }
            if (count($errors) == 0) {
                $sql = "INSERT INTO customer (Tel_User,Name_User,Email_User,Pass_User,BDate_User) VALUES ('$tel','$name','$email','$password','$date')";
                mysqli_query($con, $sql);
                $_SESSION['email'] = $email;          
                header('location: index.php');
            }  
        }  
        else{
            array_push($errors, "โปรดใส่รหัสผ่านให้ตรงกัน");
            $_SESSION['error'] = "โปรดใส่รหัสผ่านให้ตรงกัน";
            header("location: register.php");  
        }  
    }
?>