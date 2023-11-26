<?php
    session_start();

    $login = $_SESSION["usuario"]["Login"];


    if(!isset($_SESSION["usuario"])) {
        header("../login.php");
    };


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Dados do Formulário

            $newPassword = $_POST['newPassword'];
            $confirmPassword = $_POST['confirmPassword'];

        if($newPassword === $confirmPassword) {
        // conectando ao banco
        include('../connection.php');
        // verificando conexão
        if($conn->connect_error) {
            die("Erro na conexão com o banco de dados: " . $conn->connect_error);
        };


        // criando a instrução para alterar uma coluna da tabela
        $sql = "UPDATE register SET Senha = '$newPassword' WHERE Login = '$login'";

        // executando a instrução
        if($conn->query($sql) === TRUE) {
            die("Senha alterada com sucesso!");
        } else {
            die("Ocorreu um erro ao alterar a senha.");
        }
        
        // finalizando a conexão
        $conn->close();
    }
}

?>