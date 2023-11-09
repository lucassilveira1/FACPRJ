<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $login = $_POST["login"];
        $password = $_POST["password"];

        // Conectar ao banco de dados
        include('../connection.php');
        if ($conn->connect_error) {
            die("Erro na conexão com o banco de dados: " . $conn->connect_error);
        }

        // Consultar o banco de dados para verificar as credenciais
        $sql = "SELECT * FROM register WHERE `Login` = '$login' AND `Senha` = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            // Login bem-sucedido
            session_start();
            $_SESSION['login'] = $login;
            header("Location: ../pages/index.php"); // Página de boas-vindas após o login
        } else {
            // Login falhou
            die("Não foi encontrado dados em nossa base para o Login e Senha digitados.");
            
        }

        $mysqli->close();
    }


    ?>