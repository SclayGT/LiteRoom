<?php
$TambahBuku = get_all_books();
$TambahBuku = get_all_book();
$slider1 = get_buku_by_slider('15');
$slider2 = get_buku_by_slider('16');
$slider3 = get_buku_by_slider('17');
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
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

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
              <img src="img/LiteRoom.png" alt="" width="123px" height="28px" />
            </a>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="header__nav">
            <nav class="header__menu mobile-menu">
              <ul>
                <li class="active"><a href="/index">Homepage</a></li>
                <!-- <li>
                  <a href="/categories">Categories</a>
                </li>
                <li><a href="/blog">Our Blog</a></li> -->
                <!-- <li><a href="#">Contacts</a></li> -->
              </ul>
            </nav>
          </div>
        </div>
          <div class="col-lg-2">
            <div class="header__right">
              <a href="#" class="search-switch"><span class="icon_search"></span></a>
              <a href="/"><span class="icon_profile"></span> 
              </a>

  

            </div>

          </div>

      </div>
      <div id="mobile-menu-wrap"></div>
    </div>
  </header>
  <!-- Header End -->

  <!-- Hero Section Begin -->
  <section class="hero" >
    <div class="container">
      <div class="hero__slider owl-carousel">
        <a href="/deskripsi/{{$slider1[0]->id}}">
        <div class="hero__items set-bg set-bgslider" data-setbg="img/slider/slider4.png">
          <!-- <div class="row">
            <div class="col-lg-6">
              <div class="hero__text">
                <div class="label">Adventure</div>
                <h2>Lorem, ipsum dolor sit amet consectetur adipisicing.</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a href="#"><span>Read Now</span> <i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div> -->
        </div>
        </a>
        <a href="/deskripsi/{{$slider2[0]->id}}">
        <div class="hero__items set-bg" data-setbg="img/slider/slider5.png">
          <!-- <div class="row">
            <div class="col-lg-6">
              <div class="hero__text">
                <div class="label">Adventure</div>
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing.</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a href="#"><span>Read Now</span> <i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div> -->
        </div>
        </a>
        <a href="/deskripsi/{{$slider3[0]->id}}">
        <div class="hero__items set-bg" data-setbg="img/slider/slider6.png">
          <!-- <div class="row">
            <div class="col-lg-6">
              <div class="hero__text">
                <div class="label">Adventure</div>
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <a href="#"><span>Read Now</span> <i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div> -->
      </div>
        </a>
    </div>
  </section>
  <!-- Hero Section End -->

  <!-- Product Section Begin -->
  <section class="product spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="trending__product">
            <div class="row">
              <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="section-title">
                  <h4>Trending Now</h4>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="btn__all">
                  <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                </div>
              </div>
            </div>
            <?php
            $i = 1;
            ?>
            <div class="row">
              @foreach($TambahBuku as $buku)
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div class="product__item__pic set-bg" data-setbg="{{Storage::url($buku->thumbnail)}}">
                    <div class="ep">{{($buku->chapter)}}</div>
                    <!-- <div class="comment"><i class="fa fa-comments"></i> 11</div> -->
                    <div class="view"><i class="fa fa-eye"></i> {{($buku->view)}}</div>
                  </div>
                  <div class="product__item__text">
                    <ul>
                      <li>{{($buku->genre)}}</li>
                      <!-- <li>Movie</li> -->
                    </ul>
                    <h5><a href="{{ route('detail-buku', ['id' => $buku->id]) }}">{{($buku->title)}}</a></h5>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
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
            <div class="product__sidebar__comment__item">
              <div class="product__item__pic set-bg" data-setbg="{{Storage::url($bukus->thumbnail)}}" style="width: 90px; height:140px; margin-bottom:23px; margin-top:80px;">
                <div class="product__sidebar__comment__item__pic">
                </div>
                <div class="product__sidebar__comment__item__text">
                  <ul>
                    <li>{{($bukus->genre)}}</li>
                  </ul>
                  <h5 style="width: 100px;"><a href="{{ route('detail-buku', ['id' => $bukus->id]) }}">{{($bukus->title)}}</a></h5>
                  <span style="width: 100px;"><i class="fa fa-eye"></i> {{($bukus->view)}} </span>
                </div>
              </div>
              <?php
              $i++;
              // Limit top view
              if ($i == 5) {
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
            <img src="img/LiteRoom.png" alt="" width="123px" height="28px" />
          </div>
        </div>
        <div class="col-lg-6">
          <div class="footer__nav">
            <ul>
              <li class="active"><a href="/index">Homepage</a></li>
              <!-- <li><a href="/categories">Categories</a></li>
              <li><a href="/blog">Our Blog</a></li> -->
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
 
  <livewire:search>
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