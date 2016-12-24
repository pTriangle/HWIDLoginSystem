<?php
    session_start();

    if(!isset($_SESSION['loggedin']))
        echo $denied;
    else
    {
        echo '<center><h2>Admin Panel</h2></center>';
    }