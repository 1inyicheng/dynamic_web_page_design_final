<?php
	session_start();
?>
<html>
    <head>
        <title>scoreboard</title>
    </head>
    <body bgcolor="#b8b8b8">
        <center>
            <h1>scoreboard</h1>
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
            <?php
                require_once("database_connect.php");
                $sql = "SELECT * FROM player_stats ORDER BY user_name_stats DESC";
                $result = mysqli_query($link, $sql);
                if (!$result)
                {
                    die("SQL fail: ".mysqli_error($link));
                }
                $fields_num = mysqli_num_fields($result);
                $result_num = mysqli_num_rows($result);
                echo "<table border='1'>";
                echo "<tr>";
                for ($i=0; $i<$fields_num; $i++)
                {
                    $field = mysqli_fetch_field_direct($result, $i);
                    echo "<td>".$field->name."</td>";
                }
                echo "</tr>";
                while ($row = mysqli_fetch_row($result))
                {
                    echo "<tr>";
                    for ($i=0; $i<$fields_num; $i++)
                    {
                        echo "<td>".$row[$i]."</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </center>
    </body>
</html>