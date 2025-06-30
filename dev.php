<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 

        include "sys/meta.php";
        include "sys/engine.php"; 

        ?>
    </head>
    <body>

        <!-- dev code -->
        <style type="text/css">
            .box{
                width: 200px;
                height: 50px;
                background-color: deeppink;
            }
        </style>
        
        <div style="height: 100vh; background-color: #ccc;"></div>
        <div class="box"></div>
        <div style="height: 100vh; background-color: #ccc;"></div>
        
        <script type="text/javascript">
            gsap.to('.box', {
                x: 1600,
                scrollTrigger: {
                    trigger: '.box',
                    start: 'top 30%', 
                    end: 'bottom 10%', 
                    toggleActions: 'play reverse play reverse',
                    scrub: true, 
                    markers: true
                }
            });
        </script>

        <!-- ####################################################### -->

    </body>
</html>