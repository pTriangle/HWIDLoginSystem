<?php
    session_start();
    include ('db.php');

    $user = $_POST['userbox'];
    $pass = $_POST['passbox'];
    $key = $_POST['keybox'];

    $user = $mysqli->real_escape_string($user);
    $pass = $mysqli->real_escape_string($pass);
    $key = $mysqli->real_escape_string($key);

    $hash_pass = sha1($salt.$pass);
    $db_result = $mysqli->select_db($db_name);

    $user_query = "INSERT INTO `$tbl_accounts` (username, password, access, hwid, ip, pcname, info) VALUES ('" . $user . "','" . $hash_pass . "','2','','0.0.0.0','','new')";
    $key_query = "SELECT * FROM `$tbl_key` WHERE `key` = '" . $key . "'";
    $drop_query = "DELETE FROM `$tbl_key` WHERE `key` = '" . $key . "'";
    $log_query = "INSERT INTO `" . $tbl_log ."` ('Date', 'UID', 'IP', 'Action') VALUES('date', '" . $user . "', 'date3', 'Web Creation')";

    if (!$db_result)
    {
        echo "Cannot select database\n";
        trigger_error(mysqli_connect_errno(), E_USER_ERROR);
    }

    $key_result = $mysqli->query($key_query);

    if (!$key_result)
    {
        echo "Failed to execute!";
        trigger_error(mysqli_connect_errno(), E_USER_ERROR);
    }

    if (mysqli_num_rows($key_result))
    {
        $_SESSION['userbox'] = $user;
        $mysqli->query($user_query);
        $mysqli->query($drop_query);
        $mysqli->query($log_query);
        if (!$key_result || !$user_query || !$log_query)
        {
            echo "Failed to execute!";
            trigger_error(mysqli_connect_errno(), E_USER_ERROR);
        }
        else
            header('Location:../index.php?p=created');
    }
    else
        header('Location:../index.php?p=key_failed');

    $mysqli->close();