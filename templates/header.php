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
    <!-- Incluindo Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Incluindo Icones Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Incluindo CSS -->
    <link rel="stylesheet" href="../css/style.css">

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
                            <a class="nav-link" href="#">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Categorias</a>
                        </li>
                    </ul>
                    <form class="d-flex mx-auto" role="search">
                        <input class="form-control mx-2" type="search" placeholder="Pesquisar..." aria-label="Search">
                        <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                    </form>
                    <ul class="navbar-nav ml-2 mb-2 mb-lg-0" style="margin-right: 45px;">
                        <li class="d-flex nav-item">
                            <button class="btn btn-success mx-3" href="../public/carrinho.php"><i class="bi bi-cart-fill" style="margin-right: 5px;"></i>Carrinho</a>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-success mx-3" href="../public/login.php"><i class="bi bi-person-fill" style="margin-right: 5px;"></i>Entrar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>