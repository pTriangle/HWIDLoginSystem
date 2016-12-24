<?php
    session_start();
    $page = $_GET['p'];
    include('./inc/header.php');
    include('./inc/nav.php');

    if ($page == "")
    {
        @include('./pages/login.php');
    }

    switch($page)
    {
        case "login":
            @include('./pages/login.php');
            break;
        case "logout":
            @include('./pages/logout.php');
            break;
        case "failed":
            @include('./pages/failed.php');
            break;
        case "key_failed":
            @include('./pages/key_failed.php');
            break;
        case "acp":
            @include('./pages/acp.php');
            break;
        case "create";
            @include('./pages/create.php');
            break;
        case "created":
            @include('./pages/created.php');
            break;
        case "acp_results":
            @include('./pages/subs/acp_results.php');
            break;
        case "acp_search":
            @include('./pages/subs/acp_search.php');
            break;
        case "acp_control":
            @include('./pages/subs/acp_control.php');
            break;
        case "acp_msg":
            @include('./pages/subs/acp_msg.php');
            break;
        case "log":
            @include('./pages/log.php');
            break;
        case "notadmin":
            @include('./pages/notadmin.php');
            break;
        default:
            @include('./pages/404.php');
            break;
    }

    include('./inc/sidebar.php');
    include('./inc/footer.php');
