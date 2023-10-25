<?php

    include_once("../models/usuario.php");

    class UsuarioDAO implements UsuarioDAOInterface{
        private $conn;
        private $url;

        public function __construct(PDO $conn,$url){
            $this->conn = $conn;
            $this->url = $url;

        }


        public function buildUsuario($data){
            $usuario = new Usuario();

            $usuario->id = $data["id"];
            $usuario->nomeUsuario = $data["nomeUsuario"];
            $usuario->nomeCompleto = $data["nomeCompleto"];
            $usuario->email = $data["email"];
            $usuario->senha = $data["senha"];
            $usuario->token = $data["token"];
        }

        public function create(Usuario $usuario, $authUser = false){
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
        public function update(Usuario $usuario){


        }
        public function verifyToken($protected = false){


        }
        public function setTokenToSession($token, $redirect = true){
            $_SESSION["token"] = $token;

            if($redirect) {
      
              // Redireciona e apresenta mensagem de sucesso
              
      
            }

        }
        public function authenticateUser($email,$senha){
            $stmt = $this->conn->prepare("SELECT email, :senha");

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
        public function findByToken($token){


        }
        public function chargePassword(Usuario $usuario){


        }
    
            
    
        
    }


?>