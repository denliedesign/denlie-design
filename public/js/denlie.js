gsap.registerPlugin(ScrollTrigger);

const motion = gsap.matchMedia();

motion.add("(min-width: 768px) and (prefers-reduced-motion: no-preference)", () => {
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

motion.add("(prefers-reduced-motion: no-preference)", () => {
    const sections = gsap.utils.toArray(".section-reveal");
    if (!('IntersectionObserver' in window)) return;

    // Observe current layout positions, including changes from lazy-loaded images.
    gsap.set(sections, { y: 28, opacity: 0 });
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(({ target, isIntersecting }) => {
            if (!isIntersecting) return;
            observer.unobserve(target);
            gsap.to(target, {
                y: 0,
                opacity: 1,
                duration: 0.85,
                ease: "power2.out",
                clearProps: "transform,opacity",
            });
        });
    }, { rootMargin: "0px 0px -18% 0px", threshold: 0 });
    sections.forEach((section) => observer.observe(section));

    return () => {
        observer.disconnect();
        gsap.killTweensOf(sections);
        gsap.set(sections, { clearProps: "transform,opacity" });
    };
});
