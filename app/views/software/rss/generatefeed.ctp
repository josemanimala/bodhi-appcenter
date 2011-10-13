<?php
function rss_transform($item) {
	App::import('Sanitize');
	return array('title' => str_replace("_"," ",$item['Software']['solftName']),
		'link' => '/software/feed.rss',
		'guid' => '/software/feed.rss',
		'description' => Sanitize::stripAll($item['Software']['softDesc']),
		'pubDate' => $item['Software']['entry_date'],				
	);
}
$this->set('items', $rss->items($software, 'rss_transform'));
$this->set('channelData', $channelData);
?>
