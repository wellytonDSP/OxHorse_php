<?php
// Inclua os arquivos necessários do seu projeto
require_once("config/url.php");
require_once("config/connection.php");
<<<<<<< HEAD
=======
require_once("models/Menssagem.php");

$menssagem = new Menssagem($BASE_URL);

$flassMessage = $message->getMessage();


>>>>>>> dbbb018cbe7012fb2fb11e8eb2e5770413799945
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
                <a class="navbar-brand" href="<?=$BASE_URL?>index.php"><img src="img/logo2.png" alt="logo" width="120px"></a>
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
                        <li class="nav-item">
                            <a class="nav-link link-menu link-nav-pilar text-uppercase" href="#">Genética</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  link-menu link-nav-pilar text-uppercase" href="#">Ferramentas</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link  link-menu link-nav-pilar text-uppercase" href="#">Bovinos</a>
                        </li>
                        <ul class="navbar-nav flex-grow-2 justify-content-center justify-content-lg-start align-items-center ml-auto">
                            <li class="nav-item">
                                <button class="btn button"><a class="nav-link text-uppercase" href="#"><i class="bi bi-people-fill mr-2"></i>Representante</a></button>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="login.php"><i class="bi bi-person-fill mr-2"></i>Login</a>
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
        <?php if(!empty($flassMessage["msg"])):?>
            <div class="msg-container">
                <p class="msg <?=$flassMessage["type"] ?>"><?=$flassMessage["msg"]?></p>
            </div>    
        <?php endif; ?>
    </nav>