<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .full-width-image {
            width: 100%; /* Makes the image stretch across the full width of the screen */
            height: 300px; /* Sets the height of the image to 200px */
            object-fit: cover; /* Ensures the image covers the area without distortion */
        }
   

        .blue-color {
           color: blue !important; /* Use !important to override Bootstrap styles if needed */
          }
          .text-block {
    max-width: 850px; /* Sets the maximum width of the text block */
    margin: 0 auto; /* Centers the block horizontally */
    padding: 10px;
    font-size: 16px;
    line-height: 1.6;
    text-align: justify;
    margin-bottom: 15px;
}
.hoverable-link {
    color: inherit; /* Ensures the color remains consistent */
    text-decoration: none; /* Removes the underline from links */
}

.hoverable-link:hover {
    background-color: #f0f0f0;
    border:solid black 0px;
    border-radius:5px;
    
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


    <br> 
    
    <section class="bg-hero py-8" style="background-image: url({{ asset('img/YTCS_website_1.png') }})">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 mx-auto text-center">
                        <h2 class="text-white">Here at YTCS</h2>
                        <p class="lead text-white my-4">Want to read about us?</p>
                        <a href="{{ route('about') }}">
                        <button class="btn btn-primary" >Read about us</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-7" id="process">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 mx-auto text-center">
                        <h2>How we work</h2>
                        <p class="lead text-muted">
                            Donec lacus enim, ullamcorper nec lectus id, ornare finibus nunc.
                            Eleifend option congue nihil imper.
                        </p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-7 mx-auto timeline">
                    
                        <div class="media pb-5">
                       
                            <div class="icon-box mt-1">
                                <div class="icon-box-inner small-xs text-primary">
                                    <span data-feather="disc"></span>
                                </div>
                            </div>
                            <a href="your-link-for-discovery.html" class="media pb-5 hoverable-link">
                            <div class="media-body">
                                <h5>Discovery</h5>
                                <p class="text-muted">Nam liber tempor cum soluta nobis eleifend option congue nihil imper.</p>
                            </div>
                            </a>
                        </div>
                      
                        <div class="media pb-5">
                            <div class="icon-box mt-1">
                                <div class="icon-box-inner small-xs text-primary">
                                    <span data-feather="copy"></span>
                                </div>
                            </div>
                            <a href="your-link-for-discovery.html" class="media pb-5 hoverable-link">
                            <div class="media-body">
                                <h5>UI/UX Design</h5>
                                <p class="text-muted">Nam liber tempor cum soluta nobis eleifend option congue nihil imper.</p>
                            </div>
                            </a>
                        </div>
                        <div class="media pb-5">
                            <div class="icon-box mt-1">
                                <div class="icon-box-inner small-xs text-primary">
                                    <span data-feather="box"></span>
                                </div>
                            </div>
                            <a href="your-link-for-discovery.html" class="media pb-5 hoverable-link">
                            <div class="media-body">
                                <h5>QA & Testing</h5>
                                <p class="text-muted">Nam liber tempor cum soluta nobis eleifend option congue nihil imper.</p>
                            </div>
</a>
                        </div>
                        <div class="media">
                            <div class="icon-box mt-1">
                                <div class="icon-box-inner small-xs text-primary">
                                    <span data-feather="server"></span>
                                </div>
                            </div>
                            <a href="your-link-for-discovery.html" class="media pb-5 hoverable-link">
                            <div class="media-body">
                                <h5>Deployment</h5>
                                <p class="text-muted">Nam liber tempor cum soluta nobis eleifend option congue nihil imper.</p>
</div>
</a>
                        </div>
                    </div>
               
                <div class="media">
                            <div class="icon-box mt-1">
                                <div class="icon-box-inner small-xs text-primary">
                                    <span data-feather="server"></span>
                                </div>
                            </div>
                            <a href="your-link-for-discovery.html" class="media pb-5 hoverable-link">
                            <div class="media-body">
                                <h5>why</h5>
                                <p class="text-muted">Nam liber tempor cum soluta nobis eleifend option congue nihil imper.</p>
</div>
</a>
                        </div>
                    </div>
                </div>
               
</div>
        </section>
    <div class="card">
    <div class="card">
    <div class="card-body text-center">
        <div class="icon-box border-box">
            <div class="icon-box-inner small-xs text-primary">
                <span data-feather="award" width="30" height="30"></span>
            </div>
        </div>
        <h5 class="mt-0 mb-3">Tamil education</h5>
        <div class="text-block">
        At Yorkshire Tamil Common School (YTCS), we passionately dedicate ourselves to passing down the rich legacy of our language, Tamil, to the next generation. Teaching Tamil is more than language acquisition; it’s about connecting our children with their heritage. Experts highlight the importance of learning one's mother tongue in early development, noting its benefits in cognitive development and fostering a sense of identity. Children proficient in their native language often excel academically and find learning additional languages easier. YTCS's Tamil curriculum employs interactive activities and multimedia resources, making learning engaging and relevant, and ensuring that our young learners connect deeply with their Tamil identity.

        </div>
    </div>
</div>
<div class="card">
    <div class="card-body text-center">
        <div class="icon-box border-box">
            <div class="icon-box-inner small-xs text-primary">
                <span data-feather="check-circle" width="30" height="30"></span>
            </div>
        </div>
        <h5 class="mt-0 mb-3">Core Mission</h5>
        <div class="text-block">
            In the heart of Yorkshire, a vibrant beacon of Tamil culture, 
            language, and traditions is emerging. At Yorkshire Tamil Common School,
             our mission transcends the realms of ordinary education.
              We are not just a school; we are guardians of a legacy, 
              committed to nurturing the roots of our Tamil heritage in the fertile soil
               of our new environment.
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body text-center">
        <div class="icon-box border-box">
            <div class="icon-box-inner small-xs text-primary">
                <span data-feather="edit" width="30" height="30"></span>
            </div>
        </div>
        <h5 class="mt-0 mb-3">Duty and Responsibility</h5>
        <div class="text-block">
        As parents, we bridge two worlds: the land of Tamil Eelam,
         known for its lush green landscapes, self-reliant economy,
          and a culture steeped in tradition, and our new home,
           a land rich in ethno-linguistic diversity and at the forefront of
            a capitalist economy. It is our prime duty and responsibility to
             connect these two worlds for our next generation, ensuring they grow up with a solid understanding and appreciation of their ancestral culture and traditions. This task, immensely important and challenging, involves making the Tamil language, arts, and social customs resonate with the younger generation
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body text-center">
        <div class="icon-box border-box">
            <div class="icon-box-inner small-xs text-primary">
                <span data-feather="map" width="30" height="30"></span>
            </div>
        </div>
        <h5 class="mt-0 mb-3">Ambitious path</h5>
        <div class="text-block">
        Imagine a future where Tamil is not just a subject in a classroom, but a living, breathing part of our children's daily lives. Imagine a society where our festivals are celebrated with as much enthusiasm as those on the streets of Jaffna or Chennai. Imagine a society where our music, dance, and art not only thrive culturally but also contribute to economic development and prosperity.
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body text-center">
        <div class="icon-box border-box">
            <div class="icon-box-inner small-xs text-primary">
                <span data-feather="clipboard" width="30" height="30"></span>
            </div>
        </div>
        <h5 class="mt-0 mb-3">Roles and Impacts</h5>
        <div class="text-block">
        By joining hands with Yorkshire Tamil Common School, you are not just preserving a language or a set of traditions. You are shaping the identity of the next generation of Tamils. You are building a community that is rich in culture, strong in its sense of identity, and vibrant in its diversity.
        </div>
    </div>
</div>

</div>
                      

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
