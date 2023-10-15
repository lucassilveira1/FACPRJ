<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
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
            die("Não foi encontrado dados em nossa base para o Login e Senha digitados.");
            
        }

        $mysqli->close();
    }


    ?>


    <h1>Entrar</h1>

    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">

        <div class="input-box">
            <label for="login">Login</label>
            <div class="input">
                <input type="login" name="login" id="login">
                <i>
                    <img src="../assets/user-solid.svg" width="15px">
                </i>
            </div>
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
    
    <div class="showPassword">
        <input type="checkbox" name="" id="showPass"> Mostrar senha
        <i id="showPassIcon"><img src="../assets/eye-regular.svg" width="15px"></i>
    </div>
    
    <div class="togglebtn">
        <p id="toggleContent">

        </p>
        <input type="checkbox" class="toggle" id="toggleBtn">
    </div>

    <div class="btn">
            <button type="submit">Entrar</button>
            <button type="reset" id="reset">Limpar</button>
        </div>
    </form>   
    
    <script src="../scripts/users.js"></script>
</body>
</html>