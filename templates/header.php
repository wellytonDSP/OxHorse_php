<?php
// Inclua os arquivos necessários do seu projeto
include_once("../config/process.php");

?>

<!-- Cabeçalho -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Inclua o Bootstrap CSS via CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Inclua os icons do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!-- Inclua o jQuery via CDN (se necessário) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <!-- Inclua o Bootstrap JavaScript via CDN (se necessário) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <!-- Inclua o seu arquivo de estilo personalizado -->
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">

    <!-- Inclua o seu arquivo de estilo personalizado -->
    <link rel="stylesheet" href="../css/style.css">

    <title>OxHorse</title>
</head>

<body>
    <header>
        <!-- Barra de navegação -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary ">
            <div class="container">
                <a class="navbar-brand" href="<?= $BASE_URL ?>/index.php"><img src="../img/logo2.png" alt="logo"
                        width="120px"></a>
                

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav justify-content-center align-items-center gap-2">
                            <li class="nav-item">
                                <a class="nav-link link-menu link-nav-pilar text-uppercase"
                                    href="<?= $BASE_URL ?>/index.php">Início</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  link-menu link-nav-pilar text-uppercase"
                                    href="#secao-genetica">Especies</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  link-menu link-nav-pilar text-uppercase" href="#">Materiais</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-menu link-nav-pilar text-uppercase"
                                    href="#secao1">Profissionais</a>
                            </li>
                            <ul
                                class="navbar-nav justify-content-center justify-content-lg-start align-items-center ml-auto">
                                <li class="nav-item">
                                    <div class="container">
                                        <a class="nav-link text-uppercase" href="login.php"><i
                                                class="bi bi-person-fill p-3"></i>Entrar</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div class="container">
                                        <a class="nav-link text-uppercase" href="login.php"><i
                                                class="bi bi-cart-fill p-3"></i>Carrinho</a>
                                    </div>
                                </li>
                            </ul>
                        </ul>
                    </div>
            </div>
        </nav>