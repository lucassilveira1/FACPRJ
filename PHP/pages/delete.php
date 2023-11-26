<?php
// Conexão com o banco de dados (substitua com suas próprias informações)
include("../connection.php"); 

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Processamento do formulário
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET["id"];

    // deletar os dados no banco de dados
    $sql = "DELETE FROM register WHERE id = ".$id."";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Exclusão realizado com sucesso!');</script>";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
header("Location: ./listaUsuarios.php");

?>
