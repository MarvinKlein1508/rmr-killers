<?php 
  require_once "core/config.php";
  require_once "core/mysqli.php";
  require_once "ajax/get_reviews.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="rmr, csgo, stickers">
  <meta name="author" content="elemis">
  <title>RMR-Killers - We are saving RMR investors</title>
  <link rel="shortcut icon" href="./assets/img/favicon.png">
  <link rel="stylesheet" href="./assets/css/plugins.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/colors/purple.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
      <nav class="navbar navbar-expand-lg classic transparent position-absolute navbar-dark">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <a href="./index.html">
              
            </a>
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
              <h3 class="text-white fs-30 mb-0">RMR-Killers</h3>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
             
              <!-- /.navbar-nav -->

            </div>
            <!-- /.offcanvas-body -->
          </div>
          <!-- /.navbar-collapse -->
          <div class="navbar-other ms-lg-4">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <li class="nav-item d-lg-none">
                <button class="hamburger offcanvas-nav-btn"><span></span></button>
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
    </header>
    <!-- /header -->
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-400 bg-content text-white" data-image-src="./assets/img/photos/bg4.jpg">
      <div class="container pt-18 pb-16" style="z-index: 5; position:relative">
        <div class="row gx-0 gy-12 align-items-center">
          <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-6 content text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
            <h1 class="display-2 mb-5 text-white">Saving RMR investors.</h1>
            <p class="lead fs-lg lh-sm mb-7 pe-xl-10">We’re making sure that every CSGO major will be profitable. Even RMR. We will delete a bunch of RMR stickers regulary live on Twitch.</p>
            <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
              <span><a href="https://steamcommunity.com/tradeoffer/new/?partner=392797480&token=s7Zx5z82" target="_blank" class="btn btn-lg btn-white rounded-pill me-2">Send RMR stickers to officialfano</a></span>
              <span><a href="https://steamcommunity.com/groups/rmr-killers" target="_blank" class="btn btn-lg btn-outline-white rounded-pill">Join our Steam group</a></span>
            </div>
          </div>
          <!--/column -->
          <div class="col-lg-5 offset-lg-1">
            <div class="swiper-container dots-over shadow-lg" data-margin="5" data-nav="true" data-dots="true" data-autoplay="true" data-autoplaytime="4000">
              <div class="swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide"><img src="./assets/img/rmr/capsule_challenger.png" srcset="./assets/img/rmr/capsule_challenger.png" class="rounded" alt="" /></div>
                  <div class="swiper-slide"><img src="./assets/img/rmr/100thieves.png" srcset="./assets/img/rmr/100thieves.png" class="rounded" alt="" /></div>
                  <div class="swiper-slide"><img src="./assets/img/rmr/astralis.png" srcset="./assets/img/rmr/astralis.png" class="rounded" alt="" /></div>
                  <div class="swiper-slide"><img src="./assets/img/rmr/espada.png" srcset="./assets/img/rmr/espada.png" class="rounded" alt="" /></div>
                  <div class="swiper-slide"><img src="./assets/img/rmr/evilgeniuses.png" srcset="./assets/img/rmr/evilgeniuses.png" class="rounded" alt="" /></div>
                  <div class="swiper-slide"><img src="./assets/img/rmr/faze.png" srcset="./assets/img/rmr/faze.png" class="rounded" alt="" /></div>
                  <div class="swiper-slide"><img src="./assets/img/rmr/fnatic.png" srcset="./assets/img/rmr/fnatic.png" class="rounded" alt="" /></div>
                  <div class="swiper-slide"><img src="./assets/img/rmr/furia.png" srcset="./assets/img/rmr/furia.png" class="rounded" alt="" /></div>
                  <div class="swiper-slide"><img src="./assets/img/rmr/g2.png" srcset="./assets/img/rmr/g2.png" class="rounded" alt="" /></div>
                  <div class="swiper-slide"><img src="./assets/img/rmr/geng.png" srcset="./assets/img/rmr/geng.png" class="rounded" alt="" /></div>
                  <div class="swiper-slide"><img src="./assets/img/rmr/godsent.png" srcset="./assets/img/rmr/godsent.png" class="rounded" alt="" /></div>
                  <div class="swiper-slide"><img src="./assets/img/rmr/heroic.png" srcset="./assets/img/rmr/heroic.png" class="rounded" alt="" /></div>
                  <div class="swiper-slide"><img src="./assets/img/rmr/liquid.png" srcset="./assets/img/rmr/liquid.png" class="rounded" alt="" /></div>
                  <div class="swiper-slide"><img src="./assets/img/rmr/navi.png" srcset="./assets/img/rmr/navi.png" class="rounded" alt="" /></div>
                  <div class="swiper-slide"><img src="./assets/img/rmr/nemiga.png" srcset="./assets/img/rmr/nemiga.png" class="rounded" alt="" /></div>
                  <div class="swiper-slide"><img src="./assets/img/rmr/nip.png" srcset="./assets/img/rmr/nip.png" class="rounded" alt="" /></div>
                  <div class="swiper-slide"><img src="./assets/img/rmr/north.png" srcset="./assets/img/rmr/north.png" class="rounded" alt="" /></div>
                  <div class="swiper-slide"><img src="./assets/img/rmr/og.png" srcset="./assets/img/rmr/og.png" class="rounded" alt="" /></div>
                  <div class="swiper-slide"><img src="./assets/img/rmr/renegades.png" srcset="./assets/img/rmr/renegades.png" class="rounded" alt="" /></div>
                  <div class="swiper-slide"><img src="./assets/img/rmr/spirit.png" srcset="./assets/img/rmr/spirit.png" class="rounded" alt="" /></div>
                  <div class="swiper-slide"><img src="./assets/img/rmr/tyloo.png" srcset="./assets/img/rmr/tyloo.png" class="rounded" alt="" /></div>
                  <div class="swiper-slide"><img src="./assets/img/rmr/vitality.png" srcset="./assets/img/rmr/vitality.png" class="rounded" alt="" /></div>
                  <div class="swiper-slide"><img src="./assets/img/rmr/vp.png" srcset="./assets/img/rmr/vp.png" class="rounded" alt="" /></div>
                </div>
                <!--/.swiper-wrapper -->
              </div>
              <!--/.swiper -->
            </div>
            <!-- /.swiper-container -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container py-14 py-md-17">
        <div class="row text-center">
          <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <h2 class="fs-15 text-uppercase text-primary mb-3">What We Do?</h2>
            <h3 class="display-4 mb-10 px-xl-10">We are saving thousands of investors of CSGO RMR 2020 stickers.</h3>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="position-relative mb-14 mb-md-17">
          <div class="shape rounded-circle bg-soft-primary rellax w-16 h-16" data-rellax-speed="1" style="bottom: -0.5rem; right: -2.5rem; z-index: 0;"></div>
          <div class="shape bg-dot primary rellax w-16 h-17" data-rellax-speed="1" style="top: -0.5rem; left: -2.5rem; z-index: 0;"></div>
          <div class="row gx-md-5 gy-5 text-center">
            <div class="col-md-6 col-xl-3">
              <div class="card">
                <div class="card-body">
                  <div class="icon btn btn-circle btn-lg btn-primary pe-none mb-3"> <i class="uil uil-eye"></i> </div>
                  <h4>Any sticker</h4>
                  <p class="mb-2">We delete any sticker which we'll get in our hands.</p>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-xl-3">
              <div class="card">
                <div class="card-body">
                  <div class="icon btn btn-circle btn-lg btn-primary pe-none mb-3"> <i class="uil uil-shield-exclamation"></i> </div>
                  <h4>No refunds</h4>
                  <p class="mb-2">Any donated RMR sticker is non refundable since it will become deleted.</p>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-xl-3">
              <div class="card">
                <div class="card-body">
                  <div class="icon btn btn-circle btn-lg btn-primary pe-none mb-3"> <i class="uil uil-laptop-cloud"></i> </div>
                  <h4>Regulary streams</h4>
                  <p class="mb-2">Stickers will be deleted regulary live on Twitch.</p>
                  <a href="https://twitch.tv/officialfano" class="more hover link-primary">Join officialfano on Twitch</a>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-md-6 col-xl-3">
              <div class="card">
                <div class="card-body">
                  <div class="icon btn btn-circle btn-lg btn-primary pe-none mb-3"> <i class="uil uil-chart-line"></i> </div>
                  <h4>Capsules</h4>
                  <p class="mb-2">We'll also open your capsules and delete the outcome from it.</p>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!-- /.position-relative -->
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mb-14 mb-md-17">
          <div class="col-lg-7">
            <figure><img class="w-auto" src="./assets/img/illustrations/i11.png" srcset="./assets/img/illustrations/i11@2x.png 2x" alt="" /></figure>
          </div>
          <!--/column -->
          <div class="col-lg-5">
            <h2 class="fs-15 text-uppercase text-primary mb-3">Why deleting RMR?</h2>
            <p class="display-4 mb-7">Everyone thinks that RMR was the biggest failure in CSGO investing history. We are here to prove you all wrong.</p>
            
          </div>
          <!--/column -->
        </div>

      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-gray">
      <div class="container py-14 pt-md-0 pb-md-16">
        <div class="row mt-md-n50p mb-14 mb-md-7">
          <div class="col-xl-10 mx-auto">
            <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-400" data-image-src="./assets/img/photos/bg2.jpg">
              <div class="card-body p-9 p-xl-11">
                <div class="row align-items-center counter-wrapper gy-8 text-center text-white">
                  <div class="col-6 col-lg-3">
                    <h3 class="counter counter-lg text-white">18</h3>
                    <p>Deleted stickers</p>
                  </div>
                  <!--/column -->
                  <div class="col-6 col-lg-3">
                    <h3 class="counter counter-lg text-white"><?php echo get_happy_clients(); ?></h3>
                    <p>Happy investors</p>
                  </div>
                  <!--/column -->
                  <div class="col-6 col-lg-3">
                    <h3 class="counter counter-lg text-white">0</h3>
                    <p>Deleting streams</p>
                  </div>
                  <!--/column -->
                  <div class="col-6 col-lg-3">
                    <h3 class="counter counter-lg text-white">17</h3>
                    <p>Community stickers deleted</p>
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </div>
          <!-- /column -->
        </div>
 
      
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container py-14 py-md-17">
      
        <div class="row mb-3">
          <div class="col-md-10 col-lg-12 col-xl-10 col-xxl-9 mx-auto text-center">
            <h2 class="fs-15 text-uppercase text-primary mb-3">Our Team</h2>
            <h3 class="display-4 mb-7 px-lg-19 px-xl-18">Meet the brilliant people behind the RMR-Killers initiative.</h3>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0 mb-md-20">
          <div class="col-md-6 col-lg-3">
            <div class="position-relative">
              <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
              <div class="card">
                <figure class="card-img-top"><img class="img-fluid" src="./assets/img/avatars/t1.jpg" srcset="./assets/img/avatars/t1@2x.jpg 2x" alt="" /></figure>
                <div class="card-body px-6 py-5">
                  <h4 class="mb-1">officialfano</h4>
                  <p class="mb-0">Financial Analyst</p>
                  <nav class="nav social mb-0">
                    <a href="https://steamcommunity.com/id/f4no" target="_blank"><i class="fa-brands fa-steam"></i></a>
                    <a href="https://twitch.tv/officialfano" target="_blank"><i class="fa-brands fa-twitch"></i></a>
                  </nav>
                </div>
                <!--/.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /div -->
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-3">
            <div class="position-relative">
              <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
              <div class="card">
                <figure class="card-img-top"><img class="img-fluid" src="./assets/img/erdbeerchen.jpg" srcset="./assets/img/erdbeerchen.jpg 2x" alt="" /></figure>
                <div class="card-body px-6 py-5">
                  <h4 class="mb-1">erdbeerchen02</h4>
                  <p class="mb-0">Stockholm 2021 investor</p>
                  <nav class="nav social mb-0">
                    <a href="https://steamcommunity.com/id/_orphy_/" target="_blank"><i class="fa-brands fa-steam"></i></a>
                    <a href="https://twitch.tv/erdbeerchen02" target="_blank"><i class="fa-brands fa-twitch"></i></a>
                  </nav>
                </div>
                <!--/.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /div -->
          </div>
          <!--/column -->
          
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    
    <section class="wrapper bg-gray">
      <div class="container py-14 pt-md-0 pb-md-17">
        <div class="row mt-md-n50p text-white text-center">
          <div class="col-xl-10 mx-auto mb-14 mb-lg-n6">
            <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-400" data-image-src="./assets/img/photos/bg2.jpg">
              <div class="card-body p-9 p-xl-12">
                <div class="row gx-0">
                  <div class="col-xxl-9 mx-auto">
                    <div class="swiper-container dots-light dots-closer mb-6" data-margin="30" data-dots="true" data-autoplay="true">
                      <div class="swiper">
                     
                        <div class="swiper-wrapper">
                        <?php foreach(get_reviews() as $key => $review): ?>
                          
                          <div class="swiper-slide">
                            <span class="ratings five mb-3"></span>
                            <blockquote class="border-0 fs-lg mb-2">
                              <p>“<?php echo $review['content']; ?>”</p>
                              <div class="blockquote-details justify-content-center text-center">
                                <div class="info ps-0">
                                  <h5 class="mb-1 text-white"><?php echo $review['author']; ?></h5>
                                  <p class="mb-0"><?php echo $review['author_role']; ?></p>
                                </div>
                              </div>
                            </blockquote>
                          </div>
                          <!--/.swiper-slide -->
                          <?php endforeach; ?>
                        </div>
                        <!--/.swiper-wrapper -->
                      </div>
                      <!--/.swiper -->
                    </div>
                    <!-- /.swiper-container -->
                  </div>
                  <!-- /column -->
                </div>
                <!-- /.row -->
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </div>
          <!-- /column -->
        </div>

        
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->

    

    <section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <div class="row">
          <div class="col-xl-10 mx-auto">
            <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-400" data-image-src="./assets/img/photos/bg3.jpg">
              <div class="card-body p-6 p-md-11 d-lg-flex flex-row align-items-lg-center justify-content-md-between text-center text-lg-start">
                <h3 class="display-6 mb-6 mb-lg-0 pe-lg-10 pe-xl-5 pe-xxl-18 text-white">You wanna tell us about your experience with RMR-Killers?</h3>
                <a href="/review" class="btn btn-white rounded-pill mb-0 text-nowrap">Write a review</a>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->


  </div>
  <!-- /.content-wrapper -->
  <footer class="bg-navy text-inverse">
    <div class="container py-13 py-md-15">
      <div class="d-lg-flex flex-row align-items-lg-center">
        <h3 class="display-4 mb-6 mb-lg-0 pe-lg-20 pe-xl-22 pe-xxl-25 text-white">Join our community by joining the official steam group.</h3>
        <a href="https://steamcommunity.com/groups/rmr-killers" class="btn btn-primary rounded-pill mb-0 text-nowrap" target="_blank">Try It For Free</a>
      </div>
      <!--/div -->
      <hr class="mt-11 mb-12" />
      <div class="row gy-6 gy-lg-0">
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <p class="mb-4">© 2022 RMR-Killers. <br class="d-none d-lg-block" />All rights reserved.</p>
            <nav class="nav social social-white">
              <a href="https://twitch.tv/officialfano"><i class="uil uil-twitch"></i></a>
            </nav>
            <!-- /.social -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->

     
       
        <!-- /column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </footer>
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script src="./assets/js/plugins.js"></script>
  <script src="./assets/js/theme.js"></script>
</body>

</html>