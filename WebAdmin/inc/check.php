<?php
    session_start();
    include ('db.php');

    $user = $_POST['userbox'];
    $pass = $_POST['passbox'];

    $user = $mysqli->real_escape_string($user);
    $pass = $mysqli->real_escape_string($pass);

    $hash_pass = sha1($salt.$pass);
    $db_result = $mysqli->select_db($db_name);

    $user_login_query = "SELECT * FROM `$tbl_accounts` WHERE `username` = '" . $user . "' AND `password` = '" . $hash_pass . "'";

    if (!$db_result)
    {
        echo "Cannot select database\n";
        trigger_error(mysqli_connect_errno(), E_USER_ERROR);
    }

    $user_result = $mysqli->query($user_login_query);

    if (!$user_result)
    {
        echo "Failed to execute!";
        trigger_error(mysqli_connect_errno(), E_USER_ERROR);
    }

    $row = mysqli_num_rows($user_result);

    if ($row != 1)
        header('Location:../index.php?p=failed');
    else
    {
        while ($row = mysqli_fetch_assoc($user_result))
        {
            if ($row['access'] != 3)
                header('Location:../index.php?p=notadmin');
            else
            {
                $_SESSION['loggedin'] = true;
                $_SESSION['userbox'] = $user;
                $_SESSION['admin'] = true;
                header('Location:../index.php?p=acp');
            }
        }
    }

    $mysqli->close();


