<?php

/*INSERT USER*/
if (isset($_POST['submit'])) {

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $dt_nasc = $_POST['dt_nasc'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $query = mysqli_query($conexao, " INSERT INTO users(nome, email, telefone, sexo, dt_nasc, cidade, estado, endereco)
                            VALUES ('$nome', '$email', '$telefone', '$sexo', '$dt_nasc', '$cidade', '$estado', '$endereco')");
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro</title>

    <!--ICON-->
    <link rel="shortcut icon" href="imagens/login.png">

    <!--CSS-->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/cadastro.css" />
  
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Bootstrap JavaScript  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</head>

<body>
    <main class="d-flex text-center justify-content-center align-items-center py-5">
        <div class="form  pt-4">
            <h2>Cadastro de Usuário</h2>
            <form action="cadastro.php" method="POST">
                <div>
                    <input type="text" name="nome" id="nome" placeholder="Nome" class=" mt-3 inputUser" required>
                    
                </div>

                <div>
                    <input type="text" name="email" id="email" placeholder="Email" class=" mt-3 inputUser" required>
                    
                </div>

                <div>
                    <input type="text" name="telefone" id="telefone" placeholder="Telefone" class=" mt-3 inputUser" required>
                    
                </div>

                <p>Sexo:</p>
                <input type="radio" name="genero" id="feminino" value="feminino" required>
                <label for="feminino">Feminino</label>

                <input type="radio" name="genero" id="masculino" value="masculino" required>
                <label for="masculino">Masculino</label>

                <div>
                    <label for="dt_nasc" class="d-block mt-3">Data Nascimento</label>
                    <input type="date" name="dt_nasc" id="dt_nasc" class="" required>                    
                </div>

                <div>
                    <input type="text" name="cidade" id="cidade" placeholder="Cidade" class="mt-3 inputUser " required>
                    
                </div>

                <div>
                    <input type="text" name="estado" id="estado" placeholder="Estado" class="mt-3 inputUser" required>
                    
                </div>                

                <div>
                    <input type="text" name="endereco" id="endereco" placeholder="Endereço" class=" mt-3 inputUser " required>
                    
                </div>

                <input type="submit" name="submit" id="submit" class="mt-4 w-100 botao">
                
            </form>
        </div>
    </main>
</body>

</html>