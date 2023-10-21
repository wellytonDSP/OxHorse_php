<?php
    require_once("../models/usuario.php");
    require_once("../DAO/usuarioDAO.php");
    require_once("url.php");
    require_once("connection.php");
    
    //verifica o type do formulario

    $type = filter_input(INPUT_POST, "type");

    echo $type;

    if($type === "cadastro"){
        $nomeUsuario = filter_input(INPUT_POST, "nomeUsuario");
        $nomeCompleto = filter_input(INPUT_POST, "nomeCompleto");
        $email = filter_input(INPUT_POST, "email");
        $senha = filter_input(INPUT_POST, "senha");
        $senhaConfirma = filter_input(INPUT_POST, "senhaConfirma");

        if($nomeUsuario && $nomeCompleto && $email && $senha){

        }else{
            $message->setMenssage("Campos invalidos revise os campos!");
        }


    }else if ($type === "login"){



    }


?>