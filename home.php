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
  include("tool.php");
?>
<!DOCTYPE html>
<html lang="th" >
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/x-icon" href="https://food.grab.com/favicon.ico">
  <style>
    .swiper-wrapper {
      position: relative;
      width: 100%;
      height: 100%;
      z-index: 1;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-transition-property: -webkit-transform;
      transition-property: -webkit-transform;
      -o-transition-property: transform;
      transition-property: transform;
      transition-property: transform, -webkit-transform;
      -webkit-box-sizing: content-box;
      box-sizing: content-box
    }

    .swiper-container-android .swiper-slide,
    .swiper-wrapper {
      -webkit-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0)
    }

    .swiper-container-multirow>.swiper-wrapper {
      -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap
    }

    .swiper-container-free-mode>.swiper-wrapper {
      -webkit-transition-timing-function: ease-out;
      -o-transition-timing-function: ease-out;
      transition-timing-function: ease-out;
      margin: 0 auto
    }

    .swiper-slide {
      -webkit-flex-shrink: 0;
      -ms-flex-negative: 0;
      flex-shrink: 0;
      width: 100%;
      height: 100%;
      position: relative;
      -webkit-transition-property: -webkit-transform;
      transition-property: -webkit-transform;
      -o-transition-property: transform;
      transition-property: transform;
      transition-property: transform, -webkit-transform
    }

    .swiper-slide-invisible-blank {
      visibility: hidden
    }

    .swiper-container-autoheight,
    .swiper-container-autoheight .swiper-slide {
      height: auto
    }

    .swiper-container-autoheight .swiper-wrapper {
      -webkit-box-align: start;
      -webkit-align-items: flex-start;
      -ms-flex-align: start;
      align-items: flex-start;
      -webkit-transition-property: height, -webkit-transform;
      transition-property: height, -webkit-transform;
      -o-transition-property: transform, height;
      transition-property: transform, height;
      transition-property: transform, height, -webkit-transform
    }
  </style>
  <title class="next-head">ร้านอาหารทั้งหมด | GrabFood ประเทศไทย</title>
  <link rel="apple-touch-icon" href="https://weblogin.grab.com/apple-touch-icon.png">
  <link rel="shortcut icon" href="https://weblogin.grab.com/favicon.ico">
  <link rel="icon" type="image/x-icon" href="https://food.grab.com/favicon.ico" />
  <link rel="stylesheet" href="./login_files/pace.min.css">
  <link rel="stylesheet" href="./home_files/styles.fee2df89.chunk.css">

  <meta name="description" content="รวบรวมร้านอาหารชื่อดังและเมนูสุดโปรด ส่งตรงถึงมือคุณ! พบโปรโมชันและส่วนลดต่างๆ อีกมากมายที่ GrabFood" class="next-head">
  <meta property="og:url" content="https://food.grab.com/th/th/restaurants" class="next-head">
  <meta property="og:title" content="ร้านอาหารทั้งหมด  | GrabFood ประเทศไทย" class="next-head">
  <meta property="og:description" content="รวบรวมร้านอาหารชื่อดังและเมนูสุดโปรด ส่งตรงถึงมือคุณ! พบโปรโมชันและส่วนลดต่างๆ อีกมากมายที่ GrabFood" class="next-head">
 
</head>

<body>
  <div id="__next">
    <div></div>
    <div class="RootContainer___3O3da  ant-layout">
      <div></div>
      <div class="ant-layout-content" id="page-content">
        <div class="dividerBeforeSearch___1u8iI"></div>
        <div class="ant-layout">
          <div class="sectionContainer___3GDBD ant-layout">
            <div class="sectionContent___2XGJB sectionSearch___3ZuiE"><span class="borderless___1Qic_ inputSearch___124bz inputSearchOrdering___d64r_ ant-input-affix-wrapper"><span class="ant-input-prefix"><span class="icon-search gficon___2_7vT inputSearchIcon___1fKFv" style="font-size: 32px;"></span></span><input class="ant-input" placeholder="ค้นหาเมนูหรือร้านอาหาร" type="text" value=""></span></div>
            <div class="mainContainer___29XH6 categorySlider___1xwMd">
              <div>
                <div class="sectionContent___2XGJB swiperWithNavContainer___mGi4m">
                  <div class="swiper-container swiper-container-horizontal">
                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                      <div class="swiper-slide slideGroup___1XEBx swiper-slide-active">
                        <div role="button" aria-label="ลดสู้คู่คนไทย" tabindex="0" class="slide___3OA_q">
                          <div class="placeholder___1xbBh"><img alt="Category ลดสู้คู่คนไทย" class="realImage___2TyNE show___3oA6B" src="./home_files/placeholder-restaurant-2by1.jpg"></div>
                          <div class="slideOverlay___R6wjz">ลดสู้คู่คนไทย</div>
                        </div>
                      </div>
                      <div class="swiper-slide slideGroup___1XEBx swiper-slide-next">
                        <div role="button" aria-label="ฟรีค่าส่ง 10กม.ใส่รหัส &quot;Deli75&quot;" tabindex="0" class="slide___3OA_q">
                          <div class="placeholder___1xbBh"><img alt="Category ฟรีค่าส่ง 10กม.ใส่รหัส &quot;Deli75&quot;" class="realImage___2TyNE show___3oA6B" src="./home_files/placeholder-restaurant-2by1.jpg"></div>
                          <div class="slideOverlay___R6wjz">ฟรีค่าส่ง 10กม.ใส่รหัส "Deli75"</div>
                        </div>
                      </div>
                      <div class="swiper-slide slideGroup___1XEBx">
                        <div role="button" aria-label="คุ้มฟังธง" tabindex="0" class="slide___3OA_q">
                          <div class="placeholder___1xbBh"><img alt="Category คุ้มฟังธง" class="realImage___2TyNE show___3oA6B" src="./home_files/placeholder-restaurant-2by1.jpg"></div>
                          <div class="slideOverlay___R6wjz">คุ้มฟังธง</div>
                        </div>
                      </div>
                      <div class="swiper-slide slideGroup___1XEBx">
                        <div role="button" aria-label="ร้านใกล้คุณ" tabindex="0" class="slide___3OA_q">
                          <div class="placeholder___1xbBh"><img alt="Category ร้านใกล้คุณ" class="realImage___2TyNE show___3oA6B" src="./home_files/placeholder-restaurant-2by1.jpg"></div>
                          <div class="slideOverlay___R6wjz">ร้านใกล้คุณ</div>
                        </div>
                      </div>
                      <div class="swiper-slide slideGroup___1XEBx">
                        <div role="button" aria-label="ส่งฟรี 5 กม. ใส่โค้ด THAI" tabindex="0" class="slide___3OA_q">
                          <div class="placeholder___1xbBh"><img alt="Category ส่งฟรี 5 กม. ใส่โค้ด THAI" class="realImage___2TyNE show___3oA6B" src="./home_files/placeholder-restaurant-2by1.jpg"></div>
                          <div class="slideOverlay___R6wjz">ส่งฟรี 5 กม. ใส่โค้ด THAI</div>
                        </div>
                      </div>
                      <div class="swiper-slide slideGroup___1XEBx">
                        <div role="button" aria-label="GrabKitchen &amp; Combo" tabindex="0" class="slide___3OA_q">
                          <div class="placeholder___1xbBh"><img alt="Category GrabKitchen &amp; Combo" class="realImage___2TyNE show___3oA6B" src="./home_files/placeholder-restaurant-2by1.jpg"></div>
                          <div class="slideOverlay___R6wjz">GrabKitchen &amp; Combo</div>
                        </div>
                      </div>
                      <div class="swiper-slide slideGroup___1XEBx">
                        <div role="button" aria-label="Pepsi Recommended" tabindex="0" class="slide___3OA_q">
                          <div class="placeholder___1xbBh"><img alt="Category Pepsi Recommended" class="realImage___2TyNE show___3oA6B" src="./home_files/placeholder-restaurant-2by1.jpg"></div>
                          <div class="slideOverlay___R6wjz">Pepsi Recommended</div>
                        </div>
                      </div>
                      <div class="swiper-slide slideGroup___1XEBx">
                        <div role="button" aria-label="สั่งล่วงหน้า" tabindex="0" class="slide___3OA_q">
                          <div class="placeholder___1xbBh"><img alt="Category สั่งล่วงหน้า" class="realImage___2TyNE show___3oA6B" src="./home_files/placeholder-restaurant-2by1.jpg"></div>
                          <div class="slideOverlay___R6wjz">สั่งล่วงหน้า</div>
                        </div>
                      </div>
                      <div class="swiper-slide slideGroup___1XEBx">
                        <div role="button" aria-label="อาหารสุขภาพ" tabindex="0" class="slide___3OA_q">
                          <div class="placeholder___1xbBh"><img alt="Category อาหารสุขภาพ" class="realImage___2TyNE show___3oA6B" src="./home_files/healthy_c5b3c3a08e9b4c5d9a874806fb628a54_1548147559998540388.jpg"></div>
                          <div class="slideOverlay___R6wjz">อาหารสุขภาพ</div>
                        </div>
                      </div>
                      <div class="swiper-slide slideGroup___1XEBx">
                        <div role="button" aria-label="รวมดีลที่ GrabKitchen" tabindex="0" class="slide___3OA_q">
                          <div class="placeholder___1xbBh"><img alt="Category รวมดีลที่ GrabKitchen" class="realImage___2TyNE show___3oA6B" src="./home_files/placeholder-restaurant-2by1.jpg"></div>
                          <div class="slideOverlay___R6wjz">รวมดีลที่ GrabKitchen</div>
                        </div>
                      </div>
                      <div class="swiper-slide slideGroup___1XEBx">
                        <div role="button" aria-label="30% off apply THU30" tabindex="0" class="slide___3OA_q">
                          <div class="placeholder___1xbBh"><img alt="Category 30% off apply THU30" class="realImage___2TyNE show___3oA6B" src="./home_files/placeholder-restaurant-2by1.jpg"></div>
                          <div class="slideOverlay___R6wjz">30% off apply THU30</div>
                        </div>
                      </div>
                    </div><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                  </div>
                  <div class="swiperBtnPrev swiperBtnDisabled" role="button" aria-label="Previous" tabindex="0"><span class="icon-arrow-left gficon___2_7vT " style="font-size: 40px; color: rgb(103, 103, 103);"></span></div>
                  <div class="swiperBtnNext" role="button" aria-label="Next" tabindex="0"><span class="icon-arrow-right gficon___2_7vT " style="font-size: 40px; color: rgb(103, 103, 103);"></span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="dividerBeforeList___AEfay"></div>
        <div class="ant-layout">
          <div class="sectionContainer___3GDBD sectionCntList___19OTH ant-layout">
            <div class="sectionContent___2XGJB">
              <div class="breadcrumb___5JopJ ant-breadcrumb"><span><span class="link___2bcrF"><a href="https://food.grab.com/th/th/">บ้าน</a></span><span class="ant-breadcrumb-separator">
                    <div class="small___1YhlN" role="button" tabindex="0" style="display: inline-block; background-position: center center; background-repeat: no-repeat; background-size: contain; background-image: url(&quot;/static/images/icons/icon-next.svg&quot;);"></div>
                  </span></span><span><span class="ant-breadcrumb-separator">
                    <div class="small___1YhlN" role="button" tabindex="0" style="display: inline-block; background-position: center center; background-repeat: no-repeat; background-size: contain; background-image: url(&quot;/static/images/icons/icon-next.svg&quot;);"></div>
                  </span></span></div>
              <div class="ant-layout">
              <h1 class="title___dCI3A"><span class="textPrefix___8VBSV">พร้อมให้บริการใน </span><span>อาคาร 40 ปี มจพ. (มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ) - 40 year Anniversary Building (KMUTNB) - 1518, Phibun Songkhram, Bangkok, Bang Sue, Wong Sawang, Bangkok, Thailand, 10800, Thailand</span></h1>
              <h3 class="title___dCI3A"><span class="textPrefix___8VBSV"><span>รายการร้านค้าใกล้คุณ</span></h3>
                   
              <div class="ant-layout">
                <div>
                  <div class="ant-row-flex RestaurantListRow___1SbZY">
                    <?php
                      include("server.php");
                     $sql= "SELECT * from shop";
                     $result = mysqli_query($con, $sql);
                     while($row = mysqli_fetch_array($result)){
             echo   "<div class='ant-col-24 RestaurantListCol___1FZ8V  ant-col-md-12 ant-col-lg-6'><a href='buyfood.php?ID_Shop=$row[0]' style='color: inherit; text-decoration: none;'>";
              echo         ' <div class="ant-row-flex ant-row-flex-start ant-row-flex-top asList___1ZNTr">
                          <div class="ant-col-24 colPhoto___3vb-o ant-col-md-24 ant-col-lg-24">
                            <div class="promoTag___IYhfm">
                              <div class="placeholder___1xbBh restoPhoto___3nncy" style="border:1px solid black;"><img class="realImage___2TyNE show___3oA6B" src="img/shop/'.$row["Pic_Shop"] .'"></div>
                              <div class="promoTagHead___1bjRG">Promo</div>
                              <div class="promoTagTail___2Jy3D"></div>
                            </div>
                          </div>
                          <div class="ant-col-24 colInfo___3iLqj ant-col-md-24 ant-col-lg-24">
                            <h6 class="name___2epcT">'.$row["Name_Shop"] .'</h6>
                            <div class="basicInfoContainer___1DcNs">
                              <div class="basicInfoRow___UZM8d numbers___2xZGn">
                                <div class="numbersChild___2qKMV">
                                  <div class="medium___3F_Er ratingStar infoItemIcon___23Zvv" role="button" tabindex="0" style="display: inline-block; background-position: center center; background-repeat: no-repeat; background-size: contain; background-image: url(&quot;/static/images/icons/icon-star.svg&quot;);"></div>
                                </div>
                              </div>
                            </div>
                            <div class="basicInfoRow___UZM8d discount___3h-0m">
                              <div class="medium___3F_Er discountIcon infoItemIcon___23Zvv" role="button" tabindex="0" style="display: inline-block; background-position: center center; background-repeat: no-repeat; background-size: contain; background-image: url(&quot;/static/images/icons/icon-promo-tag.svg&quot;);"></div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>';}
                    ?>          
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="footerNew___2PBRV ant-layout">
          <div class="sectionContainer___3GDBD ant-layout">
            <div class="sectionContent___2XGJB">
              <div class="rowLogo___2YfqN">
                <div class="ant-row-flex ant-row-flex-middle">
                  <div class="" style="flex: 1 1 0%; width: 1px;"><a href="https://food.grab.com/th/"><img src="./home_files/logo-grabfood-mono.svg" alt="Grabfood logo" class="logoImage___TWof1"></a></div>
                  <div class="">
                    <div class="languageSelect___2AGCb"><a href="https://food.grab.com/th/th/restaurants#" class="languageSelectButton___AH58m ant-dropdown-trigger">TH<span class="icon-arrow-down-dark gficon___2_7vT languageSelectIcon___N3OJP" style="font-size: 16px;"></span></a></div>
                  </div>
                </div>
              </div>
              <div class="dividerNew___AO1pI dividerAfterLogoNew___3CSuV"></div>
              <div>
                <div class="ant-row-flex">
                  <div class="ant-col-24 ant-col-lg-6">
                    <div class="ant-row-flex">
                      <div class="footerHeader___2swlc">คำค้นหายอดนิยม</div>
                    </div>
                    <div class="ant-row-flex footerLinksNewContainer___1KhP_">
                      <li class="footerLinksNew___mRh2f"><a href="https://food.grab.com/th/th/chain/after-you-dessert-cafe-delivery" rel="noreferrer noopener">เมนูร้านอาฟเตอร์ยู</a></li>
                      <li class="footerLinksNew___mRh2f"><a href="https://food.grab.com/th/th/chain/bonchon-delivery" rel="noreferrer noopener">เมนูร้านบอนชอน</a></li>
                      <li class="footerLinksNew___mRh2f"><a href="https://food.grab.com/th/th/chain/burger-king-delivery" rel="noreferrer noopener">สั่ง เบอร์เกอร์คิง เดลิเวอรี</a></li>
                      <li class="footerLinksNew___mRh2f"><a href="https://food.grab.com/th/th/chain/coco-ichibanya-delivery" rel="noreferrer noopener">สั่ง โคโค่ อิฉิบันยะ เดลิเวอรี</a></li>
                      <li class="footerLinksNew___mRh2f"><a href="https://food.grab.com/th/th/chain/fuji-japanese-restaurant-delivery" rel="noreferrer noopener">เมนูร้านฟูจิ เรสเตอรองท์</a></li>
                      <li class="footerLinksNew___mRh2f"><a href="https://food.grab.com/th/th/chain/kamu-tea-delivery" rel="noreferrer noopener">สั่ง คามุที เดลิเวอรี</a></li>
                      <li class="footerLinksNew___mRh2f"><a href="https://food.grab.com/th/th/chain/the-koi-delivery" rel="noreferrer noopener">เมนูเครื่องดื่มร้านโคอิเตะ</a></li>
                      <li class="footerLinksNew___mRh2f"><a href="https://food.grab.com/th/th/chain/mcdonalds-delivery" rel="noreferrer noopener">สั่ง แมคโดนัลด์ เดลิเวอรี</a></li>
                      <li class="footerLinksNew___mRh2f"><a href="https://food.grab.com/th/th/chain/the-pizza-company-delivery" rel="noreferrer noopener">เมนูร้านเดอะ พิซซ่า คอมปะนี</a></li>
                      <li class="footerLinksNew___mRh2f"><a href="https://food.grab.com/th/th/chain/pizza-hut-delivery" rel="noreferrer noopener">สั่ง พิซซ่าฮัท เดลิเวอรี</a></li>
                      <li class="footerLinksNew___mRh2f"><a href="https://food.grab.com/th/th/chain/potato-corner-delivery" rel="noreferrer noopener">สั่ง โปเตโต้ คอร์เนอร์ เดลิเวอรี</a></li>
                      <li class="footerLinksNew___mRh2f"><a href="https://food.grab.com/th/th/chain/shinkanzen-sushi-delivery" rel="noreferrer noopener">สั่ง ชินคันเซ็น ซูชิ เดลิเวอรี</a></li>
                      <li class="footerLinksNew___mRh2f"><a href="https://food.grab.com/th/th/chain/starbucks-delivery" rel="noreferrer noopener">เมนูเครื่องดื่มร้านสตาร์บัคส์</a></li>
                      <li class="footerLinksNew___mRh2f"><a href="https://food.grab.com/th/th/chain/sushi-hiro-delivery" rel="noreferrer noopener">สั่ง ซูชิฮิโระ เดลิเวอรี</a></li>
                      <li class="footerLinksNew___mRh2f"><a href="https://food.grab.com/th/th/chain/swensens-delivery" rel="noreferrer noopener">สั่ง สเวนเซ่นส์ เดลิเวอรี</a></li>
                      <li class="footerLinksNew___mRh2f"><a href="https://food.grab.com/th/th/chain/texas-chicken-delivery" rel="noreferrer noopener">เมนูร้านเท็กซัส ชิคเก้น</a></li>
                      <li class="footerLinksNew___mRh2f"><a href="https://food.grab.com/th/th/chain/yayoi-japanese-restaurant-delivery" rel="noreferrer noopener">สั่ง ยาโยอิ เดลิเวอรี</a></li>
                    </div>
                  </div>
                  <div class="ant-col-24 ant-col-lg-6">
                    <div class="ant-row-flex">
                      <div class="footerHeader___2swlc">อาหารยอดนิยม</div>
                    </div>
                    <div class="ant-row-flex footerLinksNewContainer___1KhP_">
                      <li class="footerLinksNew___mRh2f"><a href="https://food.grab.com/th/th/restaurants?category=bubble-tea-29" rel="noreferrer noopener">ชาน ม ไข่มุก</a></li>
                      <li class="footerLinksNew___mRh2f"><a href="https://food.grab.com/th/th/restaurants?category=coffee-47" rel="noreferrer noopener">กาแฟ</a></li>
                      <li class="footerLinksNew___mRh2f"><a href="https://food.grab.com/th/th/restaurants?category=hainanese-chicken-rice-197" rel="noreferrer noopener">ข้าวมันไก่</a></li>
                      <li class="footerLinksNew___mRh2f"><a href="https://food.grab.com/th/th/restaurants?category=noodles-126" rel="noreferrer noopener">ก๋วยเตี๋ยว</a></li>
                      <li class="footerLinksNew___mRh2f"><a href="https://food.grab.com/th/th/restaurants?category=pad-thai-128" rel="noreferrer noopener">ผัดไทย</a></li>
                      <li class="footerLinksNew___mRh2f"><a href="https://food.grab.com/th/th/restaurants?category=pizza-135" rel="noreferrer noopener">พิซซ่า</a></li>
                      <li class="footerLinksNew___mRh2f"><a href="https://food.grab.com/th/th/restaurants?category=snacks-580" rel="noreferrer noopener">ขนม</a></li>
                      <li class="footerLinksNew___mRh2f"><a href="https://food.grab.com/th/th/restaurants?category=sushi-174" rel="noreferrer noopener">ซูชิ</a></li>
                    </div>
                  </div>
                  <div class="ant-col-24 ant-col-lg-6">
                    <div class="ant-row-flex">
                      <div class="footerHeader___2swlc">เกี่ยวกับ Grab</div>
                    </div>
                    <div class="ant-row-flex footerLinksNewContainer___1KhP_">
                      <li class="footerLinksNew___mRh2f"><a href="https://www.grab.com/th/about/" target="_blank" rel="noreferrer noopener">เกี่ยวกับ Grab</a></li>
                      <li class="footerLinksNew___mRh2f"><a href="https://www.grab.com/th/grabfood/" target="_blank" rel="noreferrer noopener">เกี่ยวกับ GrabFood</a></li>
                      <li class="footerLinksNew___mRh2f"><a href="https://www.grab.com/th/food-blog/" target="_blank" rel="noreferrer noopener">บล็อก</a></li>
                    </div>
                  </div>
                  <div class="ant-col-24 ant-col-lg-6">
                    <div class="ant-row-flex">
                      <div class="footerHeader___2swlc">บริการช่วยเหลือ</div>
                    </div>
                    <div class="ant-row-flex footerLinksNewContainer___1KhP_">
                      <li class="footerLinksNew___mRh2f"><a href="https://help.grab.com/passenger/en-th/115002258448-GrabFood" target="_blank" rel="noreferrer noopener">ศูนย์ช่วยเหลือ</a></li>
                      <li class="footerLinksNew___mRh2f"><a href="https://help.grab.com/passenger/en-th/115002258448-GrabFood" target="_blank" rel="noreferrer noopener">คำถามที่พบบ่อย</a></li>
                      <li class="footerLinksNew___mRh2f"><a href="https://www.grab.com/th/merchant/food/" target="_blank" rel="noreferrer noopener">สมัครร้านค้า GrabFood</a></li>
                      <li class="footerLinksNew___mRh2f"><a href="https://www.grab.com/th/driver/grabfood/" target="_blank" rel="noreferrer noopener">ขับรถกับ Grab</a></li>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footerDark___S9gLj ant-layout">
          <div class="sectionContainer___3GDBD ant-layout">
            <div class="sectionContent___2XGJB">
              <div class="ant-row-flex">
                <div class="ant-col-48 ant-col-lg-12">
                  <div class="countriesText___MzlOy floatLeft___2oihJ">ประเทศที่ให้บริการ GrabFood</div>
                  <div class="countriesList___sO-yc floatLeft___2oihJ"><a href="https://food.grab.com/id/" target="_blank" rel="noreferrer noopener">อินโดนีเซีย</a><a href="https://food.grab.com/ph/" target="_blank" rel="noreferrer noopener">ฟิลิปปินส์</a><a href="https://food.grab.com/th/" target="_blank" rel="noreferrer noopener">ไทย</a><a href="https://food.grab.com/vn/" target="_blank" rel="noreferrer noopener">เวียดนาม</a><a href="https://food.grab.com/sg/" target="_blank" rel="noreferrer noopener">สิงคโปร์</a><a href="https://food.grab.com/my" target="_blank" rel="noreferrer noopener">มาเลเซีย</a><a href="https://food.grab.com/mm" target="_blank" rel="noreferrer noopener">พม่า</a></div>
                </div>
                <div class="ant-col-48 newFooterSocialColDesk___1Q12p ant-col-lg-12">
                  <ul>
                    <li><a href="https://www.facebook.com/grabth" class="socialIcon___1V-EU" target="_blank" rel="noreferrer noopener"><span class="icon-facebook gficon___2_7vT " style="font-size: 32px;"></span></a></li>
                    <li><a href="https://www.instagram.com/grabfoodth" class="socialIcon___1V-EU" target="_blank" rel="noreferrer noopener"><span class="icon-instagram gficon___2_7vT " style="font-size: 32px;"></span></a></li>
                    <li><a href="https://twitter.com/grabth" class="socialIcon___1V-EU" target="_blank" rel="noreferrer noopener"><span class="icon-twitter gficon___2_7vT " style="font-size: 32px;"></span></a></li>
                  </ul>
                </div>
              </div>
              <div class="ant-row-flex">
                <div class="ant-col-48 ant-col-lg-12">
                  <div class="floatLeft___2oihJ termsAndCopyrightItemNew___NIf5K rowStoreTermsNew___SRA7u">© Grab 2021</div>
                  <div class="floatLeft___2oihJ rowStoreTermsNew___SRA7u"><a href="https://www.grab.com/th/terms/" target="_blank" rel="noreferrer noopener">เงื่อนไขในการให้บริการ</a><span class="dotSeperatorNew___1F4hd">•</span><a href="https://www.grab.com/th/privacy/" target="_blank" rel="noreferrer noopener">นโยบายความปลอดภัย</a></div>
                </div>
                <div type="flex" class="ant-col-48 appstoresNewDesk___VUivG ant-col-lg-12"><a href="https://grab.onelink.me/2695613898?pid=weblogin.grab.com&amp;c=8T9sKW2G-1629187384118-a74271de04a78-894666494&amp;is_retargeting=true&amp;af_dp=grab%3A%2F%2Fopen%3FscreenType%3DGRABFOOD%26sourceID%3Dfood-grab-com%26sourceCampaignName%3DGF-WEB-TH-restaurants-organic&amp;af_prt=food.grab.com&amp;af_web_dp=https%3A%2F%2Fitunes.apple.com%2Fapp%2Fid647268330%3Fmt%3D8%26l%3Dth" target="_blank" rel="noreferrer noopener" width="auto" height="38px"><img src="./home_files/logo-appstore.svg" alt="App store logo" style="width: auto; height: 38px;"></a><a href="https://grab.onelink.me/2695613898?pid=weblogin.grab.com&amp;c=8T9sKW2G-1629187384118-a74271de04a78-894666494&amp;is_retargeting=true&amp;af_dp=grab%3A%2F%2Fopen%3FscreenType%3DGRABFOOD%26sourceID%3Dfood-grab-com%26sourceCampaignName%3DGF-WEB-TH-restaurants-organic&amp;af_prt=food.grab.com&amp;af_web_dp=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dcom.grabtaxi.passenger%26hl%3Dth_TH" target="_blank" rel="noreferrer noopener" width="auto" height="38px"><img src="./home_files/logo-playstore.svg" alt="Google play logo" style="width: auto; height: 38px;"></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div>
    <div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
      <div class="grecaptcha-logo"><iframe title="reCAPTCHA" src="./home_files/anchor.html" width="256" height="60" role="presentation" name="a-89xqh47shad" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"></iframe></div>
      <div class="grecaptcha-error"></div><textarea id="g-recaptcha-response-100000" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
    </div>
  </div> 
  <script src="./login_files/pace.min.js.ดาวน์โหลด"></script>
</body>

</html>