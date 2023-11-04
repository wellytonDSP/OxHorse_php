<?php
    include_once("../dao/UserDao.php");
    include_once("url.php");
    include_once("connection.php");

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
                if($userDao->findByLogin($email) === false || $userDao->findByLogin($nomeUsuario) === false){
                    $user = new User;
                    
                    $finalSenha = $user->generatePassword($senha);
                    $usuarioToken = $user->generateToken();
                    

                    $user->nomeUsuario = $nomeUsuario;
                    $user->nomeCompleto = $nomeCompleto;
                    $user->email = $email;
                    $user->senha = $finalSenha;
                    $user->token = $usuarioToken;
            
                    $auth = true;

                    $userDao -> create($user,$auth);
                }else{
                    $mensagem->setMessage("Usuário já existe","error", "back");  
                }
            }else{
                $mensagem->setMessage("Senhas divergentes","error", "back");
            }  
        }else{
            $mensagem->setMessage("Campos não preenchidos!","error", "back");
        }
    }else if ($type === "login"){
        $login = filter_input(INPUT_POST, "login");
        $senhalogin = filter_input(INPUT_POST, "senhalogin");
        if($senhalogin && $login){
            if($userDao->authenticateUser($login,$senhalogin)){
                echo "Sucesso";
                header("Location: ../config/url.php");
        
            }else{
                echo "Dados não batem";
                header("Location: ../config/process.php");
               
            }
        }else{
            echo "Campos deves ser preenchidos";
            header("Location: ../public/login.php");
           
        }
    } 
?>