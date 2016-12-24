<?php
    echo "<div id='content'><center><h3>Failed!</h3><BR />You do not have access to use this panel.<BR /><BR />Redirecting...";
    session_destroy();
    echo "<META HTTP-EQUIV=REFRESH CONTENT='3; ./index.php?p=login'></div>";