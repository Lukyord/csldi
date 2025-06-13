<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="not-found-main">
    <section data-section="not-found">
        <div class="sc-billboard full-screen">
            <div class="cover">
                <?php
                $section_cover = "./assets/media/design/wave-video.mp4";
                $section_cover_m = "";
                include("include/function-group.php");
                ?>
            </div>

            <div class="content">
                <div class="sc-ttl">
                    <h1>Sorry, the page <br class="hidden-device-xs" /> could not be found.</h1>
                </div>

                <a href="<?php echo $root; ?>index.php" class="button">
                    Homepage
                </a>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>