<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="project-main">
    <section data-section="projects">
        <div class="sc-inner">
            <div class="container">
                <div class="sc-header justify-between">
                    <h1 class="sc-ttl animate fadeIn">
                        Projects
                    </h1>

                    <?php
                    $directory_arr = [
                        [
                            "name" => "Home",
                            "url" => $root . "index.php"
                        ],
                        [
                            "name" => "Projects",
                            "url" => ""
                        ],
                    ];

                    include($root . "include/el-directory.php");
                    ?>
                </div>

                <div
                    class="popup filter-container"
                    data-popup-pc-location="end"
                    data-popup-mb-location="center">
                    <a href="javascript:void(0)" class="button popup-trigger">
                        <span>Filter</span>
                        <span class="filter-icon"></span>
                    </a>

                    <div class="popup-content">
                        <div class="popup-content-inner">
                            <?php
                            $filter_options = [
                                'ALL PROJECTS',
                                'HIGH-END RESIDENTIAL COMPLEXES',
                                'HOSPITALITY',
                                'MUSEUMS',
                                'COMMERCIAL & RETAIL',
                                'CORPORATE',
                                'LANDSCAPE & STREETSCAPES',
                                'SACRED & RELIGIOUS INSTITUTIONS',
                                'HIGH-END PRIVATE RESIDENCES',
                                'OTHERS'
                            ];
                            ?>
                            <ul class="filter-options">
                                <?php foreach ($filter_options as $index => $option): ?>
                                    <li>
                                        <a href="javascript:void(0)" class="filter-item <?php echo $index === 0 ? 'active' : ''; ?>"><?php echo $option; ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card-container" data-card-layout="grid">
                    <?php
                    $awards = [
                        [
                            "project-name" => "ROCKWELL BRIDGE",
                            "location" => "Metro Manila, Philippines",
                            "image" => "./assets/media/design/award-1.jpg",
                            "hover-image" => "./assets/media/design/award-2.jpg",
                            "link" => $root . "project-single.php"
                        ],
                        [
                            "award" => "Honorable Mention | 2024 LIT Lighting Design Awards",
                            "project-name" => "PROSCENIUM AT ROCKWELL",
                            "location" => "Metro Manila, Philippines",
                            "image" => "./assets/media/design/award-2.jpg",
                            "hover-image" => "./assets/media/design/award-3.jpg",
                            "link" => $root . "project-single.php"
                        ],
                        [
                            "award" => "LIT Lighting Design Award Winner - Residential Lighting Design",
                            "project-name" => "SAMSUNG PERFORMING ARTS",
                            "location" => "Metro Manila, Philippines",
                            "image" => "./assets/media/design/award-3.jpg",
                            "hover-image" => "./assets/media/design/award-4.jpg",
                            "link" => $root . "project-single.php"
                        ],
                        [
                            "award" => "Winner in Religious & Spiritual Site Lighting",
                            "project-name" => "AYALA GREENBELT 3 MALL",
                            "location" => "Metro Manila, Philippines",
                            "image" => "./assets/media/design/award-4.jpg",
                            "hover-image" => "./assets/media/design/award-5.jpg",
                            "link" => $root . "project-single.php"
                        ],
                        [
                            "project-name" => "A & J GONZAGA RESIDENCE",
                            "location" => "Metro Manila, Philippines",
                            "image" => "./assets/media/design/award-5.jpg",
                            "hover-image" => "./assets/media/design/award-1.jpg",
                            "link" => $root . "project-single.php"
                        ],
                        [
                            "award" => "Honorable Mention | 2024 LIT Lighting Design Awards",
                            "project-name" => "ROCKWELL BRIDGE",
                            "location" => "Metro Manila, Philippines",
                            "image" => "./assets/media/design/award-1.jpg",
                            "hover-image" => "./assets/media/design/award-2.jpg",
                            "link" => $root . "project-single.php"
                        ],
                        [
                            "award" => "Honorable Mention | 2024 LIT Lighting Design Awards",
                            "project-name" => "PROSCENIUM AT ROCKWELL",
                            "location" => "Metro Manila, Philippines",
                            "image" => "./assets/media/design/award-2.jpg",
                            "hover-image" => "./assets/media/design/award-3.jpg",
                            "link" => $root . "project-single.php"
                        ],
                        [
                            "project-name" => "SAMSUNG PERFORMING ARTS",
                            "location" => "Metro Manila, Philippines",
                            "image" => "./assets/media/design/award-3.jpg",
                            "hover-image" => "./assets/media/design/award-4.jpg",
                            "link" => $root . "project-single.php"
                        ],
                    ];

                    foreach ($awards as $award) {
                        include($root . "include/el-award-card.php");
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>