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

        $upload = $_FILES['img'];
        $numrand = (mt_rand());
        
        if ($upload <> '') {
            $path = "img/shop/";
            $newname = $numrand.$_FILES['img']['name'];
            $path_copy = $path.$newname;
            move_uploaded_file($_FILES['img']['tmp_name'], $path_copy);
        }     

        if ($password == $password2) {
            $user_check_query = "SELECT * FROM shop WHERE Email_Shop = '$email' OR Tel_Shop = '$tel' OR Name_Shop = '$name' LIMIT 1";
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
   
                header("location: registershop.php"); 
            }
            if (count($errors) == 0){
                $sql = "INSERT INTO shop (Email_Shop,Pass_Shop,Name_Shop,Tel_Shop,Pic_Shop) VALUES ('$email','$password','$name','$tel','$newname')";
                mysqli_query($con, $sql);
                $_SESSION['email'] = $email;          
                header('location: shop.php');
            }  
        }  
        else{
            array_push($errors, "โปรดใส่รหัสผ่านให้ตรงกัน");
            $_SESSION['error'] = "โปรดใส่รหัสผ่านให้ตรงกัน";
            header("location: registershop.php");  
        }  
    }
?>