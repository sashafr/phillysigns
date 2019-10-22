<?php

/*
** Find and display first attached video file
*  Inspired by Curatescape:
*  https://github.com/CPHDH/theme-curatescape
*  Non-embedded videos use plyr:
*  https://github.com/sampotts/plyr
*/
function display_video($item='item') {
    if (element_exists('Item Type Metadata','Embedded Video') && metadata($item,array('Item Type Metadata','Embedded Video'))) {
        $videoTitle = metadata($item,array('Dublin Core','Title'));
		$videoDesc = metadata($item,array('Dublin Core','Description')); ?>
        <div class="center-video">
            <div class="plyr__video-embed" id="jsplayer-<?php echo $item->id ?>">
                <?php echo metadata($item,array('Item Type Metadata','Embedded Video')); ?>
            </div>
        </div>
        <script async defer>
            document.addEventListener('DOMContentLoaded', () => {
              const player = new Plyr('#jsplayer-<?php echo $file->id ?>');
              // Bind event listener
              function on(selector, type, callback) {
                document.querySelector(selector).addEventListener(type, callback, false);
              }
            });
		</script>
    <?php } else {
    	$videoTypes = array('video/mp4','video/mpeg','video/quicktime');
        $captionTypes = array('text/vtt', 'text/plain');
        $found_video = false;
    	foreach (loop('files', $item->Files) as $file){
    		$videoMime = metadata($file,'MIME Type');
            if ( in_array($videoMime,$captionTypes) && !preg_match('/track_description/', $file->original_filename)) {
                $transcriptFile = $file;
                // break;
            } else if (in_array($videoMime,$captionTypes) && preg_match('/track_description/', $file->original_filename)) {
                $descriptionFile = $file;
                // break;
            }
        }
        foreach (loop('files', $item->Files) as $file){
                $videoMime = metadata($file, 'MIME Type');
    		if ( in_array($videoMime,$videoTypes) ): ?>
    			<?php $videoTitle = metadata($file,array('Dublin Core','Title')); ?>
    			<?php $videoDesc = metadata($file,array('Dublin Core','Description')); ?>
                <div class="center-video">
        			<video controls crossorigin playsinline id="jsplayer-<?php echo $file->id ?>">
        				<source src="<?php echo WEB_ROOT ?>/files/original/<?php echo $file->filename ?>" type="<?php echo $videoMime ?>" size="266">
                        <?php if ($transcriptFile): ?>
                            <track kind="captions" label="English" srclang="en" src="<?php echo WEB_ROOT ?>/files/original/<?php echo $transcriptFile->filename ?>" default>
                        <?php endif; ?>
                        <?php if ($descriptionFile) : ?>
                            <track kind="descriptions" label="English" srclang="en" src="<?php echo WEB_ROOT ?>/files/original/<?php echo $descriptionFile->filename ?>" default>
                        <?php endif; ?>
        				<a href="<?php echo WEB_ROOT ?>/files/original/<?php echo $file->filename ?>" download>Download</a>
        			</video>
                </div>
                <script async defer>
                    document.addEventListener('DOMContentLoaded', () => {
                      const player = new Plyr('#jsplayer-<?php echo $file->id ?>', {
                        clickToPlay: false,
                        captions: {
                          active: true,
                        },
                      });
                      // Bind event listener
                      function on(selector, type, callback) {
                        document.querySelector(selector).addEventListener(type, callback, false);
                      }
                    });
        		</script>
                <?php $found_video = true; ?>
                <?php break; ?>
    		<?php endif; ?>
    	<?php };
        // if no videos found, just use thumbnail image
        if (!$found_video) {
            $itemImage = record_image($item, 'square_thumbnail');
            echo link_to_item($itemImage, array('class' => 'center-video'), 'show', $item);
        }
    }
}

?>
