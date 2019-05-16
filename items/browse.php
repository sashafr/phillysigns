<?php
$pageTitle = __('Browse Items');
echo head(array('title' => $pageTitle, 'bodyclass' => 'items browse'));
?>

<h1 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft"><?php echo $pageTitle;?> <?php echo __('(%s total)', $total_results); ?></h1>

<nav class="items-nav navigation secondary-nav">
    <?php echo public_nav_items(); ?>
</nav>

<?php echo item_search_filters(); ?>

<?php echo pagination_links(); ?>

<?php if ($total_results > 0): ?>

<?php
$sortLinks[__('Title')] = 'Dublin Core,Title';
$sortLinks[__('Creator')] = 'Dublin Core,Creator';
$sortLinks[__('Date Added')] = 'added';
?>
<div id="sort-links">
    <span class="sort-label"><?php echo __('Sort by: '); ?></span><?php echo browse_sort_links($sortLinks); ?>
</div>

<?php endif; ?>

<div class="row animate-box" data-animate-effect="fadeInLeft">
    <?php foreach (loop('items') as $counter=>$item): ?>
        <?php if ($counter % 3 == 0): ?>
            </div>
            <div class="row animate-box" data-animate-effect="fadeInLeft">
        <?php endif; ?>
        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
            <?php echo display_video($item) ?>
            <a href="<?php echo record_url($item) ?>">
                <h3 class="fh5co-work-title"><?php echo metadata('item', array('Dublin Core', 'Title')); ?></h3>
                <p><?php echo metadata($item,array('Dublin Core','Description')) ?></p>
                <?php if (metadata('item', 'has tags')): ?>
                    <div class="tags"><p><strong><?php echo __('Tags'); ?>:</strong>
                        <?php echo tag_string('items'); ?></p>
                    </div>
                <?php endif; ?>
                <div class="item-plugin-hook"><?php fire_plugin_hook('public_items_browse_each', array('view' => $this, 'item' => $item)); ?></div>
            </a>
        </div>
    <?php endforeach; ?>
</div>

<?php echo pagination_links(); ?>

<div id="outputs">
    <span class="outputs-label"><?php echo __('Output Formats'); ?></span>
    <?php echo output_format_list(false); ?>
</div>

<?php fire_plugin_hook('public_items_browse', array('items' => $items, 'view' => $this)); ?>

<?php echo foot(); ?>
