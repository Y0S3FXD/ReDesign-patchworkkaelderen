<?php
// update_kursus.php
require_once 'BackEnd/core/init.php';
kurser::init();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
