<?php

    require_once("../models/usuario.php");

    class UsuarioDAO implements UsuarioDAOInterface{
        private $conn;
        private $url;

        public function __construct(PDO $conn,$url){
            $this->conn = $conn;
            $this->conn = $url;
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


        }
        public function update(Usuario $usuario){


        }
        public function verifyToken($protected = false){


        }
        public function setTokenToSession($token, $redirect = true){


        }
        public function authenticateUser($email,$senha){


        }
        public function findByEmail($email){

            if($email != ""){
                $stmt = $this->conn->prepare("SELECT * FROM usuario WHERE email = :email");
                $stmt->bindParam(":email", $email);
                $stmt->execute();
                
                
                if($stmt->rowCount() > 0){
                    
                    $data = $stmt->fetch();

                    $usuario = $this->buildUsuario($usuario);
                    
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