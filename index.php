<?php echo head(); ?>

<div class="fh5co-testimonial" >
    <div class="animate-box" data-animate-effect="fadeInLeft">
        <div class="item">
            <h1 class="sm-title"><?php echo option('site_title') ?></h1>
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

<!-- FEATURED COLLECTION -->
<?php if (get_theme_option('Display Featured Collection') !== '0'): ?>
    <div class="fh5co-narrow-content">
        <div class="row animate-box" data-animate-effect="fadeInLeft">
            <?php set_loop_records('featcols', get_records('Collection',array('featured'=>1), 50)); ?>
            <?php foreach (loop('featcols') as $col): ?>
                <h3 class="fh5co-feature"><?php echo link_to_collection(metadata($col, array('Dublin Core', 'Title')), null, null, $col); ?></h3> <!-- link_to($exhibit, 'show', metadata($col, array('Dublin Core', 'Title')), null, null) -->
                <div class="row animate-box" data-animate-effect="fadeInLeft">
                    <?php set_loop_records('featcolitems', get_records('Item',array('collection'=>$col),3)); ?>
                    <?php foreach (loop('featcolitems') as $featcolitem): ?>
                        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
                            <!--?php echo display_video($featcolitem) ?--> <!-- if you want a challenge, you could write a 2nd line here that also displays the item thumbnail -->
                            <a href="<?php echo record_url($featcolitem) ?>">
                                <h3 class="fh5co-work-title"><?php echo metadata($featcolitem,array('Dublin Core','Title')) ?></h3>
                                <p><?php echo metadata($featcolitem,array('Dublin Core','Description')) ?></p>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="row animate-box" data-animate-effect="fadeInLeft">
                    <div class="col-md-4">
                        <p><?php echo link_to_collection('Learn More', array('class'=>'btn btn-md btn-primary'), null, $col); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>

<!-- FEATURED EXHIBIT -->
  <?php if ((get_theme_option('Display Featured Exhibit') !== '0') && plugin_is_active('ExhibitBuilder') && function_exists('exhibit_builder_display_random_featured_exhibit')): ?>
  <?php $feat_ex = exhibit_builder_random_featured_exhibit(); ?>
  <?php if ($feat_ex): ?>
    <div class="fh5co-narrow-content">
        <div class="row animate-box" data-animate-effect="fadeInLeft">
                <h3 class="fh5co-feature"><?php echo exhibit_builder_link_to_exhibit($feat_ex); ?></h3>
                <div class="row animate-box" data-animate-effect="fadeInLeft">
                        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
                          <p><?php echo strip_formatting(metadata($feat_ex, 'description', array('snippet' => 200))); ?></p>
                        </div>
                </div>
        </div>
    </div>
  <?php endif; ?>
  <?php endif; ?>

<!-- FEATURED ITEM -->
<?php if (get_theme_option('Display Featured Item') !== '0'): ?>
    <div class="fh5co-narrow-content">
        <div class="row animate-box" data-animate-effect="fadeInLeft">
            <?php set_loop_records('featitem', get_records('Item',array('featured'=>1), 50)); ?>
            <?php foreach (loop('featitem') as $col): ?>
                <h3 class="fh5co-feature"><?php echo link_to_item(metadata($col, array('Dublin Core', 'Title')), null, null, $col); ?></h3> <!-- link_to($exhibit, 'show', metadata($col, array('Dublin Core', 'Title')), null, null) -->
                <div class="row animate-box" data-animate-effect="fadeInLeft">
                    <!--?php set_loop_records('featcolitems', get_records('Item',array('collection'=>$col),3)); ?--> <!-- REMOVED FOR NON COLLECTIONS -->
                    <!--?php foreach (loop('featcolitems') as $featcolitem): ?--> <!-- REMOVED FOR NON COLLECTIONS -->
                        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
                            <?php echo display_video($featcolitem) ?> <!-- if you want a challenge, you could write a 2nd line here that also displays the item thumbnail -->
                            <a href="<?php echo record_url($featcolitem) ?>">
                                <h3 class="fh5co-work-title"><?php echo metadata($featcolitem,array('Dublin Core','Title')) ?></h3>
                                <p><?php echo metadata($featcolitem,array('Dublin Core','Description')) ?></p>
                            </a>
                        </div>
                    <!--?php endforeach; ?--> <!-- REMOVED FOR NON COLLECTIONS -->
                </div>
                <div class="row animate-box" data-animate-effect="fadeInLeft">
                    <div class="col-md-4">
                        <p><?php echo link_to_item('Learn More', array('class'=>'btn btn-md btn-primary'), null, $col); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>

<!-- RECENT ITEMS START -->
<?php if (get_theme_option('Display Recent Items') !== '0'): ?>
    <div class="fh5co-narrow-content">
        <div class="row animate-box" data-animate-effect="fadeInLeft">
          <?php
             $recentItems = get_theme_option('Homepage Recent Items');
             if ($recentItems === null || $recentItems === ''):
                 $recentItems = 4;
             else:
                 $recentItems = (int) $recentItems;
             endif;
             if ($recentItems):
         ?>
             <section class="box special features">
                 <?php set_loop_records('Item', get_recent_items($recentItems)); ?>
                 <?php $loop_index = 0; ?>
                 <?php foreach (loop('Item') as $rec_item): ?>
                     <?php if ($loop_index % 2 == 0): ?><div class="features-row"><?php endif ?>
                         <section>
                             <h3><?php echo link_to_item(metadata($rec_item, array('Dublin Core', 'Title')), null, null, $rec_item) ?></h3>
                             <p><?php echo strip_formatting(metadata($rec_item, array('Dublin Core', 'Description'), array('snippet' => 200))) ?></p>
                         </section>
                     <?php if ($loop_index % 2 == 1): ?></div><?php endif ?>
                     <?php $loop_index++; ?>
                 <?php endforeach ?>
                 <?php if ($recentItems % 2 == 1): ?><section>&nbsp;</section></div><?php endif ?> <!-- have to add a blank section if number of recent items is odd to make the formatting consistent -->
             </section>
         <?php endif; ?>

        </div>
    </div>
<?php endif; ?>
<!-- RECENT ITEMS END -->

<?php echo foot(); ?>
