<?php
    $fourofour = "<div id='content'><h3><center>404 - Failed!</h3></center><BR /><center>This page does not exist!</center></div>";
    $created = "<div id='content'><center><font color='#FF0000'>Account '" . $_SESSION['userbox'] . "' Created!</font><BR />You can now login with the Loader.</center></div>";
    $denied = "<div id='content'><center><h3>Redirecting...</h3><center><BR /><center>You do not have permission to view this page.</center><META HTTP-EQUIV=REFRESH CONTENT='3; ./index.php?p=login'></div>";
    $keydenied = "<div id='content'>Invalid Key!<BR />Please go <a href='?p=login'>back</a> and try again</div>";
    $loginfailed = "<div id='content'><center><h3>Login Failed!</h3></center><BR /><center>Invalid username or password.</center><BR /><BR /><center>Please go <a href='?p=login'>back</a> and try again</center></div>";