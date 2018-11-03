<?php


class UsuarioDTO {
    private $idusername;
    private $nome;
    private $username;
    private $email;
    private $senha;
    
    function getIdusername() {
        return $this->idusername;
    }

    function getNome() {
        return $this->nome;
    }

    function getUsername() {
        return $this->username;
    }

    function getEmail() {
        return $this->email;
    }

    function getSenha() {
        return $this->senha;
    }

    function setIdusername($idusername) {
        $this->idusername = $idusername;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }


    
}

?>
