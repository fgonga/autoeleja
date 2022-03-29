
<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>AutoEleja | Entrar</title>
    <link href="/publico/css/bootstrap.css" rel="stylesheet"/>
    <link href="/publico/css/entrar.css" rel="stylesheet"/>
  </head>

  <body class="text-center">
    <form class="form-signin" method="POST" action="/app/controlador/utilisador/entrar.php">
      <img class="mb-4"  alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">AutoEleja</h1>
      <?php if (@$_GET['alerta'] == "nao") {echo '<div class="alert alert-danger">Nome ou senha incorrecto.</div>'; }?>
      <label for="inputEmail" class="sr-only">Email </label>
      <input type="text" name="nome" id="inputEmail" class="form-control" placeholder="Nome"  autofocus>
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" >
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Lembrar de mim
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      <p class="mt-5 mb-3 text-muted">&copy;2022-2022  <br>IMAG - Grupo 5 - Todos direitos reservados. </p>
    </form>
  </body>
  </html>
