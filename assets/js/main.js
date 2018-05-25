var main_swiper = null;
var current_slide = 0;

$(document).ready(function() {

  /* ---------------------
  Appel au premier affichage du site puis non rechargé d'une page à l'autre
  --------------------- */
  newPageReady();
  config_uiNav();
});

var newPageReady = function() {

  setTimeout(function() {
    $('.loader_screen').addClass("hide");
  }, 100);
  // on récupère la page courante à partir de data-namespace
  var currentPage = document.getElementsByClassName('barba-container')[0].getAttribute("data-namespace");
  console.log("## newPageReady " + currentPage);
  if (currentPage == 'homePage') {
    init_homePage();
  }
  if (currentPage == 'player_episode') {
    init_player_episode();
  }
  if (currentPage == 'lecture_album') {
    config_lectureAlbum();
  }
  if (currentPage == 'page_presentation') {
    config_page_presentation();
    init_ContentScrollFx();
  }
  if (currentPage == 'page_article') {
    init_page_article();
  }

};

function preloadImg() {
  var array_preload = ["assets/img/nav/couv.jpg",
    "assets/img/nav/001.jpg",
    "assets/img/nav/002.jpg",
    "assets/img/nav/003.jpg",
    "assets/img/nav/004.jpg",
    "assets/img/nav/005.jpg",
    "assets/img/nav/006.jpg"
  ];
  var img_container = document.getElementById("imgPreload_container");
  for (var i = 0; i < array_preload.length; i++) {
    console.log(array_preload[i]);
    var new_img = document.createElement("img");
    new_img.src = array_preload[i];
    img_container.appendChild(new_img);
  }

}

/*
                                /^^
 /^                    /^       /^^
        /^^ /^^               /^/^ /^          /^ /^^          /^^            /^^           /^^          /^^^^
/^^      /^^  /^^     /^^       /^^            /^  /^^       /^^  /^^       /^^  /^^      /^   /^^      /^^
/^^      /^^  /^^     /^^       /^^            /^   /^^     /^^   /^^      /^^   /^^     /^^^^^ /^^       /^^^
/^^      /^^  /^^     /^^       /^^            /^^ /^^      /^^   /^^       /^^  /^^     /^                 /^^
/^^     /^^^  /^^     /^^        /^^           /^^            /^^ /^^^          /^^        /^^^^        /^^ /^^
                                               /^^                           /^^

*/



function init_homePage() {

  console.log("init_homePage()");
  window.addEventListener('load', function(e) {
    console.log("home loaded");
    /* add body class */
    document.body.className = "home_show";
    $(".home_loaderScreen").addClass("out");
    /* then preload nav imgs */
    preloadImg();

  });

  $('.language_nav a').on('click', function(event) {
    event.preventDefault();
    document.location.href = $(this).attr('href');
  });


  var currentX = 0;
  var currentY = 0;

  /* effet 3dcard */
  var card = document.getElementById("card");
  window.addEventListener('deviceorientation', function(event) {
    //rotateElement(55-event.beta,event.gamma);
  });
  window.addEventListener('mousemove', function(e) {
    rotateElement(-((5 * (e.y - window.innerHeight / 2)) / window.innerHeight / 2),
      (5 * (e.x - window.innerWidth / 2)) / window.innerWidth / 2);
  });

  function rotateElement(x, y) {
    currentX += (x - currentX) / 20;
    currentY += (y - currentY) / 20;
    card.style.transform = "rotateX(" + currentX + "deg) rotateY(" + currentY + "deg)";
  }
}

function init_page_article(){

  // init swiper_article if exist
  if ($('.swiper_article')) {
    var swiper_article = new Swiper('.swiper_article', {
      loop:true,
      slidesPerView: 1,
      freeMode: false,
      autoplay:true,
      effect : 'fade',
      fadeEffect: {
         crossFade: true
       },
       keyboard: {
        enabled: true,
        onlyInViewport: false,
      },
      mousewheel: {
        invert: false,
      },
      speed: 500,
    });
  }

}


/*

              /^^
              /^^
/^ /^^        /^^        /^^         /^^   /^^        /^^         /^ /^^^
/^  /^^       /^^      /^^  /^^       /^^ /^^       /^   /^^       /^^
/^   /^^      /^^     /^^   /^^         /^^^       /^^^^^ /^^      /^^
/^^ /^^       /^^     /^^   /^^          /^^       /^              /^^
/^^          /^^^       /^^ /^^^        /^^          /^^^^        /^^^
/^^                                   /^^

*/







function config_uiNav() {





  $('.nav_col_gauche a').on('click', function(event) {
    event.preventDefault();
    $('body').removeClass('navigation-is-open');
  });


  /* lien menu */
  var isLateralNavAnimating = false;
  $('.cd-nav-trigger').on('click', function(event) {
    event.preventDefault();
    //stop if nav animation is running
    if (!isLateralNavAnimating) {
      $('body').toggleClass('navigation-is-open');
      setTimeout(function() {
        isLateralNavAnimating = false;
      }, 600);
    }
  });

  $('#bt_welcome').on('click', function(event) {
    event.preventDefault();
    $('body').toggleClass('navigation-is-open');
  });

  /* effet d'affichage d'un visuel au rollOver */
  var timer;
  var timer2;
  var a_menu = document.querySelectorAll('#cd-nav nav a');
  for (var i = 0; i < a_menu.length; i++) {



    a_menu[i].addEventListener('mouseenter', function() {

      if (this.getAttribute('img_hover') == 'default') {
        $("#nav_col_droite .img_hover_container").removeClass("show");
        $("#nav_col_droite .img_hover_container").css("left", "100%");

      } else {

        clearTimeout(timer);
        clearTimeout(timer2);
        var img_container = document.createElement("div");
        img_container.className = "img_hover_container";

        var img_over = document.createElement("div");
        var bg_img = "url('../assets/img/nav/" + this.getAttribute('img_hover') + "')";
        img_over.className = "img_hover_cover";
        img_over.style.backgroundImage = bg_img;
        img_container.appendChild(img_over);
        document.getElementById("nav_col_droite").appendChild(img_container);
        timer2 = setTimeout(function() {
          img_container.classList.add("show");
        }, 50);
        timer = setTimeout(function() {
          $("#nav_col_droite .img_hover_container:not(:last-child)").remove();
        }, 1000);

      }

    });

    /* cursor */


    $(document)
      .mousemove(function(e) {
        $('.cursor')
          .eq(0)
          .css({
            left: e.pageX,
            top: e.pageY
          });
      });



  }

  /* init swiper Menu */
  if (document.getElementsByClassName('swiper_menu')) {
    var swiper_page_a_page = new Swiper('.swiper_menu', {
      slidesPerView: 'auto',
      direction: 'vertical',
      threshold: 30,
      slidesOffsetAfter: 30,
      mousewheel: {},
      scrollbar: {
        draggable: true,
        el: '.swiper-scrollbar',
      }
    });
  }

}






function config_page_presentation() {
  var swiper_presentation = new Swiper('.swiper_presentation', {
    speed: 400,
    autoplay: {
      delay: 4000,
    },
    effect: 'fade',
    fade: {
      crossFade: false,
    }
  });
}
/*

              /^^
              /^^
/^ /^^        /^^        /^^         /^^   /^^        /^^         /^ /^^^
/^  /^^       /^^      /^^  /^^       /^^ /^^       /^   /^^       /^^
/^   /^^      /^^     /^^   /^^         /^^^       /^^^^^ /^^      /^^
/^^ /^^       /^^     /^^   /^^          /^^       /^              /^^
/^^          /^^^       /^^ /^^^        /^^          /^^^^        /^^^
/^^                                   /^^

*/

function init_player_episode() {

  // pour rendre les doubles pages RESPONSIVE
  // on insert deux pages ou une selon les cas
  // var container_slides = document.querySelector('.swiper_pages .swiper_wrapper');
  // if(  arrayPagesEpisode.length>0 ){
  //
  //   for (var i = 0; i < arrayPagesEpisode.length; i++) {
  //
  //
  //     var img_container = document.createElement("div");
  //     img_container.className = "swiper-slide swiper_pages-slide";
  //
  //     var img = document.createElement("img");
  //     var src_img = "arrayPagesEpisode[i]";
  //     img_over.className = "img_hover_cover";
  //     img_over.style.backgroundImage = bg_img;
  //     img_container.appendChild(img_over);
  //     document.getElementById("nav_col_droite").appendChild(img_container);
  //
  //
  //   }
  // }

  /* INIT SWIPER MIN */
  if ($('.swiper_min')) {

    var swiper_min = new Swiper('.swiper_min', {
      nested: true,
      // preloadImages: false, // lazy loading
      // lazy: true,  // lazy loading
      // loadPrevNext: true, // lazy loading
      // loadPrevNextAmount: 20, // lazy loading

      slidesPerView: 'auto',
      slideToClickedSlide: true,
      centeredSlides: true,
      spaceBetween: 40,
      speed: 800,
      freeMode: true,
      freeModeSticky: true,
      freeModeMomentum: true,
      freeModeMomentumRatio: .6,
      grabCursor: true,
      keyboard: {
        enabled: false
      }
    });
  }
  /* INIT SWIPER PAGES */
  if ($('.swiper_pages')) {
    var swiper_pages = new Swiper('.swiper_pages', {
      nested: true,
      // preloadImages: false, // lazy loading
      // lazy: true,  // lazy loading
      // loadPrevNext: true, // lazy loading
      // loadPrevNextAmount: 20, // lazy loading
      effect : 'fade',
      fadeEffect: {
         crossFade: true
       },
       keyboard: {
    enabled: true,
    onlyInViewport: false,
  },
      mousewheel: {
        invert: false,
      },
      speed: 500,
      // navigation: {
      //   nextEl: '.swiper_pages_next',
      //   prevEl: '.swiper_pages_prev',
      // },

    });
  }
  //
  // /* link  swiper_min & swiper_pages */
  if ((swiper_pages) && (swiper_min)) {
    swiper_pages.controller.control = swiper_min;
    swiper_min.controller.control = swiper_pages;
  }
}



/*

                              /^
 /^^^^      /^^     /^^^             /^ /^^          /^^         /^ /^^^
/^^          /^^  ^  /^^     /^^     /^  /^^       /^   /^^       /^^
  /^^^       /^^ /^  /^^     /^^     /^   /^^     /^^^^^ /^^      /^^
    /^^      /^ /^ /^/^^     /^^     /^^ /^^      /^              /^^
/^^ /^^     /^^^    /^^^     /^^     /^^            /^^^^        /^^^
                                     /^^

*/


function initSwiper_doublePagesMin(){


}

function initSwiper_doublePages(){

}




function config_lectureAlbum() {


  window.addEventListener("resize", function() {
    config_lectureAlbum();
  });

  /* lien dezoom */
  if (document.getElementById('lien_dezoom')) {
    document.getElementById('lien_dezoom').addEventListener('click', function() {
      go_dezoom();
    });
  }
  /* lien zoom */
  if (document.getElementById('lien_zoom')) {
    document.getElementById('lien_zoom').addEventListener('click', function() {
      go_zoom();
    });
  }




  /* INIT SWIPER PANORAMIQUE */
  if ($('.swiper_panoramique')) {
    var swiper_fullPage = new Swiper('.swiper_panoramique', {
      nested: true,
      // preloadImages: false, // lazy loading
      // lazy: true,  // lazy loading
      // loadPrevNext: true, // lazy loading
      // loadPrevNextAmount: 20, // lazy loading
      slidesPerView: 'auto',
      freeMode: true,
      grabCursor: true,
      // navigation: {
      //   nextEl: '.swiper-panoramique-next',
      //   prevEl: '.swiper-panoramique-prev',
      // },
    });
  }




  /* INIT SWIPER FULLPAGE */
  if ($('#swiper_fullPage')) {
    swiper_fullPage = new Swiper('#swiper_fullPage', {});
  }

}

var go_zoomLevel = 1;

function go_dezoom() {

  if (go_zoomLevel > 0) {
    go_zoomLevel--;
  }
  document.body.className = "zoom_level_" + go_zoomLevel; // update body class
  document.getElementById('lien_zoom').style.display = 'block'; // show zoom link
  if (go_zoomLevel == 0) {
    document.getElementById('lien_dezoom').style.display = 'none';
  } // hide dezoom link if necessary
}

function go_zoom() {

  if (go_zoomLevel < 2) {
    go_zoomLevel++;
    document.getElementById('lien_dezoom').style.display = 'block'; // show dezoom link
  } else {
    document.getElementById('lien_zoom').style.display = 'none'; // hide zoom link if necessary
  }
  document.body.className = "zoom_level_" + go_zoomLevel; // update body class
}



/* scrolling functions */

function init_ContentScrollFx() {

  var w = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
  var h = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
  console.log('init_ContentScrollFx()');
  var apear_items = document.querySelectorAll(".appear_on_scroll");
  var isScrolling = false; 
  function throttleScroll(e) {
    console.log("scrolling");
    if (isScrolling == false) {
      window.requestAnimationFrame(function() {
        scrolling(e);
        Paralax();
        isScrolling = false;
      });
    }
    isScrolling = true;
  }

  function scrolling(e) {
    for (var n = 0; n < apear_items.length; n++) {
      var apear_item = apear_items[n];
      if (isPartiallyVisible(apear_item)) {
        apear_item.classList.add("appear");
      } else {
        apear_item.classList.remove("appear");
      }
    }
  }

  function isPartiallyVisible(el) {

    var elementBoundary = el.getBoundingClientRect();
    var top = elementBoundary.top;
    var bottom = elementBoundary.bottom;
    var height = elementBoundary.height;
    return ((top + height >= 0) && (height + window.innerHeight >= bottom));
  }

  /* parallax fx */

  var yScrollPosition;
  var parent_y;
  var parallax_01 = document.querySelectorAll(".parallax_01");
  var parallax_m01 = document.querySelectorAll(".parallax_m01");
  var parallax_photo_header = document.querySelectorAll(".parallax_photo_header");

  function setTranslate(xPos, yPos, el) {
    el.style.transform = "translate3d(" + xPos + ", " + yPos + "px, 0)";
  }

  function Paralax() {

    yScrollPosition = window.scrollY;

    for (i = 0; i < parallax_m01.length; i++) {
      setTranslate(0, yScrollPosition * .1, parallax_m01[i]);
    };

    for (i = 0; i < parallax_photo_header.length; i++) {
      parent_y = getPosition(parallax_photo_header[i].offsetParent.offsetParent).y;
      setTranslate(0, parent_y * -.2, parallax_photo_header[i]);
    };


  }

  throttleScroll();
  window.addEventListener("scroll", throttleScroll, false); 
}


function getPosition(el) {
  var xPos = 0;
  var yPos = 0;

  while (el) {
    if (el.tagName == "BODY") {
      // deal with browser quirks with body/window/document and page scroll
      var xScroll = el.scrollLeft || document.documentElement.scrollLeft;
      var yScroll = el.scrollTop || document.documentElement.scrollTop;

      xPos += (el.offsetLeft - xScroll + el.clientLeft);
      yPos += (el.offsetTop - yScroll + el.clientTop);
    } else {
      // for all other non-BODY elements
      xPos += (el.offsetLeft - el.scrollLeft + el.clientLeft);
      yPos += (el.offsetTop - el.scrollTop + el.clientTop);
    }

    el = el.offsetParent;
  }
  return {
    x: xPos,
    y: yPos
  };
}
