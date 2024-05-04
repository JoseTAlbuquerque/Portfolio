<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css?=v1">
</head>
<style>

</style>

<body>

    <header>
        <?php include_once('includes/navbar.php'); ?>
    </header>

    <main>

        <div class="container mb-5">
            <div class="row p-5 d-flex justify-content-evenly prodtitulo">
                <div class="col-12 border-bottom pb-5 text-center" style="color:white;">
                    <h1>Envia-nos uma mensagem</h1>
                </div>
                <div class="col-12 p-3 text-center fs-5" style="color:white;">
                    Preenche o Formulário para nos enviares uma mensagem.
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <form action="forms/contactos.php" method="POST" style="color:grey;">

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Nome" name="nome"
                                id="nome" required>
                            <label for="floatingInput">Nome*</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
                                name="email" id="email" required>
                            <label for="floatingInput">Email*</label>
                        </div>

                        <div class="form-floating mb-5">
                            <textarea class="form-control" id="assunto" placeholder="Assunto" rows="3" name="mensagem"
                                required></textarea>
                            <label for="floatingInput" class="form-label">Aqui podes escrever a tua mensagem para enviar
                                para a nossa equipa</label>
                        </div>
                        <div>
                            <button class="btn btn-dark w-100" type="submit">Enviar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </main>

    <footer class="bg-dark text-white  ">
        <?php include_once('includes/footer.php'); ?>
    </footer>



    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>