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


      
    </style>
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

       
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
                        <a class="nav-link page-scroll" href="{{ route('mission') }}">Mission</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#">About</a>
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
                <!-- <form class="form-inline">
                    <p class="mb-0 mx-3"><a class="page-scroll font-weight-bold" href="#contact">Work with us</a></p>
                </form> -->
            </div>
        </nav>


    <br> 
<br><br>
    <section class="bg-hero py-8" style="background-image: url({{ asset('img/YTCS_website_1.png') }})">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 mx-auto text-center">
                        <h2 class="text-white">Who are we?</h2>
                        <p class="lead text-white my-4">Read more about who we are and what we stand for at YTCS</p>
                        <p class="lead text-white my-4">Want to see our mission?</p>
                        <a href="{{ route('mission') }}">
                        <button class="btn btn-primary" >Read our Mission</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>

    <div class="card">
    <div class="card">
    <div class="card-body text-center">
        <div class="icon-box border-box">
            <div class="icon-box-inner small-xs text-primary">
                <span data-feather="aperture" width="30" height="30"></span>
            </div>
        </div>
        <h5 class="mt-0 mb-3">Introduction</h5>
        <div class="text-block">
        Welcome to Yorkshire Tamil Common School (YTCS), a distinctive educational institution born from the collective vision and effort of Tamil parents in Yorkshire. We pride ourselves on being a 100% non-profit organization, passionately dedicated to providing a quality learning environment. Our foundation is built on the unique cultural heritage of the Tamil community, reflecting our commitment to preserving and promoting our rich traditions and values. YTCS offers a diverse range of educational programs, encompassing both academic excellence and cultural enrichment.

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
        <h5 class="mt-0 mb-3">Core Values</h5>
        <div class="text-block">
        At the heart of Yorkshire Tamil Common School is our unwavering commitment to the community. As a 100% non-profit entity, every decision and action is aimed at benefiting our students and their families. Our core values center around respect, integrity, and excellence in education, deeply rooted in the Tamil cultural ethos. For instance, our curriculum integrates traditional Tamil values with modern educational practices. We believe that education is not just about academic achievement, but also about nurturing responsible, culturally aware individuals who are ready to contribute positively to society.
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body text-center">
        <div class="icon-box border-box">
            <div class="icon-box-inner small-xs text-primary">
                <span data-feather="users" width="30" height="30"></span>
            </div>
        </div>
        <h5 class="mt-0 mb-3">Community Focus</h5>
        <div class="text-block">
        At Yorkshire Tamil Common School, we firmly believe in the power of unity. Our school is more than just an educational institution; it is a vibrant hub where Tamil culture thrives and where families come together to create a strong, supportive community. We emphasize the importance of collective effort and mutual support. These values are fundamental in shaping a resilient and connected Tamil diaspora in Yorkshire. YTCS serves as a beacon, fostering cultural connections and empowering our children to carry forward the rich legacy of our heritage with pride and confidence.
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body text-center">
        <div class="icon-box border-box">
            <div class="icon-box-inner small-xs text-primary">
                <span data-feather="user-plus" width="30" height="30"></span>
            </div>
        </div>
        <h5 class="mt-0 mb-3">Join us</h5>
        <div class="text-block">
        We invite all Tamil parents in Yorkshire to join us in this noble journey at Yorkshire Tamil Common School. Your involvement is not just an investment in your child's future; it's a step towards building a unified and robust Tamil community. Whether through volunteering, participating in school events, or contributing ideas, your engagement is invaluable. Together, we can ensure that our children grow up in a nurturing environment that honors our rich Tamil heritage and prepares them for a bright future. Let's unite to create a legacy of education and cultural pride that will resonate for generations to come. Reach out to us today to join our community and embark on this rewarding journey with YTCS.
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
