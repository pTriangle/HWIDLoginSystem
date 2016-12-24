<?php
    session_start();
    include('./inc/variables.php'); ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>
        <title>Nom Loader</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" type="text/css" href="./style.css" media="screen" />
    </head>

    <body>
        <div id="wrapper">
        <div id="header">
<?php
    if(!isset($_SESSION['loggedin']))
    {
        //Do nothing
    }
    else
        echo "Welcome, " . $_SESSION['userbox'] . "!<BR /><a href='?p=logout'>Logout</a>";
?>
        </div>