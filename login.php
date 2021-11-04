<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>

  <!--ICON-->
  <link rel="shortcut icon" href="imagens/login.png">

  <!--CSS-->
  <link rel="stylesheet" href="css/style.css">

  <!--Bootstrap CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

  <!-- Bootstrap JavaScript  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
  <main >
    <div class="login text-center justify-content-center align-items-center pt-4">
      <h2 >Login</h2>
      <section>
        <input type="text" placeholder="Nome" class="w-50 mt-3 inputUser">
      </section>

      <section>
        <input type="password" placeholder="Senha" class="w-50  mt-3 inputUser">
      </section>

      <button class="mt-4 w-50 botao"><a href="#" class="nav-link white">Entrar</a></button>
      <button class="mt-3 w-50 botao"><a href="cadastro.php" class="nav-link white">Fazer Cadastro</a></button>
    </div>
  </main>
</body>

</html>