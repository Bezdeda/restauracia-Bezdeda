<?php
$nazovStranky = "Kontakt | Sushi House Šurany";

$meno = '';
$email = '';
$predmet = '';
$sprava = '';
$potvrdzujucaSprava = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $meno = trim($_POST['meno'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $predmet = trim($_POST['predmet'] ?? '');
    $sprava = trim($_POST['sprava'] ?? '');

    if ($meno === '' || $email === '' || $predmet === '' || $sprava === '') {
        $error = "Prosím vyplňte všetky polia formulára.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Zadajte platný email.";
    } else {
        $potvrdzujucaSprava = "Vaša správa bola úspešne odoslaná.";
    }
}

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
            <h1 class="mb-5">Máte otázku? Napíšte nám</h1>
        </div>

        <div class="row g-4">
            <div class="col-12">
                <div class="row gy-4">
                    <div class="col-md-4">
                        <h5 class="section-title ff-secondary fw-normal text-start text-primary">Rezervácie</h5>
                        <p><i class="fa fa-envelope-open text-primary me-2"></i>rezervacie@sushihouse.sk</p>
                    </div>
                    <div class="col-md-4">
                        <h5 class="section-title ff-secondary fw-normal text-start text-primary">Všeobecné informácie</h5>
                        <p><i class="fa fa-envelope-open text-primary me-2"></i>info@sushihouse.sk</p>
                    </div>
                    <div class="col-md-4">
                        <h5 class="section-title ff-secondary fw-normal text-start text-primary">Telefón</h5>
                        <p><i class="fa fa-phone-alt text-primary me-2"></i>+421 900 000 000</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                <iframe
                    class="position-relative rounded w-100 h-100"
                    src="https://www.google.com/maps?q=%C5%A0urany&output=embed"
                    frameborder="0"
                    style="min-height: 350px; border:0;"
                    allowfullscreen=""
                    aria-hidden="false"
                    tabindex="0">
                </iframe>
            </div>

            <div class="col-md-6">
                <div class="wow fadeInUp" data-wow-delay="0.2s">

                    <?php if ($error !== ''): ?>
                        <div class="alert alert-danger">
                            <?php echo htmlspecialchars($error); ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($potvrdzujucaSprava !== ''): ?>
                        <div class="alert alert-success">
                            <?php echo htmlspecialchars($potvrdzujucaSprava); ?>
                        </div>

                        <div class="bg-white rounded p-3 mb-4">
                            <h5 class="mb-3">Odoslané údaje</h5>
                            <p><strong>Meno:</strong> <?php echo htmlspecialchars($meno); ?></p>
                            <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
                            <p><strong>Predmet:</strong> <?php echo htmlspecialchars($predmet); ?></p>
                            <p><strong>Správa:</strong> <?php echo htmlspecialchars($sprava); ?></p>
                        </div>
                    <?php endif; ?>

                    <form method="POST" action="">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="meno"
                                        name="meno"
                                        placeholder="Vaše meno"
                                        value="<?php echo htmlspecialchars($meno); ?>"
                                        required
                                    >
                                    <label for="meno">Vaše meno</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="email"
                                        name="email"
                                        placeholder="Váš email"
                                        value="<?php echo htmlspecialchars($email); ?>"
                                        required
                                    >
                                    <label for="email">Váš email</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="predmet"
                                        name="predmet"
                                        placeholder="Predmet"
                                        value="<?php echo htmlspecialchars($predmet); ?>"
                                        required
                                    >
                                    <label for="predmet">Predmet</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea
                                        class="form-control"
                                        placeholder="Sem napíšte správu"
                                        id="sprava"
                                        name="sprava"
                                        style="height: 150px"
                                        required
                                    ><?php echo htmlspecialchars($sprava); ?></textarea>
                                    <label for="sprava">Správa</label>
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
</div>

<?php require 'partials/footer.php'; ?>