<?php


if (isset($_POST['submit'])) {

    // print_r($_POST['primeiro_nome']);
    // print_r($_POST['segundo_nome']);
    // print_r($_POST['email']);
    // print_r($_POST['celular']);
    // print_r($_POST['senha']);
    // print_r($_POST['genero']);  
     
    include_once('config.php');

    $email = $_POST['email'];
    $senha =   $_POST['senha'];
    $primeiro_nome = $_POST['primeiro_nome'];
    $segundo_nome = $_POST['segundo_nome'];
    $celular = $_POST['celular'];
    $genero = $_POST['genero'];

    $sql = "INSERT INTO usuarios VALUES ('" . $email . "','" . $senha . "','" . $primeiro_nome . "','" . $segundo_nome . "','" . $celular .  "','" . $genero . "')";     
    $conexao->query($sql);
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/pages/cadastro/cadastro.css">
    <title>Cadastre-se</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="/assets/fotos/undraw_shopping_re_3wst.svg" alt="">
        </div>
        <div class="form">
            <form action="cadastro.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="/pages/principal/index.php">Voltar</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Primeiro Nome</label>
                        <input id="firstname" type="text" required name="primeiro_nome" placeholder="Digite seu primeiro nome" >
                    </div>

                    <div class="input-box">
                        <label for="lastname">Sobrenome</label>
                        <input id="lastname" type="text" name="segundo_nome" required placeholder="Digite seu sobrenome" >
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" required placeholder="Digite seu e-mail" >
                    </div>

                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input id="number" type="tel" name="celular" required placeholder="(xx) xxxx-xxxx" >
                    </div>

                    

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="senha" required placeholder="Digite sua senha" >
                    </div>


                  
                </div>

                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input id="female" type="radio" name="genero">
                            <label for="female">Feminino</label>
                        </div>

                        <div class="gender-input">
                            <input id="male" type="radio" name="genero">
                            <label for="male">Masculino</label>
                        </div>

                        <div class="gender-input">
                            <input id="others" type="radio" name="genero">
                            <label for="others">Outros</label>
                        </div>

                        <div class="gender-input">
                            <input id="none" type="radio" name="genero">
                            <label for="none">Prefiro não dizer</label>
                        </div>
                    </div>
                </div>

                <div class="continue-button">
                    <button type="submit" name="submit" id="submit"><a>Continuar</a> </button>
                </div>
            </form>
        </div>
    </div>
    <script src="/pages/cadastro/cadastro.js"></script>
</body>

</html>