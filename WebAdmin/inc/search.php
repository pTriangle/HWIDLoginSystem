<?php
    session_start();
    include('db.php');

    $search = $_POST['searchbox'];
    $search = $mysqli->real_escape_string($search);
    $db_result = $mysqli->select_db($db_name);

    $search_query = "SELECT * FROM faded";

    if (!$db_result)
    {
        echo "Cannot select database\n";
        trigger_error(mysqli_connect_errno(), E_USER_ERROR);
    }

    $search_result = $mysqli->query($search_query);

    if (!$search_result)
    {
        echo "Failed to execute query!";
        trigger_error(mysqli_connect_errno(), E_USER_ERROR);
    }

    while ($row = mysqli_fetch_assoc($search_result))
    {
        $table = $row[0];
        $search_result_2 = $mysqli->query('SHOW COLUMNS FROM ' . $table);
        $_SESSION['DATE'] = $row['Date'];
        $_SESSION['IP'] = $row['IP'];
        $_SESSION['UID'] = $row['UID'];
        $_SESSION['HWID'] = $row['HWID'];
        $_SESSION['PCNAME'] = $row['PCName'];
    }