<html>
    <head>
    </head>
    <body>
        <?php
            require_once("database_connect.php");
            echo "success<br>";
            echo "server information: ".mysqli_get_server_info($link)."<br>";
            mysqli_close($link);
        ?>
    </body>
</html>