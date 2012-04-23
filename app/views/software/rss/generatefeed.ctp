<?php
function rss_transform($item) {
	App::import('Sanitize');
	#Architecture Label workaround.
	$archLabel = array('i386'=>'Desktop','armel'=>'Mobile','x86_64'=>'Work Station');
	$title = str_replace("_"," ",$item['Software']['softName']."/ ".$archLabel[$item['Software']['arch']]);
	return array('title' => $title,
		'link' => array('controller' => 'software', 'action' => 'showDesc', $item['Software']['softName'], $item['Software']['arch']),
		'guid' => array('controller' => 'software', 'action' => 'showDesc', $item['Software']['softName'], $item['Software']['arch']),
		# Add version hack: layout is correct only if softDesc is proper HTML
		#	for example if it starts with <p>
		'description' => Sanitize::stripAll("Version: ".$item['Software']['version'].$item['Software']['softDesc']),
		'pubDate' => $item['Software']['entry_date']
		);
}

$this->set('items', $rss->items($software, 'rss_transform'));

$this->set('channelData', $channelData);
?>
