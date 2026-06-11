<?php
	session_start();
?>
<html>
    <head>
        <title>home</title>
    </head>
    <body bgcolor="#b8b8b8">
        <center>
            <h1>home</h1>
            <a href="home.php">home</a>&nbsp;
            <a href="game.php">game</a>&nbsp;
            <a href="signup.php">signup</a>&nbsp;
            <a href="login.php">login</a>&nbsp;
            <a href="logout.php">logout</a>&nbsp;
            <br>
            <?php
                if($_SESSION["logined"]=="yes")
                    echo "hello, ".$_SESSION["user_the_name"]."<br>";
                else
                    echo "hello, guest!<br>";
            ?>
        </center>
    </body>
</html>