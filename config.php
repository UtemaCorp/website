<?php
session_start();

if (substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) == "fr") {
    $_SESSION['lang'] = 'fr';
} else
    $_SESSION['lang'] = "en";


require_once "languages/" . $_SESSION['lang'] . ".php";
