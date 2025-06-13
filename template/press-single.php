<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="press-single-main">
    <section data-section="press-single">
        <div class="sc-inner">
            <div class="container">
                <div class="sc-header justify-between">
                    <h1 class="sc-ttl animate fadeIn">
                        Tayap House: An Idyllic Retreat In Negros Occidental
                    </h1>

                    <?php
                    $directory_arr = [
                        [
                            "name" => "Home",
                            "url" => $root . "index.php"
                        ],
                        [
                            "name" => "Press",
                            "url" => $root . "press.php"
                        ],
                        [
                            "name" => "Tayap House: An Idyllic Retreat In Negros Occidental",
                            "url" => ""
                        ]
                    ];

                    include($root . "include/el-directory.php");
                    ?>
                </div>

                <div class="press-date show-md">
                    <p>Jul 23, 2023</p>
                </div>


                <div class="content">
                    <div class="content-gallery animate fadeIn">
                        <div class="swiper auto">
                            <div class="swiper-wrapper">
                                <?php
                                for ($i = 1; $i <= 15; $i++) {
                                ?>
                                    <div class="swiper-slide">
                                        <div class="slide-media">
                                            <?php
                                            $section_cover = "./assets/media/design/press-single-1.jpg";
                                            $section_cover_m = "./assets/media/design/press-single-1.jpg";
                                            include("include/function-group.php");
                                            ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>

                            <div class="swiper-button-next hidden-device-md"></div>
                            <div class="swiper-button-prev hidden-device-md"></div>

                            <div class="swiper-pagination animate fadeIn"></div>
                        </div>
                    </div>

                    <div class="content-text">
                        <div class="entry-content entry-fadeIn">
                            <p>
                                A house up in the mountains commands spatial experiences with the flick of a switch.
                                The role that lighting design has in both <a href="#outer">residential and commercial spaces</a> can ultimately define the success of a space. “It is quite easy for people to omit the idea of lighting design in the whole blueprint,” says lighting designer Christine Sicangco. “But if you think about it, even in small scale residential projects, you plan where the wires go and where the power outlets will be situated. It just makes a lot of sense if you also plan how the lighting will affect the overall structure.”
                            </p>

                            <p>
                                A graduate of both Parsons School of Design and San Diego State University, she and husband Jovi co-founded <a href="#outer">CSLDI</a>, a lighting design firm, when they moved back to Manila in 1994. Projects that push her to work with the technical aspect of lighting design and discover new ways of using light to achieve a symbiotic relationship with natural space are always exciting for Siangco. Case in point: this idyllic retreat high up in the mountains of Negros Occidental.
                            </p>

                            <p>
                                A house up in the mountains commands spatial experiences with the flick of a switch.
                                The role that lighting design has in both <a href="#outer">residential and commercial spaces</a> can ultimately define the success of a space. “It is quite easy for people to omit the idea of lighting design in the whole blueprint,” says lighting designer Christine Sicangco. “But if you think about it, even in small scale residential projects, you plan where the wires go and where the power outlets will be situated. It just makes a lot of sense if you also plan how the lighting will affect the overall structure.”
                            </p>

                            <p>
                                A graduate of both Parsons School of Design and San Diego State University, she and husband Jovi co-founded <a href="#outer">CSLDI</a>, a lighting design firm, when they moved back to Manila in 1994. Projects that push her to work with the technical aspect of lighting design and discover new ways of using light to achieve a symbiotic relationship with natural space are always exciting for Siangco. Case in point: this idyllic retreat high up in the mountains of Negros Occidental.
                            </p>

                            <p>
                                A house up in the mountains commands spatial experiences with the flick of a switch.
                                The role that lighting design has in both <a href="#outer">residential and commercial spaces</a> can ultimately define the success of a space. “It is quite easy for people to omit the idea of lighting design in the whole blueprint,” says lighting designer Christine Sicangco. “But if you think about it, even in small scale residential projects, you plan where the wires go and where the power outlets will be situated. It just makes a lot of sense if you also plan how the lighting will affect the overall structure.”
                            </p>

                            <p>
                                A graduate of both Parsons School of Design and San Diego State University, she and husband Jovi co-founded <a href="#outer">CSLDI</a>, a lighting design firm, when they moved back to Manila in 1994. Projects that push her to work with the technical aspect of lighting design and discover new ways of using light to achieve a symbiotic relationship with natural space are always exciting for Siangco. Case in point: this idyllic retreat high up in the mountains of Negros Occidental.
                            </p>
                        </div>

                        <a href="#outer" class="button secondary animate fadeIn">
                            <span>Visit Press</span>
                        </a>
                    </div>
                </div>

                <div class="content-footer animate fadeIn">
                    <a href="javascript:;" class="button secondary reverse-icon">
                        PREVIOUS
                    </a>

                    <a href="<?php echo $root; ?>press.php" class="button secondary no-icon">
                        ALL PRESS
                    </a>

                    <a href="javascript:;" class="button secondary">
                        NEXT
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>