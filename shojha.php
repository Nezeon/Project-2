<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Shojha</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link
      href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
      rel="stylesheet"
    />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>
  <style>
    .card {
      position: relative;
      overflow: hidden;
    }
    .card img {
      transition: transform 0.3s ease;
    }
    .card:hover img {
      transform: scale(1.1);
    }
  </style>
<body>


    <!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
  <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
      <h1 class="text-primary m-0">
        <i class="fa fa-map-marker-alt me-3"></i>UNVEIL TRIPS
      </h1>
      <!-- <img src="img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto py-0">
        <a href="index.php" class="nav-item nav-link ">Home</a>
        <a href="Destinations.html" class="nav-item nav-link">Destinations</a>
        <a href="Offer.html" class="nav-item nav-link">Offers</a>
        <div class="nav-item dropdown"></div>
        <a href="Hotel.html" class="nav-item nav-link">Hotels</a>
        <a href="contact.html" class="nav-item nav-link">Contact</a>
      </div>
      <a href="Register.html" class="btn btn-primary rounded-pill py-2 px-4">Login</a>
    </div>
  </nav>

  <div class="container-fluid bg-primary py-5 mb-5 hero-header">
    <div class="container py-5">
      <div class="row justify-content-center py-5">
        <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
          <h1 class="display-3 text-white mb-3 animated slideInDown" style="font-size: 5rem;">
            <span style="background-color: rgba(127, 127, 127, 0.5); padding: 10px; border-radius: 10px;">SHOJHA</span>
          </h1>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Navbar & Hero End -->

<!-- Page Content Start -->
<div class="container mt-5">
  <h2 class="text-center mb-4">Explore Shojha Destinations</h2>

  <!-- Destination Slider Start -->
  <div id="destinationCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <!-- Shojha Slide -->
      <div class="carousel-item active">
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="img13/shojha1.jpg" class="card-img-top" alt="Shojha" >
              <div class="card-body">
              <h5 class="card-title">Shojha</h5>
                <p class="card-text">Serolsar Lake, Jalori Pass, Tirthan Valley<br><br><br><br></p>
                <a href="shojha.html" class="btn btn-primary">See More</a>
              </div>
            </div>
          </div>
          <!-- Serolsar Lake Slide -->
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="img13/serolsarlake.jpeg" class="card-img-top" alt="Serolsar Lake" >
              <div class="card-body">
              <h5 class="card-title">Serolsar Lake</h5>
                <p class="card-text">Scenic Lake, Trekking Destination<br><br></p>
                <a href="serolsarlake.html" class="btn btn-primary">See More</a>
              </div>
            </div>
          </div>
          <!-- Jalori Pass Slide -->
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="img13/jaloripass.jpg" class="card-img-top" alt="Jalori Pass" >
              <div class="card-body">
              <h5 class="card-title">Jalori Pass</h5>
                <p class="card-text">Picturesque Views, Adventure Activities<br><br></p>
                <a href="jaloripass.html" class="btn btn-primary">See More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Tirthan Valley Slide -->
      <div class="carousel-item">
        <div class="row">
          <!-- Tirthan Valley Card -->
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="img13/tirthanvalley.jpg" class="card-img-top" alt="Tirthan Valley" >
              <div class="card-body">
              <h5 class="card-title">Tirthan Valley</h5>
                <p class="card-text">Tranquil River, Nature Escapes<br><br></p>
                <a href="tirthanvalley.html" class="btn btn-primary">See More</a>
              </div>
            </div>
          </div>
          <!-- Great Himalayan National Park Card -->
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="img13/great-himalayan-national-park.jpg" class="card-img-top" alt="Great Himalayan National Park" >
              <div class="card-body">
              <h5 class="card-title">Great Himalayan National Park</h5>
                <p class="card-text">Biodiversity, Trekking Trails<br><br></p>
                <a href="ghnp.html" class="btn btn-primary">See More</a>
              </div>
            </div>
          </div>
          
          
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#destinationCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#destinationCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- Destination Slider End -->
</div>
<!-- Page Content End -->

 <!-- Footer Start -->
 <div
      class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-3 col-md-6">
            <h4 class="text-white mb-3">Company</h4>
            <a class="btn btn-link" href="">About Us</a>
            <a class="btn btn-link" href="">Contact Us</a>
            <a class="btn btn-link" href="">Privacy Policy</a>
            <a class="btn btn-link" href="">Terms & Condition</a>
            <a class="btn btn-link" href="">FAQs & Help</a>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="text-white mb-3">Contact</h4>
            <p class="mb-2">
              <i class="fa fa-map-marker-alt me-3"></i>123 Street, Gurugram,
              Haryana
            </p>
            <p class="mb-2">
              <i class="fa fa-phone-alt me-3"></i>+91 2541365478
            </p>
            <p class="mb-2">
              <i class="fa fa-envelope me-3"></i>info@unveiltrips.com
            </p>
            <div class="d-flex pt-2">
              <a class="btn btn-outline-light btn-social" href=""
                ><i class="fab fa-twitter"></i
              ></a>
              <a class="btn btn-outline-light btn-social" href=""
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a class="btn btn-outline-light btn-social" href=""
                ><i class="fab fa-youtube"></i
              ></a>
              <a class="btn btn-outline-light btn-social" href=""
                ><i class="fab fa-linkedin-in"></i
              ></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="text-white mb-3">Gallery</h4>
            <div class="row g-2 pt-2">
              <div class="col-4">
                <img
                  class="img-fluid bg-light p-1"
                  src="img/package-1.jpg"
                  alt=""
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid bg-light p-1"
                  src="img/package-2.jpg"
                  alt=""
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid bg-light p-1"
                  src="img/package-3.jpg"
                  alt=""
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid bg-light p-1"
                  src="img/package-2.jpg"
                  alt=""
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid bg-light p-1"
                  src="img/package-3.jpg"
                  alt=""
                />
              </div>
              <div class="col-4">
                <img
                  class="img-fluid bg-light p-1"
                  src="img/package-1.jpg"
                  alt=""
                />
              </div>
            </div>
          </div>
      <div class="container">
        <div class="copyright">
          <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
              &copy; <a class="border-bottom" href="#">Unveil Trips</a>, All
              Right Reserved.
            </div>
            <div class="col-md-6 text-center text-md-end">
              <div class="footer-menu">
                <a href="">Home</a>
                <a href="">Cookies</a>
                <a href="">Help</a>
                <a href="">FQAs</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>


<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>