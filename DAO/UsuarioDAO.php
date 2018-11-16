<?php

require_once '../DTO/UsuarioDTO.php';
require_once 'Conexao.php';

class UsuarioDAO {

    function cadastrar(UsuarioDTO $usuario) {
        try {
            $pdo = Conexao::getInstance();
            $sql = 'INSERT INTO usuario (nome, email, data_nasc, login, senha) VALUES (?,?,?,?,?)';
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $usuario->getNome());
            $stmt->bindValue(2, $usuario->getEmail());
            $stmt->bindValue(3, $usuario->getData_nasc());
            $stmt->bindValue(4, $usuario->getUsername());            
            $stmt->bindValue(5, $usuario->getSenha());
            return $stmt->execute();
        } catch (PDOException $exc) {

            echo 'Erro ao conectar ao banco';
            echo $exc->getMessage();
            
        }
    }

    function login(UsuarioDTO $usuario) {
        try {
            $pdo = Conexao::getInstance();
           // --WHERE username = ? AND senha = ?
            $sql = "SELECT nome, email, id_usuario, data_nasc, perfil FROM usuario WHERE login = ? AND senha = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $usuario->getUsername());
            $stmt->bindValue(2, $usuario->getSenha());
            $stmt->execute();
            $usuarioBD = $stmt->fetch();
            
            
            if( $usuarioBD != null){
                $usuario = new UsuarioDTO();
                $usuario->setNome($usuarioBD['nome']);
                $usuario->setEmail($usuarioBD['email']);
                $usuario->setIdusername($usuarioBD['id_usuario']);
                $usuario->setData_nasc($usuarioBD['data_nasc']);
                $usuario->setPerfil($usuarioBD['perfil']);
                return $usuario;
            }
            
            
        } catch (PDOException $exc) {
            echo 'Erro ao conectar ao banco';
            echo $exc->getMessage();
        }
    }

}
