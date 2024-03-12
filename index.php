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
        <div class="col-md-6 text-center pt-5" style="background-color: white">
            <br><br><h1>Patchwork Kælderen</h1>
            <p><span>For  år siden startede jeg min forretning. I starten var der et begrænset udvalg af stoffer og tilbehør. 
            I dag er der b.la. over 1000 stoffer at vælge imellem, hjælpeværktøjer af alle slags, maskinbroderitråd, sytråd   
            mønstre og skabeloner, Janome symaskiner
            broderi
            <br> Kun et besøg i forretningen kan give dig et reelt indtryk.
            <br> Der er god plads i forretningen til at modtage større eller mindre grupper. </p>
            <p>Butikken har umiddelbart lukket om lørdagen, men du kan bestille tid ved at klikke på knappen nedenfor.</p></span>
            <a class="btn btn-primary" href="appointment.php" role="button">Bestil tid</a>
            
        </div>
        <!--Image showcase-->   
        <div class="col-md-6 image" style="background-color: white">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
             <div class="carousel-item active">
                <img src="FrontEnd/Images/showcase_1.jpg" class="d-block w-100" alt="...">
            </div>
           <div class="carousel-item">
             <img src="FrontEnd/Images/showcase_2.jpg" class="d-block w-100" alt="...">
          </div>
        <div class="carousel-item">
            <img src="FrontEnd/Images/showcase_3.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="FrontEnd/Images/showcase_4.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="FrontEnd/Images/showcase_5.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="FrontEnd/Images/showcase_6.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="FrontEnd/Images/showcase_7.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="FrontEnd/Images/showcase_8.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="FrontEnd/Images/showcase_9.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="FrontEnd/Images/showcase_10.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  </a>
    </div>
    </div>
    <br>
    </center>
</header>

<?php
require_once FRONTEND_INCLUDE . 'footer.php';
?>

<!--
<header class="hero-section">
    <div class="container text-center py-5">
        <h1 class="display-4">Welcome to Patchwork Kælderen</h1>
        <p class="lead">Your one-stop shop for patchwork and quilting supplies.</p>
        <a href="#" class="btn btn-primary">Discover More</a>
    </div>
</header>

<section class="featured-content py-5">
    <div class="container" background="FrontEnd/Images/patchwork_background.jpg">
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="https://placehold.co/300x200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Featured Product</h5>
                        <p class="card-text">Check out our latest collection of fabrics perfect for your next project.</p>
                        <a href="#" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="https://placehold.co/300x200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Upcoming Courses</h5>
                        <p class="card-text">Join our expert-led courses and take your quilting skills to the next level.</p>
                        <a href="#" class="btn btn-outline-primary">View Courses</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="https://placehold.co/300x200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Visit Us</h5>
                        <p class="card-text">Drop by our store for a personal tour and see our wide range of products.</p>
                        <a href="#" class="btn btn-outline-primary">Get Directions</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="bg-light text-center text-lg-start">
    <div class="container p-4">
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Patchwork Kælderen</h5>
                <p>Providing high-quality materials and classes for quilting enthusiasts.</p>
            </div>
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Contact</h5>
                <p>Email: info@patchworkkaelderen.dk<br>Phone: +45 22266277</p>
            </div>
        </div>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        &copy; 2023 Patchwork Kælderen. All rights reserved.
    </div>
</footer>