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
<html lang="th">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
  <meta name="google" content="notranslate">

  <link rel="icon" type="image/x-icon" href="https://food.grab.com/favicon.ico">

  <title class="next-head">สั่งอาหาร </title>
  <meta name="twitter:card" content="summary_large_image" class="next-head">
  <meta name="twitter:site" content="@GrabTH" class="next-head">
  <meta property="og:type" content="website" class="next-head">
  <meta property="og:locale" content="en_TH" class="next-head">
  <meta property="og:site_name" content="Grabfood TH" class="next-head">
  <link rel="canonical" href="https://food.grab.com/th/th/" class="next-head">

</head>

<body>
  <div id="__next">
    <div></div>
    <div class="RootContainer___3O3da  ant-layout">
      <div></div>

      <div class="ant-layout-content" id="page-content">
        <div class="sectionContainer___3GDBD ant-layout" style="padding-top: 0px; margin-top: 0px">
          <div class="header___LAfE5" style="margin-bottom: 0px">
            <div class="merchantInfo___1GGGp">
              <div class="breadcrumb___5JopJ ant-breadcrumb"><span><span class="link___2bcrF"><a href="https://food.grab.com/th/th/">บ้าน</a></span><span class="ant-breadcrumb-separator">
                    <div class="small___1YhlN" role="button" tabindex="0" style="display: inline-block; background-position: center center; background-repeat: no-repeat; background-size: contain; background-image: url(&quot;/static/images/icons/icon-next.svg&quot;);"></div>
                  </span></span><span><span class="link___2bcrF"><a href="https://food.grab.com/th/th/restaurants">ร้านอาหาร</a></span><span class="ant-breadcrumb-separator">
                    <div class="small___1YhlN" role="button" tabindex="0" style="display: inline-block; background-position: center center; background-repeat: no-repeat; background-size: contain; background-image: url(&quot;/static/images/icons/icon-next.svg&quot;);"></div>
                    <?php
              include("server.php");
              $_SESSION["ID_Shop"]=$_REQUEST["ID_Shop"];
              $ID_Shop = $_REQUEST["ID_Shop"];
              $sql = "SELECT * from shop WHERE ID_Shop='$ID_Shop'";
              $result = mysqli_query($con, $sql);
              $row = mysqli_fetch_array($result);
              echo   '  
                  </span></span><span><span class="link___2bcrF"><span>'.$row["Name_Shop"].'</span></span><span class="ant-breadcrumb-separator">
                    <div class="small___1YhlN" role="button" tabindex="0" style="display: inline-block; background-position: center center; background-repeat: no-repeat; background-size: contain; background-image: url(&quot;/static/images/icons/icon-next.svg&quot;);"></div>
                  </span></span></div>
         
              <h1 class="name___1Ls94">'.$row["Name_Shop"].'</h1>';?>
              <div class="ratingAndDistance___1UT-a infoRow___3TzCZ">
                <div class="rating___1ZywF"><img src="./buyfood_files/icon-star.svg" alt="">
                  <div class="ratingText___1Q08c">4.8</div>
                </div>
                <div class="distance___3UWcK">
                  <div><img src="./buyfood_files/icon-clock.svg" alt="">23 นาที&nbsp;&nbsp;•&nbsp;&nbsp;5.7 km</div>
                </div>
              </div>
              <div class="openHours___1kqj0 infoRow___3TzCZ"><label for="opening-hours">เวลาเปิดให้บริการ</label>
                <div class="openHoursText___9q0va" name="opening-hours">Today&nbsp;&nbsp;07:00-20:00</div>
              </div>
            </div>
            <div class="scheduledOrderContainer___2Ck1O">
              <div class="ant-row">
                <div class="ant-col-xs-24 ant-col-sm-24 ant-col-md-8">
                  <div class="dateDropdownSelect___2Nirh ant-select ant-select-enabled">
                    <div class="ant-select-selection
            ant-select-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0">
                      <div class="ant-select-selection__rendered">
                        <div class="ant-select-selection-selected-value" style="display: block; opacity: 1;"><img class="dateDropdownLabelIcon___38UR3" alt="" src="./buyfood_files/icon-calendar.svg">Deliver date: Today</div>
                      </div><span class="ant-select-arrow" unselectable="on" style="user-select: none;"><b></b></span>
                    </div>
                  </div>
                </div>
                <div class="timeSelector___AvjK0 ant-col-xs-24 ant-col-sm-24 ant-col-md-8">
                  <div>
                    <div id="soTimeDropdown" class="timeDropdownSelect___VGcPN ant-select ant-select-enabled">
                      <div class="ant-select-selection
            ant-select-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0">
                        <div class="ant-select-selection__rendered">
                          <div class="ant-select-selection-selected-value" style="display: block; opacity: 1;"><img class="timeDropdownLabelIcon___3PTRo" alt="" src="./buyfood_files/icon-clock.svg">Deliver time: Now</div>
                        </div><span class="ant-select-arrow" unselectable="on" style="user-select: none;"><b></b></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="contentWrapper___1dZ_i" style="padding-top: 0px; margin-top: 0px">
          <div id="menu-tab" class="menuTabWrapper___1nYrr" style=" transition: unset;padding-top: 0px; margin-top: 0px">
            <div class="sectionContainer___3GDBD ant-layout" style="padding-top: 0px; margin-top: 0px">
              <div class="sectionContent___2XGJB" style="padding-top: 0px; margin-top: 0px">
                <div class="ant-tabs ant-tabs-top menuTab___32Icm ant-tabs-line">
                  <div role="tablist" class="ant-tabs-bar" tabindex="0">
                    <div class="ant-tabs-nav-container ant-tabs-nav-container-scrolling"><span unselectable="unselectable" class="ant-tabs-tab-prev ant-tabs-tab-btn-disabled ant-tabs-tab-arrow-show"><span class="ant-tabs-tab-prev-icon"></span></span><span unselectable="unselectable" class="ant-tabs-tab-next ant-tabs-tab-arrow-show"><span class="ant-tabs-tab-next-icon"></span></span>
                      <div class="ant-tabs-nav-wrap">
                        <div class="ant-tabs-nav-scroll">
                          <div class="ant-tabs-nav ant-tabs-nav-animated">
                            <div>
                              <div role="tab" aria-disabled="false" aria-selected="true" class="ant-tabs-tab-active ant-tabs-tab">โปรโมชั่นพิเศษ</div>
                            </div>
                            <div class="ant-tabs-ink-bar ant-tabs-ink-bar-animated" style="transform: translate3d(7px, 0px, 0px); width: 125px; display: block;"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="menuContentWrapper___2m6rD" style="padding-top: 0px; margin-top: 0px">
            <div class="sectionContainer___3GDBD ant-layout"style="padding-top: 0px; margin-top: 0px">
              <div class="sectionContent___2XGJB menuContentWrapperMobileOnly___3GuhD"style="padding-top: 0px; margin-top: 0px">
                <div>
                  <div>
                    <div class="category___3C8lX" id="เมนูพิเศษ_THCAT20210731151023035483">
                      <h2 class="categoryName___szaKI categoryName--notFirst___2iwcB">เมนูพิเศษ</h2>
                      <div class="ant-row categoryContent___MzDb2">
                     <?php
                      $sql1 = "SELECT * from foodstock WHERE ID_Shop='$ID_Shop'";
              $result1 = mysqli_query($con, $sql1);
              while ($row1 = mysqli_fetch_array($result1)) {
                echo   '
                        <div class="menuItemWrapper___bQmSP ant-col-md-24 ant-col-lg-8" >
                          <div class="menuItemWrapper___1xIAB">
                            <div style="width: 100%;"></div>
                            <div class="ant-row menuItem___1HHmD menuItem--firstInList" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
                              <div class="existingInCartLayout___1IUQD" style="display: none;"></div>
                              <div>
                                <div class="placeholder___1xbBh menuItemPhoto___1zY0s"><img class="realImage___2TyNE show___3oA6B" src="img/shop/'.$row1["PicFood"].'"></div>
                              </div>
                              <div class="ant-row menuItemInfo___PyfMY">
                                <div class="itemNameDescription___38JZv">
                                  <div class="ant-row-flex itemName___UD_E_" style="margin-left: -4px; margin-right: -4px;">
                                    <h3 style="padding-left: 4px; padding-right: 4px;">' . $row1["Food_Name"] . '</h3>
                                  </div>
                                  <h6 class="itemDescription___2cIzt"></h6>
                                </div>
                                <div style="display: flex; align-items: flex-end;">
                                  <div class="ant-row">
                                    <div class="ant-row itemPrice___DqSxA">
                                      <h6 class="discountedPrice___3MBVA">' .number_format($row1["price"],2) . ' บาท</h6>
                                    </div>
                                  </div>';
                                
                       echo        "   <a  class='plusContainer___3baTt'  href='cart.php?ID_Product=$row1[0]&op=add&ID_Shop=$ID_Shop'>";                            
                   echo               "  <div class='plus___1V9By' type='submit' name='id'></div>";
                    echo '        </a>
                                  </from>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>';
              }
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="noteBottom___1wNZt"><span>เรามุ่งมั่นที่จะนำเสนอข้อมูลที่ถูกต้องให้ลูกค้าอยู่เสมอ หากพบข้อมูลที่ต้องแก้ไข โปรด <a href="https://help.grab.com/hc/en-id/360000180447-Report-incorrect-restaurant-information" target="_blank" rel="noreferrer noopener">แจ้งให้เราทราบ</a></span></div>
        </div>
      </div>
      <div>
        <div class="footerNew___2PBRV ant-layout">
          <div class="sectionContainer___3GDBD ant-layout">
            <div class="sectionContent___2XGJB">
              <div class="rowLogo___2YfqN">
                <div class="ant-row-flex ant-row-flex-middle">
                  <div class="" style="flex: 1 1 0%; width: 1px;"><a href="https://food.grab.com/th/"><img src="./buyfood_files/logo-grabfood-mono.svg" alt="Grabfood logo" class="logoImage___TWof1"></a></div>
                  <div class="">
                    <div class="languageSelect___2AGCb"><a href="https://food.grab.com/th/th/restaurant/cafe-amazon-%E0%B8%84%E0%B8%B2%E0%B9%80%E0%B8%9F%E0%B9%88-%E0%B8%AD%E0%B9%80%E0%B8%A1%E0%B8%8B%E0%B8%AD%E0%B8%99-%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%8A%E0%B8%B2%E0%B8%8A%E0%B8%B7%E0%B9%88%E0%B8%99-26-delivery/3-CZLBRXDZT6MFME#" class="languageSelectButton___AH58m ant-dropdown-trigger">TH<span class="icon-arrow-down-dark gficon___2_7vT languageSelectIcon___N3OJP" style="font-size: 16px;"></span></a></div>
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
                <div type="flex" class="ant-col-48 appstoresNewDesk___VUivG ant-col-lg-12"><a href="https://grab.onelink.me/2695613898?pid=weblogin.grab.com&amp;c=8T9sKW2G-1629187384118-a74271de04a78-894666494&amp;is_retargeting=true&amp;af_dp=grab%3A%2F%2Fopen%3FscreenType%3DGRABFOOD%26sourceID%3Dfood-grab-com%26sourceCampaignName%3DGF-WEB-TH-restaurant-detail-3-CZLBRXDZT6MFME-organic&amp;af_prt=food.grab.com&amp;af_web_dp=https%3A%2F%2Fitunes.apple.com%2Fapp%2Fid647268330%3Fmt%3D8%26l%3Dth" target="_blank" rel="noreferrer noopener" width="auto" height="38px"><img src="./buyfood_files/logo-appstore.svg" alt="App store logo" style="width: auto; height: 38px;"></a><a href="https://grab.onelink.me/2695613898?pid=weblogin.grab.com&amp;c=8T9sKW2G-1629187384118-a74271de04a78-894666494&amp;is_retargeting=true&amp;af_dp=grab%3A%2F%2Fopen%3FscreenType%3DGRABFOOD%26sourceID%3Dfood-grab-com%26sourceCampaignName%3DGF-WEB-TH-restaurant-detail-3-CZLBRXDZT6MFME-organic&amp;af_prt=food.grab.com&amp;af_web_dp=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dcom.grabtaxi.passenger%26hl%3Dth_TH" target="_blank" rel="noreferrer noopener" width="auto" height="38px"><img src="./buyfood_files/logo-playstore.svg" alt="Google play logo" style="width: auto; height: 38px;"></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>