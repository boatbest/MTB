<!doctype html>
<html lang="en">
  <head>
    <?php include_once('inc/header.php');?>
  </head>

  <body>
    <?php include_once('inc/navbar.php');?>
    <?php include_once('inc/slider.php');?>

    <!-- Box Search -->
    <div class="part-form-search">
        <div class="box box-search-domain">
            <form class="form-inline">
              <div class="form-group mb-2">
                <label for="staticEmail2">ค้นหาชื่อโดเมน</label>
              </div>
              <div class="form-group mx-sm-3 mb-2">
                <input type="text" class="form-control" id="search-domain" placeholder="ค้นหาชื่อโดเมนของคุณ">
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary mb-2">ค้นหา</button>
            </form>
        </div>
    </div>

    <!-- About Us -->
    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="about-image">
                        <img src="assets/images/Server-Cloud02.png" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="about-content">
                        <h1 class="about-title">Metrabyte ONE</h1>
                        <h3 class="about-sub-title">ผู้ให้บริการระบบคลาวด์แบบครบวงจร</h3>
                        <p>SSD ย่อมาจาก Solid state drive คืออุปกรณ์อิเล็กทรนิกส์ที่ทำหน้าที่เหมือนกับฮาร์ดดิกส์เพียงแต่ หลักการทำงานนั้นแตกต่างจากฮาร์ดดิกส์รุ่นเก่า เป็นเทคโนโลยีใหม่ที่คนกำลังให้ความสนใจจำนวนมาก มันเป็นสิ่งที่แสดงให้เห็นถึงความก้าวหน้าทางเทคโนโลยีของหน่วยความจำหลัก การเปลี่ยนมาใช้ เอสเอสดี (SSD) ไม่ได้ปรับปรุงประสิทธิการทำงานเล็กๆ น้อยๆ แต่มันต่างกันกับฮาร์ดดิสก์ (HDD) อย่างเห็นได้ชัดเจน ในด้านความเร็วในการ Read/Write ข้อมูล เร็วกว่า มีผลทดสอบในการอ่านเร็วกว่า Harddisk ปกติ 3-8 เท่า เขียน เร็วกว่า 2-5 เท่า</p>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <!-- Choose Us -->
    <section class="choose-us-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-icon">
                            <i class="fab fa-windows fa-lg"></i>
                        </div>
                        <div class="card-content">
                            <h6>Microsoft License</h6>
                            <p>Services Provider License Agreement (SPLA) โดยเราใช้ Windows ลิขสิทธิ์ถูกต้อง</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-icon">
                            <i class="fas fa-database fa-lg"></i>
                        </div>
                        <div class="card-content">
                            <h6>Datacenter</h6>
                            <p>เราวาง Server ไว้ที่ Datacenter ชี้นนำอย่าง CSLOXINFO</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-icon">
                            <i class="fas fa-envelope fa-lg"></i>
                        </div>
                        <div class="card-content">
                            <h6>Free! Cloud Email 1GB</h6>
                            <p>สำหรับผู้สมัคร VPS หรือ Hosting เราให้คุณได้ใช้ระบบ Email ที่มีประสิทธิภาพฟรี</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-icon">
                            <i class="fas fa-bullhorn fa-lg"></i>
                        </div>
                        <div class="card-content">
                            <h6>THNIC Reseller</h6>
                            <p>ได้รับการแต่งตั้งจาก THNIC เป็นตัวแทน จดโดเมน .TH ระดับ Titanium Plus</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-icon">
                            <i class="fas fa-users fa-lg"></i>
                        </div>
                        <div class="card-content">
                            <h6>Web Programmer Support</h6>
                            <p>มี Web Programmer ที่มีประสบการณ์ ให้บริการปรึกษาปัญหา</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-icon">
                            <i class="far fa-clock fa-lg"></i>
                        </div>
                        <div class="card-content">
                            <h6>ONE Click Service install</h6>
                            <p>ลูกค้าสามารถ Install Web Application ได้ด้วยตัวเอง</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-icon">
                            <i class="fas fa-wrench fa-lg"></i>
                        </div>
                        <div class="card-content">
                            <h6>DELL Server</h6>
                            <p>ใช้ Server สมรรถนะสูง มี Engineer ดูแลใกล้ชิด</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-icon">
                            <i class="fas fa-dollar-sign fa-lg"></i>
                        </div>
                        <div class="card-content">
                            <h6>30 Day Money-back Guarantee</h6>
                            <p>หากไม่พอใจในการบริการ ยินดีคืนเงินใน 30 วัน</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- Package -->
    <section class="package-section">
        
    </section>

    <!-- Counter -->
    <section class="counter-section">

    </section>

    <!-- Contace Us -->
    <section class="contact-section">
        <div class="container">
            <div class="hero-image">
              <div class="hero-text">
                <h2>หากมีคำถามหรือข้อสงสัย?</h2>
                <p>เรายินดีให้คำปรึกษาหากลูกค้ามีข้อสงสัยเกี่ยวกับสินค้าหรือบริการของเรา</p>
                <div class="d-flex flex-row px-5">
                    <div class="p-2">
                        <i class="fas fa-headset fa-5x"></i>
                    </div>
                    <div class="p-2 text-left">
                        <h4 style="font-weight: 400; font-size: 1.25rem;">ติดต่อศูนย์บริการ (ทุกวัน)</h4>
                        <a data-finalurl="tel:021054283" data-name="tel:021054283" data-type="url" data-url="tel:021054283" href="tel:021054283">
                            <h2 style="color:rgba(255,255,255,1);">02-1054-283</h2>
                        </a>
                    </div>
                    
                </div>

                <button class="btn btn-yel mt-2" type="button" data-toggle="collapse" data-target="#collapseContact" aria-expanded="false" aria-controls="collapseContact">ติดต่อเรา</button>

              </div>
            </div>
        </div>
    </section>
        <div class="container">
            <div class="collapse" id="collapseContact">
                <div class="collapse-contact text-center">
                    <h1 class="">ติดต่อเรา</h1>
                    <label class="des-contact">คุณสามารถติดต่อแจ้งข้อมูลผ่านทางแบบฟอร์ม Online หรือ สามารถติดต่อพูดคุยผ่าน Line ID: @mtbone</label>
                    <div class="box-contact mx-auto">
                        <form>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <input type="text" class="form-control" id="inputName" placeholder="ชื่อ - นามสกุล">
                            </div>
                            <div class="form-group col-md-6">
                              <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                            </div>
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" id="inputSubject" placeholder="หัวเรื่อง">
                          </div>
                          <div class="form-group">
                            <textarea class="form-control" id="FormControlTextarea1" rows="8"></textarea>
                          </div>
                          <div class="text-right">
                              <button type="submit" class="btn btn-blu">ส่งข้อความ</button>
                          </div>
                          
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php include_once('inc/footer.php');?>
    <?php include_once('inc/footer-script.php'); ?>
    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            loop:true,
            items:1,
            nav:true,
            navText: ["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"]
        })
    </script>
  </body>
</html>