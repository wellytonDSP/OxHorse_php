<?php
    include_once("../dao/UsuarioDAO.php");
    include_once("url.php");
    include_once("connection.php");

    //verifica o type do formulario

    $mensagem = new Menssagem($BASE_URL);
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
                }else{
                    $mensagem->setMessage("Usuário já existe","error","block", "back");  
                }
            }else{
                $mensagem->setMessage("Senhas divergentes","error","block", "back");
            }  
        }else{
            $mensagem->setMessage("Campos não preenchidos!","error","block", "back");
        }
    }else if ($type === "login"){
        $login = filter_input(INPUT_POST, "login");
        $senhalogin = filter_input(INPUT_POST, "senhalogin");
        if($senha && $login){
            $usuario = new Usuario;
        }else{
            echo "Campos deves ser preenchidos";
            header("Location: ../public/login.php");
            exit; 
        }
    } 
?>