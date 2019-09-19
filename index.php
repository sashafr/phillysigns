<?php echo head(); ?>

<div class="fh5co-testimonial" >
    <div class="animate-box" data-animate-effect="fadeInLeft">
        <div class="item">
            <!-- only display title here if there is a logo and title isn't displaying in sidebar -->
            <?php if(get_theme_option('logo')): ?>
                <h1 class="sm-title"><?php echo option('site_title') ?></h1>
            <?php endif; ?>
            <figure class="ps-header-image-container">
                <?php if(get_theme_option('home_about_banner')): ?>
                    <?php $banner_url = WEB_ROOT.'/files/theme_uploads/'.get_theme_option('home_about_banner'); ?>
                    <img src="<?php echo $banner_url ?>" alt="About Section Header Image">
                <?php endif; ?>
            </figure>
            <p class="text-center quote"><?php echo get_theme_option('homepage_text') ?></p>
        </div>
    </div>
</div>

<div class="fh5co-narrow-content">
    <div class="row animate-box" data-animate-effect="fadeInLeft">
        <?php set_loop_records('featcols', get_records('Collection',array('featured'=>1), 50)); ?>
        <?php foreach (loop('featcols') as $col): ?>
            <h3 class="fh5co-feature"><?php echo link_to_collection(metadata($col, array('Dublin Core', 'Title')), null, null, $col); ?></h3>
            <div class="row animate-box" data-animate-effect="fadeInLeft">
                <?php set_loop_records('featcolitems', get_records('Item',array('collection'=>$col),3)); ?>
                <?php foreach (loop('featcolitems') as $featcolitem): ?>
                    <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
                        <div class="row video-row">
                            <?php echo display_video($featcolitem) ?>
                        </div>
                        <div class="row">
                            <a href="<?php echo record_url($featcolitem) ?>">
                                <h3 class="fh5co-work-title"><?php echo metadata($featcolitem,array('Dublin Core','Title')) ?></h3>
                                <!-- uncomment this line if you want to display item description below title -->
                                <!-- <p><?php echo metadata($featcolitem,array('Dublin Core','Description')) ?></p> -->
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="row animate-box" data-animate-effect="fadeInLeft">
                <div class="col-md-4 ps-learn-more">
                    <p><?php echo link_to_collection('Learn More', array('class'=>'btn btn-md btn-primary'), null, $col); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php if (get_theme_option('Display Featured Item') == '1' || get_theme_option('Display Featured Exhibit') == '1' || get_theme_option('Display Recent Item') == '1'): ?>
    <div class="fh5co-cards">
        <div class="fh5co-narrow-content">
            <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Browse</h2>

            <div class="fh5co-flex-wrap">
                <?php if (get_theme_option('Display Featured Item') !== '0'): ?>
                    <?php $feat_item = get_random_featured_items(1); ?>
                    <?php if (count($feat_item) > 0): ?>
                        <div class="fh5co-card animate-box" data-animate-effect="fadeInLeft">
                            <div class="row video-row"><a href="<?php echo record_url($feat_item[0]) ?>"><h5>Featured Item: <?php echo metadata($feat_item[0],array('Dublin Core','Title')) ?></h5></a></div>
                            <div class="row video-row browse-box-row">
                                <div class="ps-browse-box-image"><?php echo display_video($feat_item[0]) ?></div>
                                <p><?php echo metadata($feat_item[0],array('Dublin Core','Description')) ?></p>
                            </div>
                            <div class="row video-row"><p><a href="<?php echo record_url($feat_item[0]) ?>" class="btn btn-md btn-primary">Learn More</a></p></div>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
                <?php if (get_theme_option('Display Recent Item') !== '0'): ?>
                    <?php $recent_item = get_recent_items(1); ?>
                    <?php if (count($recent_item) > 0): ?>
                        <div class="fh5co-card animate-box" data-animate-effect="fadeInLeft">
                            <div class="row video-row"><a href="<?php echo record_url($recent_item[0]) ?>"><h5>Recently Added: <?php echo metadata($recent_item[0],array('Dublin Core','Title')) ?></h5></a></div>
                            <div class="row video-row browse-box-row">
                                <div class="ps-browse-box-image"><?php echo display_video($recent_item[0]) ?></div>
                                <p><?php echo metadata($recent_item[0],array('Dublin Core','Description')) ?></p>
                            </div>
                            <div class="row video-row"><p><a href="<?php echo record_url($recent_item[0]) ?>" class="btn btn-md btn-primary">Learn More</a></p></div>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
                <?php if (get_theme_option('Display Featured Exhibit') !== '0' && plugin_is_active('ExhibitBuilder') && function_exists('exhibit_builder_display_random_featured_exhibit')): ?>
                    <?php $feat_ex = exhibit_builder_random_featured_exhibit(); ?>
                    <?php if ($feat_ex): ?>
                        <div class="fh5co-card animate-box" data-animate-effect="fadeInLeft">
                            <div class="row video-row"><h5>Featured Exhibit: <?php echo exhibit_builder_link_to_exhibit($feat_ex) ?></h5></div>
                            <div class="row video-row browse-box-row">
                                <p><?php echo strip_formatting(metadata($feat_ex, 'description', array('snippet' => 200))); ?></p>
                            </div>
                            <div class="row video-row"><p><?php echo exhibit_builder_link_to_exhibit($feat_ex, "Learn More", array('class' => 'btn btn-md btn-primary'), null); ?></p></div>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>

        </div>
    </div>
<?php endif; ?>

<div class="row animate-box" data-animate-effect="fadeInLeft">
    <?php fire_plugin_hook('public_home', array('view' => $this)); ?>
</div>

<?php echo foot(); ?>
