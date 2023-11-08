<?php

    class User{
        public $id;
        public $nomeUsuario;
        public $nomeCompleto;
        public $email;
        public $senha;
        public $token;
        

        // cria um token aleatorio
        public function generateToken(){
            return bin2hex(random_bytes(50));
        }

        public function generatePassword($senha){
            return password_hash($senha, PASSWORD_DEFAULT);
        }
    
    }

    

    Interface UserDaoInterface{


        public function buildUser($data);
        public function create(User $usuario, $authUser = false);
        public function update(User $usuario);
        public function verifyToken($protected = false);
        public function setTokenToSession($token, $redirect = true);
        public function authenticateUser($email,$senha);
        public function findByLogin($email);
        public function findById($id);
        public function findByToken($token);
        public function chargePassword(User $usuario);

        

    }



?>