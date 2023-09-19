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
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?=$BASE_URL?>index.php">OxHorse</a>
                <!-- Botão de alternância para dispositivos móveis -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Itens de navegação -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <!-- Adicione seus itens de menu aqui -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Item 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Item 2</a>
                        </li>
                        <!-- Adicione mais itens de menu conforme necessário -->
                    </ul>
                </div>
            </div>
        </nav>