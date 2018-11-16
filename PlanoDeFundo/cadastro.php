
<?php
require_once '../Controle/UsuarioControle.php';

    $usuarioDTO = new UsuarioDTO();
    $usuarioDTO->setNome(isset($_POST['nome'])? $_POST['nome']:null);
    $usuarioDTO->setUsername(isset($_POST['username'])? $_POST['username']:null);
    $usuarioDTO->setEmail(isset($_POST['email'])? $_POST['email']:null);
    $usuarioDTO->setSenha(isset($_POST['senha'])? $_POST['senha']:null);
    $usuarioDTO->setData_nasc(isset($_POST['data_nasc'])? $_POST['data_nasc']:null);
    
    $usuarioControle = new UsuarioControle();
    $usuarioControle->cadastrar($usuarioDTO);
    
    header("Location: ../View/login.php?msg=Cadastro feito com sucesso");
?>


