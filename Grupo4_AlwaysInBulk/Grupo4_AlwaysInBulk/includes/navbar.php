<?php include_once('includes/connection.php') ?>
<nav class="navbar navbar-expand-md navbar navbar-dark bg-dark">
    <div class="container-fluid">

        <a href="../Grupo4_AlwaysInBulk/index.php" class="navbar-brand "><img src="imagens/LOGOP1.png" width="40px"
                height="55px" alt="logo"></a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu-principal"> <span
                class="navbar-toggler-icon"> </span></button>


        <div class="collapse navbar-collapse " id="menu-principal">
            <div class="navbar-nav ms-auto">
                <a href="../Grupo4_AlwaysInBulk/index.php" class="nav-link">Home</a>
                <a href="../Grupo4_AlwaysInBulk/produtos.php" class="nav-link">Produtos</a>
                <a href="../Grupo4_AlwaysInBulk/sobrenos.php" class="nav-link">Sobre Nós</a>
                <a href="../Grupo4_AlwaysInBulk/contactos.php" class="nav-link">Contactos</a>
            </div>
            <div>
                <?php
                if (isset($_SESSION['autenticado']) && $_SESSION['autenticado'] === true) {
                    ?>
                    <button id="btn-login-user" class="btn btn-dark botaonav" data-bs-toggle="collapse"
                        data-bs-target="#user">
                        <i class="bi bi-person-fill " style="color:blue;font-size:1.5rem;"></i>
                    </button>
                    <?php
                } else {
                    ?>
                    <button id="btn-login-user" class="btn btn-dark botaonav" data-bs-toggle="collapse"
                        data-bs-target="#user">
                        <i class="bi bi-person-fill " style="color:white;font-size:1.5rem;"></i>
                    </button>
                    <?php
                }
                ?>
            </div>
            <button id="btn-login-user" class="btn btn-dark botaonav" data-bs-toggle="collapse"
                data-bs-target="#carrinho">
                <i class="bi bi-cart " style="color:white;font-size:1.5rem;"></i>
            </button>

        </div>
    </div>

    </div>

</nav>

<div class="collapse collapse-horizontal position-absolute end-0 h-100 bg-dark " data-bs-scroll="true"
    data-bs-backdrop="false" style="color:white; z-index: 9; " id="carrinho">
    <div class="card-header">
        <h5 class="card-title m-2">Carrinho de Compras</h5>

    </div>
    <div class="card-body p-2 ">

        <?php
        if (isset($_SESSION['compras'])) {
            foreach ($_SESSION['compras'] as $compras) {
                $idprod = $compras['id'];
                $sth = $dbh->prepare("SELECT imagem FROM produtos WHERE id= :id");
                $sth->bindParam(':id', $idprod);
                $sth->execute();
                $prod = $sth->fetchObject();
                ?>
                <div class="col-4 pt-2">
                    <form action="../Grupo4_AlwaysInBulk/forms/rcarrinho.php" method="POST">
                        <input type="hidden" value="<?= $compras['id'] ?>" name="id">
                        <button type="submit" class="btn-close btn-close-white position-absolute end-0"
                            aria-label="Close"></button>
                    </form>
                </div>
                <div class="row py-2 ps-2 border-bottom">
                    <div class="col-4" style="width:205px; height:205px;">

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



                </div>
                <?php
            }
        }
        ?>

    </div>
    <button class="btn btn-info w-100 text-uppercase fw-bold mt-5">
        <a href="../Grupo4_AlwaysInBulk/carrinho.php" style="text-decoration:none; color:black;"> Ver carrinho</a>
    </button>
</div>


<div class="collapse collapse-horizontal w-25 position-absolute end-0 bg-dark border login1 " id="user"
    style="z-index:9;">
    <div class="card-header">
        <h5 class="card-title" id="offcanvasScrollingLabel" style="color: white; text-align:center;">Login/Registo</h5>
    </div>
    <div class="card-body ">
        <div class="container-fluid mt-2 ">

            <div class="row pt-2" style="text-align:center;">
                <div class="col-12 mb-2">
                    <?php
                    if (isset($_SESSION['autenticado']) && $_SESSION['autenticado'] === true) {
                        ?>
                        <div> Bem Vindo </div>
                        <a href="forms/logout.php" class="nav-link text-white text-uppercase p-2"> <button
                                class="btn btn-danger"> Logout </button></a>
                        <?php
                    } else {
                        ?>
                        <a href="../Grupo4_AlwaysInBulk/login.php"> <button class="btn btn-success"> Iniciar Sessão
                            </button></a>

                    </div>
                    <div class="col-12 mb-4">
                        <a href="../Grupo4_AlwaysInBulk/registar.php"><button class="btn btn-light">Registar</button></a>
                    </div>
                    <?php
                    }
                    ?>


            </div>


        </div>
    </div>
</div>