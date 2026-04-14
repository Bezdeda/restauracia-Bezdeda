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

    // Validácia
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
        <h1 class="display-3 text-white mb-3 animated slideInDown">Rezervácia</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="index.php">Domov</a></li>
                <li class="breadcrumb-item text-white active">Rezervácia</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container-xxl py-5 px-0">
    <div class="row g-0">

        <!-- Video -->
        <div class="col-md-6">
            <div class="video">
                <button type="button" class="btn-play" data-bs-toggle="modal"
                    data-src="https://www.youtube.com/embed/DWRcNpR6Kdc"
                    data-bs-target="#videoModal">
                    <span></span>
                </button>
            </div>
        </div>

        <!-- Formulár -->
        <div class="col-md-6 bg-dark d-flex align-items-center">
            <div class="p-5 w-100">
                <h5 class="section-title text-primary">Rezervácia</h5>
                <h1 class="text-white mb-4">Rezervujte si stôl online</h1>

                <!-- ERROR -->
                <?php if ($error !== ''): ?>
                    <div class="alert alert-danger">
                        <?php echo htmlspecialchars($error); ?>
                    </div>
                <?php endif; ?>

                <!-- SUCCESS -->
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
                                    placeholder="Meno"
                                    value="<?php echo htmlspecialchars($meno); ?>" required>
                                <label>Meno</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" name="email"
                                    placeholder="Email"
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

<!-- Video Modal -->
<div class="modal fade" id="videoModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Prezentačné video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="ratio ratio-16x9">
                    <iframe id="video" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'partials/footer.php'; ?>