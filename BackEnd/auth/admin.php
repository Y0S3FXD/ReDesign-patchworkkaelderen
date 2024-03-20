<?php
// update_kursus.php
require_once 'BackEnd/core/init.php';
kurser::init();
Tilmelding::init();
if (isset($_GET['message'])) {
    if ($_GET['message'] == 'updateSuccess') {
        echo "<div class='alert'>Kursus has been successfully updated!</div>";
    }
    // Add more conditions as necessary for different messages
}

