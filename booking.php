<?php
$nazovStranky = "Rezervácia | Sushi House Šurany";

$meno = '';
$email = '';
$datumCas = '';
$pocetOsob = '';
$sprava = '';
$potvrdzujucaSprava = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $meno = trim($_POST['meno'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $datumCas = trim($_POST['datum_cas'] ?? '');
    $pocetOsob = trim($_POST['pocet_osob'] ?? '');
    $sprava = trim($_POST['sprava'] ?? '');

    if ($meno !== '' && $email !== '' && $datumCas !== '' && $pocetOsob !== '') {
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
                <li class="breadcrumb-item text-white active" aria-current="page">Rezervácia</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
    <div class="row g-0">
        <div class="col-md-6">
            <div class="video">
                <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                    <span></span>
                </button>
            </div>
        </div>

        <div class="col-md-6 bg-dark d-flex align-items-center">
            <div class="p-5 wow fadeInUp w-100" data-wow-delay="0.2s">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">Rezervácia</h5>
                <h1 class="text-white mb-4">Rezervujte si stôl online</h1>

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
                                >
                                <label for="email">Váš email</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="datum_cas"
                                    name="datum_cas"
                                    placeholder="Dátum a čas"
                                    value="<?php echo htmlspecialchars($datumCas); ?>"
                                >
                                <label for="datum_cas">Dátum a čas</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" id="pocet_osob" name="pocet_osob">
                                    <option value="">Vyberte počet osôb</option>
                                    <option value="1" <?php if ($pocetOsob === '1') echo 'selected'; ?>>1 osoba</option>
                                    <option value="2" <?php if ($pocetOsob === '2') echo 'selected'; ?>>2 osoby</option>
                                    <option value="3" <?php if ($pocetOsob === '3') echo 'selected'; ?>>3 osoby</option>
                                    <option value="4" <?php if ($pocetOsob === '4') echo 'selected'; ?>>4 osoby</option>
                                </select>
                                <label for="pocet_osob">Počet osôb</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <textarea
                                    class="form-control"
                                    placeholder="Poznámka"
                                    id="sprava"
                                    name="sprava"
                                    style="height: 100px"
                                ><?php echo htmlspecialchars($sprava); ?></textarea>
                                <label for="sprava">Poznámka</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Odoslať rezerváciu</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title">Prezentačné video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Zavrieť"></button>
            </div>
            <div class="modal-body">
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'partials/footer.php'; ?>