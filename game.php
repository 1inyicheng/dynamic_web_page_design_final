<?php
	session_start();
    if (isset($_SESSION["logined"]))
    {
        $login_status_game_page = "yes";
        $login_name_game_page = $_SESSION["user_the_name"];
    } else {
        $login_status_game_page = "no";
        $login_name_game_page = "guest";
    }
?>
<html>
    <head>
        <title>game</title>
        <script>
            function showLoginMessage()
            {
                var loginStatus = "<?php echo $login_status_game_page; ?>";
                var loginName = "<?php echo $login_name_game_page; ?>";
                if (loginStatus == "yes")
                {
                    document.getElementById("msg").innerHTML = "welcome " + loginName + ", you logined";
                }
                else
                {
                    document.getElementById("msg").innerHTML = "you are not login, some function may can not be use";
                    document.getElementById("msg").style.color = "red";
                }
            }
        </script>
    </head>
    <body bgcolor="#b8b8b8" onload="showLoginMessage();">
        <center>
            <h1>game</h1>
            <h2 id="msg"></h2>
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
                if($_SESSION["logined"]=="yes")
                {
                    echo "click this button will go to a new page after 3 seconds, there will be a button at random position, click as fast you can<br>";
                    echo "<a href=\"game_go.php\"><button type=\"submit\">click here to start game</button></a><br>";
                }
                else
                    echo "you need to login to play game<br>";
            ?>
        </center>
    </body>
</html>