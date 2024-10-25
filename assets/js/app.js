// Template Name: trimStyle
// Template URL: https://uiparadox.co.uk/teamplates/trimStyles/
// Description: Barber trimStyle Saloon
// Version: 1.0.0

(function (window, document, $, undefined) {
  "use strict";
  // ==========================================================
  // Detect mobile device and add class "is-mobile" to </body>
  // ==========================================================

  // Detect mobile device (Do not remove!!!)
  var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Nokia|Opera Mini/i.test(navigator.userAgent) ? true : false;

  // Add class "is-mobile" to </body>
  if (isMobile) {
    $("body").addClass("is-mobile");
  }
  var Init = {
    i: function (e) {
      Init.s();
      Init.methods();
    },
    s: function (e) {
      (this._window = $(window)),
        (this._document = $(document)),
        (this._body = $("body")),
        (this._html = $("html"));
    },
    methods: function (e) {
      Init.w();
      Init.BackToTop();
      Init.preloader();
      Init.intializeSlick();
      Init.smoothScroll();
      Init.formValidation();
      Init.contactForm();
      Init.videoPlay();
      Init.modalPopup();
    },
    w: function (e) {
      this._window.on("load", Init.l).on("scroll", Init.res);
    },
    BackToTop: function () {
      var btn = $("#backto-top");
      $(window).on("scroll", function () {
        if ($(window).scrollTop() > 300) {
          btn.addClass("show");
        } else {
          btn.removeClass("show");
        }
      });
      btn.on("click", function (e) {
        e.preventDefault();
        $("html, body").animate(
          {
            scrollTop: 0,
          },
          "300"
        );
      });
    },
    preloader: function () {
      setTimeout(function () { $('#preloader').hide('slow') }, 2000);
    },
    smoothScroll: function () {
      if ($("body").hasClass("ui-smooth-scroll")) {
        // Not for mobile devices!
        if (!isMobile) {
          var Scrollbar = window.Scrollbar;
          class AnchorPlugin extends Scrollbar.ScrollbarPlugin {
            static pluginName = 'anchor';

            onHashChange = () => {
              this.jumpToHash(window.location.hash);
            };

            onClick = (event) => {
              const { target } = event;
              if (target.tagName !== 'A') {
                return;
              }
              const hash = target.getAttribute('href');
              if (!hash || hash.charAt(0) !== '#') {
                return;
              }
              this.jumpToHash(hash);
            };

            jumpToHash = (hash) => {
              if (!hash) {
                return;
              }
              const { scrollbar } = this;
              scrollbar.containerEl.scrollTop = 0;
              const target = document.querySelector(hash);
              if (target) {
                scrollbar.scrollIntoView(target, {
                  offsetTop: parseFloat(target.getAttribute('data-offset')) || 0 // Change to set default offset
                });
              }
            };

            onInit() {
              this.jumpToHash(window.location.hash);
              window.addEventListener('hashchange', this.onHashChange);
              this.scrollbar.contentEl.addEventListener('click', this.onClick);
            };

            onDestory() {
              window.removeEventListener('hashchange', this.onHashChange);
              this.scrollbar.contentEl.removeEventListener('click', this.onClick);
            };
          };

          // usage
          Scrollbar.use(AnchorPlugin);


          // Init Smooth Scrollbar
          // ======================
          Scrollbar.init(document.querySelector("#scroll-container"), {
            damping: 0.06,
            renderByPixel: true,
            continuousScrolling: true,
            alwaysShowTracks: true
          });


          // 3rd party library setup
          // More info: https://greensock.com/docs/v3/Plugins/ScrollTrigger/static.scrollerProxy()
          // ========================
          let scrollPositionX = 0,
            scrollPositionY = 0,
            bodyScrollBar = Scrollbar.init(document.getElementById("scroll-container"));

          bodyScrollBar.addListener(({ offset }) => {
            scrollPositionX = offset.x;
            scrollPositionY = offset.y;
          });

          bodyScrollBar.setPosition(0, 0);
          bodyScrollBar.track.xAxis.element.remove();

          // Enable regular scrollbar inside a smooth scrollbar (#scroll-container). IMPORTANT: use class "tt-overflow" on inside scroll elements!
          // ===================================================
          if ($(".tt-overflow").length) {
            // Determine if an element is scrollable
            $.fn.ttIsScrollable = function () {
              return this[0].scrollWidth > this[0].clientWidth || this[0].scrollHeight > this[0].clientHeight;
            };

            $(".tt-overflow").each(function () {
              var $this = $(this);
              if ($this.ttIsScrollable()) {
                $this.on("wheel", function (e) {
                  e.stopPropagation();
                });
              }
            });
          }


          // Prevent input[type=number] to scroll on focus 
          // ==============================================
          $("input[type=number]").on("focus", function () {
            $(this).on("wheel", function (e) {
              e.stopPropagation();
            });
          });

        }

      }
    },
    intializeSlick: function (e) {
      if ($(".category-slider").length) {
        $(".category-slider").slick({
          infinite: true,
          slidesToShow: 5,
          slidesToScroll: 1,
          arrows: false,
          centerPadding: '0px',
          centerMode: true,
          autoplay: true,
          dots: true,
          cssEase: 'linear',
          autoplaySpeed: 2000,
          responsive: [
            {
              breakpoint: 1199,
              settings: {
                slidesToShow: 4,
              },
            },
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 3,
              },
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2,
              },
            },
            {
              breakpoint: 492,
              settings: {
                slidesToShow: 1,
              },
            },
          ],
        });
      }
      if ($(".propertie-slider").length) {
        $(".propertie-slider").slick({
          infinite: true,
          slidesToShow: 3,
          slidesToScroll: 3,
          arrows: false,
          centerPadding: '0px',
          centerMode: true,
          autoplay: true,
          dots: true,
          cssEase: 'linear',
          autoplaySpeed: 2000,
          responsive: [
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 2,
              },
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 1,
              },
            }
          ],
        });
      }
      if ($(".logo-slider").length) {
        $(".logo-slider").slick({
          infinite: true,
          slidesToShow: 5,
          slidesToScroll: 1,
          arrows: false,
          centerPadding: '0px',
          centerMode: true,
          autoplay: true,
          cssEase: 'linear',
          autoplaySpeed: 2000,
          responsive: [
            {
              breakpoint: 1199,
              settings: {
                slidesToShow: 4,
              },
            },
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 3,
              },
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2,
              },
            },
            {
              breakpoint: 580,
              settings: {
                slidesToShow: 1,
              },
            }
          ],
        });
      }

    },
    formValidation: function () {
      if ($(".contact-form").length) {
        $(".contact-form").validate();
      }
      if ($(".modal-form").length) {
        $(".modal-form").validate();
      }
    
    },
    contactForm: function () {
      $(".contact-form").on("submit", function (e) {
        e.preventDefault();
        if ($(".contact-form").valid()) {
          var _self = $(this);
          _self
            .closest("div")
            .find('button[type="submit"]')
            .attr("disabled", "disabled");
          var data = $(this).serialize();
          $.ajax({
            url: "./assets/mail/contact.php",
            type: "post",
            dataType: "json",
            data: data,
            success: function (data) {
              $(".contact-form").trigger("reset");
              _self.find('button[type="submit"]').removeAttr("disabled");
              if (data.success) {
                document.getElementById("message").innerHTML =
                  "<h3 class='bg-primary text-white p-3 mt-3'>Email Sent Successfully</h3>";
              } else {
                document.getElementById("message").innerHTML =
                  "<h3 class='bg-primary text-white p-3 mt-3'>There is an error</h3>";
              }
              $("#message").show("slow");
              $("#message").slideDown("slow");
              setTimeout(function () {
                $("#message").slideUp("hide");
                $("#message").hide("slow");
              }, 3000);
            },
          });
        } else {
          return false;
        }
      });
    },
    videoPlay: function () {
      var $videoSrc;
      $('.play-button').click(function () {
        $videoSrc = $(this).data("src");
        $("#video").attr('src', $videoSrc);
      });
      $('.btn-close').click(function () {
        $("#video").attr('src',' ');
      });
    },
    modalPopup: function () {
      $('.modal-popup').on('click',function(){
        $('.appoinment-form').animate({ opacity: '1', }, 'slow', function () {
          $(this).css('z-index', 999);
        })
      })
      $('.close').on('click',function(){
        $('.appoinment-form').animate({ opacity: '0', }, 'slow', function () {
          $(this).css('z-index', -10);
        })
      })
      
    }
  }
  Init.i();
})(window, document, jQuery);
