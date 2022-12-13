<!DOCTYPE html>
<html>
  <head>
    <title>
      Đăng ký
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

    <!--register-starts-->
    <div class="register">
      <div class="container">
        <div class="register-top heading">
          <h2>Đăng kí</h2>
        </div>
        <form action="xuly_register.php" method="post">
        <div class="register-main">
          <div class="col-md-6 account-left">
            
            <input placeholder="Họ Tên" type="text" tabindex="2" required="" />
            <input placeholder="Email "type="text"tabindex="3"required="" />
            <input placeholder="SĐT" type="text" tabindex="3" required="" />
            <ul>
              <li>
                <label class="radio left"
                  ><input type="radio" name="radio" checked="" /><i></i
                  >Nam</label
                >
              </li>
              <li>
                <label class="radio"
                  ><input type="radio" name="radio" /><i></i>Nữ</label
                >
              </li>
              <div class="clearfix"></div>
            </ul>
          </div>
          <div class="col-md-6 account-left">
            <input
              placeholder="Mật khẩu"
              type="password"
              tabindex="4"
              required
            />
            <input
              placeholder="Nhập lại mật khẩu"
              type="password"
              tabindex="4"
              required
            />
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="address submit">
          <input type="submit" value="Submit" />
        </div>
        </form>
      </div>
    </div>
    <!--register-end-->
    <!--information-->
    <?php include './model/infomation.php' ?>
    
    <!--footer-->
    <?php include './model/footer.php' ?>

  </body>
</html>
