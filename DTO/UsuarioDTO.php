<?php


class UsuarioDTO {
    private $idusername;
    private $nome;
    private $username;
    private $email;
    private $senha;
    private $data_nasc;
    private $perfil;
    
    function admnistrador(){
        session_start();
        if(isset($_SESSION['perfil']) && !empty($_SESSION['perfil']) && $_SESSION['perfil'] == 'adm'){
            return TRUE;
        }else {
            return FALSE;
        }
    }
    
    function getPerfil() {
        return $this->perfil;
    }

    function setPerfil($perfil) {
        $this->perfil = $perfil;
    }
    
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

    function getData_nasc() {
        return $this->data_nasc;
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

    function setData_nasc($data_nasc) {
        $this->data_nasc = $data_nasc;
    }


    
}

?>
