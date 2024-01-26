<!doctype html>
<html lang="en">
    <head>
      
    
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>- Free Bootstrap 4 Multipurpose Landing Page Template</title>
        <meta name="description" content="Union is a beautiful Bootstrap 4 template for multipurpose landing pages." /> 
        <link rel="stylesheet" href="{{ asset('css/default.css') }}">
       
        <script src="https://kit.fontawesome.com/b20f8e5437.js" crossorigin="anonymous"></script>
        <!--Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,700,700i" rel="stylesheet">

        <!--vendors styles-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Bootstrap CSS / Color Scheme -->
        <link rel="stylesheet" href="css/default.css" id="theme-color">
        <style>

        .blue-color {
           color: blue !important; /* Use !important to override Bootstrap styles if needed */
          }
 
      </style>

    </head>
    <body>

        <!--navigation-->
        <nav class="navbar navbar-expand-md navbar-light bg-white fixed-top sticky-navigation">
            <a class="navbar-brand mx-auto" href="index.html">
            <img src="{{ asset('img/ytc.png') }}" alt="Logo" width='50px'>YTCS
            </a>
            <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class='button'>
                <span data-feather="grid"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                        <a class="nav-link page-scroll" href="#mission">Home</a>
                    </li>
                <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{ route('mission') }}">Mission</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{ route('mission') }}">About</a>
                    </li>
                    <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle page-scroll" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Services
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#about-section-1">Tamil Language</a>
                    <a class="dropdown-item" href="#about-section-2">Traditional Dance</a>
                    <a class="dropdown-item" href="#about-section-3">Traditional  Music</a>
                    <a class="dropdown-item" href="#about-section-3">Embracing Tamil Heritage</a>
                    <a class="dropdown-item" href="#about-section-3">Computer Coding</a>
                    <!-- Add more dropdown items as needed -->
                </div>
            </li>
                    <li class="nav-item">
                    <a class="nav-link page-scroll nav-process" href="#process">தமிழ்</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#blog">Blog</a>
                    </li>
                </ul>
                <form class="form-inline">
                    <p class="mb-0 mx-3"><a class="page-scroll font-weight-bold" href="#contact">Work with us</a></p>
                </form>
            </div>
        </nav>

        <!--hero header-->
        <section class="pt-7 pt-md-8" id="home">
            <div class="container">
                <div class="row">
                <img src="{{ asset('img/YTCS_website_1.png') }}" alt="Logo" class="img-fluid">
                </div>
            </div>
        </section>

        <!-- about section -->
        <section class="pb-7" id="about">
            <div class="container">
                <hr class="my-6"/>
                <div class="row">
                    <div class="col-md-6 mx-auto text-center">
                        <h4 class="dot-circle font-weight-normal">We work with world's top companies to create 
                            beautiful products & apps.</h4>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-6 order-2 order-md-1 my-md-auto">
                        <h3>Google Design</h3>
                        <p class="text-muted lead">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id ante posuere, vestibulum mauris eget, efficitur felis. Vestibulum tincidunt sit amet odio at gravida. Cras mollis dapibus orci, in interdum odio scelerisque rhoncus.
                        </p>
                        <a href="#" class="btn btn-primary">View project</a>
                    </div>
                    <div class="col-md-6 order-1 order-md-2">
                        <img src="img/google-design.jpeg" class="img-fluid d-block mx-auto" alt="Google Design"/>
                    </div>
                    <div class="col-md-6 order-3 mx-auto border-top border-bottom mt-5 mt-md-0 py-4">
                        <div class="review text-center">
                            <p class="quote">Praesent vulputate dolor velit, in condimentum odio pellentesin condimentum odio pellentesque libero.</p>
                            <div class="mt-4 d-flex flex-row align-items-center justify-content-center">
                                <img src="img/client-1.jpg" class="img-review rounded-circle mr-2" alt="Client 1"/>
                                <span class="text-muted">Ryan Siddle, Google Design</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <img src="img/facebook-messenger.jpeg" class="img-fluid d-block mx-auto" alt="Facebook Messenger"/>
                    </div>
                    <div class="col-md-6 my-md-auto">
                        <h3>Facebook Messenger</h3>
                        <p class="text-muted lead">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id ante posuere, vestibulum mauris eget, efficitur felis. Vestibulum tincidunt sit amet odio at gravida. Cras mollis dapibus orci, in interdum odio scelerisque rhoncus.
                        </p>
                        <a href="#" class="btn btn-primary">View project</a>
                    </div>
                    <div class="col-md-6 mx-auto border-top border-bottom mt-5 mt-md-0 py-4">
                        <div class="review text-center">
                            <p class="quote">Integer id ante posuere, vestibulum mauris eget, efficitur felis.</p>
                            <div class="mt-4 d-flex flex-row align-items-center justify-content-center">
                                <img src="img/client-2.jpg" class="img-review rounded-circle mr-2" alt="Client 2"/>
                                <span class="text-muted">Ameli Mao, VP Facebook</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 order-2 order-md-1 my-md-auto">
                        <h3>Twitter Mobile</h3>
                        <p class="text-muted lead">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id ante posuere, vestibulum mauris eget, efficitur felis. Vestibulum tincidunt sit amet odio at gravida. Cras mollis dapibus orci, in interdum odio scelerisque rhoncus.
                        </p>
                        <a href="#" class="btn btn-primary">View project</a>
                    </div>
                    <div class="col-md-6 order-1 order-md-2">
                        <img src="img/twitter-mobile.jpeg" class="img-fluid d-block mx-auto" alt="Twitter Mobile"/>
                    </div>
                    <div class="col-md-6 order-3 mx-auto border-top border-bottom mt-5 mt-md-0 py-4">
                        <div class="review text-center">
                            <p class="quote">Praesent vulputate dolor velit, pellentesin condimentum odio pellentesque libero.</p>
                            <div class="mt-4 d-flex flex-row align-items-center justify-content-center">
                                <img src="img/client-3.jpg" class="img-review rounded-circle mr-2" alt="Client 3"/>
                                <span class="text-muted">Kathrine Jones, Twitter</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-6">
                    <div class="col-md-6 mx-auto text-center">
                        <h4>Want to work with us?</h4>
                        <p class="lead text-muted">Ready to launch your awesome project? We'd be happy to help you.</p>
                        <a href="#" class="btn btn-primary">Get in touch</a>
                    </div>
                </div>
            </div>
        </section>

        <!--services section-->
        <section class="bg-light py-7" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 mx-auto">
                        <h2 class="dot-circle">Services we offer</h2>
                        <p class="text-muted lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in nisi commodo, tempus odio a, vestibulum nibh.</p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-10 mx-auto">
                        <div class="row card-services">
                            <div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="icon-box border-box">
                                            <div class="icon-box-inner small-xs text-primary">
                                            <i class="fa-solid fa-hands-asl-interpreting fa-2x"></i>
                                            </div>
                                        </div>
                                        <h5 class="mt-0 mb-3">Web design</h5>
                                        Nam liber tempor cum soluta nobis eleifend option congue nihil imper.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="icon-box border-box">
                                            <div class="icon-box-inner small-xs text-primary">
                                            <div class="icon-box-inner small-xs text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16">
  <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13s1.12-2 2.5-2 2.5.896 2.5 2m9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2"/>
  <path fill-rule="evenodd" d="M14 11V2h1v9zM6 3v10H5V3z"/>
  <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4z"/>
</svg>
                        </div>
                                            </div>
                                        </div>
                                        <h5 class="mt-0 mb-3">Web development</h5>
                                        Nam liber tempor cum soluta nobis eleifend option congue nihil imper.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="icon-box border-box">
                                            <div class="icon-box-inner small-xs text-primary">
                                            <svg width="35" height="35" xmlns="http://www.w3.org/2000/svg">
  <text x="-1.5" y="24" font-family="Arial" font-size="25" fill="blue">ஓம்</text>
</svg>
                                            </div>
                                        </div>
                                        <h5 class="mt-0 mb-3">Branding</h5>
                                        Nam liber tempor cum soluta nobis eleifend option congue nihil imper.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="icon-box border-box">
                                            <div class="icon-box-inner small-xs text-primary">
                                            <div class="icon-box-inner small-xs text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pc-display-horizontal" viewBox="0 0 16 16">
  <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5M12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0m2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0M1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1M1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25"/>
</svg>
                        </div>
                                            </div>
                                        </div>
                                        <h5 class="mt-0 mb-3">Mobile apps</h5>
                                        Nam liber tempor cum soluta nobis eleifend option congue nihil imper.
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="icon-box border-box">
                                            <div class="icon-box-inner small-xs text-primary">
                                                <svg width="23" height="23" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
                    <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="Arial" font-size="35" fill="blue">த</text>
                </svg>
                                            </div>
                                        </div>
                                        <h5 class="mt-0 mb-3">Coaching</h5>
                                        Nam liber tempor cum soluta nobis eleifend option congue nihil imper.
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--call to action-->
        <section class="bg-hero py-8" style="background-image: url(img/parallex.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 mx-auto text-center">
                        <h2 class="text-white">We help the world's top companies to create amazing products.</h2>
                        <p class="lead text-white my-4">Ready to launch your awesome website?</p>
                        <button class="btn btn-primary">Request a free quote</button>
                    </div>
                </div>
            </div>
        </section>

      
    
       

        <!--footer / contact-->
        <footer class="py-6 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mx-auto text-center">
                     
                        <p class="text-muted small text-uppercase mt-4">
                            Follow us on social media
                        </p>
                        <ul class="list-inline social social-dark social-sm">
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 text-muted text-center small-xl">
                        &copy; 2024 YTCS (Company registration-10493343)- All Rights Reserved
                    </div>
                </div>
            </div>
        </footer>

        <!--scroll to top-->
        <div class="scroll-top">
            <i class="fa fa-angle-up" aria-hidden="true"></i>
        </div>

   

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.5.0/feather.min.js"></script>
        <script src="js/scripts.js"></script>
        <script>
              $(document).ready(function(){
        $('.nav-process').on('click', function(){
            $(this).toggleClass('blue-color');
        });
    });
            $(function () {

// init feather icons
feather.replace();

// init tooltip & popovers
$('[data-toggle="tooltip"]').tooltip();
$('[data-toggle="popover"]').popover();

//page scroll
$('a.page-scroll').bind('click', function (event) {
    var $anchor = $(this);
    $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top - 50
    }, 1000);
    event.preventDefault();
});

//toggle scroll menu
$(window).scroll(function () {
    var scroll = $(window).scrollTop();
    //adjust menu background
    if (scroll >= 100) {
        $('.sticky-navigation').addClass('navbar-shadow');
    } else {
        $('.sticky-navigation').removeClass('navbar-shadow');
    }
    
    // adjust scroll to top
    if (scroll >= 600) {
        $('.scroll-top').addClass('active');
    } else {
        $('.scroll-top').removeClass('active');
    }
    return false;
});

// scroll top top
$('.scroll-top').click(function () {
    $('html, body').stop().animate({
        scrollTop: 0
    }, 1000);
});


});
        </script>
    </body>
</html>