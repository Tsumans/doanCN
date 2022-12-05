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
      Quản lý tài khoản 
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

    <!--account-starts-->
    <div class="account">
      <div class="container">
        <div class="account-top heading">
          <h2>Tài khoản</h2>
        </div>
        
        <form action="xuly_login.php" method="post">
        <div class="account-main">
          <div class="col-md-6 account-left">
            <h3>Đăng nhập</h3>
            <div class="account-bottom" >
              <input placeholder="Email" type="text" tabindex="3" required="" />
              <input
                placeholder="Password"
                type="password"
                tabindex="4"
                required= ""
              />
              <div class="address">
                <a class="forgot" href="#">Quên mật khẩu ?</a>
                <input type="submit" value="Đăng nhập" />
              </div>
            </div>
          </div>
          <div class="col-md-6 account-right account-left">
            <h3>Người dùng mới? Tạo tài khoản đi </h3>
            <p>
            Bằng cách tạo tài khoản với cửa hàng của chúng tôi,
            bạn sẽ có thể chuyển qua quy trình thanh toán nhanh hơn, 
            lưu trữ nhiều địa chỉ giao hàng, xem và theo dõi đơn đặt hàng trong tài khoản của bạn, v.v.
            </p>
            <a href="register.php">Tạo tài khoản mới</a>
          </div>
          <div class="clearfix"></div>
        </div>
        </form>
      </div>
    </div>
    <!--information-->
    <?php include './model/infomation.php' ?>
    
    <!--footer-->
    <?php include './model/footer.php' ?>
  </body>
</html>
