import './bootstrap';

swup.hooks.on('page:view', () => {
    runScripts();
});

window.addEventListener("DOMContentLoaded", () => {
    runScripts();
});

function runScripts() {
    gsap.registerPlugin(ScrollTrigger);

    // GSAP vertical parallax image
    let getRatio = el => window.innerHeight / (window.innerHeight + el.offsetHeight);

    gsap.utils.toArray("section.parallax-bg").forEach((section, i) => {
        if (section != null) {
            gsap.fromTo(
                section,
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

    locoScroll.start();
}