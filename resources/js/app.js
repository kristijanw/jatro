import './bootstrap';

window.addEventListener("load", function() {
    gsap.registerPlugin(ScrollTrigger);

    const scroller = document.querySelector('[data-scroll-container]');

    const locoScroll = new LocomotiveScroll({
        el: scroller,
        smooth: true
    });

    locoScroll.stop();
    setTimeout(() => {
        locoScroll.start();
    }, 5000);

    // GSAP vertical parallax image
    let getRatio = el => window.innerHeight / (window.innerHeight + el.offsetHeight);

    gsap.utils.toArray("section").forEach((section, i) => {
        section.bg = section.querySelector(".bg-hero-pattern");
        
        gsap.fromTo(
            section.bg, 
            {
                backgroundPosition: () => i ? `50% ${-window.innerHeight * getRatio(section)}px` : "50% 0px"
            }, 
            {
                backgroundPosition: () => `50% ${window.innerHeight * (1 - getRatio(section))}px`,
                ease: "none",
                scrollTrigger: {
                    trigger: section,
                    start: () => i ? "top bottom" : "top top", 
                    end: "bottom top",
                    scrub: true,
                    invalidateOnRefresh: true // to make it responsive
                }
            }
        );
    });
});