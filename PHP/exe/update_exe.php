<?php
// Conexão com o banco de dados (substitua com suas próprias informações)
include("../connection.php"); 

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Processamento do formulário de atualização
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = $_POST["nome"];
    $data = $_POST["dtNasc"];
    $sexo = $_POST["sexo"];
    $motherName = $_POST["motherName"];
    $cpf = $_POST["cpf"];
    $cellphone = $_POST["celular"];
    $telFixo = $_POST["fixo"];
    $email = $_POST["email"];
    $endereco = $_POST["endereco"];
    $cep = $_POST['cep'];

    $sql = "UPDATE register SET Nome='$name', DataNasc='$data', Sexo='$sexo', NomeMaterno='$motherName',
    CPF='$cpf', Celular='$cellphone', Fixo='$telFixo', Email='$email', Endereco='$endereco',
    CEP='$cep' WHERE id = $id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Dados atualizados com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

header('Location: ../pages/listaUsuarios.php');
?>
