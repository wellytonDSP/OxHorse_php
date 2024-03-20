<?php
    require_once("../dao/UserDao.php");
    require_once("url.php");
    require_once("connection.php");

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
                if($userDao->findByLogin($email) === false){
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
                    $message->setMessage("Usuário já existe","alert-danger", "back");  
                }
            }else{
                $message->setMessage("Senhas divergentes","alert-danger", "back");
            }  
        }else{
            $message->setMessage("Campos não preenchidos!","alert-danger", "back");
        }
    }else if ($type === "login"){
        $login = filter_input(INPUT_POST, "login");
        $password = filter_input(INPUT_POST, "password");
        if($login && $password){
            if($userDao->authenticateUser($login,$password)){
                $message->setMessage("Usuário logado com sucesso!","alert-success", "public/index.php");
            }else{
                $message->setMessage("Email ou senha estão errados!","alert-danger", "back");
            }
        }else{
            $message->setMessage("Campos não preenchidos!","alert-danger", "back");
           
        }
    } 
?>