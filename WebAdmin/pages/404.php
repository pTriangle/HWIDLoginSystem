<?php
    session_start();
    if(!isset($_SESSION['loggedin']))
        echo $denied;
    else
       echo $fourofour;