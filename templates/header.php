<?php
// Inclua os arquivos necessários do seu projeto
require_once("../config/process.php");
?>

<!-- Cabeçalho -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Incluindo Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Incluindo Icones Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Incluindo CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Incluindo icone da pagina -->
    <link rel="shortcut icon" href="../img/Ico/logo2.ico" type="image/x-icon">
    <!-- Incluindo fonte -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <title>OxHorse</title>
</head>

<body class="m-0 border-0 bd-example m-0 border-0">
    <header>
        <!-- Barra de navegação -->
        <nav class="navbar navbar-expand-md bg-light">
            <div class="container">
                <img src="../img/logo/logo.png" class="card-img-top mx-3" alt="logo" style="width: 120px;">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../public/index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sobre</a>
                        </li>
                    </ul>
                    <form class="d-flex mx-auto" role="search">
                        <input class="form-control mx-2" type="search" placeholder="Pesquisar..." aria-label="Search">
                        <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                    </form>
                    <ul class="navbar-nav ml-2 mb-2 mb-lg-0" style="margin-right: 45px;">
                        <li class="nav-item">
                            <a class="nav-link" href="../public/login.php"><i class="bi bi-cart-fill"
                                    style="margin-right: 5px;"></i>Carrinho</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../public/login.php"><i class="bi bi-person-fill"
                                    style="margin-right: 5px;"></i>Entrar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php if($_SESSION["msg"]) :?>
        <div class="position-relative">
            <div class="position-absolute top-0 start-50 translate-middle alert <?php echo $_SESSION["sts"] ?> alert-dismissible fade show" role="alert" style="z-index: 9999;">
                <?php echo $_SESSION["msg"]; ?>
                <!-- Botão para fechar o alert -->
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <?php $_SESSION["msg"] = null ?>
            </div>
        </div>
        <?php endif;?>