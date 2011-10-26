<?php
/* File: /app/views/software/search.ctp */
print_r($result);
if (isset($result)) {
print '<ul>';
foreach ($result as $user)
{
    print '<li>';
        print '<a href="/software/showDesc/'.$user.'">' . str_replace("_"," ",$user) . '</a>';
    print '</li>';
}
print '</ul>';
print '</div>';
}
//$this->layout = 'ajax';
?>
