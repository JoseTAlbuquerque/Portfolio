<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABW</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css?=v1">
</head>
<style>

</style>


<body>
    <header>
        <?php include_once('includes/navbar.php'); ?>

        <?php if (isset($_SESSION['mensagem'])) { ?>
    <div class="pt-5 fs-5" style="color:white; text-align:center"><?php echo $_SESSION['mensagem']; ?></div>
    <?php unset($_SESSION['mensagem']); ?>
<?php } ?>
    </header>
    <main style="height: 100vh;">

        <div class="container">

            <div class="row justify-content-center">
                <div class="col-12 col-sm-11 col-md-12 col-lg-15 col-xl-8">

                    <div class="login px-5 py-3" style="background: rgba(199, 0, 0, 1);">
                        <div>
                            <h2 class="text-center pb-2" style="color:white">Efetue o Login</h2>
                        </div>
                        <form action="forms/login.php" method="POST">
                            <div class="form-floating mb-2">

                                <input class="form-control" placeholder="Email" type="email" name="loginEmail"
                                    id="login-email" required>
                                <label for="floatingInput">Email</label>
                            </div>
                            <div class="form-floating mb-2">
                                <input class="form-control" placeholder="Password" type="password" name="loginPassw"
                                    id="login-Passw" required>
                                <label for="floatingInput">Password</label>
                            </div>

                            <button class="btn btn-dark w-100">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-dark text-white pt-3">
        <?php include_once('includes/footer.php'); ?>
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>