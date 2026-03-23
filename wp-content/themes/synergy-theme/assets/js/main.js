$(document).ready(function () {
  function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
      rect.top < (window.innerHeight || document.documentElement.clientHeight) &&
      rect.bottom > 0
    );
  }

  function triggerOdometer(element) {
    const $element = $(element);
    if (!$element.hasClass('odometer-triggered')) {
      const countNumber = $element.attr('data-count');
      setTimeout(() => {
        $element.html(countNumber);
      }, 500);
      $element.addClass('odometer-triggered');
    }
  }

  function handleOdometer() {
    $('.odometer').each(function () {
      if (isInViewport(this)) {
        triggerOdometer(this);
      }
    });
  }

  // Run on load + scroll
  handleOdometer();
  $(window).on('scroll', handleOdometer);

  // GSAP animation
  gsap.from(".exp-box", { y: -300, duration: 1, ease: "power2.inOut" });
  gsap.from(".cli-box", { y: 300, duration: 1, ease: "power2.inOut" });


  gsap.from("#hero-title", {
    y: -100,          // start 100px above
    opacity: 0,       // fade in too
    duration: 1.5,    // seconds
    ease: "power3.out"
  });
  gsap.from("#hand-img", {
    y: -150,        // start above (-150px)
    opacity: 0,     // fade in
    duration: 1.5,  // time in seconds
    ease: "power3.out"
  });
  gsap.from(".action-wrap", { y: 100, opacity: 0, duration: 1, ease: "power2.inOut" });
  const sidebar = document.querySelector('.sidebar');
  const toggle = document.querySelector('.navbar-toggler');
  const closeBtn = document.querySelector('.sidebar-close');
  const overlay = document.querySelector('.sidebar-overlay');

  function openSidebar() {
    sidebar.classList.add('show');
    overlay.classList.add('show');
  }

  function closeSidebar() {
    sidebar.classList.remove('show');
    overlay.classList.remove('show');
  }

  toggle.addEventListener('click', openSidebar);
  closeBtn.addEventListener('click', closeSidebar);
  overlay.addEventListener('click', closeSidebar);
  gsap.from(".about-us .bg-label , .about-us-op ,our-services .bg-label", {
    y: -100,
    duration: 1,
    opacity: 0,
    ease: "power2.inOut",
    scrollTrigger: {
      trigger: ".about-us",   // watch this element
      start: "top 80%",       // when top of .bg-label hits 80% of viewport
      toggleActions: "play none none none", // play once, don’t reverse
      // ensures animation runs only once
    }
  });

  gsap.from(".about-us h1 ,.about-us p ", {
    y: 100,
    duration: 1,
    opacity: 0,
    ease: "power2.inOut",
    scrollTrigger: {
      trigger: ".about-us",   // watch this element
      start: "top 80%",       // when top of .bg-label hits 80% of viewport
      toggleActions: "play none none none", // play once, don’t reverse
      // ensures animation runs only once
    }
  });


  gsap.from(".our-services h1  ", {
    y: 100,
    duration: 1,
    opacity: 0,
    ease: "power2.inOut",
    scrollTrigger: {
      trigger: ".our-services",   // watch this element
      start: "top 80%",       // when top of .bg-label hits 80% of viewport
      toggleActions: "play none none none", // play once, don’t reverse
      // ensures animation runs only once
    }
  });
  gsap.from("our-services .bg-label", {
    y: -100,
    duration: 1,
    opacity: 0,
    ease: "power2.inOut",
    scrollTrigger: {
      trigger: ".our-services",   // watch this element
      start: "top 80%",       // when top of .bg-label hits 80% of viewport
      toggleActions: "play none none none", // play once, don’t reverse
      // ensures animation runs only once
    }
  });

  gsap.from(".Services-box", {
    scrollTrigger: {
      trigger: ".our-services",   // watch this element
      start: "top 80%",           // when top of .our-services hits top of viewport
      toggleActions: "play none none none" // play once
    },
    opacity: 0,
    y: 50,                  // slide up from 50px below
    duration: 0.8,
    ease: "power3.out",
    stagger: 0.2            // delay between each box
  });

  gsap.from(".about-us-right-box", {
    scrollTrigger: {
      trigger: ".about-us-right-box",
      start: "top 80%",          // when the top of box hits 80% of viewport
      toggleActions: "play none none none"
    },
    opacity: 0,
    x: 100,                      // start 100px to the right
    duration: 1,
    ease: "power3.out"
  });

  // Optional: animate the inner notes separately with stagger
  gsap.from(".aboutus-pop-note", {
    scrollTrigger: {
      trigger: ".about-us-right-box",
      start: "top 80%",
      toggleActions: "play none none none"
    },
    opacity: 0,
    x: 50,
    duration: 0.8,
    ease: "power3.out",
    stagger: 0.2
  });

  // Slide up the form-wrap when .contect-form enters viewport
  gsap.from(".form-wrap", {
    scrollTrigger: {
      trigger: ".contect-form",  // section to watch
      start: "top 50%",           // trigger when top of section hits 80% of viewport
      toggleActions: "play none none none"
    },
    opacity: 0,
    y: 50,                         // start 50px below
    duration: 1,
    ease: "power3.out",
    stagger: 0.2                   // optional if multiple child elements animate
  });

  // Optional: animate individual form fields sequentially
  gsap.from(".form-wrap .form-group, .form-wrap button", {
    scrollTrigger: {
      trigger: ".contect-form",
      start: "top 50%",
      toggleActions: "play none none none"
    },
    opacity: 0,
    y: 30,
    duration: 0.8,
    ease: "power3.out",
    stagger: 0.15
  });

});

// Make sure GSAP is loaded before this script




window.addEventListener('load', () => {
  setTimeout(() => {
    const loader = document.querySelector('.loader');
    if (loader) {
      loader.classList.add('hide'); // fade out
      // Optional: remove from DOM after fade
      setTimeout(() => loader.style.display = 'none', 500);
    }
  }, 5000); // 5 seconds
});



const swiper = new Swiper(".mySwiper", {
  slidesPerView: 1.3,
  spaceBetween: 20,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    768: {
      slidesPerView: 2, // 2 slides on tablet
    },
    1024: {
      slidesPerView: 3, // 3 slides on desktop
    },
  },
});

let lastScrollTop = 0;
const navbar = document.querySelector('.navbar');
window.addEventListener('scroll', function () {
  const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

  if (scrollTop > lastScrollTop && scrollTop > 100) {
    // Scrolling down
    navbar.classList.add('fixed-top');
  } else if (scrollTop <= 100) {
    // Scrolling up or near top
    navbar.classList.remove('fixed-top');
  }

  lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
});




let lastScrollTop2 = 0;
const nav = document.querySelector('.mobile-nav');

window.addEventListener('scroll', function () {
  const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

  if (scrollTop > lastScrollTop) {
    // scrolling down
    nav.style.top = '-80px'; // hide navbar (adjust based on navbar height)
  } else {
    // scrolling up
    nav.style.top = '0';
  }

  lastScrollTop2 = scrollTop <= 0 ? 0 : scrollTop; // avoid negative values
});






$("#banner-explore-more").click(function () {
  $(".hide-show").toggleClass("show");

  // Find only the text node (not the image)
  const textSpan = $(this).find(".btn-text");

  // Toggle text between Explore More and Show Less
  textSpan.text(textSpan.text().trim() === "Explore More" ? "Show Less" : "Explore More");
});


$(".product-learnmore").click(function (e) {
  e.preventDefault();

  const $this = $(this);
  const $para = $this.siblings("p");
  const siteUrl = $this.data("site-url");

  // Toggle a class for expanded/collapsed state
  $para.toggleClass("expanded");

  // Change text based on state
  if ($para.hasClass("expanded")) {
    $this.html('Show Less <img src="' + siteUrl + '/wp-content/themes/synergy-theme/assets/img/aroow-blue.svg" />');
  } else {
    $this.html('Learn More <img src="' + siteUrl + '/wp-content/themes/synergy-theme/assets/img/aroow-blue.svg" />');
  }
});


$(".learn-more").click(function (e) {
  e.preventDefault();

  const $this = $(this);
  const siteUrl = $this.data("site-url");
  const $p = $this.siblings("p");

  $p.toggleClass("expanded");

  if ($p.hasClass("expanded")) {
    $this.html('Show Less <img src="' + siteUrl + '/wp-content/themes/synergy-theme/assets/img/aroow-blue.svg" />');
  } else {
    $this.html('Learn More <img src="' + siteUrl + '/wp-content/themes/synergy-theme/assets/img/aroow-blue.svg" />');
  }
});


$("#banner-explore-more-mobile").click(function () {
  $(".mobile-banner-dec").toggleClass("mobile-banner-dec-shaow");

  // toggle button text
  var btnText = $(this).find(".btn-text");
  if (btnText.text().trim() === "Explore More") {
    btnText.text("Show Less");
  } else {
    btnText.text("Explore More");
  }
});

