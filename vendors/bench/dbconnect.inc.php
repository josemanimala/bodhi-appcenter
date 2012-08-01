<?php
$linkDBTest = mysqli_connect(
            'localhost',  /* The host to connect to */
            'root',       /* The user to connect as */
            'ittunnan', //,   /* The password to use */
           'otrs');     /* The default database to query */

if (!$linkDBTest) {
   printf("Can't connect to MySQL Server. Errorcode: %s\n", mysqli_connect_error());
   exit;
} 

?>
