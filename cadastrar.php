
<?php include_once "session.php";?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login do Sitema</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/signin.css">
    
    
</head>
<body>

    <div class="container">
        <div class="form-signin" style="background: yellow;">
            <h3 class="text-center"><img src="imagens/login.png" width="200" height="200"></h3>
            <h3 class="text-center">Cadastrar</h3>
            <form method="post" action="insert_usuario.php">
                <input type="text" name="usuario" placeholder="Digite seu usuário" class="form-control"><br>
                <input type="password" name="senha" placeholder="Digite sua senha" class="form-control"><br>

            <div style="text-align:center">
                 <button type="submit" name="btnLogin" value="Acessar" class="btn btn-light" style="font-size: 16px;" text-align="center">Cadastrar</button>
            </div>
            
            </form>
        </div>

    </div>
    
</body>
</html>