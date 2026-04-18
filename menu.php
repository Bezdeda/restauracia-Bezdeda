<?php
$nazovStranky = "Menu | Sushi House Šurany";
require 'partials/header.php';
?>

<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Menu</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="index.php">Domov</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Naše menu</h5>
            <h1 class="mb-5">Sushi, maki a ázijské špeciality</h1>
        </div>

        <div class="row g-4">
            <div class="col-lg-6">
                <div class="d-flex align-items-center">
                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-1.jpg" alt="California Roll" style="width: 80px;">
                    <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                            <span>California Roll</span>
                            <span class="text-primary">8,90 €</span>
                        </h5>
                        <small class="fst-italic">Krabia tyčinka, avokádo, uhorka a sezam</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="d-flex align-items-center">
                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-2.jpg" alt="Salmon Nigiri" style="width: 80px;">
                    <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                            <span>Salmon Nigiri</span>
                            <span class="text-primary">6,50 €</span>
                        </h5>
                        <small class="fst-italic">Ryža, čerstvý losos a jemné wasabi</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="d-flex align-items-center">
                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-3.jpg" alt="Tempura Maki" style="width: 80px;">
                    <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                            <span>Tempura Maki</span>
                            <span class="text-primary">9,90 €</span>
                        </h5>
                        <small class="fst-italic">Kreveta v tempure, omáčka a sezam</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="d-flex align-items-center">
                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-4.jpg" alt="Sushi Set Classic" style="width: 80px;">
                    <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                            <span>Sushi Set Classic</span>
                            <span class="text-primary">16,90 €</span>
                        </h5>
                        <small class="fst-italic">Výber sushi a maki pre 2 osoby</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="d-flex align-items-center">
                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-5.jpg" alt="Avocado Maki" style="width: 80px;">
                    <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                            <span>Avocado Maki</span>
                            <span class="text-primary">5,90 €</span>
                        </h5>
                        <small class="fst-italic">Ryža, avokádo a nori riasa</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="d-flex align-items-center">
                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-6.jpg" alt="Tuna Roll" style="width: 80px;">
                    <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                            <span>Tuna Roll</span>
                            <span class="text-primary">8,50 €</span>
                        </h5>
                        <small class="fst-italic">Tuniak, ryža, uhorka a sezam</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="d-flex align-items-center">
                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-7.jpg" alt="Teriyaki Bowl" style="width: 80px;">
                    <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                            <span>Teriyaki Bowl</span>
                            <span class="text-primary">10,90 €</span>
                        </h5>
                        <small class="fst-italic">Ryža, kura v teriyaki omáčke a zelenina</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="d-flex align-items-center">
                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-8.jpg" alt="Dragon Roll" style="width: 80px;">
                    <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                            <span>Dragon Roll</span>
                            <span class="text-primary">11,90 €</span>
                        </h5>
                        <small class="fst-italic">Kreveta, avokádo, jemná omáčka a sezam</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="booking.php" class="btn btn-primary py-3 px-5">Rezervovať stôl</a>
        </div>
    </div>
</div>

<?php require 'partials/footer.php'; ?>