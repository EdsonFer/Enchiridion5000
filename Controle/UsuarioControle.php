<?php

require_once '../DAO/UsuarioDAO.php';

class UsuarioControle {

    function cadastrar(UsuarioDTO $usuario) {
        $usuarioDAO = new UsuarioDAO();
        $usuarioDAO->cadastrar($usuario);
    }

    function login(UsuarioDTO $usuario) {
        $usuarioDAO = new UsuarioDAO();

        $usuario = $usuarioDAO->login($usuario);
        var_dump($usuario);
        die();
        if (!empty($usuario)) {
            header('location: ../index.html');
        }else {
            header('location: ../Telas/login.php');
        }
    }

}
