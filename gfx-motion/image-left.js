gsap.set(".image-left-img", {opacity: 0, x: -1000}); 
gsap.set(".image-left-title", {opacity: 0, x: 1000}); 
gsap.set(".image-left-text", {opacity: 0, y: 100});

function imageleft(){
    let image_left = gsap.timeline();
    image_left.to(".image-left-img", {
        x: 0,
        duration: 1,
        opacity: 1,
        ease: "power1.out"
    }, "-=0.2");
    image_left.to(".image-left-title", {
        x: 0,
        duration: 1,
        opacity: 1,
        ease: "power2.out"
    }, "-=0.5");
    image_left.to(".image-left-text", {
        y: 0,
        duration: 1,
        opacity: 1,
        ease: "power2.out"
    }, "-=0.5");
}