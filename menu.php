<?php
session_start();

$nazovStranky = "Menu | Sushi House Šurany";

require_once 'classes/MenuItem.php';

$menuItem = new MenuItem();

// DELETE logika - len pre prihláseného admina
if (isset($_GET['delete_id'])) {
    if (!isset($_SESSION['user_id'])) {
        header('Location: login.php');
        exit;
    }

    $menuItem->delete((int)$_GET['delete_id']);
    header("Location: menu.php");
    exit;
}

$items = $menuItem->getAll();

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
            <?php if (!empty($items)): ?>
                <?php foreach ($items as $item): ?>
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center">
                            <img
                                class="flex-shrink-0 img-fluid rounded"
                                src="img/<?php echo htmlspecialchars($item['image']); ?>"
                                alt="<?php echo htmlspecialchars($item['name']); ?>"
                                style="width: 80px;"
                            >

                            <div class="w-100 d-flex flex-column text-start ps-4">

                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                    <span><?php echo htmlspecialchars($item['name']); ?></span>
                                    <span class="text-primary">
                                        <?php echo number_format((float)$item['price'], 2, ',', ' '); ?> €
                                    </span>
                                </h5>

                                <small class="fst-italic mb-1">
                                    <?php echo htmlspecialchars($item['description']); ?>
                                </small>

                                <?php if (isset($_SESSION['user_id'])): ?>
                                    <div class="mt-1">
                                        <a
                                            href="edit-menu-item.php?id=<?php echo (int)$item['id']; ?>"
                                            style="color: #d4a24c; font-size: 12px; text-decoration: none; margin-right: 12px;"
                                        >
                                            Upraviť
                                        </a>

                                        <a
                                            href="menu.php?delete_id=<?php echo (int)$item['id']; ?>"
                                            onclick="return confirm('Naozaj chceš vymazať túto položku?');"
                                            style="color: red; font-size: 12px; text-decoration: none;"
                                        >
                                            Vymazať
                                        </a>
                                    </div>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center">
                    <p>Momentálne nie sú dostupné žiadne položky v menu.</p>
                </div>
            <?php endif; ?>
        </div>

        <div class="text-center mt-5">
            <a href="booking.php" class="btn btn-primary py-3 px-5">Rezervovať stôl</a>
        </div>
    </div>
</div>

<?php require 'partials/footer.php'; ?>