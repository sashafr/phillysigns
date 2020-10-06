<?php echo head(); ?>

	<div class="row">

		<div class="col-md-12 animate-box item-show-main-video" data-animate-effect="fadeInLeft">
			<figure class="text-center">
				<?php echo display_video($item) ?>
			</figure>
		</div>

		<div class="col-md-9 col-md-offset-2 animate-box" data-animate-effect="fadeInLeft">

			<div class="col-md-12">
				<h1><?php echo metadata($item,array('Dublin Core','Title')) ?></h1>
                <table>
                    <?php foreach (all_element_texts($item, array('return_type' => 'array')) as $elementset => $elements): ?>
                        <?php foreach ($elements as $element => $elementtexts): ?>
                            <?php if ($element != "Title" && $element != "Interviewee" && $element != "Embedded Video"): ?>
                                <tr class="element" >
                                    <td style="vertical-align: top; width: 40%; font-weight: bold;"><?php echo $element ?>:</td>
                                    <td style="vertical-align: top;">
                                        <?php foreach ($elementtexts as $elementtext): ?>
                                            <?php echo $elementtext ?></br>
                                        <?php endforeach ?>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </table>

                <!-- If the item belongs to a collection, the following creates a link to that collection. -->
                <?php if (metadata('item', 'Collection Name')): ?>
                    <div id="collection" class="element item-collection">
                        <h2><?php echo __('Collection'); ?></h2>
                        <div class="element-text"><p><?php echo link_to_collection_for_item(); ?></p></div>
                    </div>
                <?php endif; ?>

                <!-- The following prints a list of all tags associated with the item -->
                <?php if (metadata('item', 'has tags')): ?>
                <div id="item-tags" class="element">
                    <h2><?php echo __('Tags'); ?></h2>
                    <div class="element-text"><?php echo tag_string('item'); ?></div>
                </div>
                <?php endif;?>

                <!-- The following prints a citation for this item. -->
                <div id="item-citation" class="element">
                    <h2><?php echo __('Citation'); ?></h2>
                    <div class="element-text"><?php echo metadata('item', 'citation', array('no_escape' => true)); ?></div>
                </div>

                <!-- The following returns all of the files associated with an item. -->
                <?php if (metadata('item', 'has files')): ?>
                    <div id="itemfiles" class="element">
                        <h2><?php echo __('Files'); ?></h2>
                        <?php echo files_for_item(); ?>
                    </div>
                <?php endif; ?>

                <!--<div id="item-output-formats" class="element">
                    <h2><?php echo __('Output Formats'); ?></h2>
                    <div class="element-text"><?php echo output_format_list(); ?></div>
                </div> -->

                <?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>
			</div>

		</div>
	</div>

	<div class="row work-pagination animate-box" data-animate-effect="fadeInLeft">
		<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0">

            <?php if (get_previous_item($item)): ?>
				<div class="col-md-4 col-sm-4 col-xs-4 text-center">
					<a href="<?php echo record_url(get_previous_item($item)) ?>"><i class="icon-long-arrow-left"></i> <span>Previous Item</span></a>
				</div>
            <?php endif ?>
            <?php if (get_collection_for_item($item)): ?>
    			<div class="col-md-4 col-sm-4 col-xs-4 text-center">
    				<a href="<?php echo record_url(get_collection_for_item($item)); ?>"><i class="icon-th-large"></i><span class="sr-only">View Entire Collection</span></a>
    			</div>
    		<?php endif ?>
            <?php if (get_next_item($item)): ?>
				<div class="col-md-4 col-sm-4 col-xs-4 text-center">
					<a href="<?php echo record_url(get_next_item($item)) ?>"><span>Next Item</span> <i class="icon-long-arrow-right"></i> </a>
				</div>
            <?php endif ?>
		</div>
	</div>

<?php echo foot(); ?>
