<?php
$name = 'home';
require_once 'start.php'; // Adjust the path to the actual location of start.php if necessary
require_once FRONTEND_INCLUDE . 'header.php';
require_once FRONTEND_INCLUDE . 'background-style.php';
?>

<header class="hero-section">
    <center>
    <div class="row container pt-2">
    <!--Store description-->
        <div class="col-md-2 text-center pt-3" style="background-color: white">
            <h1>Filtrer</h1><br>
            <a class="btn btn-secondary" role="button">Karton/kardus</a><br><br>
            <a class="btn btn-secondary" role="button">Quiltevat</a><br><br>
            <a class="btn btn-secondary" role="button">Linealer</a><br><br>
            <a class="btn btn-secondary" role="button">Diverse</a><br><br>
        </div>
        <!--Image showcase--> 
        <div class="col-md-8 text-center pt-5" style="background-color: white">
</div>
</div>
        </div>
    </div>
    <br>
    </center>
</header>

<?php
require_once FRONTEND_INCLUDE . 'footer.php';
?>
