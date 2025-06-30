<!-- *********************************************

footer default

********************************************* -->
<style type="text/css">
    .footer-default-social{
        padding-top: 40px;
    }
    .footer-default-copyright p{
        text-align: center;
        font-size: 10px;
        text-transform: uppercase;
        padding-bottom: 20px;
    }
    .footer-default-social{
        text-align: center;
    }
    .footer-default-social ul{
        display: inline-flex;
        list-style: none;
    }
    .footer-default-social ul li{
        padding-left: 5px;
        padding-right: 5px;
    }
    .footer-default-social ul li a{
        transition: color 0.5s ease-in-out;
        text-decoration: none;
        font-size: 30px;
    }
</style>

<div class="footer-default-social">
    <ul>
        <li>
            <a href="https://github.com/fu-ori" target="_blank" aria-label="Github">
                <i class="ph ph-github-logo"></i>
            </a>
        </li>

        <li>
            <a href="https://instagram.com/bruno_trocoli" target="_blank" aria-label="Instagram">
                <i class="ph ph-instagram-logo"></i>
            </a>
        </li>

        <li>
            <a href="https://x.com/fuoricorp" target="_blank" aria-label="X">
                <i class="ph ph-x-logo"></i>
            </a>
        </li>
    </ul>
</div>

<div class="footer-default-copyright">
    <div class="clear10x"></div>
    <p>v<?php echo $version; ?> | &copy; <?php echo date("Y"); ?>&nbsp;<?php echo $sitetitle; ?> | All rights reserved.</p>
</div>