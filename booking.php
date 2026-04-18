<?php
$nazovStranky = "Rezervácia | Sushi House Šurany";

$meno = '';
$email = '';
$datumCas = '';
$pocetOsob = '';
$sprava = '';
$potvrdzujucaSprava = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $meno = trim($_POST['meno'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $datumCas = trim($_POST['datum_cas'] ?? '');
    $pocetOsob = trim($_POST['pocet_osob'] ?? '');
    $sprava = trim($_POST['sprava'] ?? '');

    if ($meno === '' || $email === '' || $datumCas === '' || $pocetOsob === '') {
        $error = "Prosím vyplňte všetky povinné polia.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Zadajte platný email.";
    } else {
        $potvrdzujucaSprava = "Vaša rezervácia bola úspešne odoslaná.";
    }
}

require 'partials/header.php';
?>

<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3">Rezervácia</h1>
    </div>
</div>

<div class="container-xxl py-5 px-0">
    <div class="row g-0">

        <!-- VIDEO -->
        <div class="col-md-6">
            <div class="reservation-video">
                <video autoplay muted loop playsinline>
                    <source src="img/video.mp4" type="video/mp4">
                    Tvoj prehliadač nepodporuje video.
                </video>
            </div>
        </div>

        <!-- FORMULÁR -->
        <div class="col-md-6 bg-dark d-flex align-items-center">
            <div class="p-5 w-100">
                <h5 class="section-title text-primary">Rezervácia</h5>
                <h1 class="text-white mb-4">Rezervujte si stôl online</h1>

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
                        <p><strong>Dátum a čas:</strong> <?php echo htmlspecialchars($datumCas); ?></p>
                        <p><strong>Počet osôb:</strong> <?php echo htmlspecialchars($pocetOsob); ?></p>
                        <p><strong>Poznámka:</strong> <?php echo htmlspecialchars($sprava); ?></p>
                    </div>
                <?php endif; ?>

                <form method="POST">
                    <div class="row g-3">

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="meno"
                                    value="<?php echo htmlspecialchars($meno); ?>" required>
                                <label>Meno</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" name="email"
                                    value="<?php echo htmlspecialchars($email); ?>" required>
                                <label>Email</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="datetime-local" class="form-control"
                                    name="datum_cas"
                                    value="<?php echo htmlspecialchars($datumCas); ?>" required>
                                <label>Dátum a čas</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" name="pocet_osob" required>
                                    <option value="">Vyberte</option>
                                    <option value="1" <?php if ($pocetOsob=='1') echo 'selected'; ?>>1 osoba</option>
                                    <option value="2" <?php if ($pocetOsob=='2') echo 'selected'; ?>>2 osoby</option>
                                    <option value="3" <?php if ($pocetOsob=='3') echo 'selected'; ?>>3 osoby</option>
                                    <option value="4" <?php if ($pocetOsob=='4') echo 'selected'; ?>>4 osoby</option>
                                </select>
                                <label>Počet osôb</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control"
                                    name="sprava"
                                    style="height: 100px"><?php echo htmlspecialchars($sprava); ?></textarea>
                                <label>Poznámka</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">
                                Odoslať rezerváciu
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require 'partials/footer.php'; ?>