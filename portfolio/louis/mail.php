<?php

if (isset($_POST['valideMail'])) {

    $nom = $_POST['name'];
    $objet = $_POST['subject'];
    $message = $_POST['message'];

    $string = urlencode($message);
    $replaced = str_replace('+', ' ', $string);

    header("Location: mailto:georget.portfolio@gmail.com?subject=" . urlencode($objet) . "&body=" . $replaced);
}
