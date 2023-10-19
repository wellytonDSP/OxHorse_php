<?php
// Inclua os arquivos necessários do seu projeto
<<<<<<< HEAD
require_once("config/url.php");
require_once("config/connection.php");
=======
include_once("config/url.php");
include_once("config/connection.php");
>>>>>>> 0343db4f40ebd090572aa335f20e27fa35c0b41b

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