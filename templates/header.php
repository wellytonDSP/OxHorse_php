<?php
// Inclua os arquivos necessários do seu projeto
include_once("../config/process.php");
$message = new Message($BASE_URL);

$flassMessage = $message->getMessage();

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
        <nav class="nav-one navbar navbar-expand-lg navbar-light bg-white ml-5 mr-5">
            <div class="bar container-fluid">
                <a class="navbar-brand" href="<?= $BASE_URL ?>/index.php"><img src="../img/logo2.png" alt="logo"
                        width="120px"></a>
                <!-- Botão de alternância para dispositivos móveis -->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Itens de navegação -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul
                        class="navbar-nav ml-4 flex-grow-1 justify-content-center justify-content-lg-start align-items-center gap-2">
                        <li class="nav-item">
                            <a class="nav-link link-menu link-nav-pilar text-uppercase"
                                href="<?= $BASE_URL ?>/index.php">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  link-menu link-nav-pilar text-uppercase"
                                href="#secao-genetica">Genética</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  link-menu link-nav-pilar text-uppercase" href="#">Adultos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-menu link-nav-pilar text-uppercase" href="#secao1">Filhotes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-menu link-nav-pilar text-uppercase" href="#secao1">Utilizatios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-menu link-nav-pilar text-uppercase"
                                href="#secao1">Representantes</a>
                        </li>
                        <ul
                            class="navbar-nav flex-grow-2 justify-content-center justify-content-lg-start align-items-center ml-auto">
                            <li class="nav-item">
                                <div class="container">
                                    <a class="nav-link text-uppercase" href="login.php"><i
                                            class="bi bi-cart-fill p-3"></i>Carrinho</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="container">
                                    <a class="nav-link text-uppercase" href="login.php"><i
                                            class="bi bi-person-fill p-3"></i>Entrar</a>
                                </div>
                            </li>
                        </ul>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="nav-two container-fluid p-10 px-lg-5">
            <div class="navbar-collapse d-lg-inline-flex p-10 collapse show">
            </div>
        </div>
        </nav>