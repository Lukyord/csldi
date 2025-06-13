<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="team-main">
    <section data-section="team">
        <div class="sc-inner">
            <div class="container">
                <div class="sc-header justify-between justify-between">
                    <h1 class="sc-ttl animate fadeIn hidden-device-md">
                        Team
                    </h1>

                    <?php
                    $directory_arr = [
                        [
                            "name" => "Home",
                            "url" => $root . "index.php"
                        ],
                        [
                            "name" => "Our Story",
                            "url" => "",
                        ],
                        [
                            "name" => "Team",
                            "url" => ""
                        ],
                    ];

                    include($root . "include/el-directory.php");
                    ?>
                </div>

                <div class="content">
                    <div class="content-text show-md">
                        <?php
                        $team_arr = [
                            [
                                "id" => "team-1",
                                "team-name" => "PRINCIPAL LIGHTING DESIGNERS",
                                "members" => [
                                    [
                                        "name" => "Christine Sicangco",
                                        "position" => "Principal Lighting Designer",
                                        "image" => "./assets/media/design/team-1.jpg",
                                    ],
                                    [
                                        "name" => "Jo Vincent T Gonzaga",
                                        "position" => "Principal Lighting Designer",
                                        "image" => "./assets/media/design/team-2.jpg",
                                    ],
                                ]
                            ],
                            [
                                "id" => "team-2",
                                "team-name" => "DESIGNERS TEAM",
                                "members" => [
                                    [
                                        "name" => "Lorraine Tobias",
                                        "position" => "Lead Lighting Designer",
                                        "image" => "./assets/media/design/team-3.jpg",
                                    ],
                                    [
                                        "name" => "Michael Lecetivo",
                                        "position" => "Lead Lighting Designer",
                                        "image" => "./assets/media/design/team-4.jpg",
                                    ],
                                    [
                                        "name" => "Edison Faltado",
                                        "position" => "Lead Lighting Designer",
                                        "image" => "./assets/media/design/team-5.jpg",
                                    ],
                                    [
                                        "name" => "Aundrea Bunyi",
                                        "position" => "Assistant Lighting Designer",
                                        "image" => "./assets/media/design/team-6.jpg",
                                    ],
                                ]
                            ]
                        ];
                        ?>
                        <div class="content-ttl">
                            <h2 class="size-h1 show-md">
                                TEAM
                            </h2>
                        </div>

                        <div class="content-marker">
                            <ul class="content-marker-list">
                                <?php
                                foreach ($team_arr as $team) {
                                ?>
                                    <li>
                                        <a href="#<?php echo $team["id"]; ?>" data-marker="<?php echo $team["id"]; ?>" class="content-marker-item link-scroll">
                                            <span class="content-marker-name"><?php echo $team["team-name"]; ?></span>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>

                    <div class="content-list">
                        <?php
                        foreach ($team_arr as $team) {
                        ?>
                            <div class="list-ttl uppercase hidden-device-md animate fadeIn">
                                <h3 class="size-body">
                                    <?php echo $team["team-name"]; ?>
                                </h3>
                            </div>

                            <div class="card-container" data-card-layout="grid" id="<?php echo $team["id"]; ?>">
                                <?php
                                foreach ($team["members"] as $member) {
                                    include($root . "include/el-team-card.php");
                                }
                                ?>
                            </div>

                            <hr class="divider animate widthToMax">
                        <?php } ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>