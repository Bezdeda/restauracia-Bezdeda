<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$nazovStranky = "Administrácia | Sushi House Šurany";
require 'partials/header.php';
?>

<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3">Administrácia</h1>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="bg-white rounded p-5 shadow-sm">
            <h2 class="mb-4">Vitaj, <?php echo htmlspecialchars($_SESSION['username']); ?></h2>

            <p>Si prihlásený do administračného rozhrania.</p>

            <div class="d-flex gap-3 flex-wrap">
                <a href="create-menu-item.php" class="btn btn-primary">Pridať položku menu</a>
                <a href="menu.php" class="btn btn-secondary">Zobraziť menu</a>
                <a href="logout.php" class="btn btn-danger">Odhlásiť sa</a>
            </div>
        </div>
    </div>
</div>

<?php require 'partials/footer.php'; ?>