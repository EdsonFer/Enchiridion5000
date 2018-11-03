
<?php
require_once '../Controle/UsuarioControle.php';

    $usuarioDTO = new UsuarioDTO();
    $usuarioDTO->setNome(isset($_POST['nome'])? $_POST['nome']:null);
    $usuarioDTO->setUsername(isset($_POST['username'])? $_POST['username']:null);
    $usuarioDTO->setEmail(isset($_POST['email'])? $_POST['email']:null);
    $usuarioDTO->setSenha(isset($_POST['senha'])? $_POST['senha']:null);
    
    $usuarioControle = new UsuarioControle();
    $usuarioControle->cadastrar($usuarioDTO);
    
    header("Location: ../Telas/login.php?msg=Cadastro feito com sucesso");
?>


