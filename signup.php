<?php
	session_start();
?>
<html>
    <head>
        <title>signup</title>
    </head>
    <body bgcolor="#b8b8b8">
        <center>
            <h1>signup</h1>
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
            <form action="signup_back.php" method="post">
                user name:<input type="text" name="user_name_web_page_signup"><br>
                password:<input type="password" name="pass_word_web_page_signup"><br>
                <input type="submit" value="signup"><input type="reset" value="reset">
            </form>
        </center>
    </body>
</html>