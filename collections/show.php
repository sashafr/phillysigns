<?php echo head(); ?>

<div class="fh5co-narrow-content">
    <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft"><?php echo metadata($collection, array('Dublin Core','Title')) ?></h2>
    <div class="row animate-box" data-animate-effect="fadeInLeft">
        <?php set_loop_records('items', get_records('Item',array('collection'=>$collection))); ?>
        <?php foreach (loop('items') as $item): ?>
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
                <?php echo display_video($item) ?>
                <a href="<?php echo record_url($item) ?>">
                    <h3 class="fh5co-work-title"><?php echo metadata($item,array('Dublin Core','Title')) ?></h3>
                    <p><?php echo metadata($item,array('Dublin Core','Description')) ?></p>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php echo foot(); ?>
