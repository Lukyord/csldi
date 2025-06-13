<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="index-main">
    <?php
    include($root . "include/el-index-landing.php");
    ?>

    <section data-section="index-hero">
        <div class="sc-billboard full-screen">
            <div class="swiper auto fade autoplay" data-autoplay-interval="6000">
                <div class="swiper-wrapper">
                    <?php
                    for ($i = 1; $i <= 6; $i++) {
                    ?>
                        <div class="swiper-slide">
                            <?php
                            $section_cover = "./assets/media/design/index-hero-slide-{$i}.jpg";
                            $section_cover_m = "./assets/media/design/index-hero-slide-mb-{$i}.jpg";
                            include("include/function-group.php");
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section data-section="index-award">
        <div class="sc-inner">
            <div class="container">
                <div class="content">
                    <?php
                    $awards = [
                        [
                            "id" => "award-1",
                            "year" => "2024",
                            "award" => "Honorable Mention | 2024 LIT Lighting Design Awards",
                            "project-name" => "ROCKWELL BRIDGE",
                            "location" => "Metro Manila, Philippines",
                            "image" => "./assets/media/design/award-1.jpg",
                            "hover-image" => "./assets/media/design/award-2.jpg"
                        ],
                        [
                            "id" => "award-2",
                            "year" => "2024",
                            "award" => "Honorable Mention | 2024 LIT Lighting Design Awards",
                            "project-name" => "PROSCENIUM AT ROCKWELL",
                            "location" => "Metro Manila, Philippines",
                            "image" => "./assets/media/design/award-2.jpg",
                            "hover-image" => "./assets/media/design/award-3.jpg"
                        ],
                        [
                            "id" => "award-3",
                            "year" => "2024",
                            "award" => "LIT Lighting Design Award Winner - Residential Lighting Design",
                            "project-name" => "SAMSUNG PERFORMING ARTS",
                            "location" => "Metro Manila, Philippines",
                            "image" => "./assets/media/design/award-3.jpg",
                            "hover-image" => "./assets/media/design/award-4.jpg"
                        ],
                        [
                            "id" => "award-4",
                            "year" => "2023",
                            "award" => "Winner in Religious & Spiritual Site Lighting",
                            "project-name" => "AYALA GREENBELT 3 MALL",
                            "location" => "Metro Manila, Philippines",
                            "image" => "./assets/media/design/award-4.jpg",
                            "hover-image" => "./assets/media/design/award-5.jpg"
                        ],
                        [
                            "id" => "award-5",
                            "year" => "2023",
                            "award" => "Honorable Mention in Innovative Materials",
                            "project-name" => "A & J GONZAGA RESIDENCE",
                            "location" => "Metro Manila, Philippines",
                            "image" => "./assets/media/design/award-5.jpg",
                            "hover-image" => "./assets/media/design/award-1.jpg"
                        ]
                    ];
                    ?>

                    <div class="content-text">
                        <div class="content-ttl">
                            <h2>AWARD WINNING
                                <br> PROJECTS
                            </h2>
                        </div>

                        <div class="content-marker show-md">
                            <ul class="content-marker-list">
                                <?php
                                foreach ($awards as $award) {
                                ?>
                                    <li>
                                        <a href="#<?php echo $award["id"]; ?>" data-marker="<?php echo $award["id"]; ?>" class="content-marker-item link-scroll">
                                            <span class="content-marker-year"><?php echo $award["year"]; ?></span>
                                            <span class="content-marker-name"><?php echo $award["project-name"]; ?></span>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>

                            <a href="<?php echo $root; ?>award.php" class="button secondary">EXPLORE MORE</a>
                        </div>
                    </div>

                    <div class="content-list">
                        <?php foreach ($awards as $award) {
                            include("include/el-award-card.php");
                        } ?>
                    </div>

                    <a href="<?php echo $root; ?>award.php" class="button secondary hidden-device-md">EXPLORE MORE</a>

                </div>
            </div>
        </div>
    </section>

    <hr class="divider show-md animate widthToMax">

    <section data-section="index-about">
        <div class="sc-inner">
            <div class="container">
                <div class="content">
                    <div class="block-content-start animate fadeIn" data-block-text-index="1">
                        <div class="block-ttl">
                            <h2>ABOUT CSLDI</h2>
                        </div>

                        <div class="block-desc">
                            <p>Founded in 1994 during the nascent stage of the profession in the Philippines, CSLDI initially focused on designing lighting fixtures for global export, maintaining a steadfast commitment to quality. Our production facility in Bacolod City, Philippines, once housed over 100 employees and has won numerous awards for its innovative use of indigenous materials in lighting fixtures.</p>
                        </div>
                    </div>

                    <div class="block-media animate fadeIn" data-block-media-index="1">
                        <?php
                        $section_cover = "./assets/media/design/index-about-1.jpg";
                        $section_cover_m = "";
                        include("include/function-group.php");
                        ?>
                    </div>

                    <div class="block-content-start animate fadeIn" data-block-text-index="2">
                        <div class="block-desc">
                            <p>Our journey is a testament to resilience and adaptability. In the early 2000s, our production facility was destroyed by fire, posing a significant challenge. However, this adversity became an opportunity for Christine to pivot towards the firm's Architectural Lighting Design Consultancy aspect, showcasing our capacity to adapt and thrive.</p>
                        </div>
                    </div>

                    <div class="block-media animate fadeIn" data-block-media-index="2">
                        <?php
                        $section_cover = "./assets/media/design/index-about-2.jpg";
                        $section_cover_m = "";
                        include("include/function-group.php");
                        ?>
                    </div>

                    <div class="block-content-start animate fadeIn" data-block-text-index="3">
                        <div class="block-ttl">
                            <h3>Professional Service</h3>
                        </div>

                        <div class="block-desc">
                            <p>
                                CSLDI provides a comprehensive suite of Architectural Lighting Design Services from the initial Concept and Schematic Design stages through to Design Development and the Construction Phase. Our offerings include the creation of detailed Lighting Layouts, the preparation of Fixture Schedules and Cut Sheets, and the formulation of Lighting Control Schedules and Intentions. We also conduct thorough Shop Drawing Reviews, perform advanced Lighting Computer Calculations, and produce Simulations and Renderings. Additionally, we carry out Lighting Evaluations and construct full-scale Mock-ups to ensure our designs meet our high standards.
                                <br><br>
                                At CSLDI, we are committed to delivering efficient and economically viable lighting solutions promptly. We prioritize keeping all team members accessible to facilitate swift and effective communication throughout every project phase.
                            </p>
                        </div>

                        <div class="block-cta">
                            <a href="<?php echo $root; ?>about.php" class="button secondary">About Us</a>
                        </div>
                    </div>

                    <div class="block-media animate fadeIn" data-block-media-index="3">
                        <?php
                        $section_cover = "./assets/media/design/index-about-3.jpg";
                        $section_cover_m = "";
                        include("include/function-group.php");
                        ?>
                    </div>
                </div>
            </div>
    </section>

    <section data-section="index-press">
        <div class="swiper auto fade autoplay" data-autoplay-interval="6000">
            <div class="swiper-wrapper">
                <?php
                $press = [
                    [
                        "image" => "./assets/media/design/index-press-1.jpg",
                        "date" => "Jul 23, 2023",
                        "ttl" => "Tayap House: An Idyllic Retreat In Negros Occidental",
                        "editor" => "VoguePH",
                    ],
                    [
                        "image" => "./assets/media/design/index-press-1.jpg",
                        "date" => "Jul 23, 2023",
                        "ttl" => "Tayap House: An Idyllic Retreat In Negros Occidental",
                        "editor" => "VoguePH",
                    ],
                    [
                        "image" => "./assets/media/design/index-press-1.jpg",
                        "date" => "Jul 23, 2023",
                        "ttl" => "Tayap House: An Idyllic Retreat In Negros Occidental",
                        "editor" => "VoguePH",
                    ],
                    [
                        "image" => "./assets/media/design/index-press-1.jpg",
                        "date" => "Jul 23, 2023",
                        "ttl" => "Tayap House: An Idyllic Retreat In Negros Occidental",
                        "editor" => "VoguePH",
                    ],
                ];

                foreach ($press as $press) {
                ?>
                    <div class="swiper-slide">
                        <div class="content animate fadeIn">
                            <div class="content-media">
                                <?php
                                $section_cover = $press["image"];
                                $section_cover_m = "";
                                include("include/function-group.php");
                                ?>
                            </div>
                            <div class="content-text">
                                <div class="block-content-start">
                                    <div class="text-header">
                                        <div class="content-subttl">
                                            <p>UPDATES</p>
                                        </div>
                                        <div class="content-date">
                                            <span><?php echo $press["date"]; ?></span>
                                        </div>
                                    </div>

                                    <div class="text-body">
                                        <div class="content-ttl">
                                            <h3><?php echo $press["ttl"]; ?></h3>
                                        </div>

                                        <div class="content-editor">
                                            <p><?php echo $press["editor"]; ?></p>
                                        </div>
                                    </div>

                                    <div class="text-footer">
                                        <a href="<?php echo $root; ?>press-single.php" class="button secondary">READ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>

            <div class="swiper-pagination"></div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>