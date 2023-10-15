<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/change.css">
    <title>Mudança de Senha</title>
</head>
<body>
    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Dados do Formulário
            $legacyPassword = $_POST['legacyPassword'];
            $newPassword = $_POST['newPassword'];
            $confirmPassword = $_POST['confirmPassword'];

        if($newPassword === $confirmPassword) {
        // conectando ao banco
        $mysqli = new mysqli("localhost", "root", "", "projeto");
        // verificando conexão
        if($mysqli->connect_error) {
            die("Erro na conexão com o banco de dados: " . $mysqli->connect_error);
        };


        // criando a instrução para alterar uma coluna da tabela
        $sql = "UPDATE register SET Senha = '$newPassword' WHERE Senha = '$legacyPassword'";

        // executando a instrução
        if($mysqli->query($sql) === TRUE) {
            die("Senha alterada com sucesso!");
        } else {
            die("Ocorreu um erro ao alterar a senha.");
        }
        
        // finalizando a conexão
        $mysqli->close();
    }
}

    ?>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">

    <div class="container">
        <h1>Mude sua senha!</h1>
        <div class="input-box">
            <label for="legacyPassword">Senha antiga:</label>
            <div class="input">
                <input type="password" name="legacyPassword" id="legacyPassword" required>
                <i id="legacyIcon">
                    <img src="../assets/lock-solid.svg" alt="cadeado" width=15px>
                </i>
            </div>    
        </div>

        <div class="input-box">
            <label for="newPassword">Nova senha:</label>
            <div class="input">
               <input type="password" name="newPassword" id="newPassword" required>
               <i id="passIcon">
                    <img src='../assets/lock-solid.svg' width='14px'>
                </i>  
            </div>   
        </div>

        <div class="input-box">
            <label for="confirmPassword">Confirme sua Senha:</label>
            <div class="input">
                <input type="password" name="confirmPassword" id="confirm-password" required>
                <i id="confirmPassIcon">
                    <img src='../assets/lock-solid.svg' width='14px'>
                </i> 
            </div>
        </div>

        <div class="showPassword">
            <input type="checkbox" name="" id="showPass"> Mostrar senha
            <i id="showIcon">
                <img src='../assets/eye-regular.svg' width='15px'>
            </i>  
        </div>

        <div class="btn">
            <button type="submit" id="enviar">Mudar senha</button>
        </div>

    </div>

</form>

<script src="../scripts/change.js"></script>
</body>
</html>