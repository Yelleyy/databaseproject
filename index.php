<?php
session_start();
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['email']);
  header('location: login.php');
}
include("tool.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">
  <link rel="stylesheet" href="assets/css/owl-carousel.css">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" />
  <meta name="google" content="notranslate" />
  <script src="https://kit.fontawesome.com/2cad3d0e3d.js" crossorigin="anonymous"></script> 
  <link rel="icon" type="image/x-icon" href="https://food.grab.com/favicon.ico" />
  <title class="next-head">
    GrabFood | สั่งอาหารเดลิเวอรี่ใกล้ฉัน - โปรโมชั่นและเมนู | GrabFood
    ประเทศไทย
  </title>
</head>
<body>
  <div id="__next">
    <div></div>
    <div class="RootContainer___3O3da rootContainer___1Gqie ant-layout">
      <div></div>
 
      <div class="contentWrapper___3TBI2 ant-layout-content" id="page-content">
        <div class="backgroundImg___1q-r9" style="background-image: url('img/bg.jpg')"></div>
        <div class="
              sectionContainer___3GDBD
              searchSectionContainer___3Lhkk
              ant-layout
            ">
          <div class="searchContainer___3M35s" style="box-shadow: 0 8px 16px 0 rgba(0,0,0,0.3);" >
            <div class="heading___ACatC">
              <div class="searchGreeting___1Jcqq">ยินดีต้อนรับ</div>
              <div class="searchHeading___1o94S">
                ต้องการให้เราส่งอาหารไปที่ไหน?
              </div>
            </div>
            <div class="
                  wrapper___1pYim
                  inputAddress___1qrWr
                  locationDetectorOn___1nqSH
                ">
              <div class="
                    ant-select-lg ant-select-lg
                    autoCompAddress___iCC98
                    ant-select-show-search
                    ant-select-auto-complete
                    ant-select
                    ant-select-combobox
                    ant-select-enabled
                  " style="width: 100%">
                <div class="ant-select-selection ant-select-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                  <div class="ant-select-selection__rendered">
                    <ul>
                      <li class="ant-select-search ant-select-search--inline">
                        <div class="ant-select-search__field__wrap">
                          <span class="
                                ant-select-search__field
                                ant-input-affix-wrapper
                              "><span class="ant-input-prefix"><span class="bi bi-geo-alt btn-outline-danger" style="font-size: 32px"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span></span><input id="location-input" placeholder="กรอกที่อยู่ของคุณ" class="ant-input" type="text" value="อาคาร 40 ปี มจพ. (มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ) - 40 year Anniversary Building (KMUTNB) - 1518, Phibun Songkhram, Bangkok, Bang Sue, Wong Sawang, Bangkok, Thailand, 10800, Thailand" /></span><span class="ant-select-search__field__mirror" style="font-weight: 100;">อาคาร 40 ปี มจพ.
                            (มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ) - 40
                            year Anniversary Building (KMUTNB) - 1518, Phibun
                            Songkhram, Bangkok, Bang Sue, Wong Sawang,
                            Bangkok, Thailand, 10800, Thailand&nbsp;</span>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <span class="ant-select-arrow" unselectable="on" style="user-select: none"><b></b></span>
                </div>
              </div>
              <div>
                <div class="location-icon___xyg1b" role="button" tabindex="0">
                  <img src="./index_files/icon-geo-button.svg" alt="App store logo" />
                </div>
              </div>
            </div>
            <button type="button" class="ant-btn submitBtn___2roqB ant-btn-primary">
              <span>ค้นหา</span>
            </button>
          </div>
        </div>
        <div class="ant-layout">
          <div class="
                sectionContainer___3GDBD
                promotionsContainer___1M_It
                ant-layout
              ">
            <div class="sectionContent___2XGJB">
              <div class="ant-layout">
                <h1 class="title___2wxWx">
                  <span>โปรโมชั่น GrabFood ใน </span><span class="greenText___d27ze">อาคาร 40 ปี มจพ.
                    (มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ) - 40 year
                    Anniversary Building (KMUTNB) - 1518, Phibun Songkhram,
                    Bangkok, Bang Sue, Wong Sawang, Bangkok, Thailand, 10800,
                    Thailand</span>
                </h1>
              </div>
            </div>
              <section class="section" id="menu">
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    <div class="item">
                        <div class='card card1'>
                            <div class="price"><h6>Promo</h6></div>
                            <div class='info'>
                              <h1 class='title'>ขนมปังนึ่งโบราณ</h1>
                              <p class='description'>45 นาที  3 km. 4.5★</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card2'>
                            <div class="price"><h6>Promo</h6></div>
                            <div class='info'>
                              <h1 class='title'>ต๋องบะหมี่เกี๊ยว</h1>
                              <p class='description'>22 นาที  6 km. 3.5★</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card3'>
                            <div class="price"><h6>Promo</h6></div>
                            <div class='info'>
                              <h1 class='title'>นัดยำ</h1>
                              <p class='description'>32 นาที  10 km. 4★</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card4'>
                            <div class="price"><h6>Promo</h6></div>
                            <div class='info'>
                              <h1 class='title'>น้าแอ๊ด100เมนู</h1>
                              <p class='description'>32 นาที  10 km. 4★</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card5'>
                            <div class="price"><h6>Promo</h6></div>
                            <div class='info'>
                              <h1 class='title'>สวนลุงบุ๊ค</h1>
                              <p class='description'>32 นาที  10 km. 4★</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card6'>
                            <div class="price"><h6>Promo</h6></div>
                            <div class='info'>
                              <h1 class='title'>ไก่ทอดฉิ่นจ๊ะ</h1>
                              <p class='description'>32 นาที  10 km. 4★</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

              <a type="button" class="ant-btn ant-btn-block" href="home.php">
                <span>See all shop</span>
              </a>
            </div>
          </div>
          <div class="
                sectionContainer___3GDBD
                categoriesContainer___EH_A9
                ant-layout
              ">
            <div class="sectionContent___2XGJB">
              <div class="categoryTitle___vhrN1">เมนูมากมายเพื่อคุณ</div>
              <div class="categories___7Ww41">
                <div class="ant-row">
                  <?php   
  include("server.php");
  $sql = "select * from categoryf order by ID_CATF";
  $result = mysqli_query($con, $sql);
  while($row = mysqli_fetch_array($result))
    {
   echo '         <div class="ant-col-12 ant-col-md-8 ant-col-lg-6">';
   echo "                <a role='button' aria-label='".$row["CATF_Name"] ."tabindex='0' href='categoryf.php?ID=$row[0]'>";
   echo '                   <div class="category___2FjuL">
                        <div class="placeholder___1xbBh categoryImg___3xQyl">
                          <img alt="Category photo" class="realImage___2TyNE show___3oA6B" src="img/'.$row["Pic"] .'" />
                        </div>
                        <div class="title___mFwYG">'.$row["CATF_Name"] .'</div>
                      </div>
                    </a>
                  </div>';
    }
                  
?>
                </div>
              </div>
            </div>
          </div>
          
          <div class="sectionContainer___3GDBD seo___2UD4U ant-layout">
            <div class="sectionContent___2XGJB">
              <h3>ทำไมต้องเป็น GrabFood?</h3>
              <ul class="whyGrabfoodList___2Fjpg">
                <li>
                  <span class="bold___2_Blq">รวดเร็วที่สุด</span><span>
                    - GrabFood
                    ให้บริการจัดส่งอาหารที่รวดเร็วที่สุดในตลาด</span>
                </li>
                <li>
                  <span class="bold___2_Blq">ง่ายที่สุด</span><span>
                    - ตอนนี้การสั่งอาหารของคุณนั้น
                    ง่ายดายเพียงไม่กี่คลิกบนหน้าจอ
                    สั่งอาหารออนไลน์หรือดาวน์โหลด Grab
                    ซูเปอร์แอปของเราเพื่อประสบการณ์ความรวดเร็วและความคุ้มค่ามากยิ่งขึ้น</span>
                </li>
                <li>
                  <span class="bold___2_Blq">อาหารสำหรับทุกความปรารถนา</span><span>
                    - ตั้งแต่อาหารท้องถิ่นไปจนถึงอาหารจานโปรด
                    ตัวเลือกอาหารที่หลากหลายของเราจะตอบสนองต่อทุกความต้องการของคุณ</span>
                </li>
                <li>
                  <span class="bold___2_Blq">ชำระเงินได้อย่างง่ายดาย</span><span>
                    - การจัดส่งอาหารให้คุณเป็นเรื่องง่าย
                    แม้แต่การชำระเงินก็ง่ายและสะดวกมากยิ่งขึ้นด้วย
                    GrabPay</span>
                </li>
                <li>
                  <span class="bold___2_Blq">รางวัลตอบแทนมากขึ้น</span><span>
                    - รับคะแนนสะสม GrabRewards สำหรับทุกคำสั่งซื้อของคุณ
                    และใช้คะแนนแลกของรางวัลเพิ่มเติม</span>
                </li>
              </ul>
              <h3>คำถามที่พบบ่อย</h3>
              <h4>GrabFood คืออะไร?</h4>
              <p>
                GrabFood เป็นบริการจัดส่งอาหารที่รวดเร็วที่สุดในประเทศไทย
                เราได้จัดเตรียมอาหารจานโปรด ร้านอาหาร และอาหารอร่อยอื่นๆ
                ทั้งหมดของคุณ
                เพื่อช่วยให้คุณสามารถเลือกอาหารของคุณด้วยวิธีที่ง่ายและรวดเร็วที่สุดเท่าที่จะเป็นไปได้
                ค้นหาและสั่งอาหารที่คุณชื่นชอบได้จากทั่วทั้งประเทศไทย
                คุณสามารถค้นหาและสั่งอาหารจานโปรดของคุณได้ทั่วไทย
                เพียงแค่แตะไม่กี่ครั้งผ่านระบบออนไลน์ ไม่ว่าจะเป็นออน ล๊อก
                หยุ่น (On Lok Yun) ที่วังบูรพาภิรมย์สำหรับอาหารเช้า เปปเปอร์
                ลันช์ (Pepper Lunch) ที่สยามสแควร์วันสำหรับมื้อเที่ยง และไทย
                ไทย (Thai Thai Boat Noodles) ที่ถนนอังรีดูนังค์สำหรับมื้อค่ำ!
                เราอยู่ที่นี่เพื่อตอบสนองความหิวของคุณด้วยร้านพันธมิตรในประเทศไทยมากมายให้เลือกสรร
              </p>
              <button type="button" class="ant-btn readMore___1HEqB ant-btn-block">
                <span>Read More</span>
              </button>
              <div class="hide___1cQi5">
                <div class="ant-divider ant-divider-horizontal"></div>
                <h4>สั่งอาหารออนไลน์บน GrabFood อย่างไร?</h4>
                <p>
                  วิธีที่ง่ายที่สุดในการสั่งอาหารจาก GrabFood ในประเทศไทย
                  มีดังนี้:
                </p>
                <ol>
                  <li>
                    <span class="bold___2_Blq">ค้นหาร้านอาหารหรืออาหารที่คุณชื่นชอบ</span><span>
                      - กรอกที่อยู่ของคุณในหน้าแรก
                      แล้วดูรายชื่อร้านอาหารที่อยู่ใกล้คุณ
                      เลือกร้านอาหารที่คุณชื่นชอบ และเลือกดูเมนูอาหาร
                      แล้วจึงเลือกอาหารที่คุณต้องการสั่งซื้อ</span>
                  </li>
                  <li>
                    <span class="bold___2_Blq">ตรวจสอบและชำระเงิน</span><span>
                      - เมื่อคุณแน่ใจว่าคุณสั่งอาหารเพียงพอแล้ว ให้คลิกบนแท็บ
                      “ORDER NOW”
                      แล้วกรอกที่อยู่สุดท้ายสำหรับการจัดส่งอาหารของคุณ
                      เลือกวิธีการชำระเงินที่เหมาะสมกับคุณมากที่สุด
                      แล้วชำระเงิน</span>
                  </li>
                  <li>
                    <span class="bold___2_Blq">การจัดส่ง</span><span>
                      - GrabFood
                      ได้รับการออกแบบวิธีการใช้งานของลูกค้าให้มีความราบรื่นสำหรับคุณ
                      ดังนั้นคุณสามารถเพลิดเพลินกับอาหารได้อย่างไม่ยุ่งยาก
                      เราจะส่งอีเมลและข้อความ SMS
                      เพื่อยืนยันคำสั่งซื้อของคุณและแจ้งเวลาที่คาดว่าคุณจะได้รับอาหารที่สั่ง
                      อาหารของคุณกำลังจะมาถึงแล้ว</span>
                  </li>
                </ol>
                <div class="ant-divider ant-divider-horizontal"></div>
                <h4>
                  GrabFood ให้บริการจัดส่งอาหารทุกวัน ตลอด 24 ชั่วโมงหรือไม่??
                </h4>
                <p>
                  เราเข้าใจเพียงภาษาเดียว นั่นคือ อาหาร ดังนั้น ใช่แล้ว
                  เราให้บริการทุกวัน ตลอด 24 ชั่วโมง...
                  โปรดรับทราบว่าแม้ว่าเราจะเป็นพันธมิตรด้านอาหารของคุณทุกวัน
                  ตลอด 24 ชั่วโมง
                  แต่ร้านอาหารบางแห่งในรายการของเราอาจจะมีข้อจำกัดในการจัดส่งอาหารในช่วงดึก
                  หรืออาจจะไม่พร้อมสำหรับการสั่งซื้อ
                  แต่เราจะมีรายชื่อสำหรับผู้ที่รับประทานอาหารยามดึกในส่วนของการจัดส่งรอบดึกของเรา
                </p>
                <div class="ant-divider ant-divider-horizontal"></div>
                <h4>GrabFood รับเงินสดหรือไม่?</h4>
                <p>
                  แน่นอน เรารับเงินสด! GrabFood
                  รับการชำระเงินในทุกรูปแบบสำหรับการบริการจัดส่งอาหาร
                  รวมถึงเงินสดในการจัดส่งในประเทศไทย
                </p>
                <div class="ant-divider ant-divider-horizontal"></div>
                <h4>
                  ฉันสามารถชำระเงินออนไลน์บน GrabFood
                  สำหรับคำสั่งซื้ออาหารของฉันได้หรือไม่?
                </h4>
                <p>
                  GrabFood
                  รับการชำระเงินในหลากหลายรูปแบบสำหรับการสั่งอาหารออนไลน์
                  รวมถึงการชำระเงินออนไลน์ในประเทศไทยโดยใช้บัตรเครดิตหรือบัตรเดบิต
                  PayPal หรือชำระเงินสดในการจัดส่ง เราขอแนะนำการใช้งาน
                  <a href="https://www.grab.com/th/pay/">GrabPay</a>
                  ซึ่งคุณจะได้รับคะแนนสะสมเพิ่มขึ้น
                  และคุณสามารถนำไปใช้เป็นส่วนลดในการสั่งซื้อครั้งต่อไป
                  และการบริการอื่นๆของ Grab
                </p>
                <div class="ant-divider ant-divider-horizontal"></div>
                <h4>ฉันสามารถสั่ง GrabFood ให้คนอื่นได้หรือไม่?</h4>
                <p>
                  แน่นอน
                  เอาใจใส่คนที่คุณรักด้วยอาหารจานโปรดของพวกเขาที่จัดส่งถึงหน้าประตู
                  เพียงอัปเดตชื่อและที่อยู่ในการจัดส่งของผู้รับ
                  ก่อนทำการสั่งซื้อ
                </p>
                <div class="ant-divider ant-divider-horizontal"></div>
                <h4>GrabFood คิดค่าจัดส่งอาหารเท่าไร?</h4>
                <p>
                  ค่าจัดส่งของเราขึ้นอยู่กับปัจจัยการดำเนินงานหลายประการ เช่น
                  ระยะทางจากตำแหน่งของคุณไปยังร้านอาหาร เป็นต้น
                  คุณสามารถตรวจสอบจำนวนเงินที่คุณต้องจ่ายเป็นค่าจัดส่งก่อนที่จะชำระเงินบนแอป
                  Grab นอกจากนี้ยังมีส่วนของ “Free Delivery”
                  ซึ่งจะมีรายชื่อร้านอาหารที่อยู่ใกล้คุณที่ไม่คิดค่าจัดส่ง
                </p>
                <div class="ant-divider ant-divider-horizontal"></div>
                <h4>มีร้านอาหารใดบ้างที่อยู่ใน GrabFood</h4>
                <p>
                  อะไรที่ไม่มีอยู่ใน GrabFood?
                  เรามีร้านอาหารและอาหารประเภทต่างๆ
                  ที่มากมายหลากหลายที่สุดในบรรดาแอปส่งอาหารในประเทศไทย
                  คุณสามารถเลือกร้านอาหารนับพันร้านบน GrabFood Thailand
                  คุณสามารถสั่งอาหารออนไลน์จากร้านอาหารที่คุณชื่นชอบทั้งหมด
                  ไม่ว่าจะเป็น
                  <a href="https://food.grab.com/th/th/chain/bonchon-delivery">บอนชอน (BonChon)</a>,
                  <a href="https://food.grab.com/th/th/chain/the-pizza-company-delivery">เดอะพิซซ่า คอมปะนี (The Pizza
                    Company)</a>,
                  <a href="https://food.grab.com/th/th/chain/mcdonalds-delivery">แมคโดนัลด์ (McDonald's)</a>,
                  <a href="https://food.grab.com/th/th/chain/pizza-hut-delivery">พิซซ่าฮัท (Pizza Hut)</a>,
                  <a href="https://food.grab.com/th/th/chain/texas-chicken-delivery">เท็กซัส ชิคเก้น (Texas
                    Chicken)</a>,
                  <a href="https://food.grab.com/th/th/chain/yayoi-japanese-restaurant-delivery">ยาโยอิ (Yayoi Japanese
                    Restaurant)</a>,
                  <a href="https://food.grab.com/th/th/chain/burger-king-delivery">เบอร์เกอร์ คิง (Burger King)</a>,
                  <a href="https://food.grab.com/th/th/chain/starbucks-delivery">สตาร์บัคส์ (Starbucks)</a>,
                  <a href="https://food.grab.com/th/th/chain/coco-ichibanya-delivery">โคโค่ อิฉิบันยะ (Coco
                    Ichibanya)</a>
                  และอื่นๆ อีกมากมาย
                </p>
                <p>
                  นอกจากนี้ GrabFood ยังมีโปรโมชั่น ข้อเสนอ
                  และส่วนลดพิเศษสำหรับร้านอาหารในรายการของเราในเวลาจำกัด
                  คุณสามารถเพลิดเพลินกับส่วนลดมากมาย และข้อเสนออื่นๆ
                  อีกมากมายสำหรับการสั่งอาหารของคุณ
                  ตอนนี้ถึงเวลาไปรับอาหารนั่นแล้ว!
                </p>
                <div class="ant-divider ant-divider-horizontal"></div>
                <h4>GrabFood มีคำสั่งซื้อขั้นต่ำหรือไม่?</h4>
                <p>
                  ใช่แล้ว! แต่คุณสามารถชำระเงินส่วนต่าง
                  ถ้าคำสั่งซื้อของคุณน้อยกว่ายอดคำสั่งซื้อขั้นต่ำ
                </p>
              </div>
            </div>
          </div>
          <div class="bottomBannerContainer___2MvdK">
            <div class="sectionContainer___3GDBD ant-layout">
              <div class="sectionContent___2XGJB">
                <div class="ant-layout">
                  <div class="ant-row">
                    <div class="ant-col-24 ant-col-md-12">
                      <div class="restaurantContainer___3KCkC">
                        <img class="bannerImg___2UnGx" src="./index_files/bottom-food-options.svg" alt="" />
                        <div class="title___2f1Cp">ร้านอาหารตามสั่ง</div>
                        <div class="description___jhCzZ">
                          สั่งน้อยก็ได้ สั่งมากก็ดี ไม่มีจำกัดจำนวนขั้นต่ำ
                          เลือกได้ทุกอย่างที่คุณต้องการ
                        </div>
                      </div>
                    </div>
                    <div class="ant-col-24 ant-col-md-12">
                      <div class="downloadContainer___HHJus">
                        <img class="bannerImg___2UnGx" src="./index_files/ilus-cool-features-app.svg" alt="" />
                        <div class="title___2f1Cp">
                          สั่งง่าย สะดวกยิ่งขึ้นเมื่อใช้แอปฯ
                        </div>
                        <div class="description___jhCzZ">
                          ดาวน์โหลดแอปฯ Grab เพื่อชำระคำสั่งซื้ออย่างสะดวก
                          รวดเร็ว พร้อมติดต่อกับคนขับได้โดยตรง
                        </div>
                        <div class="logoContainer___1Z1VB">
                          <a href="https://grab.onelink.me/2695613898?pid=www.google.com&amp;c=8T9sKW2G-1629187384118-a74271de04a78-894666494&amp;is_retargeting=true&amp;af_dp=grab%3A%2F%2Fopen%3FscreenType%3DGRABFOOD%26sourceID%3Dfood-grab-com%26sourceCampaignName%3DGF-WEB-TH-home-organic&amp;af_prt=food.grab.com&amp;af_web_dp=https%3A%2F%2Fitunes.apple.com%2Fapp%2Fid647268330%3Fmt%3D8%26l%3Dth" target="_blank" rel="noreferrer noopener" class="storeDeeplink___3e556"><img src="./index_files/logo-appstore.svg" alt="App store logo" /></a><a href="https://grab.onelink.me/2695613898?pid=www.google.com&amp;c=8T9sKW2G-1629187384118-a74271de04a78-894666494&amp;is_retargeting=true&amp;af_dp=grab%3A%2F%2Fopen%3FscreenType%3DGRABFOOD%26sourceID%3Dfood-grab-com%26sourceCampaignName%3DGF-WEB-TH-home-organic&amp;af_prt=food.grab.com&amp;af_web_dp=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dcom.grabtaxi.passenger%26hl%3Dth_TH" target="_blank" rel="noreferrer noopener" class="storeDeeplink___3e556"><img src="./index_files/logo-playstore.svg" alt="Google play logo" /></a>
                        </div>
                      </div>
                    </div>
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
                  <div class="" style="flex: 1 1 0%; width: 1px">
                    <a href="https://food.grab.com/th/"><img src="./index_files/logo-grabfood-mono.svg" alt="Grabfood logo" class="logoImage___TWof1" /></a>
                  </div>
                  <div class="">
                    <div class="languageSelect___2AGCb">
                      <a href="https://food.grab.com/th/th/#" class="
                            languageSelectButton___AH58m
                            ant-dropdown-trigger
                          ">TH<span class="
                              icon-arrow-down-dark
                              gficon___2_7vT
                              languageSelectIcon___N3OJP
                            " style="font-size: 16px"></span></a>
                    </div>
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
                      <li class="footerLinksNew___mRh2f">
                        <a href="https://food.grab.com/th/th/chain/after-you-dessert-cafe-delivery" rel="noreferrer noopener">เมนูร้านอาฟเตอร์ยู</a>
                      </li>
                      <li class="footerLinksNew___mRh2f">
                        <a href="https://food.grab.com/th/th/chain/bonchon-delivery" rel="noreferrer noopener">เมนูร้านบอนชอน</a>
                      </li>
                      <li class="footerLinksNew___mRh2f">
                        <a href="https://food.grab.com/th/th/chain/burger-king-delivery" rel="noreferrer noopener">สั่ง
                          เบอร์เกอร์คิง เดลิเวอรี</a>
                      </li>
                      <li class="footerLinksNew___mRh2f">
                        <a href="https://food.grab.com/th/th/chain/coco-ichibanya-delivery" rel="noreferrer noopener">สั่ง โคโค่ อิฉิบันยะ เดลิเวอรี</a>
                      </li>
                      <li class="footerLinksNew___mRh2f">
                        <a href="https://food.grab.com/th/th/chain/fuji-japanese-restaurant-delivery" rel="noreferrer noopener">เมนูร้านฟูจิ เรสเตอรองท์</a>
                      </li>
                      <li class="footerLinksNew___mRh2f">
                        <a href="https://food.grab.com/th/th/chain/kamu-tea-delivery" rel="noreferrer noopener">สั่ง
                          คามุที เดลิเวอรี</a>
                      </li>
                      <li class="footerLinksNew___mRh2f">
                        <a href="https://food.grab.com/th/th/chain/the-koi-delivery" rel="noreferrer noopener">เมนูเครื่องดื่มร้านโคอิเตะ</a>
                      </li>
                      <li class="footerLinksNew___mRh2f">
                        <a href="https://food.grab.com/th/th/chain/mcdonalds-delivery" rel="noreferrer noopener">สั่ง
                          แมคโดนัลด์ เดลิเวอรี</a>
                      </li>
                      <li class="footerLinksNew___mRh2f">
                        <a href="https://food.grab.com/th/th/chain/the-pizza-company-delivery" rel="noreferrer noopener">เมนูร้านเดอะ พิซซ่า คอมปะนี</a>
                      </li>
                      <li class="footerLinksNew___mRh2f">
                        <a href="https://food.grab.com/th/th/chain/pizza-hut-delivery" rel="noreferrer noopener">สั่ง
                          พิซซ่าฮัท เดลิเวอรี</a>
                      </li>
                      <li class="footerLinksNew___mRh2f">
                        <a href="https://food.grab.com/th/th/chain/potato-corner-delivery" rel="noreferrer noopener">สั่ง โปเตโต้ คอร์เนอร์ เดลิเวอรี</a>
                      </li>
                      <li class="footerLinksNew___mRh2f">
                        <a href="https://food.grab.com/th/th/chain/shinkanzen-sushi-delivery" rel="noreferrer noopener">สั่ง ชินคันเซ็น ซูชิ เดลิเวอรี</a>
                      </li>
                      <li class="footerLinksNew___mRh2f">
                        <a href="https://food.grab.com/th/th/chain/starbucks-delivery" rel="noreferrer noopener">เมนูเครื่องดื่มร้านสตาร์บัคส์</a>
                      </li>
                      <li class="footerLinksNew___mRh2f">
                        <a href="https://food.grab.com/th/th/chain/sushi-hiro-delivery" rel="noreferrer noopener">สั่ง
                          ซูชิฮิโระ เดลิเวอรี</a>
                      </li>
                      <li class="footerLinksNew___mRh2f">
                        <a href="https://food.grab.com/th/th/chain/swensens-delivery" rel="noreferrer noopener">สั่ง
                          สเวนเซ่นส์ เดลิเวอรี</a>
                      </li>
                      <li class="footerLinksNew___mRh2f">
                        <a href="https://food.grab.com/th/th/chain/texas-chicken-delivery" rel="noreferrer noopener">เมนูร้านเท็กซัส ชิคเก้น</a>
                      </li>
                      <li class="footerLinksNew___mRh2f">
                        <a href="https://food.grab.com/th/th/chain/yayoi-japanese-restaurant-delivery" rel="noreferrer noopener">สั่ง ยาโยอิ เดลิเวอรี</a>
                      </li>
                    </div>
                  </div>
                  <div class="ant-col-24 ant-col-lg-6">
                    <div class="ant-row-flex">
                      <div class="footerHeader___2swlc">อาหารยอดนิยม</div>
                    </div>
                    <div class="ant-row-flex footerLinksNewContainer___1KhP_">
                      <li class="footerLinksNew___mRh2f">
                        <a href="https://food.grab.com/th/th/restaurants?category=bubble-tea-29" rel="noreferrer noopener">ชานมไข่มุก</a>
                      </li>
                      <li class="footerLinksNew___mRh2f">
                        <a href="https://food.grab.com/th/th/restaurants?category=coffee-47" rel="noreferrer noopener">กาแฟ</a>
                      </li>
                      <li class="footerLinksNew___mRh2f">
                        <a href="https://food.grab.com/th/th/restaurants?category=hainanese-chicken-rice-197" rel="noreferrer noopener">ข้าวมันไก่</a>
                      </li>
                      <li class="footerLinksNew___mRh2f">
                        <a href="https://food.grab.com/th/th/restaurants?category=noodles-126" rel="noreferrer noopener">ก๋วยเตี๋ยว</a>
                      </li>
                      <li class="footerLinksNew___mRh2f">
                        <a href="https://food.grab.com/th/th/restaurants?category=pad-thai-128" rel="noreferrer noopener">ผัดไทย</a>
                      </li>
                      <li class="footerLinksNew___mRh2f">
                        <a href="https://food.grab.com/th/th/restaurants?category=pizza-135" rel="noreferrer noopener">พิซซ่า</a>
                      </li>
                      <li class="footerLinksNew___mRh2f">
                        <a href="https://food.grab.com/th/th/restaurants?category=snacks-580" rel="noreferrer noopener">ขนม</a>
                      </li>
                      <li class="footerLinksNew___mRh2f">
                        <a href="https://food.grab.com/th/th/restaurants?category=sushi-174" rel="noreferrer noopener">ซูชิ</a>
                      </li>
                    </div>
                  </div>
                  <div class="ant-col-24 ant-col-lg-6">
                    <div class="ant-row-flex">
                      <div class="footerHeader___2swlc">เกี่ยวกับ Grab</div>
                    </div>
                    <div class="ant-row-flex footerLinksNewContainer___1KhP_">
                      <li class="footerLinksNew___mRh2f">
                        <a href="https://www.grab.com/th/about/" target="_blank" rel="noreferrer noopener">เกี่ยวกับ
                          Grab</a>
                      </li>
                      <li class="footerLinksNew___mRh2f">
                        <a href="https://www.grab.com/th/grabfood/" target="_blank" rel="noreferrer noopener">เกี่ยวกับ
                          GrabFood</a>
                      </li>
                      <li class="footerLinksNew___mRh2f">
                        <a href="https://www.grab.com/th/food-blog/" target="_blank" rel="noreferrer noopener">บล็อก</a>
                      </li>
                    </div>
                  </div>
                  <div class="ant-col-24 ant-col-lg-6">
                    <div class="ant-row-flex">
                      <div class="footerHeader___2swlc">บริการช่วยเหลือ</div>
                    </div>
                    <div class="ant-row-flex footerLinksNewContainer___1KhP_">
                      <li class="footerLinksNew___mRh2f">
                        <a href="https://help.grab.com/passenger/en-th/115002258448-GrabFood" target="_blank" rel="noreferrer noopener">ศูนย์ช่วยเหลือ</a>
                      </li>
                      <li class="footerLinksNew___mRh2f">
                        <a href="https://help.grab.com/passenger/en-th/115002258448-GrabFood" target="_blank" rel="noreferrer noopener">คำถามที่พบบ่อย</a>
                      </li>
                      <li class="footerLinksNew___mRh2f">
                        <a href="https://www.grab.com/th/merchant/food/" target="_blank" rel="noreferrer noopener">สมัครร้านค้า GrabFood</a>
                      </li>
                      <li class="footerLinksNew___mRh2f">
                        <a href="https://www.grab.com/th/driver/grabfood/" target="_blank" rel="noreferrer noopener">ขับรถกับ Grab</a>
                      </li>
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
                  <div class="countriesText___MzlOy floatLeft___2oihJ">
                    ประเทศที่ให้บริการ GrabFood
                  </div>
                  <div class="countriesList___sO-yc floatLeft___2oihJ">
                    <a href="https://food.grab.com/id/" target="_blank" rel="noreferrer noopener">อินโดนีเซีย</a><a href="https://food.grab.com/ph/" target="_blank" rel="noreferrer noopener">ฟิลิปปินส์</a><a href="https://food.grab.com/th/" target="_blank" rel="noreferrer noopener">ไทย</a><a href="https://food.grab.com/vn/" target="_blank" rel="noreferrer noopener">เวียดนาม</a><a href="https://food.grab.com/sg/" target="_blank" rel="noreferrer noopener">สิงคโปร์</a><a href="https://food.grab.com/my" target="_blank" rel="noreferrer noopener">มาเลเซีย</a><a href="https://food.grab.com/mm" target="_blank" rel="noreferrer noopener">พม่า</a>
                  </div>
                </div>
                <div class="
                      ant-col-48
                      newFooterSocialColDesk___1Q12p
                      ant-col-lg-12
                    ">
                </div>
              </div>
              <div class="ant-row-flex">
                <div class="ant-col-48 ant-col-lg-12">
                  <div class="
                        floatLeft___2oihJ
                        termsAndCopyrightItemNew___NIf5K
                        rowStoreTermsNew___SRA7u
                      ">
                    © Grab 2021
                  </div>
                  <div class="floatLeft___2oihJ rowStoreTermsNew___SRA7u">
                    <a href="https://www.grab.com/th/terms/" target="_blank" rel="noreferrer noopener">เงื่อนไขในการให้บริการ</a><span class="dotSeperatorNew___1F4hd">•</span><a href="https://www.grab.com/th/privacy/" target="_blank" rel="noreferrer noopener">นโยบายความปลอดภัย</a>
                  </div>
                </div>
                <div type="flex" class="ant-col-48 appstoresNewDesk___VUivG ant-col-lg-12">
                  <a href="https://grab.onelink.me/2695613898?pid=www.google.com&amp;c=8T9sKW2G-1629187384118-a74271de04a78-894666494&amp;is_retargeting=true&amp;af_dp=grab%3A%2F%2Fopen%3FscreenType%3DGRABFOOD%26sourceID%3Dfood-grab-com%26sourceCampaignName%3DGF-WEB-TH-home-organic&amp;af_prt=food.grab.com&amp;af_web_dp=https%3A%2F%2Fitunes.apple.com%2Fapp%2Fid647268330%3Fmt%3D8%26l%3Dth" target="_blank" rel="noreferrer noopener" width="auto" height="38px"><img src="./index_files/logo-appstore.svg" alt="App store logo" style="width: auto; height: 38px" /></a><a href="https://grab.onelink.me/2695613898?pid=www.google.com&amp;c=8T9sKW2G-1629187384118-a74271de04a78-894666494&amp;is_retargeting=true&amp;af_dp=grab%3A%2F%2Fopen%3FscreenType%3DGRABFOOD%26sourceID%3Dfood-grab-com%26sourceCampaignName%3DGF-WEB-TH-home-organic&amp;af_prt=food.grab.com&amp;af_web_dp=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dcom.grabtaxi.passenger%26hl%3Dth_TH" target="_blank" rel="noreferrer noopener" width="auto" height="38px"><img src="./index_files/logo-playstore.svg" alt="Google play logo" style="width: auto; height: 38px" /></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- jQuery -->
  <script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- Plugins -->
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/accordions.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/slick.js"></script> 
<script src="assets/js/isotope.js"></script> 

<!-- Global Init -->
<script src="assets/js/custom.js"></script>
</body>

</html>