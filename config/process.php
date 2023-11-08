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
                    $message->setMessage("Usuário já existe", "back");  
                }
            }else{
                $message->setMessage("Senhas divergentes", "back");
            }  
        }else{
            $message->setMessage("Campos não preenchidos!", "back");
        }
    }else if ($type === "login"){
        $login = filter_input(INPUT_POST, "login");
        $password = filter_input(INPUT_POST, "password");
        if($login && $password){
            if($userDao->authenticateUser($login,$password)){
                $message->setMessage("Sucesso!", "public/index.php");
            }else{
                $message->setMessage("Email ou senha estão errados!", "back");
            }
        }else{
            $message->setMessage("Campos não preenchidos!", "public/register.php");
           
        }
    } 
?>