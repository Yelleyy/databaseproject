<?php
  session_start();
  include("tool2.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <script type="text/javascript" async="" src="./login_files/analytics.js.ดาวน์โหลด"></script>
  <script type="text/javascript" async="" src="./login_files/recaptcha__th.js.ดาวน์โหลด" crossorigin="anonymous" integrity="sha384-uvKsSEPuZ9/WtEDkYQxybVsaXZF2z8foBgEmoVnaFPRzYaQZWJsxgIOrDmIl0po+"></script>
  <script async="" src="./login_files/gtm.js.ดาวน์โหลด"></script>
   <title>Grab</title>
  <meta name="description" content="weblogin at Grab.">
  <link rel="apple-touch-icon" href="https://weblogin.grab.com/apple-touch-icon.png">
  <link rel="shortcut icon" href="https://weblogin.grab.com/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="theme-color" content="#00b140">
  <link rel="stylesheet" href="./login_files/pace.min.css">
  <link href="./login_files/app.fe15dc7a87ac32b99d39.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets2/plugins/bootstrap/css/bootstrap.min.css">
  <script async="" defer="" src="./login_files/api.js.ดาวน์โหลด"></script>
</head>
<body class="  pace-done">
  <div class="pace  pace-inactive">
    <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
      <div class="pace-progress-inner"></div>
    </div>
    <div class="pace-activity"></div>
  </div>
  <div id="root">
    
    <section class="floatingBox ant-layout">
      <div>
   
    <?php if (isset($_SESSION['error'])) : ?>
                    
      <h3 align="center" class="ant-header" style="color: red;"> 
     <?php  
      echo "<script type='text/javascript'>";
      echo  "alert('".$_SESSION['error']."');";

	echo "</script>";
              unset($_SESSION['error']);
          
         ?>     
       
      </h3>
      
    <?php endif ?>
    </div>
      <div class="ant-card common__customCard___3CL84 ant-card-bordered">
        
        <div class="ant-card-body" style="box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);">
          <header class="AppBar__container___25Yqe ant-layout-header"><span>สมัครบัญชีร้าน Grab</span><span></span></header>
          <div class="AuthContent__container___1kijo">
            <form action="registershop_db.php" method="post" enctype="multipart/form-data" >
            <div class="AuthContent__innerContainer___2yvjH">
              <div class="AuthContent__brand___34GUL"><img alt="Grab" src="./login_files/brand.17cyXvs.svg"></div>
              <div class="VerifyPhone__container___jZVB5">
                <div class="VerifyPhone__heading___1YlJV">โปรดกรอกข้อมูลสมัครสมาชิกร้านค้า</div>
<style>
  .file{
    border: 1px gray solid;
    border-radius: 7px;
    padding: 8px;
  }
</style>
                <form class="grab-ui ant-form"><span class="VerifyPhone__inlineForm___2-3im">
                    <div class="ant-row grab-ui ant-form-item VerifyPhone__phoneInput___1boWe">
                      <div class="ant-col grab-ui ant-form-item-control-wrapper">
                        
                        <div class="grab-ui ant-form-item-control has-success"><span class="grab-ui ant-form-item-children">ชื่อร้าน<input placeholder="ชื่อร้าน" type="name" name="name" required  class="grab-ui ant-input"></span></div>
                        <br>
                        <div class="grab-ui ant-form-item-control has-success"><span class="grab-ui ant-form-item-children">อีเมล<input placeholder="อีเมล" type="email" name="email" required class="grab-ui ant-input"></span></div>
                        <br>
                        <div class="grab-ui ant-form-item-control has-success"><span class="grab-ui ant-form-item-children">เบอร์โทรร้าน<input placeholder="เบอร์โทรร้าน" type="tel" name="tel" pattern="[0]{1}[0-9]{9}" required class="grab-ui ant-input"></span></div>
                        <br>
                        <div class="grab-ui ant-form-item-control has-success"><span class="grab-ui ant-form-item-children">รหัสผ่าน<input placeholder="รหัสผ่าน" type="password" name="password" required class="grab-ui ant-input"></span></div>
                        <br>
                        <div class="grab-ui ant-form-item-control has-success"><span class="grab-ui ant-form-item-children">ยืนยันรหัสผ่านอีกครั้ง<input placeholder="ยืนยันรหัสผ่านอีกครั้ง" type="password" name="password2" required class="grab-ui ant-input"></span></div>
                        <br>
                        <div class="grab-ui ant-form-item-control has-success"><span class="grab-ui ant-form-item-children">รูปภาพร้าน<input placeholder="รูปภาพร้าน" type="file" name="img" class="file"></span></div>
                        <br>
                        <div class="grab-ui ant-form-item-control has-success"><span class="grab-ui ant-form-item-children">โค้ดสำหรับการสมัครเป็นสมาชิกร้านค้า<input pattern="shop" required placeholder="ใส่โค้ด" type="text"  class="grab-ui ant-input"></span></div>
                      </div>
                    </div>
                  </span>
                  <div class="ant-row grab-ui ant-form-item">
                    <div class="ant-col grab-ui ant-form-item-control-wrapper">
                      <div class="grab-ui ant-form-item-control has-success"><span class="grab-ui ant-form-item-children"><label class="grab-ui ant-checkbox-wrapper grab-ui ant-checkbox-wrapper-checked"><span class="grab-ui ant-checkbox grab-ui ant-checkbox-checked"><input id="consent" type="checkbox" class="grab-ui ant-checkbox-input" data-__meta="[object Object]" data-__field="[object Object]" value=""><span class="grab-ui ant-checkbox-inner"></span></span><span><span>ฉันยอมรับ <strong><a href="https://www.grab.com/terms" rel="noopener noreferrer" target="_blank">ข้อตกลงและเงื่อนไข</a></strong></span></span></label></span></div>
                    </div>
                  </div>
                  <div class="ant-row grab-ui ant-form-item">
                    <div class="ant-col grab-ui ant-form-item-control-wrapper">
                      <div class="grab-ui ant-form-item-control"><span class="grab-ui ant-form-item-children"><button type="submit" name="register_user" class="ant-btn VerifyPhone__buttonNext___3BxtN ant-btn-primary"><span>ถัดไป</span></button></span></div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div style="visibility: hidden; position: absolute; width: 100%; top: -10000px; left: 0px; right: 0px; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0;">
    <div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.5;"></div>
    <div style="margin: 0px auto; top: 0px; left: 0px; right: 0px; position: absolute; border: 1px solid rgb(204, 204, 204); z-index: 2000000000; background-color: rgb(255, 255, 255); overflow: hidden;"><iframe title="ภาพทดสอบ reCAPTCHA" src="./login_files/bframe.html" name="c-o294djkj31k4" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" style="width: 100%; height: 100%;"></iframe></div>
  </div>
</body>

</html>