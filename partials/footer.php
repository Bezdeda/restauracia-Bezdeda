<!-- Footer -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">

            <div class="col-lg-4 col-md-6">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Sushi House Šurany</h4>
                <p>Moderná japonská reštaurácia v Šuranoch. Čerstvé sushi, kvalitné suroviny a príjemná atmosféra.</p>
            </div>

            <div class="col-lg-4 col-md-6">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Kontakt</h4>
                <p><i class="fa fa-map-marker-alt me-3"></i>Šurany, Slovensko</p>
                <p><i class="fa fa-phone-alt me-3"></i>+421 900 000 000</p>
                <p><i class="fa fa-envelope me-3"></i>info@sushihouse.sk</p>
            </div>

            <div class="col-lg-4 col-md-6">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Otváracie hodiny</h4>
                <p>Pon - Pia: 11:00 - 22:00</p>
                <p>Víkend: 12:00 - 23:00</p>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="text-center pb-3">

            <p class="mb-1">
                &copy; <?php echo date("Y"); ?> Sushi House Šurany | Všetky práva vyhradené
            </p>

            <!-- 🔒 ADMIN LINK -->
            <small>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="admin.php" style="color: #d4a24c; text-decoration: none; margin-right: 10px;">
                        Administrácia
                    </a>
                    <a href="logout.php" style="color: red; text-decoration: none;">
                        Odhlásiť sa
                    </a>
                <?php else: ?>
                    <a href="login.php" style="color: #888; text-decoration: none;">
                        Admin prihlásenie
                    </a>
                <?php endif; ?>
            </small>

        </div>
    </div>
</div>

</div>