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
            <div class="row h-100 pt-5 d-flex justify-content-evenly">
                <div class="col-10 col-sm-12 col-md-6 col-lg-6 mb-3 " style="color:white">
                    <div class="prodcarrinho">
                        <?php
                        if (isset($_SESSION['compras'])) {
                            $totalsp = 0;
                            foreach ($_SESSION['compras'] as $compras) {
                                $idprod = $compras['id'];
                                $sth = $dbh->prepare("SELECT imagem FROM produtos WHERE id= :id");
                                $sth->bindParam(':id', $idprod);
                                $sth->execute();
                                $prod = $sth->fetchObject();
                                $totalsp += $compras['preco'] * $compras['quantidade'];
                                ?>
                                <div class="row py-2 ">
                                    <div class="col-6">

                                        <img class="img-fluid w-100" src="imagens/produtos/<?= $prod->imagem ?>" alt="produtos">


                                    </div>
                                    <div class="col-4">

                                        <div class="p-1 text-uppercase fw-bold">
                                            <?= $compras['nome'] ?>
                                        </div>
                                        <div class="p-1 text-uppercase fw-bold">Qnt->
                                            <?= $compras['quantidade'] ?>
                                        </div>
                                        <div class="p-1 text-uppercase fw-bold">
                                            <?= $compras['preco'] ?>€
                                        </div>



                                    </div>

                                    <div class="col-1 me-1">
                                        <form action="../Grupo4_AlwaysInBulk/forms/rcarrinho.php" method="POST">
                                            <input type="hidden" value="<?= $compras['id'] ?>" name="id">
                                            <button type="submit" class="btn-close btn-close-white  position-relative end-0"
                                                aria-label="Close"></button>
                                        </form>
                                    </div>
                                </div>
                                <?php
                            }
                            if($totalsp!=0){
                                $portes=4;
                            } else{
                                $portes=0;
                            }
                            $total = $totalsp + $portes;
                        }
                        ?>
                    </div>
                </div>

                <div class="col-10 col-sm-12 col-md-6 col-lg-6 " style="height:100vh;">
                    <div class="border-start p-5 bg-dark " style=" color:white;">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="mb-4 border-bottom fs-2"> Resumo da Compra</h3>
                            </div>

                            <div class="col-6 fs-5 fw-bold" >Subtotal</div>
                            <div class="col-6">
                                <?= $totalsp ?>€
                            </div>

                            
                                <div class="col-6 py-5 fs-5 fw-bold">Portes de Envio</div>
                                
                                <div class="col-6 py-5">4€</div>
                            
                            <div class="col-6 border-top my-2 fs-5 fw-bold" >Total</div>
                            <div class="col-6 border-top my-2 ">
                                <?= $total ?>€
                            </div>

                            <div class="pt-4">
                                <?php
                                if (isset($_SESSION['autenticado']) && $_SESSION['autenticado'] === true) {
                                    ?>
                                    <button type="submit" class="btn btn-success pt">Finalizar Compra</button>
                                    <?php
                                } else { ?>
                                    <a href="../Grupo4_AlwaysInBulk/login.php"> <button class="btn btn-danger"
                                            type="button"> Faça Login
                                        </button></a>
                                    <?php
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main>
    <footer class="text-white ">
        <?php include_once('includes/footer.php'); ?>
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>