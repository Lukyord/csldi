<?php
$page = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
$page_index = ($page == basename(dirname($_SERVER['PHP_SELF']), "/") || $page == 'index.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>csldi</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:title" content="csldi">
    <meta property="og:image" content="<?php echo $root; ?>assets/media/share.jpg">
    <meta property="og:type" content="website">

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $root; ?>assets/media/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $root; ?>assets/media/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $root; ?>assets/media/favicon/favicon-96x96.png">
    <link rel="manifest" href="<?php echo $root; ?>assets/media/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo $root; ?>assets/media/favicon/safari-pinned-tab.svg" color="#3C2631">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS:WP -->
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/_wp-css/blocks/style.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/_wp-css/blocks/navigation_style.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/_wp-css/blocks/gallery_style.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/_wp-css/plugins/contact-form-7/styles.css" type="text/css" media="all">
    <!-- CSS:LIBRARY -->
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/library/animate.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/library/jquery-ui-effect.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/plugin/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/plugin/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/plugin/liMarquee/liMarquee.css">
    <!-- CSS:CONFIG -->
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/font.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/iconfont.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/theme.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/theme-rwd.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/theme-wp.css?v=<?php echo time(); ?>">
    <!-- JS:LIBRARY -->
    <script src="<?php echo $root; ?>assets/js/library/modernizr-custom.js"></script>
    <script src="<?php echo $root; ?>assets/js/library/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $root; ?>assets/js/library/jquery-migrate-3.4.0.min.js"></script>
    <script src="<?php echo $root; ?>assets/js/library/jquery.easing.1.3.min.js"></script>

    <!-- web by ::* www.plaimanas.com -->
</head>

<?php
/* echo (in_array($page, ['about.php', 'career.php', 'news-single.php', 'career-apply-form.php', "page.php"])) ? 'no-scrollbar' : '';  */
echo (in_array($page, ['about.php', 'career.php', 'news-single.php', 'career-apply-form.php', "page.php"])) ? 'no-scrollbar' : '';
?>

<body>
    <div id="page">
        <header id="header" class="<?php if (in_array($page, ["index.php"]) || $page_index) {
                                        echo 'top-white';
                                    } ?>
                                    
                                    <?php if (in_array($page, ["not-found.php"])) {
                                        echo 'no-bg';
                                    } ?>
                                    ">
            <div class="header-nav">
                <!-- Logo -->
                <div class="header-brand">
                    <a class="brand" href="<?php echo $root; ?>index.php">
                        <img class="logo white show-md" src="<?php echo $root; ?>assets/media/design/logo-white.svg" alt="">
                        <img class="logo" src="<?php echo $root; ?>assets/media/design/logo.svg" alt="">
                    </a>
                </div>

                <!-- Menu -->
                <div class="header-menu">
                    <div class="panel-overlay"></div>
                    <div class="panel">
                        <div class="panel-wrapper">
                            <div class="panel-scroll" data-lenis-prevent>
                                <div class="panel-body">
                                    <ul class="menu">
                                        <li><a href="<?php echo $root; ?>index.php" class="underline-hover">HOME</a></li>
                                        <li class="has-submenu">
                                            <a href="javascript:;" class="underline-hover">ABOUT US</a>
                                            <ul class="submenu">
                                                <li><a href="<?php echo $root; ?>about.php" class="underline-hover">ABOUT</a></li>
                                                <li><a href="<?php echo $root; ?>team.php" class="underline-hover">TEAM</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo $root; ?>project.php" class="underline-hover">PROJECTS</a></li>
                                        <li><a href="<?php echo $root; ?>award.php" class="underline-hover">AWARDS</a></li>
                                        <li><a href="<?php echo $root; ?>press.php" class="underline-hover">PRESS</a></li>
                                    </ul>
                                </div>

                                <!-- MB: Header CTA -->
                                <div class="panel-footer hidden-device-md">
                                    <a href="<?php echo $root; ?>contact.php" class="button">CONTACT US</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PC: Header CTA -->
                <div class="header-cta show-md">
                    <a href="<?php echo $root; ?>contact.php" class="button">CONTACT US</a>
                </div>

                <!-- Menu Control -->
                <div class="header-menu-ctrl hidden-device-md">
                    <a class="menu-ctrl" href="javascript:;">
                        <span class="hamburger">
                            <span class="bars">
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
        </header>