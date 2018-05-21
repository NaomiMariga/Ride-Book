<?php
    // setup database connection

    $dbhost = "localhost";
    $dbuser = "admin";
    $dbpass = "1234admin";
    $dbname = "ShareRide";
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if (! $connection){
        die("connection to server failed ".mysql_error());
    }
    else{
        echo "successfully connected to server";
        mysql_close($connection);
    }

?>