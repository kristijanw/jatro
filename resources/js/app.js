import './bootstrap';

window.addEventListener("load", function() {
    gsap.registerPlugin(ScrollTrigger);

    const scroller = document.querySelector('[data-scroll-container]');

    const locoScroll = new LocomotiveScroll({
        el: scroller,
        smooth: true,
        mobile: {
            smooth: true
        },
        tablet: {
            smooth: true
        }
    });

    locoScroll.stop();
    setTimeout(() => {
        locoScroll.start();
    }, 5000);

    // GSAP vertical parallax image
    let getRatio = el => window.innerHeight / (window.innerHeight + el.offsetHeight);

    gsap.utils.toArray("section").forEach((section, i) => {
        section.bg = section.querySelector(".parallax-bg");

        if(section.bg != null) {
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
        }
    });

    // Vertical img parallax
    const gsapImg = gsap.utils.toArray('.image.vertical_img');
    gsapImg.forEach((gsVs) => {
        const itemImg = gsVs.querySelector('.image_bl');

        gsap.to(itemImg, {
            scrollTrigger: {
                trigger: gsVs,
                start: () => 'left right',
                end: () => 'right left',
                scrub: true,
                horizontal: false,
                refreshPriority: 1
            },
            y: 210,
            ease: "none",
        });
    });

    
});