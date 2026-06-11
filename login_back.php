<?php
	session_start();
?>
<html>
    <head>
        <title>login_back</title>
    </head>
    <body bgcolor="#b8b8b8">
        <center>
            <h1>login_back</h1>
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
                    echo "hello, guest!"."<br>";*/
            ?>
            <?php
                //require("uigdtrstk.php");//need change to sql
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
                //echo $user_name_list_sql[0];
                //echo $pass_word_list_sql[0];
                mysqli_close($link);
                //end sql
                $check_logined=false;
                $user_the_name_i=-1;
                //echo count($user_name_list_sql);
                for($i=0;$i<count($user_name_list_sql);$i++)
                {
                    if($_POST["user_name_web_page"]==$user_name_list_sql[$i] && $_POST["pass_word_web_page"]==$pass_word_list_sql[$i])
                    {
                        //echo "hi";
                        $check_logined=true;
                        $user_the_name_i=$i;
                        //echo "ok";
                        break;
                    }
                }
                /*if($_POST["user_name_web_page"]=="admin" && $_POST["pass_word_web_page"]=="660")
                    $check_logined=true;*/
                if($check_logined)
                {
                    $_SESSION["logined"]="yes";
                    $_SESSION["user_the_name"]=$user_name_list_sql[$user_the_name_i];
                    echo "Welcome! ".$_SESSION["user_the_name"]."!";
                    /*if($_POST["user_name_web_page"]=="admin")
                    {
                        $_SESSION["user_the_name"]="admin";
                        pare("adi.php");
                    }*/
                }
                else
                {
                    echo "do not have this user or wrong password<br>";
                    echo "<a href=\"login.php\">back to login</a><br>";
                }
            ?>
        </center>
    </body>
</html>