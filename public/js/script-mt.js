gsap.registerPlugin(ScrollTrigger);

gsap.to(".gsap-move", {
    x: 60, // move right (adjust this)
    ease: "power2.out",
    scrollTrigger: {
        trigger: ".gsap-move",
        start: "top 20%",   // when image enters viewport
        end: "bottom 20%",  // when it leaves
        scrub: true,        // ties movement to scroll
        // markers: true,   // uncomment to debug
    }
});

gsap.from(".slide-in-image", {
    x: -300, // start 300px to the left (off screen-ish)
    opacity: 0,
    duration: 1.2,
    ease: "power3.out",
    scrollTrigger: {
        trigger: ".slide-in-image",
        start: "top 80%", // when image enters viewport
        toggleActions: "play none none none"
    }
});
