<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];
    $password = $_POST["password"];

    // Conectar ao banco de dados
    include('../connection.php');
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Consultar o banco de dados para verificar as credenciais e se o usuário é um administrador
    $sql = "SELECT * FROM registerr WHERE Login = '$login' AND Senha = '$password'";
    $result = $conn->query($sql);

    
    $row = $result->fetch_assoc();
    var_dump($row);
    
    if ($row) {
        // Login bem-sucedido
        
        $_SESSION['usuario'] = $row;

        header("Location: ../pages/index.php");
        exit;
    } else {
        // Login falhou
        die("Não foi encontrado dados em nossa base para o Login e Senha digitados.");
    }

    $conn->close();
}
?>