<?php
function rss_transform($item) {
	return array('title' => $item['Software']['softName'],
		'link' => array('controller' => 'software', 'action' => 'showDesc', $item['Software']['softName']),
		'guid' => array('controller' => 'software', 'action' => 'showDesc', $item['Software']['softName']),
		'description' => strip_tags($item['Software']['softDesc'],'<ul><li><h2>'),
		'pubDate' => $item['Software']['entry_date'],				
	);
}
 
$this->set('items', $rss->items($software, 'rss_transform'));
 
$this->set('channelData', $channelData);
?>
