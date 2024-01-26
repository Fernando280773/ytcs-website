/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/sass/_custom.scss":
/*!*************************************!*\
  !*** ./resources/sass/_custom.scss ***!
  \*************************************/
/***/ (() => {

throw new Error("Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\nModuleBuildError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\nSassError: $color: theme-color(\"primary\") is not a color.\n    ╷\n234 │ $input-btn-focus-color: rgba(theme-color(\"primary\"), .25);\n    │                         ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^\n    ╵\n  resources/sass/_variables.scss 234:25  @import\n  resources/sass/_custom.scss 10:10      root stylesheet\n    at processResult (/Users/williamfernando/Desktop/ytc-website/node_modules/webpack/lib/NormalModule.js:764:19)\n    at /Users/williamfernando/Desktop/ytc-website/node_modules/webpack/lib/NormalModule.js:866:5\n    at /Users/williamfernando/Desktop/ytc-website/node_modules/loader-runner/lib/LoaderRunner.js:400:11\n    at /Users/williamfernando/Desktop/ytc-website/node_modules/loader-runner/lib/LoaderRunner.js:252:18\n    at context.callback (/Users/williamfernando/Desktop/ytc-website/node_modules/loader-runner/lib/LoaderRunner.js:124:13)\n    at Object.loader (/Users/williamfernando/Desktop/ytc-website/node_modules/sass-loader/dist/index.js:69:5)");

/***/ }),

/***/ "./resources/js/script.js":
/*!********************************!*\
  !*** ./resources/js/script.js ***!
  \********************************/
/***/ (() => {

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

  /**Theme switcher - DEMO PURPOSE ONLY */
  $('.switcher-trigger').click(function () {
    $('.switcher-wrap').toggleClass('active');
  });
  $('.color-switcher ul li').click(function () {
    var color = $(this).attr('data-color');
    $('#theme-color').attr("href", "css/" + color + ".css");
    $('.color-switcher ul li').removeClass('active');
    $(this).addClass('active');
  });
});

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	__webpack_modules__["./resources/js/script.js"]();
/******/ 	// This entry module doesn't tell about it's top-level declarations so it can't be inlined
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/sass/_custom.scss"]();
/******/ 	
/******/ })()
;