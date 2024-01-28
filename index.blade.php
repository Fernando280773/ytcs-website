<!doctype html>
<html lang="en">
    <head>
      
    
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>- Free Bootstrap 4 Multipurpose Landing Page Template</title>
        <meta name="description" content="Union is a beautiful Bootstrap 4 template for multipurpose landing pages." /> 
      
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
            <a class="navbar-brand mx-auto">
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
                        <a class="nav-link page-scroll" href="{{ route('about') }}">About</a>
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
                    <a href="javascript:void(0)" onclick="applyTranslation()" class="nav-link page-scroll nav-process" >தமிழ்</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#blog">Blog</a>
                    </li>
                </ul>
              
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
                        <h4 class="dot-circle font-weight-normal">
                        Welcome to the Yorkshire Tamil Common School: Preserving and Celebrating Our Heritage,


</h4>
                    </div>
                </div>
            <!-- Add this script somewhere in your index.blade.php file -->




                <div class="row mt-5">
                    <div class="col-md-6 order-2 order-md-1 my-md-auto">
                        <h3>Our ambitious path</h3>
                        <p class="text-muted lead">
                        Imagine a future where Tamil is not just a subject in a classroom, but a living, breathing part of our children's daily lives
                        </p>
                        <a href="#" class="btn btn-primary">Read mission</a>
                    </div>
                    <div class="col-md-6 order-1 order-md-2">
                        <img src="img/google-design.jpeg" class="img-fluid d-block mx-auto" alt="Google Design"/>
                    </div>
                    <div class="col-md-6 order-3 mx-auto border-top border-bottom mt-5 mt-md-0 py-4">
                        <div class="review text-center">
                            <p class="quote">It is our duty and responsibility to connect these worlds for our children</p>
                            <div class="mt-4 d-flex flex-row align-items-center justify-content-center">
                              
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <img src="img/facebook-messenger.jpeg" class="img-fluid d-block mx-auto" alt="Facebook Messenger"/>
                    </div>
                    <div class="col-md-6 my-md-auto">
                        <h3>Our Duty and Responsibility</h3>
                        <p class="text-muted lead">
                        As parents, we bridge two worlds: the land of Tamil Eelam, known for its lush green landscapes, self-reliant economy, and a culture steeped in tradition, and our new home, a land rich in ethno-linguistic diversity and at the forefront of a capitalist economy
                        </p>
                        <a href="#" class="btn btn-primary">Read mission</a>
                    </div>
                    <div class="col-md-6 mx-auto border-top border-bottom mt-5 mt-md-0 py-4">
                        <div class="review text-center">
                            <p class="quote">In the face of challenges, each step in learning our mother tongue, is a testament to our enduring cultural spirit.</p>
                            <div class="mt-4 d-flex flex-row align-items-center justify-content-center">
                             
                            </div>
                        </div>
                    </div>
                </div>
                <h4 data-translate-key="welcomeMessage">Welcomkshire Tamil Common School: Preserving and Celebrating Our Heritage</h4>
<br>
                <div class="row">
                    <div class="col-md-6 order-2 order-md-1 my-md-auto">
                        <h3>Challenges</h3>
                        <p class="text-muted lead">
                        Every child who learns a Tamil song, stutters while reciting poetry in our mother tongue, or performs a dance that echoes the rhythm of our culture is proof of our success.

                         </p> 
                        <a href="#" class="btn btn-primary">Read Mission</a>
                    </div>
                    <div class="col-md-6 order-1 order-md-2">
                        <img src="img/twitter-mobile.jpeg" class="img-fluid d-block mx-auto" alt="Twitter Mobile"/>
                    </div>
                    <div class="col-md-6 order-3 mx-auto border-top border-bottom mt-5 mt-md-0 py-4">
                        <div class="review text-center">
                            <p class="quote">In Yorkshire Tamil Common School, we are not just a school; we are guardians of a rich legacy, nurturing the roots of our Tamil heritage for our future generations</p>
                            <div class="mt-4 d-flex flex-row align-items-center justify-content-center">
                             
                                <!-- <span class="text-muted">Kathrine Jones, Twitter</span> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-6">
                    <div class="col-md-6 mx-auto text-center">
                        <h4>Want to read our mission? </h4>
                        <p class="lead text-muted">See what we stand for at YTCS</p>
                        <a href="" class="btn btn-primary">Read mission</a>
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
                        <p class="text-muted lead">Here at YTCS we have plenty of services to achieve our mission for our students </p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-10 mx-auto">
                        <div class="row card-services">
                            <div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <!-- dance -->
                                        <a href="#as long as">
                                        <div class="icon-box border-box">
                                            <div class="icon-box-inner small-xs text-primary">
                                            <i class="fa-solid fa-hands-asl-interpreting fa-2x"></i>
                                            </div>
                                        </div>
                                        <h5 class="mt-0 mb-3">Web design</h5>
                                        Nam liber tempor cum soluta nobis eleifend option congue nihil imper.
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <!-- music -->
                                        <a href="#nono">
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
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="card">
                                    <!-- culture link -->
                                    <a href="#aboot">
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
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="card">
                                    <!-- computing -->
                                <a href="#hehe">
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
                                    </a>
                                </div>
                            </div>
                           
                            <div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <!-- language -->
                                        <a href="#hello">
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
                                    </a>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--call to action-->
        
        <section class="bg-hero py-8" style="background-image: url('{{ asset('img/sports.png') }}')">

            <div class="container">
                <div class="row">
                    <div class="col-md-7 mx-auto text-center">
                        <h2 class="text-white">Who are we?</h2>
                        <p class="lead text-white my-4">read about us to find out who we are and what we stand for</p>
                        <button class="btn btn-primary">About us</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-7 bg-light" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h2 class="dot-circle">From our blog</h2>
                        <p class="text-muted lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in nisi commodo, tempus odio a, vestibulum nibh.</p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6 mb-5">
                        <div class="card">
                            <a href="#">
                                <img class="card-img-top" src="{{ asset('img/coding-ytc.webp') }}" alt="Blog 1" class="img-fluid">
                            </a>
                            <div class="card-body">
                                <a href="#">
                                    <h5 class="card-title">The Importance of Early Coding Education.Why Start Coding Early?</h5>
                                    <p class="card-text">In the rapidly evolving world of technology, a groundbreaking innovation known as GPT (Generative Pre-trained Transformer) has emerged as a significant player.</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-5">
                        <div class="card">
                            <a href="#">
                                <img class="card-img-top" src="img/parallex2.jpg" alt="Blog 2">
                            </a>
                            <div class="card-body">
                                <a href="#">
                                    <h5 class="card-title">Coming soon!</h5>
                                    <p class="card-text">We are working on bringing you high quality,tamil focused,Expert,community-driven blogs to guide you through the changing world.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mx-auto text-center mt-5">
                        <a href="#" class="btn btn-primary">Read blogs</a>
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
        <!-- <script src="js/script.js"></script> -->
        <script>
    var currentLang = 'en';
    
    function applyTranslation() {
    var langFile = currentLang === 'en' ? 'ta.json' : 'en.json'; // Toggle between Tamil and English JSON files
    fetch(`/lang/${langFile}`)
        .then(response => response.json())
        .then(translations => {
            document.querySelectorAll("[data-translate-key]").forEach(elem => {
                const key = elem.getAttribute("data-translate-key");
                elem.textContent = translations[key] || elem.textContent;
            });
        });
    currentLang = currentLang === 'en' ? 'ta' : 'en'; // Toggle the current language
}




    $(document).ready(function() {
        $('.nav-process').on('click', function() {
            $(this).toggleClass('blue-color');
            applyTranslation();
        });
   
        // init feather icons
        feather.replace();

        // init tooltip & popovers
        $('[data-toggle="tooltip"]').tooltip();
        $('[data-toggle="popover"]').popover();
//page scroll
        $('a.page-scroll').bind('click', function(event) {
    var $anchor = $(this);
    var target = $($anchor.attr('href'));
    if (target.length) {
        $('html, body').stop().animate({
            scrollTop: target.offset().top - 50
        }, 1000);
    }
    event.preventDefault();
});


        //toggle scroll menu
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 100) {
                $('.sticky-navigation').addClass('navbar-shadow');
            } else {
                $('.sticky-navigation').removeClass('navbar-shadow');
            }

            if (scroll >= 600) {
                $('.scroll-top').addClass('active');
            } else {
                $('.scroll-top').removeClass('active');
            }
        });

        // scroll to top
        $('.scroll-top').click(function() {
            $('html, body').stop().animate({
                scrollTop: 0
            }, 1000);
        });
    });
</script>

    </body>
</html>