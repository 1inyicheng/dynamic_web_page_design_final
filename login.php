<?php
	session_start();
?>
<html>
    <head>
        <title>login</title>
    </head>
    <body bgcolor="#b8b8b8">
        <center>
            <h1>login</h1>
            <a href="home.php">home</a>&nbsp;
            <a href="game.php">game</a>&nbsp;
            <a href="scoreboard.php">scoreboard</a>&nbsp;
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
            <center>
                <form action="login_back.php" method="post">
                    user name:<input type="text" name="user_name_web_page"><br>
                    password:<input type="password" name="pass_word_web_page"><br>
                    <input type="submit" value="login"><input type="reset" value="reset">
                </form>
            </center>
        </center>
    </body>
</html>