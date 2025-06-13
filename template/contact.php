<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="contact-main">
    <section data-section="contact">
        <div class="sc-inner sc-inner--bottom-0">
            <div class="container">
                <div class="sc-header justify-between">
                    <h1 class="sc-ttl animate fadeIn">
                        CONTACT
                    </h1>

                    <?php
                    $directory_arr = [
                        [
                            "name" => "Home",
                            "url" => $root . "index.php"
                        ],
                        [
                            "name" => "Contact",
                            "url" => ""
                        ]
                    ];

                    include($root . "include/el-directory.php");
                    ?>
                </div>

                <div class="content">
                    <div class="location" data-block-index="1">
                        <address>
                            Penthouse, San Luis Terraces 638 TM Kalaw Street Ermita, Manila, 1000 Philippines
                        </address>

                        <a href="#outer" class="underline">GOOGLE MAPS</a>
                    </div>

                    <div class="location" data-block-index="2">
                        <address>
                            Bacolod Office: 1 Macopa St. La Salle Ave., Villamonte Bacolod City, Philippines 6100
                        </address>

                        <a href="#outer" class="underline">GOOGLE MAPS</a>
                    </div>

                    <div class="contact" data-block-index="4">
                        <div class="contact-category">
                            <p>PHONE</p>
                        </div>

                        <div class="contact-info">
                            <a class="underline-hover" href="tel:+63285251179">+632 8 525-1179</a>
                        </div>

                        <div class="contact-category">
                            <p>EMAIL</p>
                        </div>

                        <div class="contact-info">
                            <a class="underline-hover" href="mailto:csicangco@csldi.com" target="_blank">csicangco@csldi.com</a>
                            <a class="underline-hover" href="mailto:jgonzaga@csldi.com" target="_blank">jgonzaga@csldi.com</a>
                        </div>

                        <div class="contact-category">
                            <p>CAREER</p>
                        </div>

                        <div class="contact-info">
                            <a class="button secondary modal-trigger" href="#modal-application-form">
                                <span>APPLICATION FORM</span>
                            </a>
                        </div>
                    </div>

                    <ul class="social" data-block-index="8">
                        <li><a href="#facebook"><i class="ic ic-facebook"></i></a></li>
                        <li><a href="#instagram"><i class="ic ic-instagram"></i></a></li>
                        <li><a href="#linkedin"><i class="ic ic-linkedin"></i></a></li>
                    </ul>
                </div>

                <div class="map-wrapper">
                    <div class="map">
                        <div class="object-fit">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319"
                                width="100%"
                                height="100%"
                                frameborder="0"
                                style="border:0"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>

                    <div class="pin">
                        <img src="<?php echo $root; ?>assets/media/design/map-pin.png" alt="pin">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal" id="modal-application-form">

        <!-- Modal Dialog -->
        <div class="modal-dialog" role="dialog" aria-modal="true">
            <a href="javascript:;" class="modal-close">
                <i class="ic ic-close"></i>
            </a>

            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-ttl">
                        <h2>Join our team</h2>
                    </div>

                    <div class="modal-desc">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras cursus pellentesque ultrices. Proin porttitor risus sit amet libero vestibulum, vitae feugiat mauris dictum. </p>
                    </div>
                </div>

                <div class="modal-form">
                    <form action="javascript:;">
                        <div class="fields">
                            <div class="field">
                                <div class="input">
                                    <label class="label" for="join-us-fullname">FIRST NAME</label>
                                    <input type="text" name="join-us-fullname" id="join-us-fullname" placeholder="Enter your first name" autocomplete="given-name" required>
                                </div>
                            </div>

                            <div class="field">
                                <div class="input">
                                    <label class="label" for="join-us-lastname">LAST NAME</label>
                                    <input type="text" name="join-us-lastname" id="join-us-lastname" placeholder="Enter your last name" autocomplete="given-lastname" required>
                                </div>
                            </div>

                            <div class="field">
                                <div class="input">
                                    <label class="label" for="join-us-email">EMAIL</label>
                                    <input type="email" name="join-us-email" id="join-us-email" placeholder="email@example.com" autocomplete="email" required>
                                </div>
                            </div>

                            <div class="field">
                                <div class="input">
                                    <label class="label" for="join-us-phone">PHONE NUMBER</label>
                                    <input type="tel" name="join-us-phone" id="join-us-phone" placeholder="+63 42 123 45678" autocomplete="tel" required>
                                </div>
                            </div>

                            <div class="field full-width">
                                <div class="input">
                                    <label class="label" for="join-us-folio">Provide a download link to your portfolio and/or a website link*</label>
                                    <input type="text" name="join-us-folio" id="join-us-folio" placeholder="Enter URL" autocomplete="url" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-submit">
                            <button type="submit" class="button">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <p>
                        For more information please contact <a href="mailto:csicangco@csldi.com">csicangco@csldi.com</a> | <a href="mailto:jgonzaga@csldi.com">jgonzaga@csldi.com</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include($root . "footer.php"); ?>