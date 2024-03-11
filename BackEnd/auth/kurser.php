<?php
require_once 'BackEnd/core/init.php';
Kurser::init();
$alle_kursus = kurser::getKurser();


if (isset($_POST['UpdateKursus'])) {
    try {
        $currentKursusData = kurser::getKursus($_POST['KursusID']);
        print_r($currentKursusData);
        $currentData = (array) $currentKursusData;

        $update_data = [
            'KursusNavn' => $_POST['KursusNavn'],
            'Beskrivelse' => $_POST['Beskrivelse'],
            'StartDato' => $_POST['StartDato'],
            'SlutDato' => $_POST['SlutDato'],
            'MaxDeltagere' => $_POST['MaxDeltagere'],
            'LedigePladser' => $_POST['LedigePladser']
        ];

        // Compare existing data with new data.
        $changesDetected = false;
        foreach ($update_data as $key => $value) {
                //check if any value is diffrent
                if (!isset($currentData[$key]) || $currentData[$key] != $value) {
                $changesDetected = true;
                break;
            }
        }

        if ($changesDetected) {
            kurser::opdaterKursus($update_data, 'KursusID', $_POST['KursusID']);
            $_SESSION['success_message'] = 'Kursus has been successfully updated.';
        } else {
            $_SESSION['info_message'] = 'No changes detected, no update necessary.';
        }

        header('Location: admin.php');
        exit;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
