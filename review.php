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

    <div class="container mt-3">
      <h2>Write a review for RMR-KILLERS.COM</h2>
      <form id="review-form">
        <div class="form-floating mb-3">
          <input name="name" type="text" class="form-control" maxlength="60" placeholder="Name" id="review-name" />
          <label for="review-name">Name</label>
        </div>
        <div class="form-floating mb-3">
          <input name="role" type="text" class="form-control" maxlength="60" placeholder="Your Role" id="review-role" />
          <label for="review-role">Your role</label>
        </div>
        <div class="form-floating mb-3">
          <select name="rating" type="select" class="form-select" maxlength="60" aria-placeholder="Rating" id="review-rating">
            <option value="5">5 Stars</option>
            <option value="4">4 Stars</option>
            <option value="3">3 Stars</option>
            <option value="2">2 Stars</option>
            <option value="1">1 Stars</option>
          </select>
          <label for="review-rating">Rating</label>
        </div>
        <div class="form-floating mb-3">
          <textarea name="content" class="form-control" maxlength="500" placeholder="Review" id="review-content" style="min-height: 12em"></textarea>
          <label for="review-content">Content</label>
        </div>
        <button type="submit" class="btn btn-success">Send Review</button>
      </form>
    </div>
    
    </section>

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
  <script
			  src="https://code.jquery.com/jquery-3.6.3.min.js"
			  integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
			  crossorigin="anonymous"></script>
  <script type="text/javascript">
/* attach a submit handler to the form */
$("#review-form").submit(function(event) {

/* stop form from submitting normally */
event.preventDefault();

var formData = {
  name: $("#review-name").val(),
  role: $("#review-role").val(),
  rating: $("#review-rating").val(),
  content: $("#review-content").val(),
};

$.ajax ({
  type: "POST",
  url: "/ajax/review.php",
  data: formData,
  success: function(json) {
    if(json.error) {
      alert(json.error);
    } else {
      alert(json.message);
      
      document.getElementById("review-form").reset(); 
    }
  }
});  

});
    </script>
</body>

</html>