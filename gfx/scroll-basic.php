<style>
    .scroll-basic-1 img{
        width: 100%;
    }
    
    .scroll-basic-2{
        padding-top: 50px;
        padding-bottom: 50px;
        padding-left: 25%;
        padding-right: 25%;
        font-size: 16px;
    }
    .scroll-basic-2-title{
        text-align: center;
    }
    .scroll-basic-2-title i{
        font-size: 120px;
        color: var(--color5);
    }
    .scroll-basic-2 p{
        padding-top: 10px;
        padding-bottom: 10px;
    }
    
    .scroll-basic-3{
        display: flex;
    }
    .scroll-basic-3 img{
        width: 100%;
    }
    @media (orientation: portrait) {
        .scroll-basic-2{
            padding-left: 40px;
            padding-right: 40px;
        }
        
        .scroll-basic-3{
            display: block;
        }
    }
</style>
<section class="scroll-basic">
    <div class="scroll-basic-1">
        <img src="gfx-assets/horizontal-2.jpeg">
    </div>

    <div class="scroll-basic-2">
        <div class="scroll-basic-2-title">
            <i class="ph-fill ph-mouse-scroll"></i>
            <div class="clear30x"></div>
            <h1 class="title-2 insert-color1">Scroll-Friendly Designs for Your Projects</h1>
        </div>

        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget fringilla lacus, at aliquam erat. Vivamus ac diam eu felis tempus posuere. Nunc mollis non ante nec ultricies. Integer ante mi, hendrerit eget tempor vel, tristique non odio. Proin venenatis luctus elit non feugiat. Etiam pulvinar dui quis tellus sollicitudin ultrices. Etiam tincidunt enim eget tristique maximus. Vivamus in laoreet mauris. Praesent euismod ipsum vitae dolor laoreet, vel lacinia eros mattis. Fusce aliquam pharetra efficitur.
        </p>
    </div>

    <div class="scroll-basic-3">
        <div>
            <img src="gfx-assets/vertical-1.jpeg" class="scroll-basic-3-image1">
        </div>

        <div>
            <img src="gfx-assets/vertical-2.jpeg" class="scroll-basic-3-image2">
        </div>

        <div>
            <img src="gfx-assets/vertical-3.jpeg" class="scroll-basic-3-image3">
        </div>
    </div>

</section>

<script type="text/javascript">
    gsap.set(".scroll-basic-1", { opacity: 0, scale: 0 });
    gsap.set(".scroll-basic-2", { opacity: 0, x: 800, });
    gsap.set(".scroll-basic-3-image1", { opacity: 1, x: -800,  rotate: 180 });
    gsap.set(".scroll-basic-3-image2", { opacity: 1, x: -1800, rotate: -180 });
    gsap.set(".scroll-basic-3-image3", { opacity: 1, x: -1800, rotate: 180 });

    gsap.to('.scroll-basic-1', {
        scale: 1,      
        opacity: 1,  
        scrollTrigger: {
            trigger: '.scroll-basic-1',
            start: 'top bottom', 
            end: 'bottom top',
            toggleActions: 'play reverse play reverse',
            scrub: true
        },
    });

    gsap.to('.scroll-basic-2', {
        x: 0,
        rotate: 0,
        opacity: 1,
        ease: "back.out",
        duration: 1,
        scrollTrigger: {
            trigger: '.scroll-basic-2',
            start: 'top 80%', 
            end: '30%',
            toggleActions: 'play reverse play reverse'
        },
    });

    gsap.to('.scroll-basic-3-image1', {
        x: 0,
        rotate: 0,
        opacity: 1,
        duration: 1,
        scrollTrigger: {
            trigger: '.scroll-basic-3-image1',
            start: '10% 70%', 
            end: '30%',
            toggleActions: 'play reverse play reverse'
        },
    });

    gsap.to('.scroll-basic-3-image2', {
        x: 0,
        rotate: 0,
        opacity: 1,
        duration: 1,
        scrollTrigger: {
            trigger: '.scroll-basic-3-image2',
            start: '10% 70%', 
            end: '30%',
            toggleActions: 'play reverse play reverse'
        },
    });

    gsap.to('.scroll-basic-3-image3', {
        x: 0,
        rotate: 0,
        opacity: 1,
        duration: 1,
        scrollTrigger: {
            trigger: '.scroll-basic-3-image3',
            start: '10% 70%', 
            end: '30%',
            toggleActions: 'play reverse play reverse'
        },
    });
</script>