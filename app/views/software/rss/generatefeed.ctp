<?php
function rss_transform($item) {
	$title= str_replace("_"," ",$item['Software']['solftName']);
	return array('title' => $title,
		'link' => '/software/feed.rss',
		'guid' => '/software/feed.rss',
		'description' => strip_tags($item['Software']['softDesc']),
		'pubDate' => $item['Software']['entry_date'],				
	);
}
 
$this->set('items', $rss->items($software, 'rss_transform'));
$this->set('channelData', $channelData);
?>
