<?php
/* File: /app/views/software/search.ctp */
$archLabel = array('i386'=>'32bit','armel'=>'armel','x86_64'=>'64bit');
if (isset($result)) {
print '<ul>';
foreach ($result as $user)
{
    $list = explode(',',$user);
    if(isset($list[1])){
    	print '<li>';
        print '<a href="/software/showDesc/'.$list[0].'/'.$list[1].'">' . str_replace("_"," ",$list[0]).'&nbsp;-&nbsp;'.$archLabel[$list[1]].'</a>';
	print '</li>';
    }
    else
    {
    	print '<li>';
        print '<a href="/software/showDesc/'.$list[0].'">' . str_replace("_"," ",$list[0]).'</a>';
    print '</li>';
    }
}
print '</ul>';
print '</div>';
}
//$this->layout = 'ajax';
?>
