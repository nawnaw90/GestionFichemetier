<?php

    session_start();
    unset($_SESSION);
    session_destroy();
    header('Location:index.php');
    //header('location: ../index.php');
    die();