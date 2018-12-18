<?php echo head(); ?>

	<div class="row">

		<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
			<figure class="text-center">
				<?php echo display_video($item) ?>
			</figure>
		</div>

		<div class="col-md-9 col-md-offset-2 animate-box" data-animate-effect="fadeInLeft">

			<div class="col-md-12">
				<h1><?php echo metadata($item,array('Dublin Core','Title')) ?></h1>
                <?php if (count($item->getItemTypeElements()) > 0): ?>
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
                <?php endif ?>
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
			<div class="col-md-4 col-sm-4 col-xs-4 text-center">
				<a href="<?php echo record_url(get_collection_for_item($item)); ?>"><i class="icon-th-large"></i></a>
			</div>
            <?php if (get_next_item($item)): ?>
				<div class="col-md-4 col-sm-4 col-xs-4 text-center">
					<a href="<?php echo record_url(get_next_item($item)) ?>"><span>Next Item</span> <i class="icon-long-arrow-right"></i> </a>
				</div>
            <?php endif ?>
		</div>
	</div>

<?php echo foot(); ?>
