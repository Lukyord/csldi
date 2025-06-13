<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="about-main">
    <section data-section="about">
        <div class="sc-inner">
            <div class="container">
                <div class="content">
                    <div class="sc-header justify-between">
                        <h1 class="sc-ttl animate fadeIn">
                            About
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
                                "name" => "About",
                                "url" => ""
                            ],
                        ];

                        include($root . "include/el-directory.php");
                        ?>
                    </div>

                    <div class="block" data-block-index="1">
                        <div class="block-media animate fadeIns">
                            <?php
                            $section_cover = "./assets/media/design/about-1.jpg";
                            $section_cover_m = "";
                            include("include/function-group.php");
                            ?>
                        </div>

                        <div class="block-content-start animate fadeIn">
                            <div class="block-ttl">
                                <h2>About Us</h2>
                            </div>

                            <div class="block-desc">
                                <p>
                                    Christine Sicangco Lighting Design, Inc. (CSLDI) is an award-winning independent architectural lighting design firm based in Manila, Philippines. Led by the husband and wife team of Jo Vincent T. Gonzaga and Christine Sicangco, the firm stands as a beacon of innovation and quality. Christine, holding an MA in Architectural Lighting Design from Parsons School of Design in New York, leveraged her extensive experience in New York before returning to the Philippines. Jovi's background in Electrical Engineering from the University of the Pacific and Business Administration from St. Mary's College has proven invaluable, greatly enhancing team dynamics and contributing significantly to the firm's success with a global perspective and a steadfast commitment to design excellence.
                                    <br><br>
                                    Founded in 1994 during the nascent stage of the profession in the Philippines, CSLDI initially focused on designing lighting fixtures for global export, maintaining a steadfast commitment to quality. Our production facility in Bacolod City, Philippines, once housed over 100 employees and has won numerous awards for its innovative use of indigenous materials in lighting fixtures.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="block" data-block-index="2">
                        <div class="block-content-start animate fadeIn">
                            <div class="block-ttl">
                                <h2>Milestones</h2>
                            </div>

                            <div class="block-desc">
                                <p>
                                    Our journey is a testament to resilience and adaptability. In the early 2000s, our production facility was destroyed by fire, posing a significant challenge. However, this adversity became an opportunity for Christine to pivot towards the firm’s Architectural Lighting Design Consultancy aspect, showcasing our capacity to adapt and thrive.
                                    <br><br>
                                    In 2006, CSLDI opened an office in Makati, Metro Manila, fully transitioning into an Architectural Lighting Design and Consultancy Firm. By 2009, due to an influx and increase in project load, CSLDI moved to a larger office in Ermita, Manila, and expanded its team to include a diverse group of Lighting Designers, Architects, Interior Designers, Graphic Designers, and Engineers. This diverse team is vital to our success and reflects our commitment to responding to client needs, embracing environmental considerations, and preparing for future demands.
                                    <br><br>
                                    In 2023, to enhance our reach and service capabilities further, CSLDI established a regional office in Bacolod City, Philippines, strategically positioned to manage projects across the Visayas and Mindanao. Today, CSLDI has developed hundreds of lighting experiences for prestigious real estate brands, commercial buildings, and magazine-featured residential and commercial spaces worldwide—a testament to our growth, stability, and international acclaim.
                                </p>
                            </div>
                        </div>

                        <div class="block-media-wrapper">
                            <div class="block-media animate fadeIn">
                                <?php
                                $section_cover = "./assets/media/design/about-2.jpg";
                                $section_cover_m = "";
                                include("include/function-group.php");
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="block" data-block-index="3">
                        <div class="block-media">
                            <?php
                            $section_cover = "./assets/media/design/about-3.jpg";
                            $section_cover_m = "./assets/media/design/about-3-mb.jpg";
                            include("include/function-group.php");
                            ?>
                        </div>
                    </div>

                    <div class="block" data-block-index="4">
                        <div class="block-content-start animate fadeIn">
                            <div class="block-ttl">
                                <h2>Philosophy</h2>
                            </div>

                            <div class="block-desc">
                                <p>
                                    At CSLDI, nothing makes us happier than having a client who values and enjoys the space we create. Our commitment to a research-led and collaborative design process, coupled with meticulous attention to detail from concept to construction, and the involvement of both principal designers, ensures the success of each project. CSLDI does not adhere to a specific lighting design style; instead, we respond to the needs of the space as discussed with the client. Our team values coordination with the entire design ecosystem and adjusts intelligently, being flexible and open to new ideas and processes that contribute to the best and most successful lighting design possible.
                                    <br><br>
                                    With light, we create experiences. We manipulate light to evoke emotions, enhancing the ambiance of a space, the architecture, and the environment. We care deeply about environmental sustainability and are committed to actively reducing light pollution and enhancing environmental well-being through our designs. Our dedication to these goals underscores every project, pushing us to innovate and continue delivering exceptional lighting solutions that respect and elevate the environments we inhabit.
                                </p>
                            </div>
                        </div>

                        <div class="block-content-start animate fadeIn">
                            <div class="block-ttl">
                                <h2>Sustainability</h2>
                            </div>

                            <div class="block-desc">
                                <p>
                                    At CSLDI, we integrate sustainable design principles into every project, aiming to minimize environmental impact while maximizing energy efficiency and client satisfaction. Our designs emphasize conservation and intelligent use of resources, enabling us to deliver forward-thinking solutions that help our clients rethink how they interact with their environments. We are proud to have contributed to LEED-certified projects, including significant works like the Embassy of the United States in Manila and other notable developments, underlining our commitment to sustainability and environmental stewardship.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="block" data-block-index="5">
                        <div class="block-media-wrapper animate fadeIn">
                            <div class="block-media">
                                <?php
                                $section_cover = "./assets/media/design/about-4.jpg";
                                $section_cover_m = "";
                                include("include/function-group.php");
                                ?>
                            </div>
                        </div>

                        <div class="block-content-start animate fadeIn">
                            <div class="block-ttl">
                                <h2>Professional Service</h2>
                            </div>

                            <div class="block-desc">
                                <p>
                                    CSLDI provides a comprehensive suite of Architectural Lighting Design Services from the initial Concept and Schematic Design stages through to Design Development and the Construction Phase. Our offerings include the creation of detailed Lighting Layouts, the preparation of Fixture Schedules and Cut Sheets, and the formulation of Lighting Control Schedules and Intentions. We also conduct thorough Shop Drawing Reviews, perform advanced Lighting Computer Calculations, and produce Simulations and Renderings. Additionally, we carry out Lighting Evaluations and construct full-scale Mock-ups to ensure our designs meet our high standards. At CSLDI, we are committed to delivering efficient and economically viable lighting solutions promptly. We prioritize keeping all team members accessible to facilitate swift and effective communication throughout every project phase. </p>
                            </div>
                        </div>
                    </div>

                    <div class="divider-wrapper">
                        <hr class="divider animate widthToMax">
                    </div>

                    <div class="block" data-block-index="6">
                        <div class="block-content-start animate fadeIn">
                            <div class="block-ttl">
                                <h2 class="size-h2 uppercase">OUR CLIENTS</h2>
                            </div>

                            <div class="block-desc">
                                <p>
                                    CSLDI provides a comprehensive suite of Architectural Lighting Design Services from the initial Concept and Schematic Design stages through to Design Development and the Construction Phase. Our offerings include the creation of detailed Lighting Layouts, the preparation of Fixture Schedules and Cut Sheets, and the formulation of Lighting Control Schedules and Intentions. We also conduct thorough Shop Drawing Reviews, perform advanced Lighting Computer Calculations, and produce Simulations and Renderings. Additionally, we carry out Lighting Evaluations and construct full-scale Mock-ups to ensure our designs meet our high standards. At CSLDI, we are committed to delivering efficient and economically viable lighting solutions promptly. We prioritize keeping all team members accessible to facilitate swift and effective communication throughout every project phase. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>