<?php

    class Usuario{
        public $nomeUsuario;
        public $nomeCompleto;
        public $email;
        public $senha;
        public $senhaConfirma;
    }

    Interface UsuarioDAO{


        public function buildUsuario($data);
        public function create(Usuario $usuario, $authUser = false);
        public function update(Usuario $usuario);
        public function findByToken($token);
        public function verifyToken($protected = false);
        

    }



?>