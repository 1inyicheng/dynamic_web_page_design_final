<?php
	session_start();
?>
<html>
    <head>
        <title>game_back</title>
    </head>
    <body bgcolor="#b8b8b8">
        <center>
            <h1>game_back</h1>
            <a href="home.php">home</a>&nbsp;
            <a href="game.php">game</a>&nbsp;
            <a href="signup.php">signup</a>&nbsp;
            <a href="login.php">login</a>&nbsp;
            <a href="logout.php">logout</a>&nbsp;
            <br>
            <?php
                /*if($_SESSION["logined"]=="yes")
                    echo "hello, ".$_SESSION["user_the_name"]."<br>";
                else
                    echo "hello, guest!<br>";*/
                $first_time = $_POST["first_enter_page"];
                $last_time = time();
                $used_time = $last_time-$first_time;
                echo "you use ".$used_time." seconds<br>";

                //start sql
                require_once("database_connect.php");
                $sql_output = "INSERT INTO `player_stats` (`user_name_stats`,`used_time_stats`)
                VALUES ('$_SESSION[user_the_name]','$used_time');";
                $result_output_sql_give_stats = mysqli_query($link, $sql_output);
                /*if($sql_result)
                    {

                    }
                else
                {
                    echo mysqli_errno($link)."<br>";
                    echo mysqli_error($link)."<br>";
                }
                echo $sql_output;*/
                mysqli_close($link);
                //end sql
            ?>
        </center>
    </body>
</html>