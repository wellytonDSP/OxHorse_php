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

    <!-- Inclua os icons do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Incluindo CSS -->
    <link rel="stylesheet" href="../css/style.css">

    <title>OxHorse</title>
</head>

<body>
    <header>
        <!-- Barra de navegação -->
        <nav class="navbar navbar-expand-md bg-light">
            <div class="container">
                <img src="../img/logo/logo.png" class="card-img-top mx-3" alt="logo"
                    style="width: 120px;">
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
                            <a class="nav-link" href="#">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Categorias</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-2 mb-2 mb-lg-0" style="margin-right: 45px;">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Carrinho</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../public/login.php">Entrar</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>