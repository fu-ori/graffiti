<?php

$nocache = rand(0, 1000);

?>

<!-- import css -->
<link
      rel="stylesheet" 
      type="text/css"
      href="graffiti.css?v=<?php echo $nocache; ?>"
      />

<link
      rel="stylesheet" 
      type="text/css"
      href="sys/tokens.css?v=<?php echo $nocache; ?>"
      />

<!-- import scripts -->
<script src="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.2"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>
<script type="text/javascript">
    gsap.registerPlugin(ScrollTrigger);

    document.addEventListener("DOMContentLoaded", () => {
        gsap.set(".loading", {opacity: 1, y: 0});
        setTimeout(() => { loading(); }, 2000);
    });
</script>