<?php
include_once './controller/xuly_login.php';
$xl_login = new xuly_login();
if (isset($_POST['btn_login'])) {
  $thongtin = $xl_login->thong_tin_user_theo_email($_POST['email']);
  $email = addslashes($_POST["email"]);
  $MK = addslashes($_POST["MK"]);
  if ($email == $thongtin->Email && $MK == $thongtin->MK) {
    echo "<script>alert('Đăng nhập thành công')</script>";
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>
    Quản lý tài khoản
  </title>
  <?php include './model/head-dont-touch.php' ?>

</head>

<body>
  <!--top-header-->
  <?php include './model/top-header.php' ?>

  <!--start-logo-->
  <?php include './model/start-logo.php' ?>

  <!--Menu-->
  <?php include './model/menu.php' ?>

  <!--breadcrumbs-->
  <?php include './model/breadcrumbs.php' ?>

  <!--account-starts-->
  <div class="account">
    <div class="container">
      <div class="account-top heading">
        <h2>Tài khoản</h2>
      </div>

      <form method="post">
        <div class="account-main">
          <div class="col-md-6 account-left">
            <h3>Đăng nhập</h3>
            <div class="account-bottom">
              <input type="email" class="form-control" required="" name="email" />
              <input type="password" class="form-control" required="" name="MK" />
              <div class="address">
                <a class="forgot" href="#">Quên mật khẩu ?</a>
                <input type="submit" value="" name="btn_login" class="btn_login" />
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