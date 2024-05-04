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


<body>
    <header>
        <?php include_once('includes/navbar.php');

        $sql = 'SELECT * FROM produtos WHERE visivel = 1 AND novidades = :n  ORDER BY rand() LIMIT 6';
        $sth = $dbh->prepare($sql);

        $sql = 'SELECT * FROM produtos WHERE visivel = 1 AND novidades = :n';
        $std = $dbh->prepare($sql);
        ?>
    </header>

    <main>
        <div class="headl">
            <div class="vendidos text-white d-flex justify-content-center">
                Always In Bulk </div>
            <div class="d-flex justify-content-center pt-3" style="font-size: large; color:white">
                No Pain No Gain
            </div>
        </div>

        <div class="container">

            <div class="row ms-auto">
                <div>
                    <h3 class="vendidos text-letter-spacing-3" style="color: white;">Novidades </h3>
                </div>
                <?php
                $std->bindValue(':n', 2);
                $std->execute();
                while ($novidades = $std->fetchObject()) {
                    ?>

                    <div class="col-6 col-md-4 mt-2 text-white mb-5">

                        <a href="infoprodutos.php?id=<?= $novidades->id ?>"><img class="img-fluid "
                                src="imagens/produtos/<?= $novidades->imagem ?> " alt="novidades"></a>
                        <div style="font-size: large;">
                            <?= $novidades->nome ?>
                        </div>
                    </div>

                    <?php
                }
                ?>

            </div>

            <div class="row ms-auto">
                <div>
                    <h3 class="vendidos text-letter-spacing-3" style="color: white;">Os Mais Vendidos </h3>
                </div>
                <?php

                $sth->bindValue(':n', 1);
                $sth->execute();
                while ($maisvendidos = $sth->fetchObject()) {
                    ?>

                    <div class="col-6 col-md-4 mt-2 text-white mb-5">

                        <a href="infoprodutos.php?id=<?= $maisvendidos->id ?>"><img class="img-fluid "
                                src="imagens/produtos/<?= $maisvendidos->imagem ?> " alt="maisvendidos"></a>
                        <div style="font-size: large;">
                            <?= $maisvendidos->nome ?>
                        </div>
                    </div>

                    <?php
                }
                ?>

            </div>
        </div>

    </main>


    <footer class="text-white">
        <?php include_once('includes/footer.php'); ?>
    </footer>




    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>