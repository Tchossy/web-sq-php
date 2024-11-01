<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title> <?= SITE ?> </title>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Favicon -->
  <link rel="icon" href="<?= BASE_IMG . "/favicon.png" ?>">

  <!-- CSS -->
  <link rel="stylesheet" href="<?= BASE_STYLES . "/vendor/bootstrap.min.css" ?>" />
  <link rel="stylesheet" href="<?= BASE_STYLES . "/vendor/slick.css" ?>" />
  <link rel="stylesheet" href="<?= BASE_STYLES . "/vendor/slick-theme.css" ?>" />
  <link rel="stylesheet" href="<?= BASE_STYLES . "/plugins/sal.css" ?>" />
  <link rel="stylesheet" href="<?= BASE_STYLES . "/plugins/feather.css" ?>" />
  <link rel="stylesheet" href="<?= BASE_STYLES . "/plugins/fontawesome.min.css" ?>" />
  <link rel="stylesheet" href="<?= BASE_STYLES . "/plugins/euclid-circulara.css" ?>" />
  <link rel="stylesheet" href="<?= BASE_STYLES . "/plugins/swiper.css" ?>" />
  <link rel="stylesheet" href="<?= BASE_STYLES . "/plugins/odometer.css" ?>" />
  <link rel="stylesheet" href="<?= BASE_STYLES . "/plugins/animation.css" ?>" />
  <link rel="stylesheet" href="<?= BASE_STYLES . "/plugins/bootstrap-select.min.css" ?>" />
  <link rel="stylesheet" href="<?= BASE_STYLES . "/plugins/jquery-ui.css" ?>" />
  <link rel="stylesheet" href="<?= BASE_STYLES . "/plugins/magnigy-popup.min.css" ?>" />
  <link rel="stylesheet" href="<?= BASE_STYLES . "/plugins/plyr.css" ?>" />
  <link rel="stylesheet" href="<?= BASE_STYLES . "/plugins/jodit.min.css" ?>" />

  <!-- Style -->
  <link rel="stylesheet" type="text/css" href="<?= BASE_STYLES . "/styles.css" ?>" />

  <!-- CEO -->
  <meta property="og:site_name" content="SQ - Coaching & Leadership" />
  <meta property="og:title" content="SQ - Coaching & Leadership" />
  <meta property="og:description"
    content="Estamos comprometidos em transformar a comunicação e a oratória. Através de cursos, workshops e mentorias personalizadas, ajudamos você a expressar suas ideias com clareza, confiança e impacto no mundo global!" />
  <meta name="author" content="https://www.tchossy.com/" />
  <meta property="og:type" content="article" />
  <meta property="article:tag" content="Tchossy" />
  <meta property="article:tag" content="Tchossy Solution" />
  <meta property="article:tag" content="Educação" />
  <meta property="article:tag" content="Excelência" />

</head>

<body class="rbt-header-sticky">
  <div id="my_switcher" class="my_switcher">
    <ul>
      <li>
        <a href="javascript: void(0);" data-theme="light" class="setColor light">
          <img src="base/images/about/sun-01.svg" alt="Sun images" /><span title="Light Mode">
            Light</span>
        </a>
      </li>
      <li>
        <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
          <img src="base/images/about/vector.svg" alt="Vector Images" /><span title="Dark Mode"> Dark</span>
        </a>
      </li>
    </ul>
  </div>

  <!-- Start Header Area -->
  <header class="rbt-header rbt-header-8 rbt-transparent-header">
    <div class="rbt-sticky-placeholder"></div>
    <!-- Start Header Top  -->
    <div
      class="rbt-header-top rbt-header-top-1 variation-height-60 header-space-betwween bg-color-transparent top-expended-activation">
      <div class="container">
        <div class="top-expended-wrapper">
          <div class="top-expended-inner rbt-header-sec align-items-center">
            <div class="rbt-header-sec-col rbt-header-left">
              <div class="rbt-header-content">
                <div class="header-info d-none d-lg-block">
                  <ul class="rbt-information-list">
                    <li>
                      <a href="/about"><i class="feather-help-circle"></i>Tem alguma
                        pergunta?</a>
                    </li>
                    <li>
                      <a href="mailto:geral@sq-coaching.com"><i class="feather-mail"></i>geral@sq-coaching.com</a>
                    </li>
                    <li>
                      <a href="#"><i class="feather-phone"></i>+244-939-121-382</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="header-info">
            <div class="top-bar-expended d-block d-lg-none">
              <button class="topbar-expend-button rbt-round-btn">
                <i class="color-body feather-plus"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Header Top  -->

    <div class="rbt-header-wrapper header-sticky">
      <div class="container">
        <div class="mainbar-row rbt-navigation-end align-items-center">
          <!-- Start Logo Top  -->
          <div class="header-left">
            <div class="logo logo-dark">
              <a href="/">
                <img src="base/images/logo/logo.png" alt="Education Logo Images" />
              </a>
            </div>

            <div class="logo d-none logo-light">
              <a href="/">
                <img src="base/images/dark/logo/logo-light.png" alt="Education Logo Images" />
              </a>
            </div>
          </div>
          <!-- End Logo Top  -->
          <!-- Start Links area Top  -->
          <div class="rbt-main-navigation d-none d-xl-block">
            <nav class="mainmenu-nav">
              <ul class="mainmenu">
                <li class="with-megamenu has-menu-child-item position-static">
                  <a href="/">Home </a>
                </li>
                <li class="with-megamenu has-menu-child-item position-static">
                  <a href="/about">Quem somos? </a>
                </li>
                <li class="with-megamenu has-menu-child-item position-static">
                  <a href="/courses">Cursos </a>
                </li>
                <li class="with-megamenu has-menu-child-item position-static">
                  <a href="/books">Livros </a>
                </li>
                <li class="with-megamenu has-menu-child-item position-static">
                  <a href="/#serviceArea">Serviços </a>
                </li>
                <li class="with-megamenu has-menu-child-item position-static">
                  <a href="/blog">Blog </a>
                </li>
              </ul>
            </nav>
          </div>
          <!-- End Links area Top  -->

          <!-- Start Button Contact Top  -->
          <div class="header-right">
            <div class="rbt-btn-wrapper d-none d-xl-block">
              <a class="rbt-btn rbt-switch-btn btn-gradient btn-sm hover-transform-none" href="/contact">
                <span data-text="Contactos">Contactos</span>
              </a>
            </div>

            <!-- Start Mobile-Menu-Bar -->
            <div class="mobile-menu-bar d-block d-xl-none">
              <div class="hamberger">
                <button class="hamberger-button rbt-round-btn">
                  <i class="feather-menu"></i>
                </button>
              </div>
            </div>
            <!-- Start Mobile-Menu-Bar -->
          </div>
          <!-- End Button Contact Top  -->
        </div>
      </div>
    </div>
  </header>
  <!-- Mobile Menu Section -->
  <div class="popup-mobile-menu">
    <div class="inner-wrapper">
      <div class="inner-top">
        <div class="content">
          <div class="logo">
            <div class="logo logo-dark">
              <a href="/">
                <img src="base/images/logo/logo.png" alt="Education Logo Images" />
              </a>
            </div>

            <div class="logo d-none logo-light">
              <a href="/">
                <img src="base/images/dark/logo/logo-light.png" alt="Education Logo Images" />
              </a>
            </div>
          </div>
          <div class="rbt-btn-close">
            <button class="close-button rbt-round-btn">
              <i class="feather-x"></i>
            </button>
          </div>
        </div>
        <p class="description">
          Na SQ estamos sempre em busca de pessoas talentosas e motivadas. Não
          seja tímido, apresente-se.
        </p>
        <ul class="navbar-top-left rbt-information-list justify-content-start">
          <li>
            <a href="mailto:hello@example.com"><i class="feather-mail"></i>SQ@gmail.com</a>
          </li>
          <li>
            <a href="#"><i class="feather-phone"></i>(+244) 939-121-382</a>
          </li>
        </ul>
      </div>

      <nav class="mainmenu-nav">
        <ul class="mainmenu">
          <li class="position-static">
            <a href="/">Home </a>
          </li>
          <li class="position-static">
            <a href="/about">Quem somos? </a>
          </li>
          <li class="position-static">
            <a href="/courses">Cursos </a>
          </li>
          <li class="position-static">
            <a href="/books">Livros </a>
          </li>
          <li class="position-static">
            <a href="/#serviceArea">Serviço </a>
          </li>
          <li class="position-static">
            <a href="/blog">Blog </a>
          </li>
          <li class="position-static">
            <a href="/contact">Contactos </a>
          </li>
        </ul>
      </nav>

      <div class="mobile-menu-bottom">
        <div class="rbt-btn-wrapper mb--20">
          <a class="rbt-btn btn-border-gradient radius-round btn-sm hover-transform-none w-100 justify-content-center text-center"
            href="#formArea">
            <span>Inscreva-se agora</span>
          </a>
        </div>

        <div class="social-share-wrapper">
          <span class="rbt-short-title d-block">Encontre conosco</span>
          <ul class="social-icon social-default transparent-with-border justify-content-start mt--20">
            <li>
              <a href="https://www.facebook.com/">
                <i class="feather-facebook"></i>
              </a>
            </li>
            <li>
              <a href="https://www.twitter.com">
                <i class="feather-twitter"></i>
              </a>
            </li>
            <li>
              <a href="https://www.instagram.com/">
                <i class="feather-instagram"></i>
              </a>
            </li>
            <li>
              <a href="https://www.linkdin.com/">
                <i class="feather-linkedin"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- MAIN -->
  <?= $this->section("content") ?>


  <!-- Start Footer Area -->
  <footer class="rbt-footer footer-style-1 bg-color-white overflow-hidden">
    <div class="footer-top">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="footer-widget">
              <div class="logo logo-dark">
                <a href="/">
                  <img src="base/images/logo/logo.png" alt="Edu-cause" />
                </a>
              </div>
              <div class="logo d-none logo-light">
                <a href="/">
                  <img src="base/images/dark/logo/logo-light.png" alt="Edu-cause" />
                </a>
              </div>

              <p class="description mt--20">
                Estamos sempre em busca de pessoas talentosas e motivadas. Não
                seja tímido, apresente-se!
              </p>

              <ul class="social-icon social-default justify-content-start">
                <li>
                  <a href="https://www.facebook.com/">
                    <i class="feather-facebook"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.twitter.com">
                    <i class="feather-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.instagram.com/">
                    <i class="feather-instagram"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.linkdin.com/">
                    <i class="feather-linkedin"></i>
                  </a>
                </li>
              </ul>

              <div class="contact-btn mt--30">
                <a class="rbt-btn hover-icon-reverse btn-border-gradient radius-round" href="#formArea">
                  <div class="icon-reverse-wrapper">
                    <span class="btn-text">Entre em contato conosco</span>
                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                  </div>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 col-sm-6 col-12">
            <div class="footer-widget">
              <h5 class="ft-title">Links úteis</h5>
              <ul class="ft-link">
                <li>
                  <a href="/about">Sobre nós</a>
                </li>
                <li>
                  <a href="/#faq">FAQ</a>
                </li>
                <li>
                  <a href="/contact">Contactos</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 col-sm-6 col-12">
            <div class="footer-widget">
              <h5 class="ft-title">Nossa empresa</h5>
              <ul class="ft-link">
                <li>
                  <a href="/become-a-teacher">Torne-se professor</a>
                </li>
                <li>
                  <a href="/blog">Blog</a>
                </li>
                <li>
                  <a href="/course">Curso</a>
                </li>
                <li>
                  <a href="/contact">Contato</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="footer-widget">
              <h5 class="ft-title">Get Contact</h5>
              <ul class="ft-link">
                <li>
                  <span>Phone:</span> <a href="#">(+244) 939-121-382</a>
                </li>
                <li>
                  <span>E-mail:</span>
                  <a href="mailto:hr@example.com">admin@sq.com</a>
                </li>
              </ul>

              <form class="newsletter-form mt--20" action="#">
                <h6 class="w-600">Newsletter</h6>
                <p class="description">
                  2000+ Nossos alunos são inscritos em todo o mundo.<br />
                  Não seja tímido, apresente-se!
                </p>

                <div class="form-group right-icon icon-email mb--20">
                  <label for="email">Digite seu e-mail aqui</label>
                  <input id="email" type="email" />
                </div>

                <div class="form-group mb--0">
                  <button class="rbt-btn rbt-switch-btn btn-gradient radius-round btn-sm" type="submit">
                    <span data-text="Submit Now">Enviar agora</span>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="rbt-separator-mid">
      <div class="container">
        <hr class="rbt-separator m-0" />
      </div>
    </div>
    <!-- Start Copyright Area  -->
    <div class="copyright-area copyright-style-1 ptb--20">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12">
            <p class="rbt-link-hover text-center text-lg-start">
              Copyright © 2024
              <a href="https://rainbowthemes.net">Tchossy Solutions.</a> All
              Rights Reserved
            </p>
          </div>
          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12">
            <ul class="copyright-link rbt-link-hover justify-content-center justify-content-lg-end mt_sm--10 mt_md--10">
              <li><a href="#">Termos de serviço</a></li>
              <li>
                <a href="privacy-policy.html">Política de privacidade</a>
              </li>
              <li><a href="subscription.html">Assinatura</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Copyright Area  -->
  </footer>
  <!-- End Footer aera -->
  <div class="rbt-progress-parent">
    <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>

  <!-- Modernizer JS -->
  <script src="<?= BASE_JS . "/vendor/modernizr.min.js" ?>"></script>
  <!-- jQuery JS -->
  <script src="<?= BASE_JS . "/vendor/jquery.js" ?>"></script>
  <!-- Bootstrap JS -->
  <script src="<?= BASE_JS . "/vendor/bootstrap.min.js" ?>"></script>
  <!-- sal.js -->
  <script src="<?= BASE_JS . "/vendor/sal.js" ?>"></script>
  <!-- Dark Mode Switcher -->
  <script src="<?= BASE_JS . "/vendor/js.cookie.js" ?>"></script>
  <script src="<?= BASE_JS . "/vendor/jquery.style.switcher.js" ?>"></script>
  <script src="<?= BASE_JS . "/vendor/swiper.js" ?>"></script>
  <script src="<?= BASE_JS . "/vendor/jquery-appear.js" ?>"></script>
  <script src="<?= BASE_JS . "/vendor/odometer.js" ?>"></script>
  <script src="<?= BASE_JS . "/vendor/backtotop.js" ?>"></script>
  <script src="<?= BASE_JS . "/vendor/isotop.js" ?>"></script>
  <script src="<?= BASE_JS . "/vendor/imageloaded.js" ?>"></script>

  <script src="<?= BASE_JS . "/vendor/wow.js" ?>"></script>
  <script src="<?= BASE_JS . "/vendor/waypoint.min.js" ?>"></script>
  <script src="<?= BASE_JS . "/vendor/easypie.js" ?>"></script>
  <script src="<?= BASE_JS . "/vendor/text-type.js" ?>"></script>
  <script src="<?= BASE_JS . "/vendor/jquery-one-page-nav.js" ?>"></script>
  <script src="<?= BASE_JS . "/vendor/bootstrap-select.min.js" ?>"></script>
  <script src="<?= BASE_JS . "/vendor/jquery-ui.js" ?>"></script>
  <script src="<?= BASE_JS . "/vendor/magnify-popup.min.js" ?>"></script>
  <script src="<?= BASE_JS . "/vendor/paralax-scroll.js" ?>"></script>
  <script src="<?= BASE_JS . "/vendor/paralax.min.js" ?>"></script>
  <script src="<?= BASE_JS . "/vendor/countdown.js" ?>"></script>
  <script src="<?= BASE_JS . "/vendor/plyr.js" ?>"></script>
  <script src="<?= BASE_JS . "/vendor/jodit.min.js" ?>"></script>
  <script src="<?= BASE_JS . "/vendor/Sortable.min.js" ?>"></script>

  <!-- JavaScript -->
  <script src="<?= BASE_JS . "/main.js" ?>"></script>

</body>

</html>