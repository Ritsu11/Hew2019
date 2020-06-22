<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Journey</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap Reboot CSS -->
  <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Original CSS -->
  <link rel="stylesheet" href="css/custom.css">
</head>

<body>

  <!-- main navigation -->
  <header>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">

      <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand" href="#">Journey</a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

          <!-- Links -->
          <ul class="navbar-nav mr-auto smooth-scroll">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#country">Country</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="php/index.php">Vote</a>
            </li>
          </ul>

          <!-- Social Icon  -->
          <ul class="navbar-nav nav-flex-icons">
            <!-- Facebook -->
            <li class="nav-item">
              <a class="nav-link" href="https://www.facebook.com/profile.php?id=100008809846982"><i class="fab fa-facebook-f"></i></a>
            </li>
            <!-- Twitter -->
            <li class="nav-item">
              <a class="nav-link" href="https://twitter.com/R_Ism11"><i class="fab fa-twitter"></i></a>
            </li>
            <!-- Instagram -->
            <li class="nav-item">
              <a class="nav-link" href="https://www.instagram.com/r.ism_11/?hl=ja"><i class="fab fa-instagram"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--Mask-->
    <div id="intro" class="view">
      <div class="mask rgba-stylish-strong">
        <div class="container-fluid d-flex align-items-center justify-content-center h-100">
          <div class="row d-flex justify-content-center text-center">
            <!--Grid column-->
            <div class="col-md-12 mb-4 white-text text-center wow fadeIn">
              <h3 class="display-2 font-weight-bold white-text mb-4 pt-md-5 py-5"><img src="images/png.png" class="img-fluid" alt="Journey"></h3>
            </div>
          </div>
        </div>
      </div>
    </div>

  </header>

  <!-- main layout -->
  <main>

    <!-- Layout-1 -->
    <div class="container" id="about">

      <!--Section: about-->
      <section class="pt-5">

        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold text-center pb-4">About</h2>

        <!-- Grid row -->
        <div class="row mt-4">

          <!-- Grid column -->
          <div class="col-lg-5 text-center text-lg-left mb-4">
            <img class="img-fluid z-depth-1-half" src="images/Tourist.jpg" alt="AirPlane">
          </div>

          <!-- Grid column -->
          <div class="col-lg-7">

            <!-- Grid row -->
            <div class="row mb-3">

              <!-- Grid column -->
              <div class="col-1"></div>

              <!-- Grid column -->
              <div class="col-xl-10 col-md-11 col-10">
                <h5 class="font-weight-bold mb-3 ">What</h5>
                <p class="grey-text">様々な国の食、文化や観光地などを紹介します。<br>当サイトの投票機能利用してもらうことで人気のある国を知ることができます。
                </p>
              </div>
            </div>

            <!-- Grid row -->
            <div class="row mb-3">

              <!-- Grid column -->
              <div class="col-1"></div>

              <!-- Grid column -->
              <div class="col-xl-10 col-md-11 col-10">
                <h5 class="font-weight-bold mb-3">Why</h5>
                <p class="grey-text">”旅行に行きたいけど行先が決まらない”、”どこの国が旅行先の候補として人気があるか知りたい”、などいろんな人の意見を参考にしたいと思い作ったのがこのサイトです。
                </p>
              </div>
            </div>

            <!--Grid row-->
            <div class="row">

              <!-- Grid column -->
              <div class="col-1"></div>

              <!-- Grid column -->
              <div class="col-xl-10 col-md-11 col-10">
                <h5 class="font-weight-bold mb-3">How</h5>
                <p class="grey-text">Bootstrapでレスポンシブ対応させスマホでも閲覧できるようにしました。<br>ほかにも直感的に操作できるようにマテリアルデザインを意識して作りました。</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <hr class="mt-4" id="country">
    </div>

    <!-- Layout-2 -->
    <div class="container py-1">

      <section>

        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold text-center py-4">Country</h2>

        <!--Grid row-->
        <div class="row py-2">

          <!--Grid column-->
          <div class="col-lg-4 col-md-12 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <img src="images/Wien.jpg" class="card-img-top" alt="Austria">
                <a href="html/Country/Austria.php">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <!--Card content-->
              <div class="card-body">
                <!--Title-->
                <h4 class="card-title">Austria</h4>
                <!--Text-->
                <p class="card-text"><b>音楽の都</b><br>アルプス山脈と大自然に恵まれ、歴史的建築物や街並みが美しい</p>
                <a href="html/Country/Austria.php" class="btn unique-color text-light">Read More</a>
              </div>
            </div>
          </div>

          <!--Grid column-->
          <div class="col-lg-4 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <img src="images/London.jpg" class="card-img-top" alt="UnitedKingdom">
                <a href="html/Country/UK.php">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <!--Card content-->
              <div class="card-body">
                <!--Title-->
                <h4 class="card-title">UnitedKingdom</h4>
                <!--Text-->
                <p class="card-text"><b>4つの国からなる連合国</b><br>それぞれの街が独自の特徴を持ち、ユニークな文化と豊かな自然が楽しめる</p>
                <a href="html/Country/UK.php" class="btn unique-color text-light">Read More</a>
              </div>
            </div>
          </div>

          <!--Grid column-->
          <div class="col-lg-4 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <img src="images/Paris.jpg" class="card-img-top" alt="France">
                <a href="html/Country/France.php">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <!--Card content-->
              <div class="card-body">
                <!--Title-->
                <h4 class="card-title">France</h4>
                <!--Text-->
                <p class="card-text"><b>ロマンチックな国</b><br>芸術、伝統、歴史を重んじ、伝統とモダンさが共存する街が見られる</p>
                <a href="html/Country/France.php" class="btn unique-color text-light">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <!--Grid row-->
        <div class="row py-1">

          <!--Grid column-->
          <div class="col-lg-4 col-md-12 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <img src="images/Germany.jpg" class="card-img-top" alt="Germany">
                <a href="html/Country/Germany.php">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <!--Card content-->
              <div class="card-body">
                <!--Title-->
                <h4 class="card-title">Germany</h4>
                <!--Text-->
                <p class="card-text"><b>メッセでドイツ出張</b><br>歴史が古く、学問・制度など各分野で世界をリードし、EUの中心的存在</p>
                <a href="html/Country/Germany.php" class="btn unique-color text-light">Read More</a>
              </div>
            </div>
          </div>

          <!--Grid column-->
          <div class="col-lg-4 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <img src="images/Sweden.jpg" class="card-img-top" alt="Sweden">
                <a href="html/Country/Sweden.php">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <!--Card content-->
              <div class="card-body">
                <!--Title-->
                <h4 class="card-title">Sweden</h4>
                <!--Text-->
                <p class="card-text"><b>ノーベル賞の誕生</b><br>14もの島々からなる水の都は、街並みがお洒落で訪れるものを惹きつける</p>
                <a href="html/Country/Sweden.php" class="btn unique-color text-light">Read More</a>
              </div>
            </div>
          </div>

          <!--Grid column-->
          <div class="col-lg-4 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <img src="images/Finland.jpg" class="card-img-top" alt="Finland">
                <a href="html/Country/Finland.php">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <!--Card content-->
              <div class="card-body">
                <!--Title-->
                <h4 class="card-title">Finland</h4>
                <!--Text-->
                <p class="card-text"><b>ありのままの大自然</b><br>広大な森、北極圏の山々、何千もの青い湖のある自然豊かな国</p>
                <a href="html/Country/Finland.php" class="btn unique-color text-light">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <hr class="mt-4" id="contact">

      </section>

    </div>

    <!-- Layout-3 -->
    <div class="container py-4">
      <!--Section: Best Features-->
      <section id="best-features" class="text-center">

        <!-- Heading -->
        <h2 class="h1-responsive font-weight-bold mb-5">Contact</h2>

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-4 mb-5">
            <h4 class="my-3 font-weight-bold">Address</h4>
            <i class="fas fa-map-marked-alt fa-4x mr-2 grey-text"></i>
            <p class="my-4">1-7-3 Nishishinjuku,Shinjuku-ku, Tokyo</p>
          </div>

          <!--Grid column-->
          <div class="col-md-4 mb-1">
            <h4 class="my-3 font-weight-bold">Open</h4>
            <i class="fa fa-building fa-4x  grey-text"></i>
            <p class="my-4">Mon - Sat, 10:00-20:00</p>
          </div>

          <!--Grid column-->
          <div class="col-md-4 mb-1">
            <h4 class="my-3 font-weight-bold">Tel</h4>
            <i class="fa fa-phone fa-4x mr-2 grey-text"></i>
            <p class="my-4">070-4234-9420</p>
          </div>
        </div>
        <div id="map-container" class="z-depth-1-half map-container mb-5" style="height: 500px"></div>
      </section>
    </div>
  </main>

  <!-- Footer -->
  <footer class="page-footer font-small unique-color">
    <div class="container">
      <!--Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!--Grid column-->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0 white-text">Get connected with us on social networks</h6>
        </div>

        <!--Grid column-->
        <div class="col-md-6 col-lg-7 text-center text-md-right">
          <!--Facebook-->
          <a class="fb-ic ml-0" href="https://www.facebook.com/profile.php?id=100008809846982">
            <i class="fab fa-facebook white-text mr-4"> </i>
          </a>
          <!--Twitter-->
          <a class="tw-ic" href="https://twitter.com/R_Ism11">
            <i class="fab fa-twitter white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic" href="https://www.instagram.com/r.ism_11/?hl=ja">
            <i class="fab fa-instagram white-text mr-lg-4"> </i>
          </a>
        </div>
      </div>
    </div>

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright Journey All Rights Reserved.</div>

  </footer>


  <!-- jQuery -->
  <script src="js/vendor/jquery-3.4.1.min.js"></script>
  <!-- jQuery UI -->
  <script src="js/vendor/jquery-ui-1.10.3.custom.min.js"></script>
  <!-- modernizr JS -->
  <script src="js/vendor/modernizr.custom.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script src="js/vendor/popper.min.js"></script>
  <!-- Bootstrap core JS -->
  <script src="js/vendor/bootstrap.bundle.min.js"></script>
  <!-- MDB core JS -->
  <script src="js/vendor/mdb.min.js"></script>
  <!-- Google API -->
  <script src="https://maps.google.com/maps/api/js?key=AIzaSyDCRUzwQiN6uH0a867Fq7mCMxsrpbtv7hM"></script>
  <!-- GoogleMap Hal -->
  <script src="js/GoogleMap.js"></script>
  <!-- Original JS -->
  <script src="js/custom.js"></script>

</body>

</html>

<!-- Push Test -->