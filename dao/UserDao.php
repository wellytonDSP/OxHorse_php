<?php

    include_once("../models/User.php");
    include_once("../models/Message.php");

    class UserDao implements UserDaoInterface{
        private $conn;
        private $url;
        private $message;

        public function __construct(PDO $conn,$url){
            $this->conn = $conn;
            $this->url = $url;
            $this->message = new Message($url);
        }


        public function buildUser($data){
            $user = new User();

            $user->id = $data["id"];
            $user->nomeUsuario = $data["nomeUsuario"];
            $user->nomeCompleto = $data["nomeCompleto"];
            $user->email = $data["email"];
            $user->senha = $data["senha"];
            $user->token = $data["token"];

            return $user;
        }

        public function create(User $user, $authUser = false){
            $stmt = $this->conn->prepare("INSERT INTO usuario(
                nomeUsuario,nomeCompleto,email,senha,token)
                VALUES (:nomeUsuario,:nomeCompleto,:email,:senha,:token)");

            $stmt->bindParam(":nomeUsuario",$user->nomeUsuario);
            $stmt->bindParam(":nomeCompleto",$user->nomeCompleto);
            $stmt->bindParam(":email",$user->email);
            $stmt->bindParam(":senha",$user->senha);
            $stmt->bindParam(":token",$user->token);

            $stmt->execute();

            if($authUser){
                $this -> setTokenToSession($user->token);
            }


        }
        public function update(User $user,$redirect = true){
            $stmt = $this->conn->prepare("UPDATE usuario SET
            nomeUsuario = :nomeUsuario,
            nomeCompleto = :nomeCompleto,
            email = :email,
            token = :token
            WHERE id = :id
          ");
    
          $stmt->bindParam(":name", $user->nomeUsuario);
          $stmt->bindParam(":lastname", $user->nomeCompleto);
          $stmt->bindParam(":email", $user->email);
          $stmt->bindParam(":token", $user->token);
          $stmt->bindParam(":id", $user->id);
    
          $stmt->execute();
    
          if($redirect) {
    
            // Redireciona para o perfil do usuario
            $this->message->setMessage("Dados atualizados com sucesso!","alert-success", "public/login.php");
    
          }

        }

        public function chargePassword(User $user){


        } 
        
        public function findByToken($token){
            if($token != "") {

                $stmt = $this->conn->prepare("SELECT * FROM usuario WHERE token = :token");
                
                $stmt->bindParam(":token", $token);
        
                $stmt->execute();
        
                if($stmt->rowCount() > 0) {
        
                  $data = $stmt->fetch();
                  $user = $this->buildUser($data);
          
                  return $user;
        
                } else {
                  return false;
                }

           }
        }

        public function verifyToken($protected = true){
            
            if(!empty($_SESSION["token"])) {

                // Pega o token da session
                $token = $_SESSION["token"];
        
                $user = $this->findByToken($token);
        
                if($user) {
                  return $user;
                } else if($protected) {
        
                  // Redireciona para home caso não haja usuário
                  $this->message->setMessage("Faça a autenticação para acessar esta página.","alert-warning ", "public/index.php");
        
                }
        
              } else {
                return false;
              }
        
        }
    
        public function setTokenToSession($token, $redirect = true){
            $_SESSION["token"] = $token;

            if($redirect) {
      
              // Redireciona e apresenta mensagem de sucesso0opo
              $this->message->setMessage("Usuário cadastrado com sucesso!","alert-success", "public/login.php"); 
            }

        }

        public function authenticateUser($login, $password) {
          $user = new User();

            $user = $this->findByLogin($login);
      
            if($user) {
      
              // Checar se as senhas batem
              if(password_verify($password, $user->senha)) {
                
                return true;
      
              } else {
                return false;
              }
      
            } else {
      
              return false;
      
            }
      
          }

        public function findByLogin($login){

            if($login != ""){

                $stmt = $this->conn->prepare("SELECT * FROM usuario WHERE email = :email");
                $stmt->bindParam(":email", $login);
                $stmt->execute();
                
                
                if($stmt->rowCount() > 0){
                    
                    $data = $stmt->fetch();

                    $user = $this->buildUser($data);
                    
                    return $user;
                
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