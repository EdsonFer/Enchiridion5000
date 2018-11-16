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
        if (!empty($usuario)) {
            session_start();
            $_SESSION['nome'] =  $usuario->getNome();
            $_SESSION['email'] =  $usuario->getEmail();
            $_SESSION['id_usuario'] = $usuario->getIdusername();
            $_SESSION['data_nasc'] = $usuario->getData_nasc();
            $_SESSION['perfil'] = $usuario->getPerfil();
            header('location: ../index.php');
        }else {
            header('location: ../View/login.php');
        }
    }

}
