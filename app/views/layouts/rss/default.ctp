<?php
echo $rss->header();
$channelData = array('title' => 'Bodhilinux Software Updates',
		 'link' => '/software/feed.rss',
		 'url' => '/software/feed.rss',
		 'description' => 'Bodhilinux Software Updates feed',
		 'language' => 'en-us'
		 );
$channel = $rss->channel(array(), $channelData, $items);
echo $rss->document(array(), $channel);
?>
