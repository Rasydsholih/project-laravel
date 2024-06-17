<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>portofolio</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-572-designer.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="icon" type="image/x-icon" href="assets/favivi.png" />
<!--

TemplateMo 572 Designer

https://templatemo.com/tm-572-designer

-->
  </head>

<body>

  <div class="loader">
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       width="34px" height="40px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
      <rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2">
        <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.8s" repeatCount="indefinite" />
        <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.8s" repeatCount="indefinite" />
        <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.8s" repeatCount="indefinite" />
      </rect>
      <rect x="8" y="10" width="4" height="10" fill="#333"  opacity="0.2">
        <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="0.8s" repeatCount="indefinite" />
        <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.8s" repeatCount="indefinite" />
        <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.8s" repeatCount="indefinite" />
      </rect>
      <rect x="16" y="10" width="4" height="10" fill="#333"  opacity="0.2">
        <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.8s" repeatCount="indefinite" />
        <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.8s" repeatCount="indefinite" />
        <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.8s" repeatCount="indefinite" />
      </rect>
    </svg>
  </div>

  <header id="#top">

      <nav class="main-navigation navbar navbar-expand-lg navbar-light">
          <div class="container">
            <a class="navbar-brand" href="index.html"><img src="assets/images/logo3.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="/home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="/about">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/countact">Contact Us</a>
                </li>
              </ul>
            </div>
          </div>
      </nav>

    </header>

    <div class="page-banner change-name">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="header-text">
                        <h2><em>Contact</em> Us</h2>
                        <p>Hubungi saya jika ingin yang ada di tanyakan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="contact-us-page">
        <div class="container">
            <div class="col-lg-12">
                <div class="contact-page-form">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <form id="contact" action="https://formspree.io/f/xrgnnlda" method="POST">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section-heading">
                                            <h2>Hubungi<br><em>Saya Kembali</em>!</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">                 
                                        <input name="first-name" type="text" id="first-name" placeholder="First Name*" required="">               
                                    </div>
                                    <div class="col-lg-6">                       
                                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">                        
                                    </div>
                                    <div class="col-lg-12">                           
                                        <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>                          
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" id="form-submit" class="main-button ">Send Message</button>                            
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-info">
                                <ul>
                                    <li>
                                        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 0 24 24" width="48"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2c-4.97 0-9 4.03-9 9 0 4.17 2.84 7.67 6.69 8.69L12 22l2.31-2.31C18.16 18.67 21 15.17 21 11c0-4.97-4.03-9-9-9zm0 2c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.3c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/></svg></div>
                                        <h6>Rasyd</h6>
                                        <span>Ciawi Bogor, Indonesia</span>
                                    </li>
                                    <li>
                                        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="44" viewBox="0 0 24 24" width="44"><g><rect fill="none" height="24" width="24"/><path d="M20,4H4C2.9,4,2,4.9,2,6v12c0,1.1,0.9,2,2,2h9v-2H4V8l8,5l8-5v5h2V6C22,4.9,21.1,4,20,4z M12,11L4,6h16L12,11z M19,15l4,4 l-4,4v-3h-4v-2h4V15z"/></g></svg></div>
                                        <h6>Email Address</h6>
                                        <span>kimrasydsholihhakim@gmail.com</span>
                                    </li>
                                    <li>
                                        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="48" viewBox="0 0 24 24" width="48"><g><rect fill="none" height="24" width="24"></rect></g><g><g><path class="icon" d="M21,12.22C21,6.73,16.74,3,12,3c-4.69,0-9,3.65-9,9.28C2.4,12.62,2,13.26,2,14v2c0,1.1,0.9,2,2,2h1v-6.1 c0-3.87,3.13-7,7-7s7,3.13,7,7V19h-8v2h8c1.1,0,2-0.9,2-2v-1.22c0.59-0.31,1-0.92,1-1.64v-2.3C22,13.14,21.59,12.53,21,12.22z"></path><circle class="icon" cx="9" cy="13" r="1"></circle><circle class="icon" cx="15" cy="13" r="1"></circle><path class="icon" d="M18,11.03C17.52,8.18,15.04,6,12.05,6c-3.03,0-6.29,2.51-6.03,6.45c2.47-1.01,4.33-3.21,4.86-5.89 C12.19,9.19,14.88,11,18,11.03z"></path></g></g></svg></div>
                                        <h6>contact via Instagram</h6>
                                        <span>@onesyd01</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
      <div class="container">
          <div class="row">
              <div class="col-lg-4">
                  <div class="about-widget">
                      
                  </div>
              </div>
              <div class="col-lg-2 offset-lg-2">
                  <!-- <div class="location-widget">
                      <h4>Our Location</h4>
                      <p>Sunny Isles Beach, <br><br>Florida 33160, <br>United States</p>
                  </div> -->
              </div>
              <div class="col-lg-2">
                  <div class="customer-care">
                      <h4>countact</h4>
                      <ul class="info">
                          <li><a href="#">0858-8831-0701</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-2">
                  <div class="follow-us">
                      <h4>Follow Us</h4>
                      <ul class="social-links">
                          <li>
                              <a href="#">
                                  Instagram
                              </a>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-6 offset-lg-6">
                  <h4></h4>
                  <form id="subscribe" action="" method="get">
                      <div class="row">
                      </div>
                  </form>
              </div>
              <div class="col-lg-12">
                  <div class="sub-footer">
                      <div class="row">
                          <div class="col-lg-6">
                              <p>Copyright © 2024 
                              
                              <br>
                          </div>
                          <div class="col-lg-6">
                              <a href="#top" class="scroll-to-top">
                                  kembali ke atas
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-up" viewBox="0 0 16 16">
                                      <path fill-rule="evenodd" d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z"/>
                                  </svg>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>

  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>
  <script>
    setTimeout(function(){
        $('.loader').fadeToggle();
    }, 2000);
	$("a[href='#top']").click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });
		
    </script>

</body>
</html>