//Hamburger Menu
var Menu = {
    el: {
    ham: jQuery('.navbar-toggler-standard'),
    menuTop: jQuery('.menu-top'),
    menuMiddle: jQuery('.menu-middle'),
    menuBottom: jQuery('.menu-bottom')
    },
    init: function() {
    Menu.bindUIactions();
    },
    bindUIactions: function() {
    Menu.el.ham
    .on(
    'click',
    function(event) {
    Menu.activateMenu(event);
    event.preventDefault();
    }
    );
    },
    activateMenu: function() {
    Menu.el.menuTop.toggleClass('menu-top-click');
    Menu.el.menuMiddle.toggleClass('menu-middle-click');
    Menu.el.menuBottom.toggleClass('menu-bottom-click'); 
    }
    };
Menu.init();

// Header change on scroll
$(document).ready(function() {
  $(window).scroll(function(){
      if ($(this).scrollTop() > 70) {
         $('.logo_header').addClass('scroll-imgchange'); 
         $('.navbar-nav').addClass('scroll-navchange');
         $('.headerbar').addClass('scroll-headerchange');
         $('.navbar-toggler2').addClass('scroll-hamburger');
         $('header').addClass('shadow-header');
      } else {
         $('.logo_header').removeClass('scroll-imgchange');
         $('.navbar-nav').removeClass('scroll-navchange');
         $('.headerbar').removeClass('scroll-headerchange');
         $('.navbar-toggler2').removeClass('scroll-hamburger');
         $('header').removeClass('shadow-header');
      }
  });
});

// for Header Demo2
$(document).ready(function() {
  $('.navbar-toggler').click(function() {
    $('.menu-menu-1-container').toggleClass('act');
  });

  $('.menu-item-type-custom').click(function() {
    $('.menu-menu-1-container').removeClass('act');
    $('.menu-bottom').removeClass('menu-bottom-click');
    $('.menu-middle').removeClass('menu-middle-click');
    $('.menu-top').removeClass('menu-top-click');
  });
});

// Menu for standard header with blur effect
$(document).ready(function() {
  const navbarToggler = $('.navbar-toggler-standard');
  const site = $('.site');
  const body = $('body');

  navbarToggler.on('click', function() {
    if (body.hasClass('no-scroll')) {
      body.removeClass('no-scroll');
      site.removeClass('filter-style');
      $(window).scrollTop(body.data('scroll-position')); // Restore previous scroll position
    } else {
      body.data('scroll-position', $(window).scrollTop()); // Save current scroll position
      body.addClass('no-scroll');
      site.addClass('filter-style');
    }
  });
});


function closeNavbar() {
  $(".navbar-toggler").attr("aria-expanded", "false");
  $(".navbar-collapse").removeClass("show");
  $("body").removeClass("no-scroll");
  $(".site").removeClass("filter-style");
  $(".menu-menu-1-container").removeClass("act");
  // toggleScroll(); // This line is causing the error if toggleScroll is not defined
}

$(".navbar-collapse li a").on("click", function() {
  closeNavbar();
});

var swiper = new Swiper(".mySwiper_systems", {
  slidesPerView: 1.3,
  spaceBetween: 16,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  autoplay: {
    delay: 6000,
  },
  breakpoints: {
    767.98: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 27,
      autoplay: false,
    },
  },
});

var swiper = new Swiper(".mySwiper_blogs", {
  slidesPerView: 1.2,
  spaceBetween: 12,
  loop: true,
  autoplay: {
    delay: 5000,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    991.98: {
      slidesPerView: 1.5,
      spaceBetween: 25.8,
    },
    1024: {
      slidesPerView: 2.5,
      spaceBetween: 25.8,
    },
  },
});

//Counter function in banner section
function animateCounter(element, targetValue, duration, showPlus) {
        const startValue = 0;
        const increment = (targetValue - startValue) / duration;
        let currentValue = startValue;

        const animationInterval = setInterval(() => {
            currentValue += increment;
            if (currentValue >= targetValue) {
                currentValue = targetValue;
                clearInterval(animationInterval);
            }
            if (showPlus) {
                element.textContent = Math.round(currentValue) + "+";
            } else {
                element.textContent = Math.round(currentValue);
            }
        }, 10);
    }

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const numbersElements = entry.target.querySelectorAll('.numbers');
                numbersElements.forEach((numberElement, index) => {
                    const targetValue = parseInt(numberElement.textContent);
                    const showPlus = index === 1; // Show plus sign for the second box
                    animateCounter(numberElement, targetValue, 100, showPlus);
                });

                observer.unobserve(entry.target);
            }
        });
    });

    const counterSection = document.getElementById('counter-section');
    if (counterSection) {
        observer.observe(counterSection);
    }

    $(document).ready(function() {
      // Smooth scrolling to the target section when any link with the smooth-scroll-link class is clicked
      $("a").on("click", function(event) {
        // Find the target element by ID
        const targetID = $(this).attr("href");
        const targetElement = document.querySelector(targetID);
    
        // Scroll to the target section smoothly
        if (targetElement) {
          targetElement.scrollIntoView({
            behavior: "smooth"
          });
          event.preventDefault(); // Prevent the default link behavior (changing the URL)
        }
      });
    });  