<?php
function rss_transform($item) {
	$title = str_replace("_"," ",$item['Software']['softName']);
	return array('title' => $title,
		'link' => array('controller' => 'software', 'action' => 'showDesc', $item['Software']['softName']),
		'guid' => array('controller' => 'software', 'action' => 'showDesc', $item['Software']['softName']),
		'description' => strip_tags($item['Software']['softDesc']),
		'pubDate' => $item['Software']['entry_date'],				
	);
}
 
$this->set('items', $rss->items($software, 'rss_transform'));
 
$this->set('channelData', $channelData);
?>
