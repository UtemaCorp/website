<?php
session_start();

if (!isset($_SESSION['lang'])) {
    if (substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) == "fr" && !isset($_SESSION['lang'])) {
        $_SESSION['lang'] = 'fr';
    } else
        $_SESSION['lang'] = "en";
} else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
    if ($_GET['lang'] == "fr")
        $_SESSION['lang'] = "fr";
    else if ($_GET['lang'] == "en")
        $_SESSION['lang'] = "en";
}

require_once "languages/" . $_SESSION['lang'] . ".php";
