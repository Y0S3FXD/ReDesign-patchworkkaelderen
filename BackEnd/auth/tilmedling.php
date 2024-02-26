<?php
require_once 'BackEnd/core/init.php';

if (isset($_POST['submit'])) {
    $fields = [
        'Navn' => $_POST['Navn'],
        'Email' => $_POST['Email'],
        'Telefon' => $_POST['Telefon'],
        'KursusID' => $_POST['KursusID'],
        'BekraeftelsesKode' => $tilmelding->genererBekraeftelsesKode()
    ];
    $tilmelding->OpretTilmelding($fields);
    header('Location: index.php');
}


