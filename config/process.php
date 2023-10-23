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
        $confirmacaoSenha = filter_input(INPUT_POST, "confirmacaoSenha");
    
        if($nomeUsuario && $nomeCompleto && $email && $senha){

            if($senha === $confirmacaoSenha){
                if($usuarioDAO->findbyEmail($email) === false){

                }else{
                    echo "Usuário já existe";
                }
            }   
        }else{
            echo "Campos não preenchidos!";
        }
    }else if ($type === "login"){
        $login = filter_input(INPUT_POST, "login");
        $senhalogin = filter_input(INPUT_POST, "senhalogin");
    } 
?>