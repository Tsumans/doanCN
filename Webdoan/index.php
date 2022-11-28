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
      Laptop Cao Lỗ - Chuyên mua bán laptop
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

    <!--banner-starts-->
    <div class="bnr" id="home">
      <div id="top" class="callbacks_container">
        <ul class="rslides" id="slider4">
          <li>
            <img src="images/laptop-acer-i9-11900H.png" alt="Laptop Acer Predator Gaming Helios PH315-54-99S6 i9 11900H/16G/512G/15.6/GeForce RTX3060 6G/Win 11" />
          </li>
          <li>
            <img src="images/Surface-Pro-8.png" alt="Surface Pro 8 Core i5 / 8GB / 128GB" />
          </li>
          <li>
            <img src="images/RAZER-BLADE-15-BASE-(2020).png" alt="RAZER BLADE 15 BASE (2020)" />
          </li>
        </ul>
      </div>
      <div class="clearfix"></div>
    </div>
    <!--banner-ends-->
    <!--Slider-Starts-Here-->
    <script src="js/responsiveslides.min.js"></script>
    <script>
      // You can also use "$(window).load(function() {"
      $(function () {
        // Slideshow 4
        $("#slider4").responsiveSlides({
          auto: true,
          pager: true,
          nav: true,
          speed: 500,
          namespace: "callbacks",
          before: function () {
            $(".events").append("<li>before event fired.</li>");
          },
          after: function () {
            $(".events").append("<li>after event fired.</li>");
          },
        });
      });
    </script>
    <!--End-slider-script-->
    <!--about-starts-->
    <div class="about">
      <div class="container">
        <div class="about-top grid-1">
          <div class="col-md-4 about-left">
            <figure class="effect-bubba">
              <img class="img-responsive" src="images/laptop-acer-i9-11900H.png"
               alt="Laptop Acer Predator Gaming Helios PH315-54-99S6 i9 11900H/16G/512G/15.6/GeForce RTX3060 6G/Win 11" />
              <figcaption>
                <h2>Laptop Acer Predator Gaming Helios PH315-54-99S6 i9 11900H/16G/512G/15.6/GeForce RTX3060 6G/Win 11</h2>
              </figcaption>
            </figure>
          </div>
          <div class="col-md-4 about-left">
            <figure class="effect-bubba">
              <img class="img-responsive" src="images/Surface-Pro-8.png" 
              alt="Surface Pro 8 Core i5 / 8GB / 128GB" />
              <figcaption>
                <h4>Surface Pro 8 Core i5 / 8GB / 128GB</h4>
              </figcaption>
            </figure>
          </div>
          <div class="col-md-4 about-left">
            <figure class="effect-bubba">
              <img class="img-responsive" src="images/RAZER-BLADE-15-BASE-(2020).png" 
              alt="RAZER BLADE 15 BASE (2020)" />
              <figcaption>
                <h4>RAZER BLADE 15 BASE (2020)</h4>
              </figcaption>
            </figure>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <!--about-end-->
    <!--product-starts-->
    <div class="product">
      <div class="container">
        <div class="product-top">
          <div class="product-one">
            <div class="col-md-3 product-left">
              <div class="product-main simpleCart_shelfItem">
                <a href="single.php" class="mask"
                  ><img
                    class="img-responsive zoom-img"
                    src="images/Acer/Laptop Acer Gaming Nitro 5 Eagle AN515-57-71VV NH.QENSV.005.jpg"
                    alt="Laptop Acer Gaming Nitro 5 Eagle AN515-57-71VV NH.QENSV.005.jpg"
                /></a>
                <div class="product-bottom">
                  <h3>Laptop Acer Gaming Nitro 5 Eagle AN515-57-71VV NH.QENSV.005</h3>
                  <p>Mua ngay</p>
                  <h4>
                    <a class="item_add" href="#"><i></i></a>
                    <span class="item_price">23.990.000 ₫</span>
                  </h4>
                </div>
                <div class="srch">
                  <span>-50%</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 product-left">
              <div class="product-main simpleCart_shelfItem">
                <a href="single.php" class="mask"
                  ><img
                    class="img-responsive zoom-img"
                    src="images/Asus/Laptop Asus Vivobook Flip 14 TP470EA EC346W.jpg"
                    alt="Laptop Asus Vivobook Flip 14 TP470EA EC346W"
                /></a>
                <div class="product-bottom">
                  <h3>Laptop Asus Vivobook Flip 14 TP470EA EC346W</h3>
                  <p>Mua ngay</p>
                  <h4>
                    <a class="item_add" href="#"><i></i></a>
                    <span class="item_price">13.990.000 ₫</span>
                  </h4>
                </div>
                <div class="srch">
                  <span>-50%</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 product-left">
              <div class="product-main simpleCart_shelfItem">
                <a href="single.php" class="mask"
                  ><img
                    class="img-responsive zoom-img"
                    src="images/Mac/Apple Macbook Air M2 2022 8GB 256GB.png"
                    alt="Apple Macbook Air M2 2022 8GB 256GB"
                /></a>
                <div class="product-bottom">
                  <h3>Apple Macbook Air M2 2022 8GB 256GB</h3>
                  <p>Mua ngay</p>
                  <h4>
                    <a class="item_add" href="#"><i></i></a>
                    <span class="item_price">54.000.000 ₫</span>
                  </h4>
                </div>
                <div class="srch">
                  <span>-50%</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 product-left">
              <div class="product-main simpleCart_shelfItem">
                <a href="single.php" class="mask"
                  ><img
                    class="img-responsive zoom-img"
                    src="images/MSI/Laptop Gaming MSI Bravo 15 B5DD 276VN.png"
                    alt="Laptop Gaming MSI Bravo 15 B5DD 276VN"
                /></a>
                <div class="product-bottom">
                  <h3>Laptop Gaming MSI Bravo 15 B5DD 276VN</h3>
                  <p>Mua ngay</p>
                  <h4>
                    <a class="item_add" href="#"><i></i></a>
                    <span class="item_price">$ 18.090.000 ₫</span>
                  </h4>
                </div>
                <div class="srch">
                  <span>-50%</span>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="product-one">
            <div class="col-md-3 product-left">
              <div class="product-main simpleCart_shelfItem">
                <a href="single.php" class="mask"
                  ><img
                    class="img-responsive zoom-img"
                    src="images/Mac/iMac 24 2021 M1 7GPU 8GB 256GB.png"
                    alt="iMac 24 2021 M1 7GPU 8GB 256GB"
                /></a>
                <div class="product-bottom">
                  <h3>iMac 24 2021 M1 7GPU 8GB 256GB</h3>
                  <p>Mua ngay</p>
                  <h4>
                    <a class="item_add" href="#"><i></i></a>
                    <span class="item_price">23.000.000 đ</span>
                  </h4>
                </div>
                <div class="srch">
                  <span>-50%</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 product-left">
              <div class="product-main simpleCart_shelfItem">
                <a href="single.php" class="mask"
                  ><img
                    class="img-responsive zoom-img"
                    src="images/Mac/iMac 24 2021 M1 7GPU 8GB 256GB.png"
                    alt="iMac 24 2021 M1 7GPU 8GB 256GB"
                /></a>
                <div class="product-bottom">
                  <h3>iMac 24 2021 M1 7GPU 8GB 256GB</h3>
                  <p>Mua ngay</p>
                  <h4>
                    <a class="item_add" href="#"><i></i></a>
                    <span class="item_price">23.000.000 đ</span>
                  </h4>
                </div>
                <div class="srch">
                  <span>-50%</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 product-left">
              <div class="product-main simpleCart_shelfItem">
                <a href="single.php" class="mask"
                  ><img
                    class="img-responsive zoom-img"
                    src="images/Mac/iMac 24 2021 M1 7GPU 8GB 256GB.png"
                    alt="iMac 24 2021 M1 7GPU 8GB 256GB"
                /></a>
                <div class="product-bottom">
                  <h3>iMac 24 2021 M1 7GPU 8GB 256GB</h3>
                  <p>Mua ngay</p>
                  <h4>
                    <a class="item_add" href="#"><i></i></a>
                    <span class="item_price">23.000.000 đ</span>
                  </h4>
                </div>
                <div class="srch">
                  <span>-50%</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 product-left">
              <div class="product-main simpleCart_shelfItem">
                <a href="single.php" class="mask"
                  ><img
                    class="img-responsive zoom-img"
                    src="images/Mac/iMac 24 2021 M1 7GPU 8GB 256GB.png"
                    alt="iMac 24 2021 M1 7GPU 8GB 256GB"
                /></a>
                <div class="product-bottom">
                  <h3>iMac 24 2021 M1 7GPU 8GB 256GB</h3>
                  <p>Mua ngay</p>
                  <h4>
                    <a class="item_add" href="#"><i></i></a>
                    <span class="item_price">23.000.000 đ</span>
                  </h4>
                </div>
                <div class="srch">
                  <span>-50%</span>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div>
    <!--product-end-->
    <!--information-->
    <?php include './model/infomation.php' ?>
    
    <!--footer-->
    <?php include './model/footer.php' ?>

  </body>
</html>
