<?php
    session_start();
    if(!isset($_SESSION['loggedin']))
        echo $denied;
    else
    {
        include('./inc/db.php');

        $log = $_POST['searchbox'];
        $log = $mysqli->real_escape_string($log);
        $db_result = $mysqli->select_db($db_name);

        $log_query = "SELECT * FROM `" . $tbl_log . "`";

        if (!$db_result)
        {
            echo "Cannot select database\n";
            trigger_error(mysqli_connect_errno(), E_USER_ERROR);
        }

        $log_result = $mysqli->query($log_query);

        if (!$log_result)
        {
            echo "Failed to execute query!";
            trigger_error(mysqli_connect_errno(), E_USER_ERROR);
        }

        while($row = mysqli_fetch_row($log_result))
        {
            if(mysqli_num_rows($log_result))
            {
                echo '<div id="content">';
                echo '<table cellpadding="0" cellspacing="0" class="db-table">';
                echo '<tr><th>Date</th><th>UID</th><th>IP</th><th>Action</th></tr>';
                while($row2 = mysqli_fetch_row($log_result)) {
                    echo '<tr>';
                    foreach($row2 as $key=>$value) {
                        echo '<td>',$value,'</td>';
                    }
                    echo '</tr>';
                }
                echo '</tbody></table><br>';
                echo '</div>';
            }
        }
    }