<?php header('Content-type: text/xml'); ?>
<?php
echo $rss->header();
$channelData = array('title' => 'Bodhilinux Software Updates',
		 'link' => array('controller' => 'software', 'action' => 'feed', 'ext' => 'rss'),
		 'url' => array('controller' => 'software', 'action' => 'feed', 'ext' => 'rss'),
		 'description' => 'Bodhilinux Software Updates feed!',
		 'language' => 'en-us'
		 );
$channel = $rss->channel(array(), $channelData, $items);
echo $rss->document(array(), $channel);
?>
