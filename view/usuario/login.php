<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login - Enchiridion</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
              crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../../estilo/css/css-login/login.css">
        <link rel="stylesheet" href="../../lib/bootstrap-3.3.7/css/bootstrap.min.css">

    </head>

    <body>
        <header id="header" class="alt">
            <div class="logo"><a href="../../Enchiridion.html">
                    <h1>Enchiridion</h1>
                </a></div>
        </header>
        <div class="login-form">
            <form action="../PlanoDeFundo/login.php" method="post">
                <h2 class="text-center">Entrar</h2>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" required="required">
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Senha" required="required">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                </div>
                <div class="clearfix">
                    <label class="pull-left checkbox-inline"><input type="checkbox"> Lembrar</label>
                    <a href="esqueceusenha.html" class="pull-right corLink">Esqueceu a senha?</a>
                </div>
                <p><?php echo (isset($_GET['msg'])?$_GET['msg']:"");?></p>
            </form>
            
            <p class="text-center"><a href="Cadastro.php" class="corLink">Crie uma conta</a></p>
            
        </div>

        <script src="../../lib/js/jquery.min.js"></script>
        <script src="../../lib/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    </body>

</html>