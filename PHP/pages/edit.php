<!DOCTYPE html>
<html>
<head>
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="../../css/edit.css">
</head>
<body>
    <h2>Editar Usuário</h2>
    <?php
    // Conexão com o banco de dados (substitua com suas próprias informações)
    include("../connection.php"); 

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    
        $id = $_GET['id'];
        $sql = "SELECT * FROM register where id = ".$id."";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo '<form class="form-container" method="POST" action="../exe/update_exe.php">';
                echo '<input class="form-input" type="hidden" name="id" value="' . $row["id"] . '">';
                echo 'Nome: <input class="form-input" type="text" name="nome" value="' . $row["Nome"] . '"><br>';
                echo 'Dt. Nascimento: <input class="form-input" type="date" name="dtNasc" value="' . $row["DataNasc"] . '"><br>';
                echo 'Nome Materno: <input class="form-input" type="text" name="motherName" value="' . $row["NomeMaterno"] . '"><br>';
                echo 'CPF: <input class="form-input" type="text" name="cpf" value="' . $row["CPF"] . '"><br>';
                echo 'Sexo: <select class="form-input" name="sexo">';
                echo '<option value="Masculino" ' . ($row["Sexo"] === 'Masculino' ? 'selected' : '') . '>Masculino</option>';
                echo '<option value="Feminino" ' . ($row["Sexo"] === 'Feminino' ? 'selected' : '') . '>Feminino</option>';
                echo '<option value="Outro" ' . ($row["Sexo"] === 'Outro' ? 'selected' : '') . '>Outro</option>';
                echo '<option value="Prefiro não informar" ' . ($row["Sexo"] === 'Prefiro não informar' ? 'selected' : '') . '>Prefiro não informar</option>';
                echo '</select>';
                echo 'Celular: <input class="form-input" type="text" name="celular" value="' . $row["Celular"] . '"><br>';
                echo 'Tel Fixo: <input class="form-input" type="text" name="fixo" value="' . $row["Fixo"] . '"><br>';
                echo 'E-mail: <input class="form-input" type="text" name="email" value="' . $row["Email"] . '"><br>';
                echo 'Endereço: <input class="form-input" type="text" name="endereco" value="' . $row["Endereco"] . '"><br>';
                echo 'CEP: <input class="form-input" type="text" name="cep" value="' . $row["CEP"] . '"><br>';
                echo '<input class="submit-btn" type="submit" value="Atualizar">';
                echo '<a href="./listaUsuarios.php"><button class="cancel-btn" type="button">Voltar</button></a>';
            echo '</form>';
        }else {
            echo "Usuário não encontrado.";
        
    }

    $conn->close();
    ?>
</body>
</html>
