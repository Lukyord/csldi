<div class="card animate fadeIn" data-card="press">
    <a href="<?php echo $root; ?>press-single.php" class="link-overlay"></a>

    <div class="card-image">
        <?php
        $section_cover = $news["image"];
        $section_cover_m = $news["image"];
        include("include/function-group.php");
        ?>
    </div>

    <div class="card-content">
        <div class="card-ttl">
            <h3><?php echo $news["name"]; ?></h3>
        </div>

        <div class="card-date">
            <p><?php echo $news["date"]; ?></p>
        </div>

        <div class="card-cta">
            <a href="<?php echo $root; ?>press-single.php" class="button secondary">
                <span>Read</span>
            </a>
        </div>
    </div>
</div>