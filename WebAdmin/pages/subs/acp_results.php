<?php
    session_start();
    if(!isset($_SESSION['loggedin']))
        echo $denied;
    else
    {
        include('./inc/db.php');

        $search = $_POST['searchbox'];
        $search = $mysqli->real_escape_string($search);
        $db_result = $mysqli->select_db($db_name);

        $search_query = "SELECT * FROM `" . $search . "`";

        if (!$db_result)
        {
            echo "Cannot select database\n";
            trigger_error(mysqli_connect_errno(), E_USER_ERROR);
        }

        $search_result = $mysqli->query($search_query);

        if (!$search_result == $search)
            echo "<center><font color='red'>This user does not exist, or has not logged in yet!</font></center>";
        else if (!$search_result)
        {
            echo "Failed to execute query!";
            trigger_error(mysqli_connect_errno(), E_USER_ERROR);
        }

        while($row = mysqli_fetch_row($search_result))
        {
            if(mysqli_num_rows($search_result))
            {
                echo '<div id="content">';
                echo '<table cellpadding="0" cellspacing="0" class="db-table">';
                echo '<tr><th>Date</th><th>IP</th><th>UID</th><th>HWID</th><th>PCName</th></tr>';
                while($row2 = mysqli_fetch_row($search_result)) {
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