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

    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        allowTouchMove: false,
        autoplay: {
            delay: 7000,
            disableOnInteraction: false
        },
        on: {
            autoplay: function() {
                const activeSlide = this.slides[this.activeIndex];
                const progressBar = activeSlide.querySelector(".autoplay-progress > div");
                if (progressBar) {
                    progressBar.style.width = '0%';
                }
            },
            autoplayTimeLeft(s, time, progress) {
                const activeSlide = s.slides[s.activeIndex];
                const progressBar = activeSlide.querySelector(".autoplay-progress > div");

                console.log((1 - progress) * 100)

                if (progressBar) {
                    progressBar.style.width = `${(1 - progress) * 100 + 7.5}%`;
                }
            },
            slideChange: function() {
                // Reset progress bars on slide change
                this.slides.forEach(slide => {
                    const progressBar = slide.querySelector(".autoplay-progress > div");
                    if (progressBar) {
                        progressBar.style.width = '0%';
                    }
                });
            }
        }
    });
}