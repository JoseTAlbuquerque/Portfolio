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

        <div class="container">

            <div class="row justify-content-center  p-5" style="margin-bottom:220px; margin-top:100px">

                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-5 p-2 "
                    style="background: rgba(54,54,54, 1); margin: 2px; color:white; ">
                    <div class="p-5">
                        <h1 class="text-center">QUEM SOMOS NÓS</h1>
                        <div class="text-center pt-2">A Always In Bulk é uma empresa Portuguesa fundada em 2022 em
                            Coimbra,
                            que se foca na
                            produção
                            de
                            produtos
                            de desporto com uma qualidade premium a um preço acessível a todos.
                            Na nossa loja podem encontrar produtos de suplementação, roupas desportivas e produtos
                            para
                            calistenia, ginásio e crossfit.
                        </div>
                        <div class="text-center pt-5">
                            <a href="contactos.php" style="color: white; text-decoration: none;">Contacta-nos</a>
                        </div>
                    </div>
                </div>
                <div class="col-5 p-2 sobre">
                    <div style="padding-top: 25px ; padding-left: 150px;">
                        <img class="img w-100 " src="imagens/muzy.png" alt="sobreImg">
                    </div>

                </div>
            </div >

    </main>
    <footer class="text-white">
        <?php include_once('includes/footer.php'); ?>
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>


</html>