<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <title>Cadastrar - Enchiridion</title>
    <link rel="stylesheet" href="../../lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../lib/bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" type="text/css" href="../../estilo/css/css-cadastro/cadastro.css">

</head>

<body>
    <header id="header" class="alt">
        <div class="logo"><a href="../../Enchiridion.html">
                <h1>Enchiridion</h1>
            </a></div>
    </header>
    <div class="signup-form">
        <form action="../PlanoDeFundo/cadastro.php" method="post">
            <h2>Cadastro</h2>
            <p class="hint-text">Crie sua conta e comece a ler suas hitórias favoritas agora mesmo.</p>
            <div class="form-group">
                
                    <input type="text" class="form-control" name="nome" placeholder="Nome"
                            required="required">
                    </div>
            
                    <div class="form-group"><input type="text" class="form-control" name="username" placeholder="Username"
                            required="required"></div>
               
            
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" required="required">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="senha" placeholder="Senha" required="required">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="confirmar password" placeholder="Confirmar Senha"
                    required="required">
            </div>
            <div class="form-group">
                <label class="checkbox-inline"><input type="checkbox" required="required"> Eu aceito os <a href="#">Termos
                        de uso</a> &amp; <a href="#">Política de privacidade</a></label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg btn-block">Cadastrar agora</button>
            </div>
        </form>
        <div class="text-center">Ja tem uma conta? <a href="login.html">Entre aqui</a></div>
    </div>

    <script src="../../lib/js/jquery.min.js"></script>
    <script src="../../lib/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
