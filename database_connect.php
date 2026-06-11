<?php
    // database_connect.php
    $host = "localhost";
    $user = "root";
    $pass = "SQLpassword";
    $dbname = "user_name_and_password";
    $link = mysqli_connect($host, $user, $pass, $dbname);
    if (!$link)
    {
        die("database connect fail: " . mysqli_connect_error());
    }
    mysqli_set_charset($link, "utf8");
?>