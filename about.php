<?php 
$nazovStranky = "O nás | Sushi House Šurany";
require 'partials/header.php'; 
?>

<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">O nás</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="index.php">Domov</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">O nás</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg" alt="Sushi House Šurany">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg" style="margin-top: 25%;" alt="Sushi menu">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg" alt="Čerstvé suroviny">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg" alt="Japonská kuchyňa">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">O nás</h5>
                <h1 class="mb-4">Vitajte v <i class="fa fa-fish text-primary me-2"></i>Sushi House Šurany</h1>
                <p class="mb-4">
                    Sushi House Šurany je moderná reštaurácia zameraná na čerstvé sushi, kvalitné suroviny
                    a príjemnú atmosféru. Našim cieľom je priniesť do Šurian chuť modernej japonskej kuchyne.
                </p>
                <p class="mb-4">
                    V našej ponuke nájdete sushi sety, maki, nigiri aj teplé jedlá. Dávame dôraz na čerstvosť,
                    precíznu prípravu a spokojnosť každého zákazníka.
                </p>

                <div class="row g-4 mb-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">5</h1>
                            <div class="ps-4">
                                <p class="mb-0">Rokov</p>
                                <h6 class="text-uppercase mb-0">skúseností</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">20</h1>
                            <div class="ps-4">
                                <p class="mb-0">Obľúbených</p>
                                <h6 class="text-uppercase mb-0">jedál</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="btn btn-primary py-3 px-5 mt-2" href="menu.php">Pozrieť menu</a>
            </div>
        </div>
    </div>
</div>

<?php require 'partials/footer.php'; ?>