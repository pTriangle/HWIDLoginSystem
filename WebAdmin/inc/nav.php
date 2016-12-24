<?php
    if(!isset($_SESSION['loggedin']))
    {
        //Do Nothing
    }
    else
    {
        echo "<div id='nav'>";
        echo "<a href='?p=acp'>ACP Home</a>";
        echo "<a href='?p=acp_search'>User Search</a>";
        echo "<a href='?p=acp_control'>User Control</a>";
        echo "<a href='?p=log'>Access Log</a>";
        echo "</div>";
    }
