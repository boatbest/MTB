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