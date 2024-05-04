<?php session_start(); ?>
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

        <?php include_once('includes/navbar.php') ?>

    </header>
    <main>


        <div style="margin-bottom:150px;" id="main-content">

            <?php
            $sql = 'SELECT * FROM produtos WHERE visivel = 1 AND categoria = :c';
            $sth = $dbh->prepare($sql);
            $count = 0;

            ?>
            <div class="container mt-5 px-5" style="color:white">
                <div class="sup ">
                    <div class="display-4 m-4 text-center">Suplementos</div>

                    <div class="row d-flex justify-content-evenly">


                        <?php
                        $sth->bindValue(':c', 1);
                        $sth->execute();
                        while ($suplementos = $sth->fetchObject()) {
                            ?>

                            <div class="col-5 col-sm-5 col-md-3 col-lg-3 col-xl-3 mx-1 border border-dark bg-dark my-3 ">

                                <div class="suplementos m-3">
                                    <div class="row">
                                        <a href="infoprodutos.php?id=<?= $suplementos->id ?>"> <img class="w-100"
                                                src="imagens/produtos/<?= $suplementos->imagem ?> " alt="creatina"></a>
                                    </div>
                                    <div class="row">
                                        <div class="col produto-titulo">
                                            <?= $suplementos->nome ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col fs-3 fw-semibold mb-3">
                                            <?= $suplementos->preco ?>€
                                        </div>
                                    </div>
                                    <span class="input-group">
                                        <input id="quantidade-<?= $count ?>" type="number" min="1" value="1"
                                            class="form-control">
                                        <button class="btn btn-primary"
                                            onclick="adcarrinho(<?= $suplementos->id ?>,'<?= $suplementos->nome ?>',<?= $suplementos->preco ?>,<?= $count ?>)"
                                            type="button">
                                            <i class="bi bi-cart"></i></button>
                                    </span>


                                </div>
                            </div>

                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="sup mt-5">
                    <div class="display-4 m-4 text-center">Snacks</div>

                    <div class="row d-flex justify-content-center">

                        <?php
                        $sth->bindValue(':c', 2);
                        $sth->execute();
                        while ($suplementos = $sth->fetchObject()) {
                            ?>



                            <div class="col-5 col-sm-5 col-md-3 col-lg-3 col-xl-3 mx-4 border border-dark bg-dark my-3 ">

                                <div class="suplementos m-3">
                                    <div class="row">
                                        <a href="infoprodutos.php?id=<?= $suplementos->id ?>"> <img class="w-100"
                                                src="imagens/produtos/<?= $suplementos->imagem ?> " alt="creatina"></a>
                                    </div>
                                    <div class="row">
                                        <div class="col produto-titulo">
                                            <?= $suplementos->nome ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col fs-3 fw-semibold mb-3">
                                            <?= $suplementos->preco ?>€
                                        </div>
                                    </div>
                                    <span class="input-group">
                                        <input id="quantidade-<?= $count ?>" type="number" min="1" value="1"
                                            class="form-control">
                                        <button class="btn btn-primary"
                                            onclick="adcarrinho(<?= $suplementos->id ?>,'<?= $suplementos->nome ?>',<?= $suplementos->preco ?>,<?= $count ?>)"
                                            type="button">
                                            <i class="bi bi-cart"></i></button>
                                    </span>


                                </div>
                            </div>

                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="sup mt-5">
                    <div class="display-4 m-4 text-center">Vestuário</div>

                    <div class="row d-flex justify-content-evenly">

                        <?php
                        $sth->bindValue(':c', 3);
                        $sth->execute();
                        while ($suplementos = $sth->fetchObject()) {
                            ?>



                            <div class="col-5 col-sm-5 col-md-3 col-lg-3 col-xl-3 mx-1 border border-dark bg-dark my-3 ">

                                <div class="suplementos m-3">
                                    <div class="row">
                                        <a href="infoprodutos.php?id=<?= $suplementos->id ?>"> <img class="w-100"
                                                src="imagens/produtos/<?= $suplementos->imagem ?> " alt="creatina"></a>
                                    </div>
                                    <div class="row">
                                        <div class="col produto-titulo">
                                            <?= $suplementos->nome ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col fs-3 fw-semibold mb-3">
                                            <?= $suplementos->preco ?>€
                                        </div>
                                    </div>
                                    <span class="input-group">
                                        <input id="quantidade-<?= $count ?>" type="number" min="1" value="1"
                                            class="form-control">
                                        <button class="btn btn-primary"
                                            onclick="adcarrinho(<?= $suplementos->id ?>,'<?= $suplementos->nome ?>',<?= $suplementos->preco ?>,<?= $count ?>)"
                                            type="button">
                                            <i class="bi bi-cart"></i></button>
                                    </span>


                                </div>
                            </div>

                            <?php
                        }
                        ?>
                    </div>
                </div>

                <div class="sup mt-5">
                    <div class="display-4 m-4 text-center">Ginásio em Casa</div>

                    <div class="row d-flex justify-content-center">

                        <?php
                        $sth->bindValue(':c', 4);
                        $sth->execute();
                        while ($suplementos = $sth->fetchObject()) {
                            ?>



                            <div class="col-5 col-sm-5 col-md-3 col-lg-3 col-xl-3 mx-4 border border-dark bg-dark my-3 ">

                                <div class="suplementos m-3">
                                    <div class="row">
                                        <a href="infoprodutos.php?id=<?= $suplementos->id ?>"> <img class="w-100"
                                                src="imagens/produtos/<?= $suplementos->imagem ?> " alt="creatina"></a>
                                    </div>
                                    <div class="row">
                                        <div class="col produto-titulo">
                                            <?= $suplementos->nome ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col fs-3 fw-semibold mb-3">
                                            <?= $suplementos->preco ?>€
                                        </div>
                                    </div>
                                    <span class="input-group">
                                        <input id="quantidade-<?= $count ?>" type="number" min="1" value="1"
                                            class="form-control">
                                        <button class="btn btn-primary"
                                            onclick="adcarrinho(<?= $suplementos->id ?>,'<?= $suplementos->nome ?>',<?= $suplementos->preco ?>,<?= $count ?>)"
                                            type="button">
                                            <i class="bi bi-cart"></i></button>
                                    </span>


                                </div>
                            </div>
                            <?php
                        }
                        ?>
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