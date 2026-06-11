<?php
	session_start();
?>
<html>
    <head>
        <title>signup_back</title>
    </head>
    <body bgcolor="#b8b8b8">
        <center>
            <h1>signup_back</h1>
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
                //start sql
                require_once("database_connect.php");
                $sql_output = "INSERT INTO `account_list` (`user_name`,`pass_word`)
                VALUES ('$_POST[user_name_web_page_signup]','$_POST[pass_word_web_page_signup]');";
                $result_output_sql_singup = mysqli_query($link, $sql_output);
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
                echo "Welcome!<br>";
            ?>
        </center>
    </body>
</html>