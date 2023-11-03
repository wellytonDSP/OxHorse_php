<?php

    include_once("../models/User.php");
    include_once("../models/Message.php");

    class UserDao implements UserDaoInterface{
        private $conn;
        private $url;
        private $mensagem;

        public function __construct(PDO $conn,$url){
            $this->conn = $conn;
            $this->url = $url;
            $this->mensagem = new Message($url);
        }


        public function buildUsuario($data){
            $usuario = new User();

            $usuario->id = $data["id"];
            $usuario->nomeUsuario = $data["nomeUsuario"];
            $usuario->nomeCompleto = $data["nomeCompleto"];
            $usuario->email = $data["email"];
            $usuario->senha = $data["senha"];
            $usuario->token = $data["token"];
        }

        public function create(User $usuario, $authUser = false){
            $stmt = $this->conn->prepare("INSERT INTO usuario(
                nomeUsuario,nomeCompleto,email,senha,token)
                VALUES (:nomeUsuario,:nomeCompleto,:email,:senha,:token)");

            $stmt->bindParam(":nomeUsuario",$usuario->nomeUsuario);
            $stmt->bindParam(":nomeCompleto",$usuario->nomeCompleto);
            $stmt->bindParam(":email",$usuario->email);
            $stmt->bindParam(":senha",$usuario->senha);
            $stmt->bindParam(":token",$usuario->token);

            $stmt->execute();

            if($authUser){
                $this -> setTokenToSession($usuario->token);
            }


        }
        public function update(User $usuario){


        }

        public function chargePassword(User $usuario){


        } 
        
        public function findByToken($token){
            if($token != "") {

                $stmt = $this->conn->prepare("SELECT * FROM usuario WHERE token = :token");
                
                $stmt->bindParam(":token", $token);
        
                $stmt->execute();
        
                if($stmt->rowCount() > 0) {
        
                  $data = $stmt->fetch();
                  $usuario = $this->buildUsuario($data);
          
                  return $usuario;
        
                } else {
                  return false;
                }

           }
        }

        public function verifyToken($protected = true){
            
            if(!empty($_SESSION["token"])) {

                // Pega o token da session
                $token = $_SESSION["token"];
        
                $usuario = $this->findByToken($token);
        
                if($usuario) {
                  return $usuario;
                } else if($protected) {
        
                  // Redireciona para home caso não haja usuário
                  $this->mensagem->setMessage("Faça a autenticação para acessar esta página.", "error","block", "index.php");
        
                }
        
              } else {
                return false;
              }
        
        }
    
        public function setTokenToSession($token, $redirect = true){
            $_SESSION["token"] = $token;

            if($redirect) {
      
              // Redireciona e apresenta mensagem de sucesso0opo
              $this->mensagem->setMessage("Cadastrado com sucesso","success","block","public/login.php");
            }

        }

        public function authenticateUser($email,$senha){
            $usuario = new User();

            $user = $this->findByEmail($email);

            // Checa se o usuário existe
            if($user) {

                // Checa se a senha bate
                if(password_verify($senha, $usuario->senha)) {

                // Gera o token e coloca na session, sem redirecionar
                $token = $usuario->generateToken();

                $this->setTokenToSession($token, false);

                // Atualiza token do usuário
                $usuario->token = $token;

                $this->update($usuario);

                return true;

                }

            }

            return false;
        }

        public function findByEmail($email){

            if($email != ""){

                $stmt = $this->conn->prepare("SELECT * FROM usuario WHERE email = :email");
                $stmt->bindParam(":email", $email);
                $stmt->execute();
                
                
                if($stmt->rowCount() > 0){
                    
                    $data = $stmt->fetch();

                    $usuario = $this->buildUsuario($data);
                    
                    return $usuario;
                
                }else{
                
                    return false;
                
                }
            }else{
                return false;
            }
        }



        public function findById($id){


        }
        
        
           
    }


?>