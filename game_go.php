<?php
	session_start();
?>
<html>
    <head>
        <title>game_go</title>
    </head>
    <body bgcolor="#b8b8b8">
        <center>
            <h1>game_go</h1>
            <a href="home.php">home</a>&nbsp;
            <a href="game.php">game</a>&nbsp;
            <a href="scoreboard.php">scoreboard</a>&nbsp;
            <a href="signup.php">signup</a>&nbsp;
            <a href="login.php">login</a>&nbsp;
            <a href="logout.php">logout</a>&nbsp;
            <br>
            <?php
                /*if($_SESSION["logined"]=="yes")
                    echo "hello, ".$_SESSION["user_the_name"]."<br>";
                else
                    echo "hello, guest!<br>";*/
                sleep(3);
                $first_time = time();
                echo "<form action=\"game_back.php\" method=\"POST\"><input type=\"hidden\" name=\"first_enter_page\" value=\"$first_time\"><button type=\"submit\">click!</button></form>";
            ?>
        </center>
    </body>
</html>