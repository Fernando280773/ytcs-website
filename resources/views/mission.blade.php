<!DOCTYPE html>
<html lang="en">
<head>
>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .full-width-image {
            width: 100%; /* Makes the image stretch across the full width of the screen */
            height: 300px; /* Sets the height of the image to 200px */
            object-fit: cover; /* Ensures the image covers the area without distortion */
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

        <!--Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,700,700i" rel="stylesheet">

        <!--vendors styles-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Bootstrap CSS / Color Scheme -->
        <link rel="stylesheet" href="css/default.css" id="theme-color">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-white fixed-top sticky-navigation">
            <a class="navbar-brand mx-auto" href="{{ route('home') }}">
            <img src="{{ asset('img/ytc.png') }}" alt="Logo" width='50px'>YTCS
            </a>
            <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class='button'>
                <span data-feather="grid"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{ route('home') }}">Home</a>
                    </li>
                <li class="nav-item">
                        <a class="nav-link page-scroll" >Mission</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#mission">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#services">Services</a>
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


    <br> 
    
    <section class="bg-hero py-8" style="background-image: url({{ asset('img/YTCS_website_1.png') }})">
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

    <div class="card">
                                    <div class="card-body text-center">
                                        <div class="icon-box border-box">
                                            <div class="icon-box-inner small-xs text-primary">
                                                <span data-feather="crop" width="30" height="30"></span>
                                            </div>
                                        </div>
                                        <h5 class="mt-0 mb-3">Mission</h5>
                                     
In the heart of Yorkshire, a vibrant beacon of Tamil culture, language, and traditions is emerging. At the Yorkshire Tamil Common School, our mission transcends the realms of ordinary education. We are not just a school; we are guardians of a legacy, committed to nurturing the roots of our Tamil heritage in the fertile soil of our new environment.

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                    <div class="card-body text-center">
                                        <div class="icon-box border-box">
                                            <div class="icon-box-inner small-xs text-primary">
                                                <span data-feather="crop" width="30" height="30"></span>
                                            </div>
                                        </div>
                                        <h5 class="mt-0 mb-3">Core value</h5>
                                     
As parents, we are a bridge connecting two worlds: the land of Tamil Eelam, a landscape of green and natural, self-reliant economy with a unified traditional culture, and the land we migrated to, a land of ethno-linguistic culture and the height of capitalist economy. It is our prime duty and responsibility to bridge these two different worlds with our next generation, ensuring that they grow up with a solid understanding and appreciation of their ancestral culture and tradition. This is a task of immense importance and challenging as we strive to make the Tamil language, arts and social customs resonate with the younger generation.

                                    </div>
                                </div>
                            </div>
                      

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
