<?php
    session_start();
    @include('config.php');
    $conn = mysqli_connect($host, $username, $password);
    $mysqli = $conn;
    if (!$mysqli)
    {
        echo "Could not connect to server\n";
        trigger_error(mysqli_connect_error(), E_USER_ERROR);
    }