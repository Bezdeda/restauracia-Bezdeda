<?php
$nazovStranky = "Referencie | Sushi House Šurany";
require 'partials/header.php';
?>

<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Referencie</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="index.php">Domov</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Referencie</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Referencie</h5>
            <h1 class="mb-5">Čo o nás hovoria naši zákazníci</h1>
        </div>

        <div class="owl-carousel testimonial-carousel">

            <div class="testimonial-item bg-transparent border rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>
                    Veľmi príjemné prostredie, rýchla obsluha a sushi bolo naozaj čerstvé.
                    Určite sa sem ešte vrátime.
                </p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" style="width: 50px; height: 50px;" alt="Zákazník 1">
                    <div class="ps-3">
                        <h5 class="mb-1">Jana K.</h5>
                        <small>zákazníčka</small>
                    </div>
                </div>
            </div>

            <div class="testimonial-item bg-transparent border rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>
                    Najlepšie sushi v okolí. Oceňujem kvalitu surovín, čerstvosť a krásne servírovanie jedla.
                </p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" style="width: 50px; height: 50px;" alt="Zákazník 2">
                    <div class="ps-3">
                        <h5 class="mb-1">Peter M.</h5>
                        <small>zákazník</small>
                    </div>
                </div>
            </div>

            <div class="testimonial-item bg-transparent border rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>
                    Rezervácia prebehla bez problémov a personál bol veľmi ochotný.
                    Skvelý zážitok z večere.
                </p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;" alt="Zákazník 3">
                    <div class="ps-3">
                        <h5 class="mb-1">Lucia H.</h5>
                        <small>návštevníčka</small>
                    </div>
                </div>
            </div>

            <div class="testimonial-item bg-transparent border rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>
                    Moderná reštaurácia, chutné jedlá a veľmi dobrá atmosféra.
                    Odporúčam každému milovníkovi sushi.
                </p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg" style="width: 50px; height: 50px;" alt="Zákazník 4">
                    <div class="ps-3">
                        <h5 class="mb-1">Martin S.</h5>
                        <small>zákazník</small>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php require 'partials/footer.php'; ?>