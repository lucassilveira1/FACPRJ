<?php
session_start();

if($_SESSION['usuario']['adm'] == "0" || !isset($_SESSION['usuario'])) {
    header("Location: ./index.php");
};

include("../connection.php");
$sql = "SELECT * FROM register";
$result = $conn->query($sql);

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/usersList.css">
    <title>Document</title>
</head>
<body>

<table>
        <h1>ÁREA DO ADMINISTRADOR</h1>
        <div class="user-list">
    <h2>LISTA DE USUÁRIOS</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>Nome Materno</th>
                <th>CPF</th>
                <th>Sexo</th>
                <th>Celular</th>
                <th>Tel Fixo</th>
                <th>E-mail</th>
                <th>Endereço</th>
                <th>CEP</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["Nome"]; ?></td>
                    <td><?php echo $row["DataNasc"]; ?></td>
                    <td><?php echo $row["NomeMaterno"];?></td>
                    <td><?php echo $row["CPF"]; ?></td>
                    <td><?php echo $row["Sexo"]; ?></td>
                    <td><?php echo $row["Celular"]; ?></td>
                    <td><?php echo $row["Fixo"]; ?></td>
                    <td><?php echo $row["Email"]; ?></td>
                    <td><?php echo $row["Endereco"]; ?></td>
                    <td><?php echo $row["CEP"]; ?></td>
                    <td class="edit-link"><a href="./edit.php?id=<?php echo $row["id"];?>">Editar</a></td>
                    <td class="delete-link"><a href="./delete.php?id=<?php echo $row["id"];?>">Excluir</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <button class="btn"><a href="./index.php">VOLTAR</a></button>
    
</div>
</body>
</html>