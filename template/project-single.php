<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="project-single-main">
    <section data-section="project-single">
        <div class="sc-inner">
            <div class="container">
                <div class="sc-header justify-between">
                    <h1 class="sc-ttl animate fadeIn">
                        Abrio Clubhouse
                    </h1>

                    <?php
                    $directory_arr = [
                        [
                            "name" => "Home",
                            "url" => $root . "index.php"
                        ],
                        [
                            "name" => "Projects",
                            "url" => $root . "project.php"
                        ],
                        [
                            "name" => "Abrio Clubhouse",
                            "url" => ""
                        ]
                    ];

                    include($root . "include/el-directory.php");
                    ?>
                </div>

                <div class="project-content">
                    <div class="entry-content entry-fadeIn">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in porta tortor, eget interdum nisi. Praesent sagittis mi quis diam commodo, quis blandit nisi dignissim. Aliquam at malesuada lacus. Maecenas rhoncus metus ante, eu euismod velit pretium eu. Curabitur id consectetur elit.
                        </p>
                    </div>

                    <div class="project-info">
                        <div class="project-info-item animate fadeIn">
                            <div class="project-info-item-label">
                                <p>DEVELOPER</p>
                            </div>
                            <div class="project-info-item-value">
                                <p>Ayalaland</p>
                            </div>
                        </div>

                        <div class="award animate fadeIn">
                            <p>Honorable Mention | 2024 LIT Lighting Design Awards</p>
                        </div>
                    </div>
                </div>

                <div class="project-gallery">
                    <div class="swiper auto centered centered-m" data-initial-slide="1">
                        <div class="swiper-wrapper">
                            <?php
                            for ($i = 1; $i <= 4; $i++) {
                            ?>
                                <div class="swiper-slide">
                                    <div class="project-image animate fadeIn">
                                        <?php
                                        $section_cover = "./assets/media/design/about-{$i}.jpg";
                                        $section_cover_m = "./assets/media/design/about-{$i}.jpg";
                                        include("include/function-group.php");
                                        ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>

                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>

                        <div class="swiper-pagination animate fadeIn"></div>
                    </div>
                </div>

                <div class="project-footer animate fadeIn">
                    <a href="javascript:;" class="button secondary reverse-icon">
                        PREVIOUS <span class="show-md">PROJECT</span>
                    </a>

                    <a href="<?php echo $root; ?>project.php" class="button secondary no-icon">
                        ALL PROJECTS
                    </a>

                    <a href="javascript:;" class="button secondary">
                        NEXT <span class="show-md">PROJECT</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>