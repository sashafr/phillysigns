<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
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

    <?php if(get_theme_option('favicon')): ?>
        <?php $favicon_url = WEB_ROOT.'/files/theme_uploads/'.get_theme_option('favicon'); ?>
        <link rel="shortcut icon" href="<?php echo $favicon_url; ?>">
    <?php endif; ?>

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- CSS -->
    <?php queue_css_file(array('animate', 'icomoon', 'bootstrap', 'style')); ?>
    <?php queue_css_url('themes/phillysigns/css/owl.carousel.min.css'); ?>
    <?php queue_css_url('themes/phillysigns/css/owl.theme.default.min.css'); ?>
    <?php echo head_css(); ?>

    <!-- JS -->
    <script src="<?php echo src('jquery.min', 'javascripts', 'js') ?>"></script>
    <script src="<?php echo src('modernizr-2.6.2.min', 'javascripts', 'js') ?>"></script>
    <script src="<?php echo src('jquery.easing.1.3', 'javascripts', 'js') ?>"></script>
    <script src="<?php echo src('bootstrap.min', 'javascripts', 'js') ?>"></script>
    <script src="<?php echo src('owl.carousel.min', 'javascripts', 'js') ?>"></script>
    <script src="<?php echo src('jquery.stellar.min', 'javascripts', 'js') ?>"></script>
    <script src="<?php echo src('jquery.waypoints.min', 'javascripts', 'js') ?>"></script>
    <script src="<?php echo src('jquery.countTo', 'javascripts', 'js') ?>"></script>
    <script src="<?php echo src('main', 'javascripts', 'js') ?>"></script>
</head>
<body>
    <div id="fh5co-page">
        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
        <aside id="fh5co-aside" role="complementary" class="border js-fullheight">

            <h1 id="fh5co-logo"><a href="index.html"><?php if(get_theme_option('logo')): ?><img src="<?php echo WEB_ROOT.'/files/theme_uploads/'.get_theme_option('logo'); ?>" alt="<?php echo option('site_title'); ?> Logo"><?php endif; ?></a></h1>
            <nav id="fh5co-main-menu" role="navigation">
                <ul>
                    <li class="fh5co-active"><a href="index.html">Home</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>

            <div class="fh5co-footer">
                <p><small>&copy; 2016 Nitro Free HTML5. All Rights Reserved.</span> <span>Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> </span> <span>Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></span></small></p>
                <ul>
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-instagram"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                </ul>
            </div>

        </aside>

        <div id="fh5co-main">

            <div class="fh5co-narrow-content">
                <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">We Love To Design <span>See Our Portfolio</span></h2>
                <div class="row animate-box" data-animate-effect="fadeInLeft">
                    <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
                        <a href="work.html">
                            <img src="images/work_1.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                            <h3 class="fh5co-work-title">Work Title Here</h3>
                            <p>Illustration, Branding</p>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
                        <a href="work.html">
                            <img src="images/work_2.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                            <h3 class="fh5co-work-title">Work Title Here</h3>
                            <p>Web, Packaging</p>
                        </a>
                    </div>
                    <div class="clearfix visible-sm-block"></div>
                    <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
                        <a href="work.html">
                            <img src="images/work_3.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                            <h3 class="fh5co-work-title">Work Title Here</h3>
                            <p>Branding, Web</p>
                        </a>
                    </div>
                    <div class="clearfix visible-md-block"></div>
                    <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
                        <a href="work.html">
                            <img src="images/work_4.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                            <h3 class="fh5co-work-title">Work Title Here</h3>
                            <p>Logo, Branding, Web</p>
                        </a>
                    </div>
                    <div class="clearfix visible-sm-block"></div>
                    <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
                        <a href="work.html">
                            <img src="images/work_5.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                            <h3 class="fh5co-work-title">Work Title Here</h3>
                            <p>Web, Packaging, Branding</p>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
                        <a href="work.html">
                            <img src="images/work_6.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                            <h3 class="fh5co-work-title">Work Title Here</h3>
                            <p>Branding</p>
                        </a>
                    </div>
                    <div class="clearfix visible-md-block visible-sm-block"></div>

                    <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
                        <a href="work.html">
                            <img src="images/work_7.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                            <h3 class="fh5co-work-title">Work Title Here</h3>
                            <p>Web, Illustration</p>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
                        <a href="work.html">
                            <img src="images/work_8.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                            <h3 class="fh5co-work-title">Work Title Here</h3>
                            <p>Branding, Web</p>
                        </a>
                    </div>
                    <div class="clearfix visible-sm-block"></div>
                    <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
                        <a href="work.html">
                            <img src="images/work_1.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                            <h3 class="fh5co-work-title">Work Title Here</h3>
                            <p>Illustration, Branding</p>
                        </a>
                    </div>
                    <div class="clearfix visible-md-block"></div>

                </div>
            </div>


            <div class="fh5co-testimonial" >
                <div class="fh5co-narrow-content">
                    <div class="owl-carousel-fullwidth animate-box" data-animate-effect="fadeInLeft">
                        <div class="item">
                            <figure>
                                <img src="images/testimonial_person2.jpg" alt="Free HTML5 Bootstrap Template">
                            </figure>
                            <p class="text-center quote">&ldquo;Design must be functional and functionality must be translated into visual aesthetics, without any reliance on gimmicks that have to be explained. &rdquo; <cite class="author">&mdash; Ferdinand A. Porsche</cite></p>
                        </div>
                        <div class="item">
                            <figure>
                                <img src="images/testimonial_person3.jpg" alt="Free HTML5 Bootstrap Template">
                            </figure>
                            <p class="text-center quote">&ldquo;Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after a while. &rdquo;<cite class="author">&mdash; Steve Jobs</cite></p>
                        </div>
                        <div class="item">
                            <figure>
                                <img src="images/testimonial_person4.jpg" alt="Free HTML5 Bootstrap Template">
                            </figure>
                            <p class="text-center quote">&ldquo;I think design would be better if designers were much more skeptical about its applications. If you believe in the potency of your craft, where you choose to dole it out is not something to take lightly. &rdquo;<cite class="author">&mdash; Frank Chimero</cite></p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="fh5co-narrow-content">
                <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">This Is What <span>We Love To Do</span></h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
                            <div class="fh5co-icon">
                                <i class="icon-strategy"></i>
                            </div>
                            <div class="fh5co-text">
                                <h3>Strategy</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
                            <div class="fh5co-icon">
                                <i class="icon-telescope"></i>
                            </div>
                            <div class="fh5co-text">
                                <h3>Explore</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
                            <div class="fh5co-icon">
                                <i class="icon-circle-compass"></i>
                            </div>
                            <div class="fh5co-text">
                                <h3>Direction</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
                            <div class="fh5co-icon">
                                <i class="icon-tools-2"></i>
                            </div>
                            <div class="fh5co-text">
                                <h3>Expertise</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="fh5co-counters" style="background-image: url(images/hero.jpg);" data-stellar-background-ratio="0.5" id="counter-animate">
                <div class="fh5co-narrow-content animate-box">
                    <div class="row" >
                        <div class="col-md-4 text-center">
                            <span class="fh5co-counter js-counter" data-from="0" data-to="67" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="fh5co-counter-label">Clients Worked With</span>
                        </div>
                        <div class="col-md-4 text-center">
                            <span class="fh5co-counter js-counter" data-from="0" data-to="130" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="fh5co-counter-label">Completed Projects</span>
                        </div>
                        <div class="col-md-4 text-center">
                            <span class="fh5co-counter js-counter" data-from="0" data-to="27232" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="fh5co-counter-label">Line of Codes</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fh5co-cards">
                <div class="fh5co-narrow-content">
                    <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Press Release</h2>

                    <div class="fh5co-flex-wrap">
                        <div class="fh5co-card animate-box" data-animate-effect="fadeInLeft">
                            <h5>Expertise</h5>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            <p><a href="#" class="btn btn-md btn-primary">Learn More</a></p>
                        </div>
                        <div class="fh5co-card animate-box" data-animate-effect="fadeInLeft">
                            <h5>Explore</h5>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas.</p>
                            <p><a href="#" class="btn btn-md btn-primary">Learn More</a></p>
                        </div>

                    </div>

                </div>
            </div>

            <div class="fh5co-narrow-content">
                <div class="row">
                    <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                        <h1 class="fh5co-heading-colored">We Design Beautiful &amp; Functional Website</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                        <p class="fh5co-lead">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        <p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
                    </div>
                    <div class="col-md-7 col-md-push-1">
                        <div class="row">
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


</body>
</html>
