<?php
/* File: /app/views/software/search.ctp */
if (isset($result)) {
print '<ul>';
foreach ($result as $user)
{
    print '<li>';
        print '<a href="/software/showDesc/'.$user['Software']['softName'].'">' . str_replace("_"," ",$user['Software']['softName']) . '</a>';
    print '</li>';
}
print '</ul>';
print '</div>';
}
//$this->layout = 'ajax';
?>
