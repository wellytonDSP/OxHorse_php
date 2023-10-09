<?php
// Inclua os arquivos necessários do seu projeto
include_once("config/url.php");
include_once("config/process.php");
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Inclua o jQuery via CDN (se necessário) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <!-- Inclua o Bootstrap JavaScript via CDN (se necessário) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    


    <!-- Inclua o seu arquivo de estilo personalizado -->
    <link rel="stylesheet" href="<?=$BASE_URL?>css/style.css">
    
    <title>OxHorse</title>
</head>
<body>
    <header>
        <!-- Barra de navegação -->
        <nav class="nav-one navbar navbar-expand-lg navbar-light bg-white">
            <div class="bar container-fluid">
                <a class="navbar-brand" href="<?=$BASE_URL?>index.php"><img src="img/logo.png" alt="logo" width="120px" height="120px"></a>
                <!-- Botão de alternância para dispositivos móveis -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Itens de navegação -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav flex-grow-1 justify-content-center justify-content-lg-start align-items-center gap-2">
                        <li class="nav-item">
                            <a class="nav-link link-menu link-nav-pilar text-uppercase" href="#">Início</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link  link-menu link-nav-pilar text-uppercase" href="#">Contato</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link  link-menu link-nav-pilar text-uppercase" href="#">Sobre</a>
                        </li>
                    </ul>    
                    <ul class="navbar-nav ml-auto">
                        <!-- Adicione seus itens de menu aqui -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Representante</a>
                        </li>
                        <!-- Adicione mais itens de menu conforme necessário -->
                    </ul>
                </div>
            </div>
        </nav>
        <nav class="nav-two navbar navbar-expand-lg navbar-toggleable-lg box-shadow bg-custon-nav-pilaries p-0">
        <div class="container-fluid p-0 px-lg-5">
            <div class="navbar-collapse d-lg-inline-flex p-0 collapse show">
                <ul class="navbar-nav flex-grow-1 justify-content-center justify-content-lg-start align-items-center gap-2">
                    <li class="nav-item">
                        <a class="nav-link link-menu link-nav-pilar text-uppercase" href="#">Genética</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link  link-menu link-nav-pilar text-uppercase" href="#">Ferramentas</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link  link-menu link-nav-pilar text-uppercase" href="#">Bovinos</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link text-uppercase " href="#"><i class="bi bi-person-fill mr-2"></i>Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>