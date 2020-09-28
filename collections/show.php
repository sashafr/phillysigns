<?php echo head(); ?>
    <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft"><?php echo metadata($collection, array('Dublin Core','Title')) ?></h2>
    <?php if (metadata($collection, array('Dublin Core', 'Description'))): ?>
      <h3 class="animate-box" data-animate-effect="fadeInLeft"><?php echo metadata($collection, array('Dublin Core', 'Description')); ?></h3>
    <?php endif ?>
    <div class="row animate-box" data-animate-effect="fadeInLeft">
      <?php
      $siteNumItemsPerPage = get_option('per_page_public');
      $collectionItemCount = metadata($collection, 'total_items');

      set_loop_records(
        'items',
        get_records(
          'Item',
          array(
            'collection' => $collection
          ),
          $siteNumItemsPerPage
        )
      );
      ?>

      <?php foreach (loop('items') as $counter=>$item): ?>
        <?php if ($counter % 2 == 0): ?>
            </div>
            <div class="row animate-box" data-animate-effect="fadeInLeft">
        <?php endif; ?>
        <div class="col-md-6 col-sm-6 col-xs-6 col-xxs-12 work-item">
            <?php echo display_video($item) ?>
            <a href="<?php echo record_url($item) ?>">
                <h3 class="fh5co-work-title"><?php echo metadata($item,array('Dublin Core','Title')) ?></h3>
                <!-- Uncomment this line if you want to display item description below title. -->
                <!-- <p><?php echo metadata($item,array('Dublin Core','Description')) ?></p> -->
            </a>
        </div>
      <?php endforeach; ?>
    </div>

    <?php
      echo link_to_items_browse(
        __(
          plural(
            'View item',
            ($collectionItemCount > $siteNumItemsPerPage ? 'View more items in this collection' : 'Sort and browse these items'),
            $totalItems
          ),
          $totalItems
        ),
        array('collection' => metadata('collection', 'id')),
        array('class' => 'view-items-link view-items-link--coll-show')
      );
    ?>

<?php echo foot(); ?>
