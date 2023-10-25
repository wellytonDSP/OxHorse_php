<?php
    require_once("../models/usuario.php");
    require_once("../DAO/usuarioDAO.php");
    require_once("url.php");
    require_once("connection.php");
    
    //verifica o type do formulario

    $usuarioDao = new UsuarioDAO($conn, $BASE_URL);

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
                if($usuarioDao->findByEmail($email) === false){
                    $usuario = new Usuario;
                    
                    $finalSenha = $usuario->generatePassword($senha);
                    $usuarioToken = $usuario->generateToken();
                    

                    $usuario->nomeUsuario = $nomeUsuario;
                    $usuario->nomeCompleto = $nomeCompleto;
                    $usuario->email = $email;
                    $usuario->senha = $finalSenha;
                    $usuario->token = $usuarioToken;
            
                    $auth = true;

                    $usuarioDao -> create($usuario,$auth);

                
                    header("Location: ../login.php");
                    exit;
                }else{
                    echo "Usuário já existe";
                    header("Location: ../cadastro.php");
                    exit;
                }
            }else{
                echo"Senha invalida";
                header("Location: ../cadastro.php");
                exit;
            }  
        }else{
            echo "Campos não preenchidos!";
            header("Location: ../cadastro.php");
            exit;
        }
    }else if ($type === "login"){
        $login = filter_input(INPUT_POST, "login");
        $senhalogin = filter_input(INPUT_POST, "senhalogin");
        if($senha && $email){
            
        }
    } 
?>