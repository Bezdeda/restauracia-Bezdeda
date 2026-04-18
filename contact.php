<?php
$nazovStranky = "Kontakt | Sushi House Šurany";
require 'partials/header.php';
?>

<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Kontakt</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="index.php">Domov</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Kontakt</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Kontaktujte nás</h5>
            <h1 class="mb-5">Sme tu pre vás</h1>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="d-flex align-items-center">
                    <i class="fa fa-2x fa-map-marker-alt text-primary me-3"></i>
                    <div>
                        <h5 class="mb-1">Adresa</h5>
                        <p class="mb-0">Hlavné námestie 12, 942 01 Šurany</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="d-flex align-items-center">
                    <i class="fa fa-2x fa-phone-alt text-primary me-3"></i>
                    <div>
                        <h5 class="mb-1">Telefón</h5>
                        <p class="mb-0">+421 900 123 456</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="d-flex align-items-center">
                    <i class="fa fa-2x fa-envelope text-primary me-3"></i>
                    <div>
                        <h5 class="mb-1">Email</h5>
                        <p class="mb-0">info@sushihousesurany.sk</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="rounded overflow-hidden h-100" style="min-height: 400px;">
                    <iframe
                        class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps?q=Surany&output=embed"
                        frameborder="0"
                        style="min-height: 400px; border:0;"
                        allowfullscreen=""
                        aria-hidden="false"
                        tabindex="0">
                    </iframe>
                </div>
            </div>

            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">Napíšte nám</h5>
                <h1 class="mb-4">Kontaktný formulár</h1>
                <p class="mb-4">
                    Máte otázku, špeciálnu požiadavku alebo si chcete rezervovať stôl?
                    Kontaktujte nás a radi vám pomôžeme.
                </p>

                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Vaše meno">
                                <label for="name">Vaše meno</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Váš email">
                                <label for="email">Váš email</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="subject" placeholder="Predmet">
                                <label for="subject">Predmet</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Správa" id="message" style="height: 150px"></textarea>
                                <label for="message">Správa</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Odoslať správu</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require 'partials/footer.php'; ?>