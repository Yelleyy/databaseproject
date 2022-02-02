<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <meta name="description" content="สั่งอาหารออนไลน์ง่ายๆ เร็วทันใจ ไม่ว่าจะอาหารไทยหรือต่างประเทศ รวมร้านเด็ดร้านดังให้คุณที่นี่" class="next-head" />
  <link rel="stylesheet" href="./index_files/styles.01504b54.chunk.css" />
  <link rel="icon" type="image/x-icon" href="https://food.grab.com/favicon.ico">
  <link rel="stylesheet" href="./login_files/pace.min.css">
  <script src="https://kit.fontawesome.com/2cad3d0e3d.js" crossorigin="anonymous"></script>
<body>
  <div class="stickyItem___3pj3B stickyHeaderCont___1j9ME stuck___SrjAy" style="top: 0px; box-shadow: 0 3px 6px 0 rgba(0,0,0,0.2);">
        <div class="headerOverlay___27TIq"></div>
        <div class="
              headerMainContainer___2XRCm
              header___1O0kh
              headerMain___1mq31
              ant-layout
            ">
          <div class="sectionContainer___3GDBD ant-layout">
            <div class="sectionContent___2XGJB">
              <div class="ant-row-flex ant-row-flex-middle headerMainRow___3PseE">
                <div class="">
                  <a class="logoLink___3M4kI" href="index.php" style="color: inherit"><img src="./index_files/logo-grabfood.svg" alt="GrabFood เดลิเวอรี - สั่งอาหารออนไลน์" class="logoImage___jg2xC" /><img src="./index_files/logo-grabfood-white.svg" alt="GrabFood เดลิเวอรี - สั่งอาหารออนไลน์" class="
                          logoImage___jg2xC
                          logoImageGhost___3k5Q2
                          hide___3Dtj9
                        " /></a>
                </div>



                <?php if (isset($_SESSION['email'])) : ?>
                  <div class="" style="flex: 1 1 0%; width: 1px"></div>
                  <a class="navbar-brand" href="profile.php">
                    <strong style="color: gray;"><?php echo "สวัสดีคุณ " . $_SESSION['email']; ?></strong></a>

                  <div class="btnGroupColV1___2k3xi">
                    <div class="FoodCartButtonWrapper___1kdhT">

                      <a class="FoodCartBtn___QfjRe isEmpty___1RwGh" role="button" tabindex="0" href="cart.php">
                        <i class="fas fa-shopping-bag"></i>
                        <span class="FoodCartText___Qs77Y"></span>
                      </a>
                    </div>
                  </div>
                  <li class="nav-link">
                    <a class="navbar-brand" href="invoice.php" style="color: gray;">ตรวจสอบสถานะ</a>
                  </li>
                  <a class="navbar-brand" href="index.php?logout='1'" style="color: red;"><strong>ออกจากระบบ</strong></a>
                <?php else : ?>
                  <div class="" style="flex: 1 1 0%; width: 1px"></div>
                  <div class="btnGroupColV1___2k3xi">
                    <div class="FoodCartButtonWrapper___1kdhT">

                      <a class="FoodCartBtn___QfjRe isEmpty___1RwGh" role="button" tabindex="0"  href="cart.php">
                        <i class="fas fa-shopping-bag"></i>
                        <span class="FoodCartText___Qs77Y"></span>
                      </a>
                    </div>
                  </div>
                  <div class="btnGroupColV1___2k3xi">
                    <div class="LoginInfoWrapper___3gqNV" id="user-icon">
                      <a class="NotLoggedInBox___2ic3u" href="login.php">เข้าสู่ระบบ</a>
                    </div>
                  </div>
                  <div class="btnGroupColV1___2k3xi">
                    <div class="LoginInfoWrapper___3gqNV" id="user-icon">
                      <a class="NotLoggedInBox___2ic3u" href="loginshop.php">เข้าสู่ระบบร้านค้า</a>
                    </div>
                  </div>
                <?php endif ?>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
<style>
  
  @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css");
  @import url('https://fonts.googleapis.com/css2?family=Prompt&display=swap');

  * {
    font-family: 'Prompt', sans-serif;

  }

  .fas {
    color: gray;
    background-color: white;
  }

  .btnGroupColV1___2k3xi .FoodCartButtonWrapper___1kdhT,
  .btnGroupColV1___2k3xi .LoginInfoWrapper___3gqNV {
    border: 1px solid #d6d6d6e6;
    border-radius: 5px;
  }

  .ant-row.grab-ui.ant-form-item.VerifyPhone__phoneInput___1boWe {
    width: 100%;
  }

  h3.ant-header {
    font-family: 'Prompt', sans-serif;
  }
</style>
<script src="./login_files/pace.min.js.ดาวน์โหลด"></script>