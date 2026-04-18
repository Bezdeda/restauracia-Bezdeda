<?php
session_start();
?>

<?php
if (!isset($nazovStranky)) {
    $nazovStranky = "Sushi House Šurany";
}
?>
<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="utf-8">
    <title><?php echo $nazovStranky; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="sushi, reštaurácia, Šurany, japonské jedlo" name="keywords">
    <meta content="Sushi House Šurany - čerstvé sushi a moderná japonská kuchyňa" name="description">

    <!-- Ikona -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google fonty -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Ikony -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Knižnice -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<div class="container-xxl bg-white p-0">


    <!-- Navbar -->
    <div class="container-xxl position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">

            <a href="index.php" class="navbar-brand p-0">
                <h1 class="text-primary m-0">
                    <i class="fa fa-fish me-3"></i>Sushi House Šurany
                </h1>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0 pe-4">
                    <a href="index.php" class="nav-item nav-link">Domov</a>
                    <a href="about.php" class="nav-item nav-link">O nás</a>
                    <a href="menu.php" class="nav-item nav-link">Menu</a>
                    <a href="booking.php" class="nav-item nav-link">Rezervácia</a>
                    <a href="contact.php" class="nav-item nav-link">Kontakt</a>
                </div>
            </div>

        </nav>