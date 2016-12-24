<?php
    session_start();

    if(!isset($_SESSION['loggedin']))
        echo $denied;
    else
    {
        //To be updated.
    }