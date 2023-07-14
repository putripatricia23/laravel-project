<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Business, Service">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Z-Store</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="img/2.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/LineIcons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/main.css">    
    <link rel="stylesheet" href="css/responsive.css">
   
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  </head>
  
  <body>

    <!-- Header Section Start -->
    <header id="home" class="hero-area">    
      <div class="overlay">
        <span></span>
        <span></span>
      </div>
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <a href="{{ url('/') }}" class="navbar-brand"><img src="img/logozstore.png" alt=""></a>       
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#blog">Product</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#services">About</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#features">Services</a>
              </li>                                 
              <li class="nav-item">    
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#team">Team</a>
              </li> 

              <li class="nav-item">
                <a class="nav-link page-scroll" href="#contact">Contact</a>
              </li>
              @guest 
              @if (Route::has('login'))
              <li class="nav-item">
                <a class="btn btn-singin" href="{{ url('/home')}}">Login</a>
              </li>
              @endif

              @else
              
              <li class="nav-item">
                <a class="nav-link page-scroll" href="{{ url('/admin/produk')}}">Admin</a>
              </li>
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }}
                  </a>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </div>
              </li>
              @endguest
            </ul>
          </div>
        </div>
      </nav>  
      <div class="container">      
        <div class="row space-100">
          <div class="col-lg-6 col-md-12 col-xs-12">
            <div class="contents">
              <h2 class="head-title">Z-Store Beauty<br>Flawless Perfection</h2>
              <p>Mulailah perjalanan menuju kulit yang indah dan sehat bersama produk kami.<br>Bersinarlah dengan kepercayaan diri yang memancar dari dalam.</p>
              <div class="header-button">
                <a href="#" class="btn btn-border-filled">Get Started</a>
                <a href="#contact" class="btn btn-border page-scroll">Contact Us</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12 p-0">
            <div class="intro-img">
              <img src="img/logo A.png" alt="">
            </div>            
          </div>
        </div> 
      </div>             
    </header>
    <!-- Header Section End --> 

        <!-- Blog Section -->
    <section id="blog" class="section">
        @yield('product')
    </section>
    <!-- blog Section End -->


    <!-- Services Section Start -->
    <section id="services" class="section">
      <div class="container">

        <div class="row">
          <!-- Start Col -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="services-item text-center">
              <div class="icon">
                <i class="lni-cog"></i>
              </div>
              <h4>Supreme Quality</h4>
              <p>Kami menempatkan kualitas sebagai pijakan utama produk-produk kami. Setiap produk kami dibuat dengan standar kualitas yang tinggi.</p>
            </div>
          </div>
          <!-- End Col -->
          <!-- Start Col -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="services-item text-center">
              <div class="icon">
                <i class="lni-brush"></i>
              </div>
              <h4>Design</h4>
              <p>Desain produk kami mencerminkan komitmen kami untuk menghadirkan keunggulan dalam estetika dan fungsionalitas. </p>
            </div>
          </div>
          <!-- End Col -->
          <!-- Start Col -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="services-item text-center">
              <div class="icon">
                <i class="lni-heart"></i>
              </div>
              <h4>Crafted with Love</h4>
              <p>Setiap produk kami dibuat dengan perhatian pada setiap detailnya, untuk memberikan pengalaman yang istimewa bagi Anda.</p>
            </div>
          </div>
          <!-- End Col -->

        </div>
      </div>
    </section>
    <!-- Services Section End -->


    <!-- Business Plan Section Start -->
    <section id="business-plan">
      <div class="container">

        <div class="row">
          <!-- Start Col -->
          <div class="col-lg-6 col-md-12 pl-0 pt-70 pr-5">
            <div class="business-item-img">
              <img src="img/business/business-img.png" class="img-fluid" alt="">
            </div>
          </div>
          <!-- End Col -->
          <!-- Start Col -->
          <div class="col-lg-6 col-md-12 pl-4">
            <div class="business-item-info">
              <h3>Z-Store: Aplikasi Kecantikan untuk Pengalaman Belanja Lebih Mudah</h3>
              <p>Dapatkan pengalaman belanja yang lebih mudah dan praktis dengan mengunduh aplikasi Z-Store di perangkat Android Anda. 
                Kami menyediakan berbagai produk kecantikan terkini dan terbaik, aplikasi kami dirancang untuk memenuhi kebutuhan dan keinginan Anda dalam perjalanan kecantikan Anda. Jelajahi koleksi produk terbaru, temukan penawaran menarik, dan nikmati kemudahan berbelanja langsung dari ponsel Anda. </p>

              <a class="btn btn-common" href="#">download</a>
            </div>
          </div>
          <!-- End Col -->

        </div>
      </div>
    </section>
    <!-- Business Plan Section End -->



    <!-- Cool Fetatures Section Start -->
    <section id="features" class="section">
      <div class="container">
        <!-- Start Row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="features-text section-header text-center">  
              <div>   
                <h2 style="color:black">Services We Provide</h2>
                <div class="desc-text">
                  <p>Percayakan kecantikan Anda kepada produk-produk berkualitas kami. </p>
                </div>
              </div> 
            </div>
          </div>

        </div>
        <!-- End Row -->
        <!-- Start Row -->
        <div class="row featured-bg">
         <!-- Start Col -->
          <div class="col-lg-6 col-md-6 col-xs-12 p-0">
             <!-- Start Fetatures -->
            <div class="feature-item featured-border1">
               <div class="feature-icon float-left">
                 <i class="lni-coffee-cup"></i>
               </div>
               <div class="feature-info float-left">
                 <h4>Safety First</h4>
                 <p>Keamanan adalah prioritas utama kami. 
                  <br>Setiap produk kecantikan telah diuji <br>dan diverifikasi oleh laboratorium.</p>
               </div>
            </div>
            <!-- End Fetatures -->
          </div>
           <!-- End Col -->
          
         <!-- Start Col -->
          <div class="col-lg-6 col-md-6 col-xs-12 p-0">
             <!-- Start Fetatures -->
            <div class="feature-item featured-border2">
               <div class="feature-icon float-left">
                 <i class="lni-briefcase"></i>
               </div>
               <div class="feature-info float-left">
                 <h4>Affordable Beauty</h4>
                 <p> Kami percaya bahwa kualitas tak harus mahal,  <br> dengan bangga kami menawarkan produk kecantikan <br>berkualitas tinggi dengan harga yang terjangkau</p>
               </div>
            </div>
            <!-- End Fetatures -->
          </div>
           <!-- End Col -->
          
         <!-- Start Col -->
          <div class="col-lg-6 col-md-6 col-xs-12 p-0">
             <!-- Start Fetatures -->
            <div class="feature-item featured-border1">
               <div class="feature-icon float-left">
                 <i class="lni-invention"></i>
               </div>
               <div class="feature-info float-left">
                 <h4>Trendsetter Beauty</h4>
                 <p> kami selalu mempersembahkan produk yang trendy <br>dan terbaru untuk membantu Anda mengeksplorasi <br>dan mengekspresikan gaya pribadi Anda. </p>
               </div>
            </div>
            <!-- End Fetatures -->
          </div>
           <!-- End Col -->
          
         <!-- Start Col -->
          <div class="col-lg-6 col-md-6 col-xs-12 p-0">
             <!-- Start Fetatures -->
            <div class="feature-item featured-border2">
               <div class="feature-icon float-left">
                <i class="lni-layers"></i>
               </div>
               <div class="feature-info float-left">
                 <h4>Eco-Friendly Beauty</h4>
                 <p> Kami menggunakan bahan dan metode produksi<br> yang ramah lingkungan untuk memberikan <br>pengalaman kecantikan yang bertanggung jawab. </p>
               </div>
            </div>
            <!-- End Fetatures -->
          </div>
           <!-- End Col -->
          
         <!-- Start Col -->
          <div class="col-lg-6 col-md-6 col-xs-12 p-0">
             <!-- Start Fetatures -->
            <div class="feature-item featured-border3">
               <div class="feature-icon float-left">
                 <i class="lni-reload"></i>
               </div>
               <div class="feature-info float-left">
                 <h4>Cruelty-Free Beauty</h4>
                 <p>Kami berkomitmen untuk etika dalam industri<br> kecantikan dengan menawarkan produk tanpa<br> melibatkan uji coba pada hewan.</p>
               </div>
            </div>
            <!-- End Fetatures -->
          </div>
           <!-- End Col -->
          
         <!-- Start Col -->
          <div class="col-lg-6 col-md-6 col-xs-12 p-0">
             <!-- Start Fetatures -->
            <div class="feature-item">
               <div class="feature-icon float-left">
                 <i class="lni-support"></i>
               </div>
               <div class="feature-info float-left">
                 <h4>Expert-Approved Beauty</h4>
                 <p>Kami menghadirkan produk yang telah dipercaya oleh para ahli.<br> Setiap produk kami telah mendapatkan dukungan dan<br> rekomendasi dari para profesional di industri kecantikan.</p>
               </div>
            </div>
            <!-- End Fetatures -->
          </div>
           <!-- End Col -->
          

        </div>
        <!-- End Row -->
      </div>
    </section>
    <!-- Cool Fetatures Section End --> 








    <!-- Team section Start -->
    <section id="team" class="section">
      <div class="container">
        <!-- Start Row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="team-text section-header text-center">  
              <div>   
                <h2 style="color:black">Team Members</h2>
                <div class="desc-text">
                  
                </div>
              </div> 
            </div>
          </div>

        </div>
        <!-- End Row -->
        <!-- Start Row -->
        <div class="row justify-content-center">
          <!-- Start Col -->
          <div class="col-lg-2 col-md-5 col-xs-12 mt-3">
            <div class="single-team">
              <div class="team-thumb">
                <img src="img/team/annisa.png" class="img-fluid" alt="">
              </div>

              <div class="team-details">
              <div class="team-social-icons">
                  <ul class="social-list">
                    <li><i class="lni-facebook-filled"></i></li>
                    <li><i class="lni-twitter-filled"></i></li>
                    <li><i class="lni-google-plus"></i></li>
                  </ul>
                </div> 
                <div class="team-inner text-center">
                  <h5 class="team-title">Annisa Nurul N</h5>
                  <p>Front-end Developer</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Start Col -->
 
          <!-- Start Col -->
          <div class="col-lg-2 col-md-5 col-xs-12 mt-3">
            <div class="single-team">
              <div class="team-thumb">
                <img src="img/team/Arya2.png" class="img-fluid" alt="">
              </div>

              <div class="team-details">
              <div class="team-social-icons">
                  <ul class="social-list" style="decoration: none">
                    <li><i class="lni-facebook-filled"></i></li>
                    <li><i class="lni-twitter-filled"></i></li>
                    <li><i class="lni-google-plus"></i></li>
                  </ul>
                </div>
                <div class="team-inner text-center">
                  <h5 class="team-title">Arya Setianis</h5>
                  <p>Back-end Developer</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Start Col -->

          

          <!-- Start Col -->
          <div class="col-lg-2 col-md-5 col-xs-12 mt-3">
            <div class="single-team">
              <div class="team-thumb">
                <img src="img/team/ibnu.png" class="img-fluid" alt="">
              </div>

              <div class="team-details">
              <div class="team-social-icons">
                  <ul class="social-list" style="decoration: none">
                    <li><i class="lni-facebook-filled"></i></li>
                    <li><i class="lni-twitter-filled"></i></li>
                    <li><i class="lni-google-plus"></i></li>
                  </ul>
                </div>
                <div class="team-inner text-center">
                  <h5 class="team-title">Ibnu Khair </h5>
                  <p>UI Designer</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Start Col -->
 
          <!-- Start Col -->
          <div class="col-lg-2 col-md-5 col-xs-12 mt-3">
            <div class="single-team">
              <div class="team-thumb">
                <img src="img/team/put.png" class="img-fluid" alt="">
              </div>

              <div class="team-details">
              <div class="team-social-icons">
                  <ul class="social-list">
                    <li><i class="lni-facebook-filled"></i></li>
                    <li><i class="lni-twitter-filled"></i></li>
                    <li><i class="lni-google-plus"></i></li>
                  </ul>
                </div>
                <div class="team-inner text-center">
                  <h5 class="team-title">Putri Patresia</h5>
                  <p>Fullstack Developer</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Start Col -->
 
          <!-- Start Col -->
          <div class="col-lg-2 col-md-5 col-xs-12 mt-3">
            <div class="single-team">
              <div class="team-thumb">
                <img src="img/team/yahya.jpg" class="img-fluid" alt="">
              </div>

              <div class="team-details">
                <div class="team-social-icons">
                  <ul class="social-list">
                    <li><i class="lni-facebook-filled"></i></li>
                    <li><i class="lni-twitter-filled"></i></li>
                    <li><i class="lni-google-plus"></i></li>
                  </ul>
                </div>
                <div class="team-inner text-center">
                  <h5 class="team-title">Yahya Ayasy</h5>
                  <p>Support Engineer</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Start Col -->

 

        </div>
        <!-- End Row -->
      </div>
    </section>
    <!-- Team section End -->




    <!-- Contact Us Section -->
    <section id="contact" class="section">
      <!-- Container Starts -->
      <div class="container">
        <!-- Start Row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="contact-text section-header text-center">  
              <div>   
                <h2 style="color:black">Contact Us</h2>
                <div class="desc-text">
                  <p>Kami senang mendengar dari Anda!  </p>  
                  <p>Silakan hubungi kami untuk pertanyaan, komentar, atau saran.</p>
                </div>
              </div> 
            </div>
          </div>

        </div>
        <!-- End Row -->
        <!-- Start Row -->
        <div class="row">
          <!-- Start Col -->
          <div class="col-lg-6 col-md-12">
          <form id="contactForm">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Name" required data-error="Please enter your name">
                  <div class="help-block with-errors"></div>
                </div>                                 
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" placeholder="Subject" id="msg_subject" class="form-control" name="msg_subject" required data-error="Please enter your subject">
                  <div class="help-block with-errors"></div>
                </div> 
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="email" name="email" placeholder="Email" required data-error="Please enter your Email">
                  <div class="help-block with-errors"></div>
                </div>                                 
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" placeholder="Budget" id="budget" class="form-control" name="budget" required data-error="Please enter your Budget">
                  <div class="help-block with-errors"></div>
                </div> 
              </div>
              <div class="col-md-12">
                <div class="form-group"> 
                  <textarea class="form-control" id="message"  name="message" placeholder="Write Message" rows="4" data-error="Write your message" required></textarea>
                  <div class="help-block with-errors"></div>
                </div>
                <div class="submit-button">
                  <button class="btn btn-common" id="submit" type="submit">Submit</button>
                  <div id="msgSubmit" class="h3 hidden"></div> 
                  <div class="clearfix"></div> 
                </div>
              </div>
            </div>            
          </form>
          </div>
          <!-- End Col -->
          <!-- Start Col -->
          <div class="col-lg-1">
            
          </div>
          <!-- End Col -->
          <!-- Start Col -->
          <div class="col-lg-4 col-md-12">
            <div class="contact-img">
              <img src="img/contact/01.png" class="img-fluid" alt="">
            </div>
          </div>
          <!-- End Col -->
          <!-- Start Col -->
          <div class="col-lg-1">
          </div>
          <!-- End Col -->

        </div>
        <!-- End Row -->
      </div>
    </section>
    <!-- Contact Us Section End -->

    <!-- Footer Section Start -->
    <footer>
      <!-- Footer Area Start -->
      <section id="footer-Content">
        <div class="container">
          <!-- Start Row -->
          <div class="row">

          <!-- Start Col -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              
              <div class="footer-logo">
               <img src="img/logozstore.png" alt="">
              </div>
            </div>
             <!-- End Col -->
              <!-- Start Col -->
            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Company</h3>
                <ul class="menu">
                  <li style="color:white">  - About Us</a></li>
                  <li style="color:white">- Career</a></li>
                  <li style="color:white">- Blog</a></li>
                  <li style="color:white">- Press</a></li>
                </ul>
              </div>
            </div>
             <!-- End Col -->
              <!-- Start Col -->
            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Product</h3>
                <ul class="menu">
                  <li style="color:white">  - Customer Service</a></li>
                  <li style="color:white">- Enterprise</a></li>
                  <li style="color:white">- Price</a></li>
                  <li style="color:white">- Scurity</a></li>
                  <li style="color:white">- Why SLICK?</a></li>
                </ul>
              </div>
            </div>
             <!-- End Col -->
              <!-- Start Col -->
            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Download App</h3>
                <ul class="menu">
                  <li style="color:white">  - Android App</a></li>
                  <li style="color:white">- IOS App</a></li>
                  <li style="color:white">- Windows App</a></li>
                  <li style="color:white">- Play Store</a></li>
                  <li style="color:white">- IOS Store</a></li>
                </ul>
              </div>
            </div>
             <!-- End Col -->
              <!-- Start Col -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Subscribe Now</h3>
                <p>Appropriately implement calysts for change visa wireless catalysts for change. </p>
                <div class="subscribe-area">
                  <input type="email" class="form-control" placeholder="Enter Email">
                  <span><i class="lni-chevron-right"></i></span>
                </div>
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- Copyright Start  -->

        <div class="copyright">
          <div class="container">
            <!-- Star Row -->
            <div class="row">
              <div class="col-md-12">
                <div class="site-info text-center">
                  <p>Developed by Putri Patresia</p>
                </div>              
                
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->
          </div>
        </div>
      <!-- Copyright End -->
      </section>
      <!-- Footer area End -->
      
    </footer>
    <!-- Footer Section End --> 


    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-chevron-up"></i>
    </a> 

    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery-min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.js"></script>      
    <script src="js/jquery.nav.js"></script>    
    <script src="js/scrolling-nav.js"></script>    
    <script src="js/jquery.easing.min.js"></script>     
    <script src="js/nivo-lightbox.js"></script>     
    <script src="js/jquery.magnific-popup.min.js"></script>      
    <script src="js/main.js"></script>
    
  </body>
</html>