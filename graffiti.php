<!-- ##################################################################################-->
<!-- ##################################################################################-->
<!-- ######################             GSAP MOTION                 ###################-->
<!-- ##################################################################################-->
<!-- ##################################################################################-->
<!-- ##################################################################################-->
<script src="gfx-motion/logo-center.js"></script>
<script src="gfx-motion/image-left.js"></script>
<script type="text/javascript">
    function motion(){

        // remove loading after page completed
        let loading = gsap.timeline();
        loading.to(".loading-object", { duration: 1, y: -1000, opacity: 0 });
        loading.to(".loading", {
            y: -1100,
            duration: .6,
            opacity: 1,
            onComplete: vfx
        }, "-=0.7");
        
        // start motions!!!
        function vfx(){
            logocenter();
            setTimeout(() => { imageleft(); }, 400);
        }
    }
</script>