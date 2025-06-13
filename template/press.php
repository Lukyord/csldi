<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="press-main">
    <section data-section="press">
        <div class="sc-inner">
            <div class="container">
                <div class="sc-header justify-between">
                    <h1 class="sc-ttl animate fadeIn">
                        Press
                    </h1>

                    <?php
                    $directory_arr = [
                        [
                            "name" => "Home",
                            "url" => $root . "index.php"
                        ],
                        [
                            "name" => "Press",
                            "url" => ""
                        ],
                    ];

                    include($root . "include/el-directory.php");
                    ?>
                </div>

                <div class="card-container" data-card-layout="grid">
                    <?php
                    $news_arr = [
                        [
                            "name" => "Kanto | Light Talk: A Conversation with Lighting Designer Christine Sicangco of CSLDI",
                            "date" => "Jul 23, 2023",
                            "image" => "./assets/media/design/press-1.jpg"
                        ],
                        [
                            "name" => "ARC MAGAZINE - ISSUE 140 130—131 / 132 - CSLDI Bucket List",
                            "date" => "Jul 23, 2023",
                            "image" => "./assets/media/design/press-2.jpg"
                        ],
                        [
                            "name" => "ARC MAGAZINE - ISSUE 135 84-85 / 132 Rockwell Balmori 7F Garden Feature",
                            "date" => "Jul 23, 2023",
                            "image" => "./assets/media/design/press-3.jpg"
                        ],
                        [
                            "name" => "Bluprint Cafe Bobs Cafe Bobs: Casting a New Light on Interior Design",
                            "date" => "Jul 23, 2023",
                            "image" => "./assets/media/design/press-4.jpg"
                        ],
                        [
                            "name" => "Kanto - Light Talk with Christine Sicangco",
                            "date" => "Jul 23, 2023",
                            "image" => "./assets/media/design/press-5.jpg"
                        ],
                        [
                            "name" => "Light Talk: A Conversation with Lighting Designer Christine Sicangco of CSLDI",
                            "date" => "Jul 23, 2023",
                            "image" => "./assets/media/design/press-6.jpg"
                        ],
                        [
                            "name" => "TATLER SINGAPORE",
                            "date" => "Jul 23, 2023",
                            "image" => "./assets/media/design/press-7.jpg"
                        ],
                    ];

                    foreach ($news_arr as $news) {
                        include($root . "include/el-press-card.php");
                    }
                    ?>
                </div>

            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>