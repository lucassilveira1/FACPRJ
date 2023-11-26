<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // conectando ao banco
            include('../connection.php');
            // verificando conexão
            if($conn->connect_error) {
                die("Erro na conexão com o banco de dados: " . $conn->connect_error);
            };

            // Dados do Formulário
            $name = $_POST["name"];
            $data = $_POST["date"];
            $sexo = $_POST["sexo"];
            $motherName = $_POST["motherName"];
            $cpf = $_POST["cpf"];
            $cellphone = $_POST["celular"];
            $telFixo = $_POST["fixo"];
            $email = $_POST["email"];
            $endereco = $_POST["address"];
            $cep = $_POST['cep_input'];
            $login = $_POST["login"];
            $senha = $_POST["password"];

            // criando a instrução para inserir os dados na tabela
            $sql = "INSERT INTO registerr (Nome, DataNasc, Sexo, NomeMaterno, CPF, Celular, Fixo, Email, Endereco, CEP, `Login`, Senha)
                VALUES ('$name','$data', '$sexo', '$motherName', '$cpf', '$cellphone', '$telFixo', '$email', '$endereco', '$cep', '$login', '$senha')";

            // executando a instrução
            if($conn->query($sql) === TRUE) {
                header("Location: ../login.php");
            } else {
                header("Location: ../register.php");
            }
            
            // finalizando a conexão
            $mysqli->close();
        }

        
        ?>