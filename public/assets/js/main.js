(function ($) {
  "use strict";

  var $window = $(window),
    $body = $("body");

  /*----------------------------------
# header sticky 
-----------------------------------*/

  var activeSticky = $("#sticky-header"),
    $winDow = $($window);
  $winDow.on("scroll", function () {
    var scroll = $($window).scrollTop(),
      isSticky = activeSticky;

    if (scroll < 1) {
      isSticky.removeClass("is-sticky");
    } else {
      isSticky.addClass("is-sticky");
    }
  });

  //  Off Canvas toggler Function
  var $offCanvasToggle = $(".offcanvas-toggle"),
    $offCanvas = $(".offcanvas"),
    $offCanvasOverlay = $(".offcanvas-overlay"),
    $mobileMenuToggle = $(".mobile-menu-toggle");
  $offCanvasToggle.on("click", function (e) {
    e.preventDefault();
    var $this = $(this),
      $target = $this.attr("href");
    $body.addClass("offcanvas-open");
    $($target).addClass("offcanvas-open");
    $offCanvasOverlay.fadeIn();

    if ($this.parent().hasClass("mobile-menu-toggle")) {
      $this.addClass("close");
    }
  });
  $(".offcanvas-close, .offcanvas-overlay").on("click", function (e) {
    e.preventDefault();
    $body.removeClass("offcanvas-open");
    $offCanvas.removeClass("offcanvas-open");
    $offCanvasOverlay.fadeOut();
    $mobileMenuToggle.find("a").removeClass("close");
  });

  // Off Canvas Menu

  function mobileOffCanvasMenu() {
    var $offCanvasNav = $(".offcanvas-menu, .overlay-menu"),
      $offCanvasNavSubMenu = $offCanvasNav.find(".offcanvas-submenu");
    /*Add Toggle Button With Off Canvas Sub Menu*/

    $offCanvasNavSubMenu.parent().prepend('<span class="menu-expand"></span>');
    /*Category Sub Menu Toggle*/

    $offCanvasNav.on("click", "li a, .menu-expand", function (e) {
      var $this = $(this);

      if ($this.attr("href") === "#" || $this.hasClass("menu-expand")) {
        e.preventDefault();

        if ($this.siblings("ul:visible").length) {
          $this.parent("li").removeClass("active");
          $this.siblings("ul").slideUp();
          $this.parent("li").find("li").removeClass("active");
          $this.parent("li").find("ul:visible").slideUp();
        } else {
          $this.parent("li").addClass("active");
          $this
            .closest("li")
            .siblings("li")
            .removeClass("active")
            .find("li")
            .removeClass("active");
          $this.closest("li").siblings("li").find("ul:visible").slideUp();
          $this.siblings("ul").slideDown();
        }
      }
    });
  }

  mobileOffCanvasMenu();

  $.fn.elExists = function () {
    return this.length > 0;
  };

  if ($(".nice-select").elExists()) {
    $(".nice-select").selectric();
  }

  /*-----------------------------------
  # hero-slider
  ------------------------------ */

  var heroSlider = new Swiper(".hero-slider .swiper-container", {
    loop: true,
    speed: 600,
    autoplay: false,
    lazy: true,
    spaceBetween: 0,
    fadeEffect: {
      crossFade: true,
    },
    pagination: {
      el: ".hero-slider .swiper-pagination",
      clickable: true,
    },

    // navigation: {
    //   nextEl: ".hero-slider .swiper-button-next",
    //   prevEl: ".hero-slider .swiper-button-prev",
    // },
    navigation: false,
  });

  var heroSlider2 = new Swiper(".hero-slider2 .swiper", {
    loop: true,
    speed: 600,
    autoplay: false,
    lazy: true,
    spaceBetween: 0,
    fadeEffect: {
      crossFade: true,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' + (index + 1) + "</span>";
      },
    },

    navigation: false,
  });

  /*-----------------------------------
  # cities slider
  ------------------------------ */

  var citiesSlider = new Swiper(".cities-slider .swiper", {
    loop: true,
    speed: 600,
    lazy: true,
    watchSlidesProgress: true,
    spaceBetween: 30,
    pagination: {
      el: ".cities-slider .swiper-pagination",
      clickable: true,
    },

    // navigation: {
    //   nextEl: ".cities-slider .swiper-button-next",
    //   prevEl: ".cities-slider .swiper-button-prev",
    // },
    navigation: false,
    breakpoints: {
      // when window width is >= 320px
      0: {
        slidesPerView: 1,
      },
      // when window width is >= 480px
      576: {
        slidesPerView: 2,
      },
      // when window width is >= 640px
      768: {
        slidesPerView: 3,
      },
      992: {
        slidesPerView: 4,
      },
    },
  });

  /*-----------------------------------
  # brand slider
  ------------------------------ */

  var BrandCarousel = new Swiper(".brand-slider .swiper", {
    loop: false,
    speed: 600,
    lazy: true,
    watchSlidesProgress: true,
    spaceBetween: 30,
    pagination: false,

    // navigation: {
    //   nextEl: ".brand-slider .swiper-button-next",
    //   prevEl: ".brand-slider .swiper-button-prev",
    // },
    navigation: false,
    breakpoints: {
      // when window width is >= 320px
      0: {
        slidesPerView: 2,
      },
      // when window width is >= 480px
      576: {
        slidesPerView: 3,
      },
      // when window width is >= 640px
      768: {
        slidesPerView: 4,
      },
      992: {
        slidesPerView: 5,
      },
    },
  });

  /*-----------------------------------
  # testimonial carousel
  ------------------------------ */

  var testimonialCarousel = new Swiper(".testimonial-carousel-one .swiper", {
    loop: false,
    watchSlidesProgress: true,
    slidesPerView: 1,
    spaceBetween: 30,
    speed: 1000,
    // autoplay: {
    //   delay: 5000,
    // },
    lazy: true,
    pagination: false,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints: {
      // when window width is >= 320px
      0: {
        slidesPerView: 1,
      },
      // when window width is >= 480px
      576: {
        slidesPerView: 1,
      },
      // when window width is >= 640px
      768: {
        slidesPerView: 1,
      },
      992: {
        slidesPerView: 1,
      },
    },
  });

  /*-----------------------------------
  # testimonial carousel
  ------------------------------ */

  var testimonialCarousel2 = new Swiper(".testimonial-carousel-two .swiper", {
    loop: false,
    watchSlidesProgress: true,
    slidesPerView: 1,
    spaceBetween: 30,
    speed: 1000,
    // autoplay: {
    //   delay: 5000,
    // },
    lazy: true,
    pagination: false,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints: {
      // when window width is >= 320px
      0: {
        slidesPerView: 1,
      },
      // when window width is >= 480px
      576: {
        slidesPerView: 1,
      },
      // when window width is >= 640px
      768: {
        slidesPerView: 1,
      },
      992: {
        slidesPerView: 1,
      },
    },
  });

  /*-----------------------------------
  # Interior carousel
  ------------------------------ */

  var Interior = new Swiper(".interior-carousel .swiper", {
    slidesPerView: "auto",
    slidesPerGroup: 3,
    spaceBetween: 25,
    speed: 1000,
    // autoplay: {
    //   delay: 5000,
    // },
    lazy: true,
    pagination: false,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  /*-----------------------------------
  # latest prorperties slider
  ------------------------------ */

  var latestProrpertiesSlider = new Swiper(
    ".latest-prorperties-slider .swiper",
    {
      loop: true,
      spaceBetween: 6,
      speed: 600,
      autoplay: {
        delay: 5000,
      },
      lazy: true,
      fadeEffect: {
        crossFade: true,
      },
      pagination: false,

      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },

      breakpoints: {
        // when window width is >= 320px
        0: {
          slidesPerView: 1,
        },
        // when window width is >= 480px
        576: {
          slidesPerView: 1,
        },
        // when window width is >= 640px
        768: {
          slidesPerView: 2,
        },
        992: {
          slidesPerView: 2,
        },
        1200: {
          slidesPerView: 3,
        },
        1500: {
          slidesPerView: 4,
        },

        1920: {
          slidesPerView: 5,
        },
      },
    }
  );

  /*-----------------------------------
  # latest prorperties slider
  ------------------------------ */

  var sidebarCarousel = new Swiper(".sidebar-carousel .swiper", {
    loop: true,
    spaceBetween: 5,
    slidesPerView: 1,
    speed: 600,
    autoplay: {
      delay: 5000,
    },
    lazy: true,
    fadeEffect: {
      crossFade: true,
    },
    pagination: false,

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  // search tab

  function searchTab() {
    $(".search-tab li").on("click", function () {
      var tab_id = $(this).attr("data-tab");
      $(".search-tab li").removeClass("active");
      $(".tab-content").removeClass("active");
      $(this).addClass("active");
      $("#" + tab_id).addClass("active");
    });
  }

  searchTab();

  function PropertiesTab() {
    $(".all-properties li").on("click", function () {
      var tab_id = $(this).attr("data-tab");
      $(".all-properties li").removeClass("active");
      $(".properties-tab-content").removeClass("active");
      $(this).addClass("active");
      $("#" + tab_id).addClass("active");
    });
  }

  PropertiesTab();

  function GridTab() {
    $(".grid-tab-menu li").on("click", function () {
      var tab_id = $(this).attr("data-grid");
      $(".grid-tab-menu li").removeClass("active");
      $(".grid-tab-content").removeClass("active");
      $(this).addClass("active");
      $("#" + tab_id).addClass("active");
    });
  }

  GridTab();

  function myFunction(x) {
    if (x.matches) {
      // If media query matches
      var scene = document.querySelectorAll(".scene");
      scene.forEach((el) => {
        var parallaxInstance = new Parallax(el);
      });
    }
  }

  var x = window.matchMedia("(min-width: 992px)");
  myFunction(x); // Call listener function at run time
  x.addListener(myFunction); // Attach listener function on state changes

  $(".play-button").magnificPopup({
    disableOn: 700,
    type: "iframe",
    mainClass: "mfp-fade",
    removalDelay: 160,
    preloader: true,
    fixedContentPos: true,
  });

  $(".gallery-image").magnificPopup({
    type: "image",
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0, 1], // Will preload 0 - before current, and 1 after the current image
    },
  });

  document.querySelectorAll(".tab-toggle-btn").forEach(function (elment) {
    elment.addEventListener("click", function () {
      document.querySelectorAll(".search-btn").forEach(function (btn) {
        btn.classList.toggle("active");
        if (btn.classList.contains("active")) {
          btn.style.display = "none";
        } else {
          btn.style.display = "block";
        }
      });

      elment.classList.toggle("active");

      document
        .querySelectorAll(".advanced-searrch-hidden")
        .forEach(function (el) {
          if (el.style.maxHeight) {
            el.style.maxHeight = null;
            el.classList.remove("active");
          } else {
            el.style.maxHeight = el.scrollHeight + "px";

            setTimeout(function () {
              el.classList.add("active");
            }, 200);
          }
        });
    });
  });

  /*---------------------------------
	 	MailChimp
    -----------------------------------*/
  $("#mc-form").ajaxChimp({
    language: "en",
    callback: mailChimpResponse,
    // ADD YOUR MAILCHIMP URL BELOW HERE!
    url: "http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef",
  });
  function mailChimpResponse(resp) {
    if (resp.result === "success") {
      $(".mailchimp-success")
        .html("" + resp.msg)
        .fadeIn(900);
      $(".mailchimp-error").fadeOut(400);
    } else if (resp.result === "error") {
      $(".mailchimp-error")
        .html("" + resp.msg)
        .fadeIn(900);
    }
  }
  /*-------------------------
      Ajax Contact Form 
  ---------------------------*/
  $(function () {
    // Get the form.
    var form = $("#contact-form");

    // Get the messages div.
    var formMessages = $(".form-messege");

    // Set up an event listener for the contact form.
    $(form).submit(function (e) {
      // Stop the browser from submitting the form.
      e.preventDefault();

      // Serialize the form data.
      var formData = $(form).serialize();

      // Submit the form using AJAX.
      $.ajax({
        type: "POST",
        url: $(form).attr("action"),
        data: formData,
      })
        .done(function (response) {
          // Make sure that the formMessages div has the 'success' class.
          $(formMessages).removeClass("error");
          $(formMessages).addClass("success");

          // Set the message text.
          $(formMessages).text(response);

          // Clear the form.
          $("#contact-form input,#contact-form textarea").val("");
        })
        .fail(function (data) {
          // Make sure that the formMessages div has the 'error' class.
          $(formMessages).removeClass("success");
          $(formMessages).addClass("error");

          // Set the message text.
          if (data.responseText !== "") {
            $(formMessages).text(data.responseText);
          } else {
            $(formMessages).text(
              "Oops! An error occured and your message could not be sent."
            );
          }
        });
    });
  });

  $.fn.elExists = function () {
    return this.length > 0;
  };

  if ($(".counter-up").elExists()) {
    $(".counter-up").counterUp({
      delay: 10,
      time: 1000,
    });
  }

  /*---------------------------------
        Scroll Up
    -----------------------------------*/
  function scrollToTop() {
    var $scrollUp = $("#scrollUp"),
      $lastScrollTop = 0,
      $window = $(window);

    $window.on("scroll", function () {
      var st = $(this).scrollTop();
      if (st > $lastScrollTop) {
        $scrollUp.css({ bottom: "-60px" });
      } else {
        if ($window.scrollTop() > 200) {
          $scrollUp.css({ bottom: "60px" });
        } else {
          $scrollUp.css({ bottom: "-60px" });
        }
      }
      $lastScrollTop = st;
    });

    $scrollUp.on("click", function (evt) {
      $("html, body").animate({ scrollTop: 0 }, 600);
      evt.preventDefault();
    });
  }
  scrollToTop();

  $(".search-tab button").on("click", function () {
    if ($(".tab-toggle-btn").contents("active")) {
      $(".tab-toggle-btn").removeClass("active");
    } else {
      $(".tab-toggle-btn").addClass("active");
    }

    document
      .querySelectorAll(".advanced-searrch-hidden")
      .forEach(function (el) {
        if (el.style.maxHeight) {
          el.style.maxHeight = null;
          el.classList.remove("active");
        }
      });
  });
})(jQuery);
