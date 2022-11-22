<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");

        } else {
            echo "<script defer>window.onload = function(){let variavel = document.getElementById('erro'); variavel.innerHTML = 'Falha ao logar! E-mail ou senha incorretos'; variavel.className = '';}</script>";
        }

    }

}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/pages/login/login.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="/assets/fotos/Login/pngwing.com.png" alt="">
        </div>
        <div class="form">
            <form action="login.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Login</h1>
                    </div>

                    <div class="voltar-button">
                        <button><a href="/pages/principal/index.php">Voltar</a></button>
                    </div>
                   
                </div>

                <div class="input-group">
                  
                    
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" required placeholder="Digite seu e-mail" >
                    </div>

                  

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="senha" required placeholder="Digite sua senha" >
                    </div>
                

                <div class="login-button">
                    <button type="submit"><a href="#">Login</a> </button>
                </div>

                <div class="cadastro1" >    
                    <h1>Não tem Conta? <a class="cadastro" href="/pages/cadastro/cadastro.html">Cadastre-se</a></h1>
                    <a class="reset" href="/pages/email redefinição/email.html">Esqueceu a senha?</a>
                </div>
                <p class="d-none" id="erro"></p>
            </form>
        </div>
    </div>
    
</body>

</html>
