<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Unveil Trips</title>
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

  <body>
    <!-- Topbar Start -->
<div class="container-fluid px-0 d-none d-lg-block">
  <div class="row gx-0 bg-dark">
    <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
      <div class="d-inline-flex align-items-center" style="height: 45px">
        <small class="me-3 text-light">
          <i class="fa fa-map-marker-alt me-2"></i>123 Street, Gurugram, Haryana
        </small>
        <small class="me-3 text-light">
          <i class="fa fa-phone-alt me-2"></i>+91 2541365478
        </small>
        <small class="text-light">
          <i class="fa fa-envelope-open me-2"></i>info@unveiltrips.com
        </small>
      </div>
    </div>
    <div class="col-lg-4 text-center text-lg-end">
      <div class="d-inline-flex align-items-center" style="height: 45px">
        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="">
          <i class="fab fa-twitter fw-normal"></i>
        </a>
        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="">
          <i class="fab fa-facebook-f fw-normal"></i>
        </a>
        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="">
          <i class="fab fa-linkedin-in fw-normal"></i>
        </a>
        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="">
          <i class="fab fa-instagram fw-normal"></i>
        </a>
        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="">
          <i class="fab fa-youtube fw-normal"></i>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- Topbar End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
      <nav
        class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0"
      >
        <a href="" class="navbar-brand p-0">
          <h1 class="text-primary m-0">
            <i class="fa fa-map-marker-alt me-3"></i>UNVEIL TRIPS
          </h1>
          <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse"
        >
          <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto py-0">
            <a href="index.html" class="nav-item nav-link active">Home</a>
            <a href="Destinations.html" class="nav-item nav-link"
              >Destinations</a
            >
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
              <h1 class="display-3 text-white mb-3 animated slideInDown">
                WE PLAN. YOU PACK.
              </h1>
              <h2 class="display-8 text-white mb-2 animated slideInDown">
                Discover amazing destinations and book your travel today!
              </h2>
              
              <div class="position-relative w-75 mx-auto animated slideInDown">
                <form action="search.php" method="GET">
                <input
                  class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5"
                  type="text"
                  placeholder="Eg: NAINITAL"
                  name="query"
                />
                <button
                  type="submit"
                  class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2"
                  style="margin-top: 7px"
                >
                  Search
                </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div
            class="col-lg-6 wow fadeInUp"
            data-wow-delay="0.1s"
            style="min-height: 400px"
          >
            <div class="position-relative h-100">
              <img
                class="img-fluid position-absolute w-100 h-100"
                src="https://4kwallpapers.com/images/wallpapers/beach-alone-relax-summer-aerial-view-ios-10-stock-1920x1200-5393.jpg"
                alt=""
                style="object-fit: cover"
              />
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
            <h6 class="section-title bg-white text-start text-primary pe-3">
              About Us
            </h6>
            <h1 class="mb-4">
              Welcome to <span class="text-primary">Unveil Trips</span>
            </h1>
            <p class="mb-4">
              Unveiling adventures beyond the beaten path! Unveil TRIPS curates
              getaways that unlock hidden gems near your dream destinations.
            </p>
            <p class="mb-4">
              Forget the tourist traps - explore Nainital's serene lakes or
              Goa's off-beat beaches. We craft personalized itineraries to match
              your travel style, whether you crave adventure or relaxation.
              Unveil TRIPS - Unforgettable journeys, unveiled.
            </p>
            <div class="row gy-2 gx-4 mb-4">
              <div class="col-sm-6">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-primary me-2"></i>Explore
                  Nearby Gems
                </p>
              </div>
              <div class="col-sm-6">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-primary me-2"></i
                  >Personalized Recommendations
                </p>
              </div>
              <div class="col-sm-6">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-primary me-2"></i>Seamless
                  Navigation
                </p>
              </div>
              <div class="col-sm-6">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-primary me-2"></i>Hidden
                  Treasures Unveiled
                </p>
              </div>
              <div class="col-sm-6">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-primary me-2"></i>Tailored
                  Itineraries
                </p>
              </div>
              <div class="col-sm-6">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-primary me-2"></i>Local
                  Insights
                </p>
              </div>
            </div>
            <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
          <h6 class="section-title bg-white text-center text-primary px-3">
            Services
          </h6>
          <h1 class="mb-5">Our Services</h1>
        </div>
        <div class="row g-4">
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item rounded pt-3">
              <div class="p-4">
                <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                <h5>NationWide Tours</h5>
                <p>
                  Unveiling adventures beyond the obvious! Pick your dream spot,
                  anywhere from Nainital to Goa, and Unveil TRIPS curates
                  getaways with nearby hidden gems. Explore further, experience
                  more - worldwide.<br /><br />
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item rounded pt-3">
              <div class="p-4">
                <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
                <h5>Hidden Gem Finder</h5>
                <p>
                  Enter your dream destination, like Nainital or Goa, and we'll
                  unveil nearby must-see spots and off-the-beaten-path
                  adventures. No more tourist traps - discover hidden
                  waterfalls, charming villages, or thrilling activities you
                  never knew existed.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item rounded pt-3">
              <div class="p-4">
                <i class="fa fa-3x fa-user text-primary mb-4"></i>
                <h5>Travel Guides</h5>
                <p>
                  Discover your destination like a local with our comprehensive
                  Travel Guide service. Unlock the secrets of Nainital, Goa, or
                  any desired location, and explore handpicked attractions,
                  dining spots, and hidden gems tailored just for you.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
            <div class="service-item rounded pt-3">
              <div class="p-4">
                <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                <h5>Expert Support</h5>
                <p>
                  Our travel specialists are just a click away. Need help
                  booking unique accommodations or finding the perfect adventure
                  tour? We're here to answer your questions, recommend hidden
                  gems, and ensure your trip runs smoothly.<br /><br />
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Service End -->

    <!-- Destination Start -->
    <div class="container-xxl py-5 destination">
      <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
          <h6 class="section-title bg-white text-center text-primary px-3">
            Destination
          </h6>
          <h1 class="mb-5">Popular Destination</h1>
        </div>
        <div class="row g-3">
          <div class="col-lg-7 col-md-6">
            <div class="row g-3">
              <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                <a class="position-relative d-block overflow-hidden" href="goa.php">
                  <img class="img-fluid" src="img/destination-1.jpg" alt="" />
                  <div
                    class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2"
                  >
                    Goa
                  </div>
                </a>
              </div>
              <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                <a class="position-relative d-block overflow-hidden" href="nainital.php">
                  <img class="img-fluid" src="img/destination-2.jpg" alt="" />
                  <div
                    class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2"
                  >
                    Nainital
                  </div>
                </a>
              </div>
              <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                <a class="position-relative d-block overflow-hidden" href="gujrat.php">
                  <img class="img-fluid" src="dbmsimg\gujarat.jpg" alt="" />
                  <div
                    class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2"
                  >
                    Gujrat
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div
            class="col-lg-5 col-md-6 wow zoomIn"
            data-wow-delay="0.7s"
            style="min-height: 350px"
          >
            <a class="position-relative d-block h-100 overflow-hidden" href="shillong.php">
              <img
                class="img-fluid position-absolute w-100 h-100"
                src="dbmsimg\shillong.jpeg"
                alt=""
                style="object-fit: cover"
              />
              <div
                class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2"
              >
                Shillong
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Process Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
          <h6 class="section-title bg-white text-center text-primary px-3">
            Process
          </h6>
          <h1 class="mb-5">3 Easy Steps</h1>
        </div>
        <div class="row gy-5 gx-4 justify-content-center">
          <div
            class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp"
            data-wow-delay="0.1s"
          >
            <div class="position-relative border border-primary pt-5 pb-4 px-4">
              <div
                class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                style="width: 100px; height: 100px"
              >
                <i class="fa fa-globe fa-3x text-white"></i>
              </div>
              <h5 class="mt-4">Choose A Destination</h5>
              <hr class="w-25 mx-auto bg-primary mb-1" />
              <hr class="w-50 mx-auto bg-primary mt-0" />
              <p class="mb-0">
                Select your dream destination effortlessly; simply choose
                Nainital, Goa, or any desired location to unlock a world of
                nearby attractions.
              </p>
            </div>
          </div>
          <div
            class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp"
            data-wow-delay="0.3s"
          >
            <div class="position-relative border border-primary pt-5 pb-4 px-4">
              <div
                class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                style="width: 100px; height: 100px"
              >
                <i class="fa fa-map fa-3x text-white"></i>
              </div>
              <h5 class="mt-4">Get Details</h5>
              <hr class="w-25 mx-auto bg-primary mb-1" />
              <hr class="w-50 mx-auto bg-primary mt-0" />
              <p class="mb-0">
                Select your destination, click "Get Details," and uncover a
                treasure trove of information about your next trip.
              </p>
            </div>
          </div>
          <div
            class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp"
            data-wow-delay="0.5s"
          >
            <div class="position-relative border border-primary pt-5 pb-4 px-4">
              <div
                class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                style="width: 100px; height: 100px"
              >
                <i class="fa fa-plane fa-3x text-white"></i>
              </div>
              <h5 class="mt-4">Travel Today</h5>
              <hr class="w-25 mx-auto bg-primary mb-1" />
              <hr class="w-50 mx-auto bg-primary mt-0" />
              <p class="mb-0">
                Embark on your adventure today! Select your dream destination
                like Nainital or Goa, and uncover nearby attractions instantly.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Process Start -->

    <!-- Team Start -->
<div class="container-xxl py-5">
  <div class="container text-center">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h6 class="section-title bg-white text-center text-primary px-3">
        Travel Guide
      </h6>
      <h1 class="mb-5">Meet Our Team</h1>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="team-item">
          <div class="text-center p-4">
            <h3 class="mb-1">Arpit Verma</h3>
            <h5 class="mb-0">21BCA002</h5>
            <small>arpit21bca002@ncuindia.edu</small>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="team-item">
          <div class="text-center p-4">
            <h3 class="mb-1">Ritika Jain</h3>
            <h5 class="mb-0">21BCA015</h5>
            <small>ritika21bca015@ncuindia.edu</small>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
        <div class="team-item">
          <div class="text-center p-4">
            <h3 class="mb-1">Priyanshi</h3>
            <h5 class="mb-0">21BCA022</h5>
            <small>priyanshi21bca022@ncuindia.edu</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container">
        <div class="text-center">
          <h6 class="section-title bg-white text-center text-primary px-3">
            Testimonial
          </h6>
          <h1 class="mb-5">Our Clients Say!!!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative">
          <div class="testimonial-item bg-white text-center border p-4">
            <h5 class="mb-0">Sarah</h5>
            <p>Nainital</p>
            <p class="mb-0">
              Unveil TRIPS helped me discover the serene beauty of Nainital's
              hidden waterfalls and charming villages. It was an unforgettable
              escape from the ordinary!
            </p>
          </div>
          <div class="testimonial-item bg-white text-center border p-4">
            <h5 class="mb-0">Dhavan</h5>
            <p>Goa</p>
            <p class="mt-2 mb-0">
              Forget the crowded beaches! Unveil TRIPS led me to Goa's hidden
              gems - a secluded cove and a thrilling adventure tour. My trip was
              perfectly personalized!
            </p>
          </div>
          <div class="testimonial-item bg-white text-center border p-4">
            <h5 class="mb-0">Sam</h5>
            <p>Agra</p>
            <p class="mt-2 mb-0">
              Unveil TRIPS went beyond the Taj Mahal! They revealed hidden
              Mughal tombs and bustling local markets, making my Agra experience
              truly immersive.
            </p>
          </div>
          <div class="testimonial-item bg-white text-center border p-4">
            <h5 class="mb-0">Rishi</h5>
            <p>Ladakh</p>
            <p class="mt-2 mb-0">
              Unveil TRIPS helped me plan an unforgettable adventure in Ladakh.
              They found the perfect off-the-beaten-path trek and recommended
              hidden gems like ancient monasteries.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonial End -->

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

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>
