<!-- *********************************************

image left

********************************************* -->
<style type="text/css">
    .image-left{
        display: flex;
        overflow: hidden !important;
    }
    .image-left div{
        width: 50%;
    }
    .image-left img{
        display: block;
        width: 100%;
    }
    .image-left-content{
        padding-left: 60px;
        padding-right: 60px;
        font-size: 16px;
    }
    .image-left-title{
        padding-top: 20px;
        padding-bottom: 20px;
    }
    .image-left-text{
        text-align: justify;
    }
    .image-left-button{
        padding-top: 20px;
        padding-bottom: 20px;
    }
    
    @media (orientation: portrait) {
        .image-left{
            width: 100%;
            display: block;
        }
        .image-left div{
            width: 100%;
        }
        .image-left-content{
            padding-left: 20px;
            padding-right: 20px;
            padding-bottom: 20px;
            font-size: 12px;
        }
    }
</style>

<div class="image-left">
    <div class="image-left-img">
        <img src="gfx-assets/horizontal-1.jpeg">
    </div>

    <div class="image-left-content align-vertical">
        <h1 class="image-left-title title-1 insert-color4">The FlashMX era is back!</h1>
        <p class="image-left-text">
            Graffiti is an open-source Design System, which can also mean a system of ready-made templates and patterns for web interfaces. It features wireframe-style templates that are ready and customizable via CSS, JavaScript libraries, PHP scripts for database connection, and a lot of Motion. Additionally, it leverages the full power of the GSAP (GreenSock Animation Platform)
        </p>

<!--
        <div class="image-left-button">
            <a class="btn-color1" href="#">Show me the Motion!</a>
        </div>
-->
    </div>
</div>

<script type="text/javascript">
    gsap.set(".image-left-img", { opacity: 0, x: -1000 }); 
    gsap.set(".image-left-title", { opacity: 0, x: 1000 }); 
    gsap.set(".image-left-text", { opacity: 0, y: 100 });
    gsap.set(".image-left-button", { opacity: 0, y: 100 });

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
        image_left.to(".image-left-button", {
            y: 0,
            duration: 1,
            opacity: 1,
            ease: "power2.out"
        }, "-=0.5");
    }
</script>