<?php

    class Usuario{
<<<<<<< HEAD
        public $id;
=======
>>>>>>> 0343db4f40ebd090572aa335f20e27fa35c0b41b
        public $nomeUsuario;
        public $nomeCompleto;
        public $email;
        public $senha;
<<<<<<< HEAD
        public $token;

    }

    Interface UsuarioDAOInterface{
=======
        public $senhaConfirma;
    }

    Interface UsuarioDAO{
>>>>>>> 0343db4f40ebd090572aa335f20e27fa35c0b41b


        public function buildUsuario($data);
        public function create(Usuario $usuario, $authUser = false);
        public function update(Usuario $usuario);
<<<<<<< HEAD
        public function verifyToken($protected = false);
        public function setTokenToSession($token, $redirect = true);
        public function authenticateUser($email,$senha);
        public function findByEmail($email);
        public function findById($id);
        public function findByToken($token);
        public function chargePassword(Usuario $usuario);

=======
        public function findByToken($token);
        public function verifyToken($protected = false);
>>>>>>> 0343db4f40ebd090572aa335f20e27fa35c0b41b
        

    }



?>