<?php
require_once 'classes/MenuItem.php';

$nazovStranky = "Upraviť položku menu | Sushi House Šurany";

$menuItem = new MenuItem();

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die('Neplatné ID položky.');
}

$id = (int)$_GET['id'];
$item = $menuItem->getById($id);

if (!$item) {
    die('Položka nebola nájdená.');
}

$name = $item['name'];
$description = $item['description'];
$price = $item['price'];
$image = $item['image'];
$category = $item['category'];

$success = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $description = trim($_POST['description'] ?? '');
    $price = trim($_POST['price'] ?? '');
    $image = trim($_POST['image'] ?? '');
    $category = trim($_POST['category'] ?? '');

    if ($name === '' || $description === '' || $price === '' || $image === '' || $category === '') {
        $error = 'Prosím vyplň všetky polia.';
    } elseif (!is_numeric($price)) {
        $error = 'Cena musí byť číslo.';
    } else {
        $updated = $menuItem->update($id, $name, $description, (float)$price, $image, $category);

        if ($updated) {
            $success = 'Položka bola úspešne upravená.';
            $item = $menuItem->getById($id);
            $name = $item['name'];
            $description = $item['description'];
            $price = $item['price'];
            $image = $item['image'];
            $category = $item['category'];
        } else {
            $error = 'Pri úprave nastala chyba.';
        }
    }
}

require 'partials/header.php';
?>

<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3">Upraviť položku menu</h1>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container" style="max-width: 800px;">
        <div class="bg-white rounded p-5 shadow-sm">

            <h2 class="mb-4">Úprava položky</h2>

            <?php if ($success !== ''): ?>
                <div class="alert alert-success">
                    <?php echo htmlspecialchars($success); ?>
                </div>
            <?php endif; ?>

            <?php if ($error !== ''): ?>
                <div class="alert alert-danger">
                    <?php echo htmlspecialchars($error); ?>
                </div>
            <?php endif; ?>

            <form method="POST">
                <div class="row g-3">

                    <div class="col-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="name" name="name"
                                   value="<?php echo htmlspecialchars($name); ?>" placeholder="Názov">
                            <label for="name">Názov jedla</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-floating">
                            <textarea class="form-control" id="description" name="description"
                                      placeholder="Popis" style="height: 120px"><?php echo htmlspecialchars($description); ?></textarea>
                            <label for="description">Popis</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="price" name="price"
                                   value="<?php echo htmlspecialchars((string)$price); ?>" placeholder="Cena">
                            <label for="price">Cena</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="category" name="category"
                                   value="<?php echo htmlspecialchars($category); ?>" placeholder="Kategória">
                            <label for="category">Kategória</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="image" name="image"
                                   value="<?php echo htmlspecialchars($image); ?>" placeholder="Obrázok">
                            <label for="image">Názov obrázka (napr. menu-1.jpg)</label>
                        </div>
                    </div>

                    <div class="col-12 d-flex gap-3">
                        <button class="btn btn-primary py-3 px-5" type="submit">
                            Uložiť zmeny
                        </button>

                        <a href="menu.php" class="btn btn-secondary py-3 px-5">
                            Späť na menu
                        </a>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>

<?php require 'partials/footer.php'; ?>