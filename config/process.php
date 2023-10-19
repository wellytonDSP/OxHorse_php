<?php
    require_once("../models/usuario.php");
    require_once("../DAO/usuarioDAO.php");
    require_once("url.php");
    require_once("connection.php");
    
    //verifica o type do formulario

    $type = filter_input(INPUT_POST, "type");

    echo $type;


?>