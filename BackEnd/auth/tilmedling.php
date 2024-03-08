<?php
require_once 'BackEnd/core/init.php';
Tilmelding::init();
$alle_tilmedlinger = Tilmelding::getTilmeldinger();
if (isset($_POST['submit'])) {
    $fields = [
        'Navn' => $_POST['Navn'],
        'Email' => $_POST['Email'],
        'Telefon' => $_POST['Telefon'],
        'KursusID' => $_POST['KursusID'],
        'BekraeftelsesKode' => "1"
    ];
    $tilmelding->OpretTilmelding($fields);
    header('Location: index.php');
}


