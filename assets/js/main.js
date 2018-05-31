var currentPage = "";

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
  currentPage = document.getElementsByClassName('barba-container')[0].getAttribute("data-namespace");
  console.log("## newPageReady " + currentPage);
  if (currentPage == 'homePage') {
    init_homePage();
  }
  if (currentPage == 'page_chapter') {
    init_page_chapter();
  }

  if (currentPage == 'page_presentation') {
    init_page_presentation();
  }
  if (currentPage == 'page_article') {
    init_page_article();
  }

};

function preloadImg() {
  var array_preload = ["/assets/img/nav/couv.jpg",
    "/assets/img/nav/visuel-chapitre1.jpg",
    "/assets/img/nav/visuel-chapitre2.jpg",
    "/assets/img/nav/visuel-chapitre3.jpg",
    "/assets/img/nav/visuel-chapitre4.jpg",
    "/assets/img/nav/visuel-chapitre5.jpg",
    "/assets/img/nav/visuel-chapitre6.jpg",
    "/assets/img/nav/visuel-chapitre7.jpg",
    "/assets/img/nav/visuel-chapitre8.jpg"
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

  $('#bt_welcome').on('click', function(event) {
    event.preventDefault();
    $('body').toggleClass('navigation-is-open');
  });

  window.addEventListener('load', function(e) {
    console.log("home loaded");
    /* add body class */
    document.body.className = "home_show";

  });

  // $('.language_nav a').on('click', function(event) {
  //   event.preventDefault();
  //   document.location.href = $(this).attr('href');
  // });


  var currentX = 0;
  var currentY = 0;
  var alpha_x = 0;
  var alpha_y = 0;

  /* effet 3dcard */
  var card = document.getElementById("card");
  window.addEventListener('deviceorientation', function(event) {
    //rotateElement(55-event.beta,event.gamma);
  });


  // var timeoutID = window.setTimeout(startHomeMove, 2000);

  startHomeMove();

  function startHomeMove(){
    console.log('startHomeMove');
    window.addEventListener('mousemove', function(e) {
      if (currentPage == 'homePage') {
        var alpha_x = (5 * (e.x - window.innerWidth / 2)) / window.innerWidth / 2;
        if(alpha_x>1){ alpha_x = 1;  }
        if(alpha_x<-1){ alpha_x = -1;  }
        var alpha_y = -((5 * (e.y - window.innerHeight / 2)) / window.innerHeight / 2)
        rotateElement(alpha_y, alpha_x);
      }
    });
  }



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




function config_uiNav() {

  console.log("config_uiNav");

  window.addEventListener('load', function(e) {
    /* preload nav imgs */
    preloadImg();

  });


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



  /* effet d'affichage d'un visuel au rollOver */
  var timer;
  var timer2;
  var a_menu = document.querySelectorAll('#cd-nav .sommaire a');
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

// INIT PAGE PRESENTATION


function init_page_presentation() {
  var swiper_presentation = new Swiper('.swiper_presentation', {
    speed: 400,
    autoplay: {
      delay: 4000,
    },
    effect: 'fade',
    fade: {
      crossFade: true,
    }
  });
}


// INIT PAGE CHAPTER


function init_page_chapter() {

  /* SLIDER PAGES  */
  if ( document.getElementById('swiper_min') && document.getElementById('swiper_pages') ) {

    /* INIT SWIPER PAGES */
    var swiper_pages = new Swiper('.swiper_pages', {
      nested: true,
      effect : 'fade',
      speed: 800,
      shortSwipes: false,
      fadeEffect: {
        crossFade: true
      },
      keyboard: {
        enabled: true,
        onlyInViewport: false,
      },
      navigation: {
        nextEl: '.swiper_pages_next',
        prevEl: '.swiper_pages_prev',
      },
      mousewheel: {
      invert: false,
      }
    });

    /* INIT SWIPER MIN */
    var swiper_min = new Swiper('.swiper_min', {
      nested: true,
      slidesPerView: 'auto',
      slideToClickedSlide: true,
      centeredSlides: true,
      spaceBetween: 40,
      freeMode: true,
      freeModeSticky: true,
      freeModeMomentum: true,
      freeModeMomentumRatio: .1,
      freeModeMomentumVelocityRatio: 1,
      freeModeMomentumBounce: false,
      grabCursor: true,
      keyboard: {
        enabled: false
      }
    });


    // gestion du bouton chapitre next
    $('.bt_next_chapitre').addClass('disabled');
    swiper_pages.on('reachEnd',function(){
        $('.bt_next_chapitre').removeClass('disabled');
    });


    // liaison des deux players
    swiper_pages.controller.control = swiper_min;
    swiper_min.controller.control = swiper_pages;


    /* lien dezoom */
    document.getElementById('lien_dezoom').addEventListener('click', function() {
      go_dezoom();
    });

    /* lien zoom */
    document.getElementById('lien_zoom').addEventListener('click', function() {
      go_zoom();
    });

  }


    /* INIT SWIPER PANORAMIQUE */
    if ( document.getElementById('swiper_panoramique') ) {
      var swiper_fullPage = new Swiper('.swiper_panoramique', {
        nested: true,
        slidesPerView: 'auto',
        freeMode: true,
        grabCursor: true,
        navigation: {
        nextEl: '.swiper_pages_next',
        prevEl: '.swiper_pages_prev',
        },
      });

      // gestion du bouton chapitre next
      $('#bt_next_chapitre').addClass('disabled');

      swiper_fullPage.on('slideChangeTransitionEnd',function(){
          if(swiper_fullPage.isEnd){
            $('#bt_next_chapitre').removeClass('disabled');
            $('#swiper_pages_next').addClass('disabled');
          }
      });
      swiper_fullPage.on('sliderMove',function(){
            $('#bt_next_chapitre').addClass('disabled');
            $('#swiper_pages_next').removeClass('disabled');
      });
      swiper_fullPage.on('transitionStart',function(){
            $('#bt_next_chapitre').addClass('disabled');
            $('#swiper_pages_next').removeClass('disabled');
      });

    }

  var go_zoomLevel = 1;

  function go_dezoom() {

    if (go_zoomLevel > 0) {
      go_zoomLevel--;
    }
    document.body.className = "zoom_level_" + go_zoomLevel; // update body class
  }

  function go_zoom() {

    if (go_zoomLevel < 1) {
      go_zoomLevel++;
    }
    document.body.className = "zoom_level_" + go_zoomLevel; // update body class
  }



}
