<?php echo head(); ?>

<div class="fh5co-narrow-content">
    <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft"><?php echo option('site_title'); ?></h2>
    <div class="row animate-box" data-animate-effect="fadeInLeft">
        <?php set_loop_records('featcols', get_records('Collection',array('featured'=>1), 50)); ?>
        <?php foreach (loop('featcols') as $col): ?>
            <h3 class="fh5co-feature"><?php echo link_to_collection(metadata($col, array('Dublin Core', 'Title')), null, null, $col); ?></h3>
            <?php set_loop_records('featcolitems', get_records('Item',array('collection'=>$col),3)); ?>
            <?php foreach (loop('featcolitems') as $featcolitem): ?>
                <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
                    <?php echo display_video($featcolitem) ?>
                    <a href="<?php echo record_url($featcolitem) ?>">
                        <h3 class="fh5co-work-title"><?php echo metadata($featcolitem,array('Dublin Core','Title')) ?></h3>
                        <p><?php echo metadata($featcolitem,array('Dublin Core','Description')) ?></p>
                    </a>
                </div>
            <?php endforeach; ?>
            <div class="col-md-4">
                <p><?php echo link_to_collection('Learn More', array('class'=>'btn btn-md btn-primary'), null, $col); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="fh5co-testimonial" >
    <div class="fh5co-narrow-content">
        <div class="animate-box" data-animate-effect="fadeInLeft">
            <div class="item">
                <figure>
                    <?php if(get_theme_option('home_about_banner')): ?>
                        <?php $banner_url = WEB_ROOT.'/files/theme_uploads/'.get_theme_option('home_about_banner'); ?>
                        <img src="<?php echo $banner_url ?>" alt="About Section Header Image">
                    <?php endif; ?>
                </figure>
                <p class="text-center quote"><?php echo get_theme_option('homepage_text') ?></p>
            </div>
        </div>
    </div>
</div>

<div class="fh5co-cards">
    <div class="fh5co-narrow-content">
        <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">About <?php echo option('site_title'); ?></h2>

        <div class="fh5co-flex-wrap">
            <div class="fh5co-card animate-box" data-animate-effect="fadeInLeft">
                <p><?php echo get_theme_option('homepage_text') ?></p>
            </div>
        </div>

    </div>
</div>

<?php echo foot(); ?>
