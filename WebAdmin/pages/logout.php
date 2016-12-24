<?php
    session_destroy();
    echo "<div id='content'><h3>Logging Out...</h3>";
    echo "<META HTTP-EQUIV=REFRESH CONTENT='4; ./index.php?p=login'></div>";