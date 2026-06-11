<?php
	session_start();
?>
<html>
    <head>
        <title>home</title>
    </head>
    <body bgcolor="#b8b8b8">
        <center>
            <a href="home.php">home</a>&nbsp;
            <a href="game.php">game</a>&nbsp;
            <a href="signup.php">signup</a>&nbsp;
            <a href="login.php">login</a>&nbsp;
            <a href="logout.php">logout</a>&nbsp;
            <br>
            <?php
                if($logined=="yes")
                    echo "hello, ";
                else
                    echo "hello, guest!";
                //start sql
                $user_name_list_sql = array();
                $pass_word_list_sql = array();
                require_once("database_connect.php");
                $sql_input = "SELECT * FROM account_list ORDER BY user_name DESC";
                $sql_result = mysqli_query($link, $sql_input);
                if(!$sql_result)
                    die("Fail: ".mysqli_error($link));
                $fields_num = mysqli_num_fields($sql_result);
                $result_num = mysqli_num_rows($sql_result);
                for($j=0;$j<$fields_num;$j++)//give columns name
                {
                    $field = mysqli_fetch_field_direct($sql_result, $j);
                    //echo $field->name;
                    
                    //echo $field."adss";
                    //echo "hi";
                }
                while ($row = mysqli_fetch_row($sql_result))//give values in columns
                {
                    for ($k=0;$k<$fields_num;$k++)
                    {
                        if($k%2==0)
                        {
                            $user_name_list_sql[] = $row[$k];
                        }
                        elseif($k%2==1)
                        {
                            $pass_word_list_sql[] = $row[$k];
                        }
                        else
                            echo "<br>ERROR!<br>";
                    }
                }
                echo $user_name_list_sql[0];
                echo $pass_word_list_sql[0];
                mysqli_close($link);
                //end sql
            ?>
        </center>
    </body>
</html>