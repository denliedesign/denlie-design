gsap.registerPlugin(ScrollTrigger);

const motion = gsap.matchMedia();

motion.add("(min-width: 768px)", () => {
    gsap.to(".gsap-move", {
        x: 60,
        ease: "power2.out",
        scrollTrigger: {
            trigger: ".gsap-move",
            start: "top 20%",
            end: "bottom 20%",
            scrub: true,
        },
    });
});

gsap.utils.toArray(".section-reveal").forEach((section) => {
    gsap.from(section, {
        y: 28,
        opacity: 0,
        duration: 0.85,
        ease: "power2.out",
        scrollTrigger: {
            trigger: section,
            start: "top 82%",
            once: true,
        },
    });
});
