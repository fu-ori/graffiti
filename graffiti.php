<!-- ##################################################################################-->
<!-- ##################################################################################-->
<!-- ######################             GSAP MOTION                 ###################-->
<!-- ##################################################################################-->
<!-- ##################################################################################-->
<!-- ##################################################################################-->

<script type="text/javascript">
    
    function loading(){

        // remove loading after page completed
        let loading = gsap.timeline();
        loading.to(".loading-object", {
            duration: 1,
            opacity: 0,
            scale: 0.1,
            rotation: 180,
            ease: "power2.out"
        });
        loading.to(".loading", {
            y: -1100,
            duration: .6,
            opacity: 1,
            onComplete: startgfx
        }, "-=0.3");

        // start motions!!!
        function startgfx(){
            logocenter();
            setTimeout(() => { imageleft(); }, 800);
        }

    }
</script>