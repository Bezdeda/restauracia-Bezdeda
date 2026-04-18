<?php
session_start();

require_once 'classes/User.php';

$nazovStranky = "Prihlásenie | Sushi House Šurany";

$username = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if ($username === '' || $password === '') {
        $error = 'Prosím vyplň používateľské meno aj heslo.';
    } else {
        $userModel = new User();
        $user = $userModel->findByUsername($username);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            header('Location: admin.php');
            exit;
        } else {
            $error = 'Nesprávne prihlasovacie údaje.';
        }
    }
}

require 'partials/header.php';
?>

<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3">Admin prihlásenie</h1>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container" style="max-width: 700px;">
        <div class="bg-white rounded p-5 shadow-sm">

            <h2 class="mb-4">Prihlásenie do administrácie</h2>

            <?php if ($error !== ''): ?>
                <div class="alert alert-danger">
                    <?php echo htmlspecialchars($error); ?>
                </div>
            <?php endif; ?>

            <form method="POST">
                <div class="row g-3">

                    <div class="col-12">
                        <div class="form-floating">
                            <input
                                type="text"
                                class="form-control"
                                id="username"
                                name="username"
                                value="<?php echo htmlspecialchars($username); ?>"
                                placeholder="Používateľské meno"
                                required
                            >
                            <label for="username">Používateľské meno</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-floating">
                            <input
                                type="password"
                                class="form-control"
                                id="password"
                                name="password"
                                placeholder="Heslo"
                                required
                            >
                            <label for="password">Heslo</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary py-3 px-5" type="submit">
                            Prihlásiť sa
                        </button>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>

<?php require 'partials/footer.php'; ?>