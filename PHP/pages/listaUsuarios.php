<?php
    include("../connection.php");

    $sql = "select * from register";
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

<table border="1" align="center">
        <h1>ÁREA DO ADMINISTRADOR</h1>
        <h2>LISTA DE USUÁRIOS</h2>
            <tr align="center">

                <th>ID</th>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>CPF</th>
                <th>Sexo</th>
                <th>Celular</th>
                <th>Tel Fixo</th>
                <th>E-mail</th>
                <th>Endereço</th>
                <th>CEP</th>
            </tr>
            <tr>
                <?php while ($row = mysqli_fetch_assoc($result)) {?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["Nome"]; ?></td>
                        <td><?php echo $row["DataNasc"]; ?></td>
                        <td><?php echo $row["CPF"]; ?></td>
                        <td><?php echo $row["Sexo"]; ?></td>
                        <td><?php echo $row["Celular"]; ?></td>
                        <td><?php echo $row["Fixo"]; ?></td>
                        <td><?php echo $row["Email"]; ?></td>
                        <td><?php echo $row["Endereco"]; ?></td>
                        <td><?php echo $row["CEP"]; ?></td>
                        <td><a href="editar.php?id=<?php echo $row["id"];?>">Editar</a></td>
                        <td><a href="excluir.php?id=<?php echo $row["id"];?>">Excluir</a></td>
                    </tr>
                <?php } ?>
            </tr>
        </table>
        <button><a href="./index.php">VOLTAR</a></button>
</body>
</html>