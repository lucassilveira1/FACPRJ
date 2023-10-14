<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/font.css">
    <title>Login</title>
</head>
<body>
<div class="container">

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $login = $_POST["login"];
        $password = $_POST["password"];

        // Conectar ao banco de dados
        $mysqli = new mysqli("localhost", "root", "", "projeto");
        if ($mysqli->connect_error) {
            die("Erro na conexão com o banco de dados: " . $mysqli->connect_error);
        }

        // Consultar o banco de dados para verificar as credenciais
        $sql = "SELECT * FROM register WHERE `Login` = '$login' AND `Senha` = '$password'";
        $result = $mysqli->query($sql);

        if ($result->num_rows == 1) {
            // Login bem-sucedido
            session_start();
            $_SESSION['login'] = $login;
            header("Location: index.php"); // Página de boas-vindas após o login
        } else {
            // Login falhou
            header("Location: login.php?error=1"); // Redirecionar de volta à página de login com um erro
        }

        $mysqli->close();
    }
    ?>


    <h1>Entrar</h1>

    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">

        <div class="input-box">
            <label for="login">Login</label>
            <input type="login" name="login" id="login">
        </div>

        <div class="input-box">
            <label for="password">Senha</label>
            <div class="input">
            <input type="password" name="password" id="password">
            <i id="passIcon">
                <img src='../assets/lock-solid.svg' width='14px'>
            </i>
            </div>
        </div>

        
        <div class="btn">
            <button type="submit">Entrar</button>
            <button type="reset" id="reset">Limpar</button>
        </div>
        <div class="showPassword">
            <input type="checkbox" name="" id="showPass"> Mostrar senha
            <i id="showPassIcon"><img src="../assets/eye-regular.svg" width="15px"></i>
        </div>

    </form>   
    
    <p class="account">Não possui conta?<a href="register.php"> Cadastre-se!</a></p>

</div>

    <script src="/js/login.js"></script>
</body>
</html>