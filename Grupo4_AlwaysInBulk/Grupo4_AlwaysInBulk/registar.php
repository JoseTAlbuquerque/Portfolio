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

        <?php if (isset($_SESSION['mensagemmail'])) { ?>
    <div class="pt-5 fs-5" style="color:white; text-align:center"><?php echo $_SESSION['mensagemmail']; ?></div>
    <?php unset($_SESSION['mensagem']); ?>
<?php } ?>

    </header>
    <main style="height: 100vh;">
        <div class="login p-3" style="background: rgba(54, 54, 54, 1);">
            <div class="container ">
                <div >
                    <h2 class="text-center pb-2" style="color:white">Efetue o Registo</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12  col-sm-11 col-md-12 col-lg-15 col-xl-8">
                        <form action="forms/users.php" method="POST">
                        <div class="form-floating mb-2">
                                <input class="form-control" placeholder=Nome" name="username"
                                    id="registo-nome" required>
                                <label for="floatingInput">Nome</label>
                            </div>
                            <div class="form-floating mb-2">
                                <input class="form-control" placeholder="Email" type="email" name="email"
                                    id="resgito-email" required>
                                <label for="floatingInput">Email</label>
                            </div>
                            <div class="form-floating mb-2">
                                <input class="form-control" placeholder="Password" type="password" name="passw"
                                    id="registo-passw" required>
                                <label for="floatingInput">Password</label>
                            </div>

                            <button class="btn btn-dark w-100" type="submit">Entrar</button>
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