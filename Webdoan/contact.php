<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
  <head>
    <title>
      Liên hệ
    </title>
     <!--css- JavaScript- jquery  -->
     <?php include './model/head-dont-touch.php'?>

  </head>
  <body>
    <!--top-header-->
    <?php include './model/top-header.php'?>
    
    <!--start-logo-->
    <?php include './model/start-logo.php'?>
    
    <!--Menu-->
    <?php include './model/menu.php'?>

    <!--breadcrumbs-->
    <?php include './model/breadcrumbs.php'?>

    <!--contact-start-->
    <div class="contact">
      <div class="container">
        <div class="contact-top heading">
          <h2>CONTACT</h2>
        </div>
        <div class="contact-text">
          <div class="col-md-3 contact-left">
            <div class="address">
              <h5>Trụ sở </h5>
              <p>
              CTY TNHH LapTop Cao Lỗ
                <span>Địa chỉ: 180 Đ. Cao Lỗ, Phường 4, Quận 8, Thành phố Hồ Chí Minh, Việt Nam</span>
              </p>
            </div>
            <div class="address">
              <h5>Thông tin liên hệ </h5>
              <p>
                SĐT:
                <a href="tel:0903600551"> 0903600551 </a><br>
                Email:
                <a href="mailto:vutruong928@gmail.com">vutruong928@gmail.com</a>
              </p>
            </div>
          </div>
          <div class="col-md-9 contact-right">
            <form>
              <input type="text" placeholder="Name" />
              <input type="text" placeholder="Phone" />
              <input type="text" placeholder="Email" />
              <textarea placeholder="Message" required=""></textarea>
              <div class="submit-btn">
                <input type="submit" value="SUBMIT" />
              </div>
            </form>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <!--contact-end-->
    <!--map-start-->
    <div class="map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.95441038776!2d106.67564341474859!3d10.737997192347592!2m3!1f0!
        2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f62a90e5dbd%3A0x674d5126513db295!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2
        jhu4cgU8OgaSBHw7Ju!5e0!3m2!1svi!2s!4v1669001068708!5m2!1svi!2s"
        style="border: 0"
      ></iframe>
    </div>
    <!--map-end-->
    <!--information-->
    <?php include './model/infomation.php' ?>
    
    <!--footer-->
    <?php include './model/footer.php' ?>
  </body>
</html>
