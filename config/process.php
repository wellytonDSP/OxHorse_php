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
<<<<<<< HEAD
        $confirmacaoSenha = filter_input(INPUT_POST, "confirmacaoSenha");
    
        if($nomeUsuario && $nomeCompleto && $email && $senha){
=======
        $senhaConfirma = filter_input(INPUT_POST, "senhaConfirma");

        if($nomeUsuario && $nomeCompleto && $email && $senha){

        }else{
            $message->setMenssage("Campos invalidos revise os campos!");
        }


    }else if ($type === "login"){



    }

>>>>>>> dbbb018cbe7012fb2fb11e8eb2e5770413799945

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