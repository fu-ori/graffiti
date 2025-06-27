<!-- ##################################################################################-->
<!-- ##################################################################################-->
<!-- ######################             GSAP MOTION                 ###################-->
<!-- ##################################################################################-->
<!-- ##################################################################################-->
<!-- ##################################################################################-->
<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", (event) => {
        gsap.registerPlugin(ScrollTrigger)

        // level 2
        gsap.set(".image-left-img", {opacity: 0, x: -5000}); 
        gsap.set(".image-left-title", {opacity: 0, x: 5000}); 
        
        gsap.to(".image-left-img", {duration: 1, x: 0, opacity: 1});
        gsap.to(".image-left-title", {duration: 1, x: 0, opacity: 1});
    });
</script>