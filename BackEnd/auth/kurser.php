    <?php
    require_once 'BackEnd/core/init.php';
    Kurser::init();
    $alle_kursus = kurser::getKurser();


    if (isset($_POST['UpdateKursus'])) {
        try {
            $currentKursusData = kurser::getKursus($_POST['KursusID']);
            $currentData = (array)$currentKursusData[0];

            $update_data = [
                'KursusNavn' => $_POST['KursusNavn'],
                'Beskrivelse' => $_POST['Beskrivelse'],
                'StartDato' => $_POST['StartDato'],
                'SlutDato' => $_POST['SlutDato'],
                'MaxDeltagere' => $_POST['MaxDeltagere'],
                'LedigePladser' => $_POST['LedigePladser'],
            ];

            // Compare existing data with new data.
            $changesDetected = false;
            foreach ($update_data as $key => $value) {
                if (!isset($currentData[$key]) || trim($currentData[$key]) != trim($value)) {
                    $changesDetected = true;
                    break;
                }
            }

            if ($changesDetected) {
                kurser::opdaterKursus($update_data, 'KursusID', $_POST['KursusID']);
                // Use a consistent method for setting flash messages.
                $_SESSION['flash_message'] = 'Kursus has been successfully updatedss.';
            } else {
                // This message will be overwritten by the one outside of the conditional blocks,
                // so you might not need it here unless you remove the one outside.
                $_SESSION['flash_message'] = 'No changes detected, no update necessary.';
                echo "<div class='alert'>No changes detected, no update necessary.</div>";
            }

            // Redirect to prevent resubmission
            header('Location: admin.php');
            exit;

        } catch (Exception $e) {
            // Handle exception, possibly log it or set an error flash message
            $_SESSION['flash_message'] = 'Error updating kursus: ' . $e->getMessage();
            header('Location: admin.php');
            exit;
        }       
    }

    // Use this block in 'admin.php' or wherever you're redirecting to display the message.
    if (isset($_SESSION['flash_message'])) {
        echo "<div class='alert'>" . $_SESSION['flash_message'] . "</div>";
        unset($_SESSION['flash_message']); // Clear the message after displaying
    }
