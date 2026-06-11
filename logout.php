<?php
	session_start();
?>
<html>
    <head>
        <title>logout</title>
    </head>
    <body bgcolor="#b8b8b8">
        <center>
            <h1>logout</h1>
            <a href="home.php">home</a>&nbsp;
            <a href="game.php">game</a>&nbsp;
            <a href="signup.php">signup</a>&nbsp;
            <a href="login.php">login</a>&nbsp;
            <a href="logout.php">logout</a>&nbsp;
            <br>
            <?php
                session_destroy();
                echo "logouted";
            ?>
        </center>
    </body>
</html>