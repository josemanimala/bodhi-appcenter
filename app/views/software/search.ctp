<?php
/* File: /app/views/software/search.ctp */
if (isset($result)) {
print '<ul>';
foreach ($result as $user)
{
    $list = explode(',',$user);
    print '<li>';
        print '<a href="/software/showDesc/'.$list[0].'/'.$list[1].'">' . str_replace("_"," ",$list[0]).'&nbsp;-&nbsp;'.$list[1].'</a>';
    print '</li>';
}
print '</ul>';
print '</div>';
}
//$this->layout = 'ajax';
?>
