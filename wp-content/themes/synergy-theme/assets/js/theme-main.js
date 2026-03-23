

(function ($) {
  "use strict";

 gsapController();
  // wow js

  function wowController() {
    if ($(".wow").length > 0) {
      new WOW().init();
    }
  }



  /* ------------- Gsap registration Js -------------*/
  gsap.registerPlugin(ScrollTrigger
    
  );
  gsap.config({
    nullTargetWarn: false,
  });

  function gsapController() {
    let mediaMatch = gsap.matchMedia();

    // h10 process sticky
    function initStickyPanel3Animation() {
      const container = document.querySelector(".tj-sticky-panel-3-container");
      const panels = document.querySelectorAll(".tj-sticky-panel-3");
      if (!container || panels.length === 0) return;
      mediaMatch.add("(min-width: 1025px)", () => {
        const startOffset = parseInt(getComputedStyle(container).paddingTop) || 0;
        const lastIdx = panels.length - 1;
        const lastPanel = panels[lastIdx];
        const paddingBottom = parseInt(getComputedStyle(container).paddingBottom) || 0;
        panels.forEach((panel, i) => {
          gsap.to(panel, {
            scrollTrigger: {
              trigger: panel,
              start: `top-=${startOffset} top`,
              endTrigger: container,
              end: () => `bottom top+=${lastPanel.offsetHeight + startOffset + paddingBottom}`,
              pin: true,
              pinSpacing: false,
              scrub: true,
              markers: false,
              invalidateOnRefresh: true,
            },
            ease: "circ",
            opacity: i === 0 || i === lastIdx ? 1 : 0.0,
          });
        });
      });
    }
    initStickyPanel3Animation();
  }
})(jQuery);
