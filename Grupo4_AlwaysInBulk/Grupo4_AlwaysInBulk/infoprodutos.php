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
    <link rel="stylesheet" href="css/style.css">
</head>
<style>

</style>

<body>
    <header>
        <?php include_once('includes/navbar.php');
        $idproduto = $_GET['id'];
        $sql = "SELECT * FROM produtos WHERE id = '$idproduto'";
        $sth = $dbh->query($sql);
        $artigo = $sth->fetchObject();
        $count=0;
        ?>

    </header>

    <main>

        <div class="container">

            <div class="row h-100 py-5 d-flex justify-content-center">



                <div class="col-12 col-sm-12 col-md-8 col-lg-5 my-5" style=" color:white;">
                    <div class="row py-2 d-flex justify-content-center ">
                        <div class="col-9">
                            <img class="img-fluid w-100" src="imagens/produtos/<?= $artigo->imagem ?>" alt="produtos">
                        </div>


                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-8 col-lg-6 my-5 " style="height:100vh">

                    <div class="p-5" style=" background: rgba(54,54,54, 1); color:white;">
                        <div class="titulo2 mb-5" style="font-weight: bold;">
                            <h1>
                                <?= $artigo->nome ?>
                            </h1>
                        </div>
                        <?= $artigo->descricao ?>
                        <div class="my-4" style="font-size:large; ">
                            <?= $artigo->preco ?>€
                        </div>
                        <div class="mt-5">

                            <span class="input-group mb-3">
                                <input id="quantidade-<?=$count?>" type="number" min="1" value="1" class="form-control">
                                <button class="btn btn-primary" onclick="adcarrinho(<?= $artigo->id ?>,'<?=$artigo->nome?>',<?= $artigo->preco ?>,<?=$count?>)" type="button">Adicionar
                                    <i class="bi bi-cart"></i></button>
                            </span>
                        </div>
                    </div>

                </div>


            </div>
        </div>

    </main>


    <footer class="bg-dark text-white pt-3  ">
        <?php include_once('includes/footer.php'); ?>
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/adcarrinho.js"></script>
</body>

</html>