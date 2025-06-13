<footer id="footer" class="<?php if (in_array($page, ["not-found.php"])) {
                                echo 'hidden';
                            } ?>">
    <div class="footer-nav">
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

        <form action="javascript:;" class="news-letter" data-block-index="3">
            <div class="news-letter-ttl">
                <p>SUBSCRIBE TO OUR NEWSLETTER</p>
            </div>

            <div class="news-letter-form">
                <div class="input">
                    <input type="email" placeholder="Enter your Email" name="news-letter-email" id="news-letter-email" autocomplete="email" required>
                </div>

                <button type="submit" class="button secondary">
                    Submit
                </button>
            </div>
        </form>

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
        </div>

        <ul class="links" data-block-index="5">
            <li><a href="<?php echo $root; ?>about.php" class="underline-hover">OUR STORY</a></li>
            <li><a href="<?php echo $root; ?>project.php" class="underline-hover">PROJECTS</a></li>
            <li><a href="<?php echo $root; ?>award.php" class="underline-hover">AWARDS</a></li>
        </ul>

        <ul class="links" data-block-index="6">
            <li><a href="<?php echo $root; ?>press.php" class="underline-hover">PRESS</a></li>
            <li><a href="<?php echo $root; ?>contact.php" class="underline-hover">CONTACT</a></li>
        </ul>

        <ul class="links" data-block-index="7">
            <li><a href="<?php echo $root; ?>terms.php" class="underline-hover">TERMS</a></li>
            <li><a href="<?php echo $root; ?>terms.php" class="underline-hover">PRIVACY</a></li>
            <li><a href="<?php echo $root; ?>terms.php" class="underline-hover">COOKIE</a></li>
        </ul>

        <ul class="social" data-block-index="8">
            <li><a href="#facebook"><i class="ic ic-facebook"></i></a></li>
            <li><a href="#instagram"><i class="ic ic-instagram"></i></a></li>
            <li><a href="#linkedin"><i class="ic ic-linkedin"></i></a></li>
        </ul>

        <div class="copy-right" data-block-index="9">
            <p>© csldi.com All Rights Reserved. | Web by <a href="https://www.csldi.com" target="_blank">CSLDI</a></p>
        </div>
    </div>
</footer>

<div id="clipboard" style="display:none;">Copied</div>
</div><!-- CLOSE:#page -->

<?php
if ($page_index) {
    include($root . "include/_wp-code/wp-cookie-law-info-bar.php");
}
?>

<div id="page-message">
    <p>For the best experience, we recommend viewing the site in portrait orientation on mobile devices.</p>
</div>

<!-- JS:LIBRARY -->
<script src="<?php echo $root; ?>assets/js/library/bundle.js"></script>
<script src="<?php echo $root; ?>assets/js/library/share.js"></script>
<script src="<?php echo $root; ?>assets/js/library/jquery-ui-effect.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/select2/select2.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/liMarquee/jquery.liMarquee.js"></script>
<script src="<?php echo $root; ?>assets/plugin/countup/jquery.waypoints.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/countup/jquery.countup.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/rellax/rellax.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/lenis/lenis.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/splitting/splitting.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/imagesLoaded/imagesLoaded.pkgd.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/masonry/masonry.pkgd.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/gsap.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/ScrollTrigger.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/ScrollToPlugin.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/Flip.min.js"></script>

<!-- JS:CONFIG -->
<script src="<?php echo $root; ?>assets/js/theme.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/theme-wp.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/util.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/script.js?v=<?php echo time(); ?>"></script>

</body>

</html>