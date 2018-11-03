<?php

require_once '../DTO/UsuarioDTO.php';
require_once 'Conexao.php';

class UsuarioDAO {

    function cadastrar(UsuarioDTO $usuario) {
        try {
            $pdo = Conexao::getInstance();
            $sql = 'INSERT INTO cadastro (nome, username, email, senha) VALUES (?,?,?,?)';
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $usuario->getNome());
            $stmt->bindValue(2, $usuario->getUsername());
            $stmt->bindValue(3, $usuario->getEmail());
            $stmt->bindValue(4, $usuario->getSenha());
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
            $sql = 'SELECT nome, email, id FROM cadastro WHERE username = ? AND senha = ?';
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $usuario->getUsername());
            $stmt->bindValue(2, $usuario->getSenha());
            //$stmt->execute();
            
            $usuarioBD = $stmt->fetch(PDO::FETCH_ASSOC);
            var_dump($usuarioBD);
            
            if( $usuarioBD != null){
                $usuario = new UsuarioDTO();
                $usuario->setNome($usuarioBD['nome']);
                $usuario->setEmail($usuarioBD['email']);
                $usuario->setIdusername($usuarioBD['id']);
                return $usuario;
            }
            
            
        } catch (PDOException $exc) {
            echo 'Erro ao conectar ao banco';
            echo $exc->getMessage();
        }
    }

}
