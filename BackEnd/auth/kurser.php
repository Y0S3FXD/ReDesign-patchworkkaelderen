<?php
require_once 'BackEnd/core/init.php';
Kurser::init();
$alle_kursus = kurser::getKurser();



if (isset($_POST['UpdateKursus'])) {
    try {
        $update_data = [
            'KursusNavn' => $_POST['KursusNavn'],
            'Beskrivelse' => $_POST['Beskrivelse'],
            'StartDato' => $_POST['StartDato'],
            'SlutDato' => $_POST['SlutDato'],
            'MaxDeltagere' => $_POST['MaxDeltagere'],
            'LedigePladser' => $_POST['LedigePladser']
        ];
        kurser::opdaterKursus($update_data, 'KursusID', $_POST['KursusID']);
        header('Location: admin.php');

    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
