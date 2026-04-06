<?php
$nazovStranky = "Služby | Sushi House Šurany";
require 'partials/header.php';
?>

<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Služby</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="index.php">Domov</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Služby</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Naše služby</h5>
            <h1 class="mb-5">Čo ponúka Sushi House Šurany</h1>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-fish text-primary mb-4"></i>
                        <h5>Čerstvé sushi</h5>
                        <p>Každý deň pripravujeme sushi z kvalitných a čerstvých surovín.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                        <h5>Teplé jedlá</h5>
                        <p>V ponuke nájdete aj ryžové misky, rezance a ďalšie ázijské špeciality.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-calendar-alt text-primary mb-4"></i>
                        <h5>Online rezervácia</h5>
                        <p>Jednoducho si rezervujte stôl online cez náš formulár.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-smile text-primary mb-4"></i>
                        <h5>Príjemná obsluha</h5>
                        <p>Dbáme na pohodlnú atmosféru a profesionálny prístup ku každému hosťovi.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-shopping-bag text-primary mb-4"></i>
                        <h5>Objednávky so sebou</h5>
                        <p>Jedlá si môžete objednať aj so sebou a vychutnať doma.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-users text-primary mb-4"></i>
                        <h5>Rodinné večere</h5>
                        <p>Príjemné prostredie je vhodné aj pre rodinné oslavy a stretnutia.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-clock text-primary mb-4"></i>
                        <h5>Rýchle vybavenie</h5>
                        <p>Na objednávkach si dávame záležať, aby boli pripravené čo najrýchlejšie.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-star text-primary mb-4"></i>
                        <h5>Kvalitný zážitok</h5>
                        <p>Naším cieľom je, aby sa hostia radi vracali za chuťou aj atmosférou.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'partials/footer.php'; ?>