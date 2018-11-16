<?php
require_once '../DTO/UsuarioDTO.php';
require_once '../Controle/UsuarioControle.php';

$usuario = new UsuarioDTO();
$usuario->setUsername(isset($_POST['username'])?$_POST['username']: null);
$usuario->setSenha(isset($_POST['senha'])?$_POST['senha']: null);





$usuarioControle = new UsuarioControle();
$usuarioControle->login($usuario);
