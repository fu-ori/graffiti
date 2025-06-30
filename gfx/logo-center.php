<!-- *********************************************

logo center

********************************************* -->
<style type="text/css">
    .logo-center{
        text-align: center;
        padding-top: 20px;
        padding-bottom: 20px;
    }
    .logo-center img{
        width: 22% !important;
    }
    @media (orientation: portrait) {
        .logo-center img{
            width: 32% !important;
        }
    }
</style>

<div class="logo-center">
    <img src="gfx-assets/logo.png">
</div>

<script type="text/javascript">
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
</script>
