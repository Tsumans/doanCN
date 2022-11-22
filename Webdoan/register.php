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
          <h2>REGISTER</h2>
        </div>
        <div class="register-main">
          <div class="col-md-6 account-left">
            <input placeholder="First name" type="text" tabindex="1" required />
            <input placeholder="Last name" type="text" tabindex="2" required />
            <input
              placeholder="Email address"
              type="text"
              tabindex="3"
              required
            />
            <input placeholder="Mobile" type="text" tabindex="3" required />
            <ul>
              <li>
                <label class="radio left"
                  ><input type="radio" name="radio" checked="" /><i></i
                  >Male</label
                >
              </li>
              <li>
                <label class="radio"
                  ><input type="radio" name="radio" /><i></i>Female</label
                >
              </li>
              <div class="clearfix"></div>
            </ul>
          </div>
          <div class="col-md-6 account-left">
            <input
              placeholder="Password"
              type="password"
              tabindex="4"
              required
            />
            <input
              placeholder="Retype password"
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
      </div>
    </div>
    <!--register-end-->
    <!--information-->
    <?php include './model/infomation.php' ?>
    
    <!--footer-->
    <?php include './model/footer.php' ?>

  </body>
</html>