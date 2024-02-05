<?php
$TambahBuku = get_all_books();
$TambahBuku = get_all_book();

?>
<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Anime Template" />
    <meta name="keywords" content="Anime, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>LiteLoom</title>

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/plyr.css" type="text/css" />
    <link rel="stylesheet" href="css/nice-select.css" type="text/css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    @livewireStyles
  </head>

  <body>
    <!-- Page Preloder -->
    <div id="preloder">
      <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
      <div class="container">
        <div class="row">
          <div class="col-lg-2">
            <div class="header__logo">
              <a href="/index">
                <img src="img/LiteRoom.png" alt="" width="123px" height="28px"  />
              </a>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="header__nav">
              <nav class="header__menu mobile-menu">
                <ul>
                  <li><a href="/index">Homepage</a></li>
                  <li class="active">
                    <a href="/categories">Categories</a>
                  </li>
                  <li><a href="/blog">Our Blog</a></li>
                  <!-- <li><a href="#">Contacts</a></li> -->
                </ul>
              </nav>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="header__right">
              <a href="#" class="search-switch"><span class="icon_search"></span></a>
              <!-- <a href="/"><span class="icon_profile"></span>  -->
            </a>
            </div>
          </div>
        </div>
        <div id="mobile-menu-wrap"></div>
      </div>
    </header>
    <!-- Header End -->

        <!-- Breadcrumb Begin -->
        <div class="breadcrumb-option">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcrumb__links">
              <a href="/index"><i class="fa fa-home"></i> Home</a>
              <a href="/categories">Categories</a>
              <span>Romance</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Section Begin -->
    <section class="product spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <livewire:categories>
            <div class="live__product">
              <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-8">
            <div class="product__sidebar">
                <div class="filter__gallery">
                </div>
              </div>
              <div class="product__sidebar__comment">
    <div class="section-title">
        <h5>Top View</h5>
    </div>
    <?php
    // Mengurutkan array berdasarkan jumlah tayangan secara descending
    $sortedBuku = collect($TambahBuku)->sortByDesc('view')->values()->all();
    ?>
    <?php $i = 0; ?>
    @foreach($sortedBuku as $bukus)
    <div class="product__sidebar__comment__item" style="margin-bottom: 8px;">
        <div class="product__item__pic set-bg" data-setbg="{{Storage::url($bukus->thumbnail)}}" style="width: 90px; height:130px; margin-top:90px;">
            <div class="product__sidebar__comment__item__pic">
            </div>
            <div class="product__sidebar__comment__item__text">
                <ul>
                    <li>{{($bukus->genre)}}</li>
                </ul>
                <h5><a href="{{ route('detail-buku', ['id' => $bukus->id]) }}">{{($bukus->title)}}</a></h5>
                <span><i class="fa fa-eye"></i>{{($bukus->view)}} </span>
            </div>
        </div>
        <?php 
        $i++; 
        // Limit top view
        if($i == 5){
            break;
        }
        ?>
    </div>
    @endforeach
</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Product Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
      <div class="page-up">
        <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="footer__logo">
            <img src="img/LiteRoom.png" alt="" width="123px" height="28px"  />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="footer__nav">
              <ul>
                <li class="active"><a href="/index">Homepage</a></li>
                <li><a href="/categories">Categories</a></li>
                <li><a href="/blog">Our Blog</a></li>
                <!-- <li><a href="#">Contacts</a></li> -->
              </ul>
            </div>
          </div>
          <div class="col-lg-3">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              All rights reserved | This novel application made
              <i class="fa fa-heart" aria-hidden="true"></i> by
              <a href="https://colorlib.com" target="_blank">Rony Wijaya</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
      <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch"><i class="icon_close"></i></div>
        <form class="search-model-form">
          <input type="text" id="search-input" placeholder="Search here....." />
        </form>
      </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/player.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    @livewireScripts
  </body>
</html>
