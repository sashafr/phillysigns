<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php echo get_html_lang(); ?>"> <!--<![endif]-->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo option('site_title') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if ($description = option('description')): ?>
        <meta name="description" content="<?php echo $description ?>" />
        <meta property="og:description" content="<?php echo $description ?>"/>
    <?php endif; ?>
    <?php if ($authors = option('author')): ?>
        <meta name="author" content="<?php echo $authors ?>" />
    <?php endif; ?>

    <!--
    //////////////////////////////////////////////////////

    This template is created by the Penn Libraries
    Digital Scholarship Team based on the template found at:
    https://freehtml5.co/nitro-free-website-template-using-bootstrap-3/

    //////////////////////////////////////////////////////
    -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="<?php echo option('site_title'); ?>"/>
    <?php if(get_theme_option('logo')): ?>
        <?php $logo_url = WEB_ROOT.'/files/theme_uploads/'.get_theme_option('logo'); ?>
        <meta property="og:image" content="<?php echo $logo_url; ?>"/>
        <meta name="twitter:image" content="<?php echo $logo_url; ?>" />
    <?php endif; ?>
    <meta property="og:url" content="<?php echo WEB_ROOT; ?>"/>
    <meta property="og:site_name" content="<?php echo option('site_title'); ?>"/>
    <meta name="twitter:title" content="<?php echo option('site_title'); ?>" />
    <meta name="twitter:url" content="<?php echo WEB_ROOT; ?>" />
    <meta name="twitter:card" content="summary" />
    <meta name="google-site-verification" content="_QoDXnjXSH4T4pqdzWdKEgwSyB1MsMPgZ8igvFUY_Cs" />

    <?php if(get_theme_option('favicon')): ?>
        <?php $favicon_url = WEB_ROOT.'/files/theme_uploads/'.get_theme_option('favicon'); ?>
        <link rel="shortcut icon" href="<?php echo $favicon_url; ?>">
    <?php endif; ?>

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- CSS -->
    <?php queue_css_file(array('animate', 'icomoon', 'bootstrap', 'style', 'plyr', 'lity')); ?>
    <?php queue_css_url(src('owl.carousel.min', 'css', 'css')); ?>
    <?php queue_css_url(src('owl.theme.default.min', 'css', 'css')); ?>
    <?php echo head_css(); ?>

    <!-- JS -->
    <?php queue_js_url(src('modernizr-2.6.2.min', 'javascripts', 'js')); ?>
    <?php queue_js_file(array('plyr', 'lity')); ?>
    <?php echo head_js(); ?>


    <!-- Plugin Stuff -->
    <?php fire_plugin_hook('public_head', array('view'=>$this)); ?>

</head>
<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>
    <div id="fh5co-page">
        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i><span class="sr-only">Menu</span></a>
        <aside id="fh5co-aside" role="complementary" class="border js-fullheight">

            <h1 id="fh5co-logo"><?php echo link_to_home_page(theme_logo()); ?></h1>
            <nav id="fh5co-main-menu" role="navigation">
                <?php echo public_nav_main()->setActiveClass("fh5co-active"); ?>
            </nav>
            <?php fire_plugin_hook('public_header', array('view'=>$this)); ?>

            <div class="fh5co-footer">
                <p><small><?php echo (get_theme_option('footer_text')) ?></small></p>
                <p><small>Theme developed by the <a href="https://github.com/upenndigitalscholarship">Penn Libraries</a> |  <a href="https://github.com/upenndigitalscholarship/phillysigns">Get the Code</a></small></p>
                <ul>
                    <?php if(get_theme_option('facebook_link')): ?>
                        <li><a href="<?php echo (get_theme_option('facebook_link')) ?>"><i class="icon-facebook"></i></a></li>
                    <?php endif; ?>
                    <?php if(get_theme_option('twitter_username')): ?>
                        <li><a href="https://twitter.com/<?php echo (get_theme_option('twitter_username')) ?>"><i class="icon-twitter"></i></a></li>
                    <?php endif; ?>
                    <?php if(get_theme_option('instagram_username')): ?>
                        <li><a href="https://www.instagram.com/<?php echo (get_theme_option('instagram_username')) ?>"><i class="icon-instagram"></i></a></li>
                    <?php endif; ?>
                    <?php if(get_theme_option('linkedin')): ?>
                        <li><a href="<?php echo (get_theme_option('linkedin')) ?>"><i class="icon-linkedin"></i></a></li>
                    <?php endif; ?>
                </ul>
            </div>

        </aside>

		<div id="fh5co-main">

            <?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>
            <?php if (!is_current_url(url('/'))): ?><div class="fh5co-narrow-content"><?php endif; ?>
            <h1 class="mobile-title"><?php echo link_to_home_page(theme_logo()); ?></h1>
