<!-- bio -->

<?php include "bio.php"; ?>

<!--

  __________________    _____  ______________________.______________.___ 
 /  _____/\______   \  /  _  \ \_   _____/\_   _____/|   \__    ___/|   |
/   \  ___ |       _/ /  /_\  \ |    __)   |    __)  |   | |    |   |   |
\    \_\  \|    |   \/    |    \|     \    |     \   |   | |    |   |   |
 \______  /|____|_  /\____|__  /\___  /    \___  /   |___| |____|   |___|
        \/        \/         \/     \/         \/                        

-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 

        include "sys/meta.php";
        include "sys/engine.php"; 

        ?>
    </head>
    <body>

        <!-- vfx loading -->

        <?php include "gfx/loading-gif.php"; ?>

        <!-- ####################################################### -->

        <!-- vfx header -->

        <header>
            <?php include "gfx/logo-center.php"; ?>
        </header>

        <!-- ####################################################### -->

        <!-- your visual -->

        <main>
            <?php include "gfx/image-left.php"; ?>
            <?php include "gfx/scroll-basic.php"; ?>
        </main>

        <!-- ####################################################### -->

        <!-- footer -->

        <footer>
            <?php 
            
            include "gfx/footer-default.php"; 
            include "graffiti.php"; 
            
            ?>
        </footer>

        <!-- ####################################################### -->

    </body>
</html>