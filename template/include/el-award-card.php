<div
    class="card animate fadeIn"
    data-card="award"
    <?php if (isset($award["id"])) {
        echo "id=\"" . $award["id"] . "\"";
    } ?>>
    <?php if (isset($award["link"])) { ?>
        <a href="<?php echo $award["link"]; ?>" class="link-overlay">&nbsp;</a>
    <?php } ?>

    <div class="card-image">
        <div class="main-media">
            <?php
            $section_cover = $award["image"];
            $section_cover_m = $award["image"];
            include("include/function-group.php");
            ?>
        </div>

        <div class="hover-media">
            <?php
            $section_cover = $award["hover-image"];
            $section_cover_m = $award["hover-image"];
            include("include/function-group.php");
            ?>
        </div>
    </div>
    <div class="card-content">
        <?php if (isset($award["award"])) { ?>
            <div class="card-subttl">
                <p><?php echo $award["award"]; ?></p>
            </div>
        <?php } ?>

        <div class="card-ttl">
            <h3><?php echo $award["project-name"]; ?></h3>
        </div>
        <div class="card-location">
            <p><?php echo $award["location"]; ?></p>
        </div>
    </div>
</div>