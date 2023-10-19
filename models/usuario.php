<?php

    class Usuario{
        public $id;
        public $nomeUsuario;
        public $nomeCompleto;
        public $email;
        public $senha;
        public $token;

    }

    Interface UsuarioDAOInterface{


        public function buildUsuario($data);
        public function create(Usuario $usuario, $authUser = false);
        public function update(Usuario $usuario);
        public function verifyToken($protected = false);
        public function setTokenToSession($token, $redirect = true);
        public function authenticateUser($email,$senha);
        public function findByEmail($email);
        public function findById($id);
        public function findByToken($token);
        public function chargePassword(Usuario $usuario);

        

    }



?>