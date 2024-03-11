<?php
require_once 'BackEnd/core/init.php';
Tilmelding::init();
$alle_tilmedlinger = Tilmelding::getTilmeldinger();
if (isset($_POST['TilmedKursus'])) {
    try {
        $fields = [
            'Navn' => $_POST['Navn'],
            'Email' => $_POST['Email'],
            'Telefon' => $_POST['Telefon'],
            'KursusID' => $_POST['KursusID'],
        ];
        Tilmelding::OpretTilmelding($fields);
        header('Location: admin.php');
        exit;
    } catch (\Throwable $th) {
        echo $th->getMessage(); 
    }
}
