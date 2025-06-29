gsap.set(".logo-center", {opacity: 0, y: 500}); 

function logocenter(){
    let motion = gsap.timeline();

    motion.to(".logo-center", {
        y: 0,
        duration: 1,
        opacity: 1,
        ease: "power2.out"
    });
}