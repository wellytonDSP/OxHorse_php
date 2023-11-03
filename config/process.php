<?php
    include_once("../dao/UserDao.php");
    include_once("Url.php");
    include_once("Connection.php");

    //verifica o type do formulario

    $message = new Message($BASE_URL);
    $userDao = new UserDAO($conn, $BASE_URL);

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
                if($userDao->findByEmail($email) === false){
                    $user = new User;
                    
                    $finalSenha = $user->generatePassword($senha);
                    $usuarioToken = $user->generateToken();
                    

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
            $usuario = new User;
        }else{
            echo "Campos deves ser preenchidos";
            header("Location: ../public/login.php");
            exit; 
        }
    } 
?>