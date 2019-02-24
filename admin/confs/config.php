
<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "car_ticketing_system_CMS";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
    mysqli_select_db($conn, $dbname);
?>